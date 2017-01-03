<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>澳视社区留言板</title>
	<link rel="stylesheet" href="/messageboard/thinkphp_3.2.3_full/Public/Css/index.css" />
	<script type="text/javascript" src='/messageboard/thinkphp_3.2.3_full/Public/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='/messageboard/thinkphp_3.2.3_full/Public/Js/index.js'></script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	<div id='main'>

		<?php if(is_array($wish)): foreach($wish as $key=>$v): ?><dl class='paper a<?php echo mt_rand(1,5);?>'>
			<dt>
				<span class='username'><?php echo ($v["username"]); ?></span><!--点语法取值-->
				<span class='num'><?php echo ($v["id"]); ?></span>
			</dt>
			<dd class='content'><?php echo ($v["content"]); ?></dd>
			<dd class='bottom'>
				<span class='time'><?php echo (date('Y-m-d H:i',$v["time"])); ?></span>
				<a href="" class='close'></a>
			</dd>
		</dl><?php endforeach; endif; ?>	
		<dl class='paper a1'>
			<dt>
				<span class='username'>昵称昵称昵称</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>请写你的留言~</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		
		
	</div>

	<div id='send-form'>
		<p class='title'><span>写下你的留言</span><a href="" id='close'></a></p>
		<form action="<?php echo U('handle');?>" method='post' name='wish'>
			<p>
				<label for="username">昵称：</label>
				<input type="text" name='username' id='username'/>
			</p>
			<p>
				<label for="content">内容：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
				<div id='phiz'>
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/baobao.gif" alt="抱抱" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/haixiu.gif" alt="害羞" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/ku.gif" alt="酷" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/xixi.gif" alt="嘻嘻" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/taikaixin.gif" alt="太开心" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/touxiao.gif" alt="偷笑" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/qian.gif" alt="钱" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/huaxin.gif" alt="花心" />
					<img src="/messageboard/thinkphp_3.2.3_full/Public/Images/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<!--<span id='send-btn'></span>-->
			<input style="background-color:pink;" type="submit" value="发布"/>
		</form>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="/messageboard/thinkphp_3.2.3_full/Public/Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>