// JavaScript Document
$(document).ready(function() {
	var i=1;
    $(".bt_left").click(function(){
		if(i<=1){
			i=2;
		}else{
			i--;
		}
		$(this).parent().css({"background-image":"url(images/banner"+i+".jpg)"});
	})
	$(".bt_right").click(function(){
		if(i>=2){
			i=1
		}else{
			i++;
		}
		$(this).parent().css({"background-image":"url(images/banner"+i+".jpg)"});
	})
	$("#dian_1").click(function(){
		$(this).css("background-image","url(images/gd2.png)");
		$(this).parent().siblings().children().css("background-image","url(images/gd1.png)");
		$(this).parent().parent().parent().siblings().css({"background-image":"url(images/book1.jpg)"});
	})
	$("#dian_2").click(function(){
		$(this).css("background-image","url(images/gd2.png)");
		$(this).parent().siblings().children().css("background-image","url(images/gd1.png)");
		$(this).parent().parent().parent().siblings().css({"background-image":"url(images/book2.jpg)"});
	})
	$("#dian_3").click(function(){
		$(this).css("background-image","url(images/gd2.png)");
		$(this).parent().siblings().children().css("background-image","url(images/gd1.png)");
		$(this).parent().parent().parent().siblings().css({"background-image":"url(images/book3.jpg)"});
	})
	$("#dian_4").click(function(){
		$(this).css("background-image","url(images/gd2.png)");
		$(this).parent().siblings().children().css("background-image","url(images/gd1.png)");
		$(this).parent().parent().parent().siblings().css({"background-image":"url(images/book4.jpg)"});
	})
	
	$(".news_img").mouseover(function(){
		$(".bt_right,.bt_left").show();
	})
	$(".news_img").mouseout(function(){
		$(".bt_right,.bt_left").hide();
	})
});