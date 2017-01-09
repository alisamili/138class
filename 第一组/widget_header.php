<!-- 页面公共顶层 -->

<div class="header">
	<span></span>
	<span>
		<a class="no_link" href="page_ucenter.php">用户中心</a>
		<?php 
			if (isset($_SESSION['subhead'])) {
				echo $_SESSION['subhead'];
			}
		?>
	</span>
	<span class="ActionBar">
	<?php
		if (isset($_SESSION["is_logined"]) && $_SESSION["is_logined"] == TRUE) {
			echo '<a id=\"login\" class=\"LinkButton\" href="./logout.php">注销</a>';
		} 
	?>
	</span>
</div>