//导航
var jq=$.noConflict();
	jq(document).ready(function(){
		jq(".menu").hover(
		function(){
		  jq("ul", this).css("display","block");
		},function(){
		  jq("ul", this).css("display","none");
		}
	);
});
//导航


//轮播图片
 $(document).ready(function() { 
   var length, 
   currentIndex = 0, 
   interval, 
   hasStarted = false, //是否已经开始轮播 
   t = 3000; //轮播时间间隔 
   length = $('.slider-panel').length; 
   //将除了第一张图片隐藏 
   $('.slider-panel:not(:first)').hide(); 
   //将第一个slider-item设为激活状态 
   $('.slider-item:first').addClass('slider-item-selected'); 
   //隐藏向前、向后翻按钮 
   $('.slider-page').hide(); 
   //鼠标上悬时显示向前、向后翻按钮,停止滑动，鼠标离开时隐藏向前、向后翻按钮，开始滑动 
   $('.slider-panel, .slider-pre, .slider-next').hover(function() { 
	  stop(); 
	  $('.slider-page').show(); 
   }, function() { 
      $('.slider-page').hide(); 
      start(); 
   }); 
   $('.slider-item').hover(function(e) { 
      stop(); 
	  var preIndex = $(".slider-item").filter(".slider-item-selected").index(); 
	  currentIndex = $(this).index(); 
	  play(preIndex, currentIndex); 
   }, function() { 
      start(); 
   }); 
   $('.slider-pre').unbind('click'); 
   $('.slider-pre').bind('click', function() { 
      pre(); 
   }); 
   $('.slider-next').unbind('click'); 
   $('.slider-next').bind('click', function() { 
      next(); 
   }); 
 /** 
  * 向前翻页 
  */
   function pre() { 
      var preIndex = currentIndex; 
      currentIndex = (--currentIndex + length) % length; 
      play(preIndex, currentIndex); 
   } 
 /** 
  * 向后翻页 
  */
   function next() { 
      var preIndex = currentIndex; 
      currentIndex = ++currentIndex % length; 
      play(preIndex, currentIndex); 
   } 
 /** 
  * 从preIndex页翻到currentIndex页 
  * preIndex 整数，翻页的起始页 
  * currentIndex 整数，翻到的那页 
  */
  function play(preIndex, currentIndex) { 
	 $('.slider-panel').eq(preIndex).fadeOut(500) 
	 .parent().children().eq(currentIndex).fadeIn(1000); 
	 $('.slider-item').removeClass('slider-item-selected'); 
	 $('.slider-item').eq(currentIndex).addClass('slider-item-selected'); 
  } 
 /** 
  * 开始轮播 
  */
  function start() { 
	 if(!hasStarted) { 
	    hasStarted = true; 
	    interval = setInterval(next, t); 
	 } 
  } 
 /** 
  * 停止轮播 
  */
  function stop() { 
     clearInterval(interval); 
     hasStarted = false; 
  } 
 //开始轮播 
   start(); 
 }); 
//轮播图片


//鼠标经过出现自由
  $(function(){
	  $(".Free_img_1").mouseover(function(){
		  $(".Free_img_1 span").css("display","block");
		  });
	  $(".Free_img_1").mouseout(function(){
		  $(".Free_img_1 span").css("display","none");
		  });
	  $(".Free_img_2").mouseover(function(){
		  $(".Free_img_2 span").css("display","block");
		  });
	  $(".Free_img_2").mouseout(function(){
		  $(".Free_img_2 span").css("display","none");
		  });
	  $(".Free_img_3").mouseover(function(){
		  $(".Free_img_3 span").css("display","block");
		  });
	  $(".Free_img_3").mouseout(function(){
		  $(".Free_img_3 span").css("display","none");
		  });
	  });
//鼠标经过出现自


//切换新闻标题
$(document).ready(function() {
    $(".leftside").mouseover(function(){
		$(".newscontent").show();
		$(".newscontent1").hide();
	})
	$(".rightside").mouseover(function(){
		$(".newscontent1").show();
		$(".newscontent").hide();
	})
});

function showBox1(){
	document.getElementById("btn1").className="leftside";
	document.getElementById("btn2").className="rightside";
};
function showBox2(){
	document.getElementById("btn1").className="rightside";
	document.getElementById("btn2").className="leftside ";
};
//切换新闻标题


//返回顶部
$(function(){
   $('.resulttop').hide();        //隐藏go to top按钮
   $(window).scroll(function(){
   // console.log($(this).scrollTop());
   //当window的scrolltop距离大于1时，go to 
   if($(this).scrollTop() > 100){
          $('.resulttop').fadeIn();
            }else{
                 $('.resulttop').fadeOut();
             }
   });

   $('.resulttop a').click(function(){
       $('html ,body').animate({scrollTop: 0}, 300);
       return false;
   });
});
 //返回顶部
 
 

          
