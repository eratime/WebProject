// JavaScript Document
$(document).ready(function() {
    $(window).scroll(function(){
		if($(document).scrollTop()>=500){
			$(".pos").fadeIn(1000);
		}else{
			$(".pos").fadeOut(1000);
		}
	})
	
	
	
	$("#right_img_0").click(function(){
		$("html,body").animate({scrollTop:0},500);
	})
	$("#right_img_1").click(function(){
		$("html,body").animate({scrollTop:1130},500);
	})
	$("#right_img_2").click(function(){
		$("html,body").animate({scrollTop:1520},500);
	})
	$("#right_img_3").click(function(){
		$("html,body").animate({scrollTop:1790},500);
	})
	
	
	$("#right_img_1").mouseover(function(){
		$(this).children().css({"display":"block"});
		$(this).children().stop().animate({width:100},200);
	})
	$("#right_img_1").mouseout(function(){
		$(this).children().stop().animate({width:0},200);
		$(this).children().css({"display":"none"});
	})
	$("#right_img_2").mouseover(function(){
		$(this).children().css({"display":"block"});
		$(this).children().stop().animate({width:100},200);
	})
	$("#right_img_2").mouseout(function(){
		$(this).children().stop().animate({width:0},200);
		$(this).children().css({"display":"none"});
	})
	$("#right_img_3").mouseover(function(){
		$(this).children().css({"display":"block"});
		$(this).children().stop().animate({width:100},200);
	})
	$("#right_img_3").mouseout(function(){
		$(this).children().stop().animate({width:0},200);
		$(this).children().css({"display":"none"});
	})
});