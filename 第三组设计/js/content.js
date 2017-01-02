window.onload = function() {
	tabSlide();
	shadowChanged();

}

/**
 * 卡片的滑动效果
 */
function tabSlide() {
	$(".item_class").mouseenter(function() {
		$(this).children(".item_class_intro").css("top", "30px");
		//			$(this).children(".item_class_intro").children("p").show();
		$(this).css("box-shadow", "5px 0 10px 0 rgba(0,0,0,0.2)," +
			"-5px 0 10px 0 rgba(0,0,0,0.2), 0 5px 10px 0 rgba(0,0,0,0.2)");

	});
	$(".item_class").mouseleave(function() {
		$(this).children(".item_class_intro").css("top", "90px");
		//			$(this).children(".item_class_intro").children("p").hide();
		$(this).css("box-shadow", "0 0");
	});
	$(".web_r").mouseleave(function() {
		$(this).children(".item_class_intro").css("top", "100px");
		//			$(this).children(".item_class_intro").children("p").hide();
		$(this).css("box-shadow", "0 5px 10px 0 rgba(0,0,0,0.2)");
	});
}

/**
 * 阴影的变化
 */
function shadowChanged() {
	$(".web_l, .web_m_top, .web_m .web_m_bottom").hover(function() {
		$(this).css("box-shadow", "5px 0 10px 0 rgba(0,0,0,0.2)," +
			"-5px 0 10px 0 rgba(0,0,0,0.2), 0 5px 10px 0 rgba(0,0,0,0.2)")
	}, function() {
		$(this).css("box-shadow", "0 0");
	});
}