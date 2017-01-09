<!-- 资料设置 -->
<?php 

if (isset($_POST['old_pwd'])) {
	$sql_set_my_info =<<< EOD
UPDATE `user` 
SET `password`=:new_pwd, 
	`nickname`=:nick, 
	`email`=:mail
WHERE (`user_id`=:uid AND `password`=:old_pwd);
EOD;

	include_once 'db_conn.php';

	$result = FALSE;
	try {
		$pdo = get_my_pdo($dbname);
		$stat = $pdo->prepare($sql_set_my_info);
		$stat->bindParam(':new_pwd', $_POST['new_pwd'], PDO::PARAM_STR);
		$stat->bindParam(':nick', $_POST['nickname'], PDO::PARAM_STR);
		$stat->bindParam(':mail', $_POST['email'], PDO::PARAM_STR);
		$stat->bindParam(':uid', $_SESSION['user_id'], PDO::PARAM_INT);
		$stat->bindParam(':old_pwd', $_POST['old_pwd'], PDO::PARAM_STR);

		if ($stat->execute()) {
			if ($stat->rowCount() == 1) {
				$_SESSION['nickname'] = $_POST['nickname'];
				$_SESSION['email'] = $_POST['email'];
				$result = TRUE;
				echo '<pre class="xdebug-var-dump" dir="ltr"><span class="Pass">设置成功</span></pre>';
			} else {
				echo '<pre class="xdebug-var-dump" dir="ltr"><span class="Warn">设置失败</span></pre>';
			}
		} else {
			echo '<pre class="xdebug-var-dump" dir="ltr"><span class="Warn">设置失败</span></pre>';
		}
		$pdo = NULL;
	} catch (PDOException $e)
	{
		echo $e->getMessage().'<br/>';
		echo "异常处理";
		$pdo = NULL;
	}
}

?>
<form id="info_form" name="info_form" role="form" method="post" enctype="application/x-www-form-urlencoded">
	<div class="form-group">
		<label for="nickname">新昵称（可选）</label>
		<input type="text" class="form-control" id="nickname" 
			value="<?php echo $_SESSION['nickname']; ?>" name="nickname" placeholder="请输入新昵称">
	</div>
	<div class="form-group">
		<label for="email">电子邮箱（可选）</label>
		<input type="text" class="form-control" id="email" 
			value="<?php echo $_SESSION['email']; ?>"name="email" placeholder="请输入电子邮箱">
	</div>
	<div class="form-group">
		<label for="old_pwd">原密码（<span class="Warn">必须</span>）</label>
		<input type="password" class="form-control" id="old_pwd"
			name="old_pwd" placeholder="请输入原密码" >
	</div>
	<div class="form-group">
		<label for="new_pwd_0">新密码（可选）</label>
		<input type="password" class="form-control" id="new_pwd_0" 
			name="new_pwd" placeholder="请输入新密码" >
	</div>
	<div class="form-group">
		<label for="new_pwd_1">重复一次新密码（可选）</label>
		<input type="password" class="form-control" id="new_pwd_1" 
			placeholder="请重复输入一次新密码" >
	</div>
	<button id="submit_btn" type="button" class="btn btn-default" disabled="">确定修改</button>
</form>
