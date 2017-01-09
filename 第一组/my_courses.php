<ul class="border card_list cf" ontouchstart="this.classList.toggle('hover');">
	<?php 
		//获取课程列表，填充到卡片里
		//$courses = array();
		for($i=0; $i<10; $i++) { 
	?>
	<li class="card">
		<a class="card_front cf" href="#">
			<div class="imgbox">
				<img src="http://wikicdn.jikexueyuan.com/project/751/cover/logo.png!list.logo" /><!--50x50-->
			</div>
			<h4 class="h4">Android SDK 教程</h4>
			<span>未开课</span>
		</a>
		<p class="card_back">
			<a class="text" href="#">
			在本系列文章当中，我们将从零开始学习 Android SDK 框架并深入理解和分析。
			</a>
		</p>
	</li>
	
	<?php } ?>
</ul>