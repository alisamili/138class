<?php 
	session_set_cookie_params(60*30);

	if (isset($_COOKIE['token']) && isset($_COOKIE['user'])) {
		//TODO 验证是否登录成功
		return;
	} elseif (isset($_POST['username']) && isset($_POST['password'])) {
		$success = FALSE;
		//TODO 向数据库插入相应记录
		//TODO 判断是否成功，不成功则提示用户，成功则跳转到用户中心。
		include 'db_conn.php';
		global $conn;

		$conn = NULL;
		if ($success || ($_POST['username'] == 'test' && $_POST['password'] == "test")) {
			session_start();
			$_SESSION["is_logined"] = TRUE;
			$url = "./ucenter.php";  
			header("Location:$url");
			session_write_close();
			exit(0);
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