<!-- 我的社区 -->
<ul class="border card_list cf" ontouchstart="this.classList.toggle('hover');">
	<?php 
		//TODO获取社区列表，填充到卡片里
		//$communities = array();
		for($i=0; $i<10; $i++) { 
	?>
	<li class="card">
		<a class="card_front cf" href="#">
			<div class="imgbox">
				<img src="http://wikicdn.jikexueyuan.com/project/751/cover/logo.png!list.logo" /><!--50x50-->
			</div>
			<h4 class="h4">加入这个组你就会变得很瘦 </h4>
			<span>标签：瘦身</span>
		</a>
		<p class="card_back">
			<a class="text" href="#">
				我们要瘦！瘦成一道风景！
				所以加入这个小组！你就会变的很瘦！！！ 
			</a>
		</p>
	</li>
	
	<?php } ?>
</ul>