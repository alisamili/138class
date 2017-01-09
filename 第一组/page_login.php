<?php 
define('COOKIE_EXPIRE_TIME', 60 * 30);
session_set_cookie_params(COOKIE_EXPIRE_TIME);
session_start();

include 'db_secure.php';

if (isset($_COOKIE['token']) && isset($_COOKIE['user'])) {
	//TODO 验证是否已登录
	return;
} elseif (isset($_POST['username']) && isset($_POST['password'])) {
	$cnt = 0;	//1:认证成功；0:认证失败；其他值:异常。
	$usr = my_escape($_POST['username']);
	$pwd = my_encrypt($_POST['password']);
	
	$sql_auth_user =<<< EOD
SELECT `user_id`, `nickname`, `email`
FROM  `user` 
WHERE `username`=:usr AND 
	`password`=:pwd AND 
	`status`!='已删除';
EOD;

	//向数据库查询相应记录
	include_once 'db_conn.php';
	try {
		$conn = get_my_pdo($dbname);
		$stat = $conn->prepare($sql_auth_user);
		$stat->bindParam(":usr", $usr, PDO::PARAM_STR);
		$stat->bindParam(":pwd", $pwd, PDO::PARAM_STR);
		// TODO 小bug
		if ($stat->execute()) {
			//调用fetchAll()，要求相应的语句只能是查询语句，不能包括别的语句。否则会抛出异常："SQLSTATE[HY000]: General error"
			$results = $stat->fetchAll();	
			$cnt = count($results);
			if ($cnt == 1) {
				//用户身份认证成功
				$_SESSION["is_logined"] = TRUE;
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['user_id'] = $results[0]['user_id'];
				$_SESSION['nickname'] = $results[0]['nickname'];
				$_SESSION['email'] = $results[0]['email'];
				$_SESSION['COOKIE_EXPIRE_TIME'] = COOKIE_EXPIRE_TIME;
				session_write_close();
			}
		} else {
			header($http_n2s[500]);
			echo '查询操作执行失败<br/>';
		}
		$conn = NULL;
	} catch(PDOException $e)
	{
		echo $e->getMessage().'<br/>';
		echo "异常处理";
		$conn = NULL;
	}
	
	//判断是否成功，不成功则提示用户，成功则跳转到用户中心，异常则报错。
	switch ($cnt) {
		case 1: //认证成功
			$url = "./page_ucenter.php";  
			header("Location:$url");
			exit(0);
		case 0: //认证失败
			unset($_SESSION["is_logined"]);
			break;
		default: //TODO 表示数据库一致性有问题。需要特殊处理。以下是应急处理
			include 'http_utils.php';
			header(http_n2s(500));
			echo '服务器内部错误';
			exit(1);
	}
} 
?>

<!DOCTYPE html>
<html lang="zh-CN">
	<?php
		$_SESSION['html_head_title'] = '登录';
		include 'html_head.php';
	?>
	<body>
		<div id="loginModal" class="modal show">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close">x</button>
					<h1 class="text-center text-primary">登录</h1>
					</div>
					<div class="modal-body">
					<form action="" class="form col-md-12 center-block" method="POST">
						<div class="form-group">
						<input name="username" class="form-control input-lg" placeholder="用户名" type="text">
						</div>
						<div class="form-group">
						<input name="password" class="form-control input-lg" placeholder="登录密码" type="password">
						</div>
						<div class="form-group">
						<button class="btn btn-primary btn-lg btn-block">立刻登录</button>
						<span><a href="#">找回密码</a></span>
						<span><a href="#" class="pull-right">注册</a></span>
						</div>
					</form>
					</div>
					<div class="modal-footer">
					
					</div>
				</div>
			</div>
		</div>
	</body>
</html>