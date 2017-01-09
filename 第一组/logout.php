<?php
	session_destroy();
	session_regenerate_id();
	header('Location:./page_login.php');
	exit(0);
?>