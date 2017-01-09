<!-- 右侧主体 -->
<div class="row-left col-lg-9"  style="margin-right:0;">
	<!--div class="col-6 col-sm-6 col-lg-6">
		
	</div-->
	<?php 
		$params = array("my_courses", "my_settings", "my_communities");
		$default_page = $params[0];

		foreach ($params as $p) {
			if (isset($_GET[$p])) {
				$default_page = $p;
				break;
			}
		}
		include $default_page.'.php';
				
	?>
</div>