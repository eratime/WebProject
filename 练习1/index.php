<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>放飞自由</title>
<script src="js/jquery-1.12.4.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.4.js"></script>
<script src="js/i_2_js.js"></script>

<script src="js/jquery-1.12.4.js"></script>
<script src="js/js22.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.list_lh li:even').addClass('lieven');
})
$(function(){
	$("div.list_lh").myScroll({
		speed:90, //数值越大，速度越慢
		rowHeight:68 //li的高度
	});
});
</script>
<?php
include_once("conn.php");
include_once("function.php");
?>
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="top">  <!--顶部导航栏-->
     <div class="logo"></div>
     <div class="nav">  <!--导航栏-->
        <ul>
           <li><a href="index.php">首页</a></li>
           <li class="menu"><a href="#">概述</a> <!--下拉菜单-->
              <ul class="submenu">            
                 <li class="yi"><a href="#">信仰自由</a></li>
                 <li class="er"><a href="#">表达自由</a></li>
                 <li class="san"><a href="#">贸易自由</a></li>
              </ul>
           </li> 
           <li class="menu"><a href="#">精神</a>
              <ul class="submenu">
                 <li class="yi"><a href="#">自由精神</a></li>
                 <li class="er"><a href="#">独立思想</a></li>
                 <li class="san"><a href="#">自由灵魂</a></li>
              </ul>
           </li>
           <li class="menu"><a href="#">评论</a>
              <ul class="submenu">
                 <li class="yi"><a href="#">热门评论</a></li>
                 <li class="er"><a href="#">最新评论</a></li>
                 <li class="san"><a href="#">全部评论</a></li>
              </ul>
           </li><!--下拉菜单-->
        </ul>
     </div>  <!--导航栏-->
  </div>  <!--顶部导航栏-->


<div class="container">  <!--主要内容-->  
    <div class="bs"><img src="images/bs.png" width="276" height="346"></div>  <!--自由logo-->
           <div class="content">  <!--内容-->
              <h3>践行和培育社会主义核心价值观</h3>
              <div class="topnews">  <!--新闻区域-->

              <!--轮播-->
              <div class="slider"> 
               <ul class="slider-main">            
                <li class="slider-panel"> 
                <a href="#"><img src="images/lb1.png" width="360" height="259"></a> 
                </li> 
                <li class="slider-panel"> 
                <a href="#"><img src="images/lb2.jpg" width="1024" height="694"></a> 
                </li> 
                <li class="slider-panel"> 
                <a href="#"><img src="images/lb3.jpg" width="710" height="473"></a> 
                </li>
               </ul> 
               <div class="slider-extra"> 
                <ul class="slider-nav"> 
                <?php
                for($i=1;$i<=3;$i++){
					echo '<li class="slider-item">'.$i.'</li> ';
				}
				?>
                </ul> 
                <div class="slider-page"> 
                <a class="slider-pre" href="javascript:;;"><</a> 
                <a class="slider-next" href="javascript:;;">></a> 
                </div> 
               </div> 
              </div>
              <!--轮播-->

                 <div class="centernews"> <!--中间新闻区域-->
                     <div class="news">
                        <div class="title">核心价值观</div>
                        <div class="leftside" id="btn1"><a href="add1.php?class=x1" onMouseOver="showBox1()">理论解读</a></div>
                        <div class="rightside" id="btn2"><a href="add1.php?class=x2" onMouseOver="showBox2()">高层论述</a></div>
                     </div>
                     
                     <div class="newscontent"> <!--新闻内容-->
                    
                        <ul>
                            <?php 
							$sql=mysql_query("select * from zu2_newslist where classname='理论解读' order by id desc limit 6");
							while($array=mysql_fetch_row($sql)){
								echo '<li><span>'.$array[7].'</span><a href="show.php?id='.$array[0].'">'.cutstr($array[2],45,15).'</a></li>';
							}
						?>

                        </ul>
                     </div>
                     <div class="newscontent1" style="display:none"> <!--新闻内容-->
                        <ul>
                        
                           <?php 
							$sql=mysql_query("select * from zu2_newslist where classname='高层论述' order by id desc limit 6");
							while($array=mysql_fetch_row($sql)){
								echo '<li><span>'.$array[7].'</span><a href="show.php?id='.$array[0].'">'.cutstr($array[2],45,15).'</a></li>';
							}
						?>                      
                           
                        </ul>
                     </div>
                </div>  
                  <div class="rightnews"> <!--右边新闻区域-->
                    <div class="righttitle"><span><a href="#">更多>></a></span>中央精神</div>

		<div class="list_lh">
			<ul>    
             <?php 
				$sql=mysql_query("select * from zu2_mind");
				while($array=mysql_fetch_row($sql)){
					echo '<li><a href="#" target="_blank">'.cutstr($array[1],21,7).'</a></li>';
				}
			?>          	
			</ul>
		</div>
		<!-- 代码结束 -->
	
     <div class="righttp"><img src="images/zuy_14.gif" width="162" height="93"></div>
                </div>  
              </div>  <!--新闻区域-->
              <div class="Elaborate"> <!--自由阐述-->
                  <div class="header_Free"><span>自由阐述</span></div>
                  <div class="Elb_Free">
                     <div class="Elb_title_img"></div>
                     <div class="Elb_title">
                        <div class="Elb_Free_title"><div><span><a href="#">更多>></a></span>人的自由到底是怎样的自由？</div></div>
                        <div class="Elb_Free_content"><label class="lbl1"></label>很多人为了抵制自由观念，把自由的观念绝对化，认为绝对的自由是不存在的，所以，他们否认自由的存在与意义。他们提出“自由王国”的哲学定义，指的是一种绝对的自由。而事实上，绝对的自由是不存在的，存在的是相对的自由。自由本来就以不侵害别人的自由的为前提，是限制的和有条件的。但这种限制，并不意味着自由观念的无意义，相反，在限制之外，存在广阔的自由天地，这恰恰是需要保护的。</div>
                     </div>
                  </div>
                  <div class="Free_img">
                  <?php
                  for($i=1;$i<=3;$i++){
					  echo '<div class="Free_img_'.$i.'"><span style="display:none">灵魂自由</span></div>';
				  }
				  ?>
                </div>
                
              </div> <!--自由阐述-->
              <div class="columns">  <!--自由特性-->
                  <div class="header_Free"><span>自由特性</span></div>
                  <div class="col_left"> <!--自由特性左边-->
                     <div class="col_ul_1">
                        <h4>自由的哲学定义</h4>
                        <?php $sub="自由主义是一种意识形态、哲学，以自由作为主要政治价值的一系列思想流派的集合。更广泛的，自由主义追求保护个人思想自由的社会、以法律限制政府对权力的运用、保障自由贸易的观念、支持私人企业的市场经济、透明的政治体制以保障少数人的权利。"?>
                        <div class="col_content"><label class="lbl1"></label><?php echo cutstr($sub,0,60);?><span class="red_1"><a href="#">详细>></a></span></div>
                     </div>
                     <div class="col_ul">
                        <div class="img"><img src="images/zuy_1.gif" width="100" height="74"></div>
                           <h5>自由的矛盾性</h5>
                           <?php $sub="自由的矛盾性--当你用了自由以后，你就在自由的中间侵犯了你自己的自由，在自由的中间你就减少了你的自由。有人说自由就是无拘无束，不应该有所限制，如果自由是毫无限制，那叫野蛮、放纵、糊涂，那不是自由，那是没有方向的乱来。自由是有限制的，因为自由到了某一个阶段就与责任发生关系，所以自由就在责任里面找到了它的限制。";?>
                           <div class="col_content_1"><label class="lbl1_1"></label><?php echo cutstr($sub,0,70);?><span class="red"><a href="#">详细>></a></span></div>
                        
                     </div>
                     <div class="col_ul_1">  
                     <div class="img"><img src="images/zuy_2.gif" width="100" height="74"></div>
                        <h5>自由的危机性</h5>
                        <?php $sub="自由的危机性--自由如果没有被真理约束，就变成一个极大的破坏行动，是含有危机性的。当一个人误用自由的时候，他就在自由中成为抵挡真理的、与真理隔绝的人,所以自由是危机的。为这缘故，我们要很深刻的思想什么叫自由。";?>
                        <div class="col_content_2"><label class="lbl1_1"></label><?php echo cutstr($sub,0,70);?><span class="red"><a href="#">详细>></a></span></div>
                        
                     </div>
                     
                     <div class="col_ul_2">  
                     <div class="img"><img src="images/zuy_3.gif" width="100" height="74"></div>
                        <h5>自由的限制性</h5>
                        <?php $sub="自由的限制性--为什么叫自由的限制性呢？因为自由的本身一定要保存自己自由的本质，而它的本质中间不能与非自由的其他东西混杂，这叫作自由的限制性。我们难以逃离这个社会，难以逃避其他人对我们的影响。生而为人，我们需要他人的注视和评价，更需要外部价值观的肯定。";?>
                        <div class="col_content_3"><label class="lbl1_1"></label><?php echo cutstr($sub,0,70);?><span class="red"><a href="#">详细>></a></span></div>
                        
                     </div>
                  </div> <!--自由特性左边-->
                  <div class="col_right">
                  <?php
                  for($i=1;$i<=3;$i++){
					  echo '<img src="images/z'.$i.'.png" width="260" height="111">';
				  }
				  ?>
                  </div>
              </div> <!--自由特性-->
              <div class="good">
                    <div class="good_one">道德是自由的保卫者。——斯米茨的名言</div>
                    <div class="good_two">没有思想自由，就不可能有学术创新。——周海中的名言</div>
                    <div class="good_two">不自由，毋宁死。——帕特里克·亨利的名言</div>
                    <div class="good_two">个人的自由，以不侵犯他人的自由为自由。—穆勒的名言</div>    
              </div>
           </div><!--内容-->
           
  </div>  <!--主要内容-->      
 
<div class="footer">  <!--版权信息-->
   <span>版权信息：本网站仅供学习参考</span>
   <div class="resulttop"><a href="javascript:;">顶部</a></div>
</div>  <!--版权信息-->
<?php mysql_close($conn);?>
</body> 
</html>
    
</body>
</html>
	