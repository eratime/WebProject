<!DOCTYPE HTML>
<html>
<?php
include_once("conn.php");
include_once("function.php");
if(isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	$id=1;
}

$sql=mysql_query("select * from zu2_newslist where id='".$id."'");
$array=mysql_fetch_row($sql);
$array[6]++;
$upsql=mysql_query("update zu2_newslist set hits='".$array[6]."' where id='".$id."'");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>新闻内容</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-1.12.4.js"></script>
<script src="js/i_2_js.js"></script>
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
                 
      <div class="main">  <!--内容-->
         <div class="left"> <!--左边框-->
            <div class="subMenu_1"><!--子菜单-->
               <h3><a href="#">新闻中心</a></h3>
               <div class="sidebar"><a href="#">高层动态</a></div>
               <div class="sidebar"><a href="#">理论学习</a></div>
               <div class="sidebar"><a href="#">要言要论</a></div>
               <div class="sidebar"><a href="#">公告通知</a></div>
            </div><!--子菜单-->
            <div class="theme_1">  <!--小栏目1-->
               <h1><span><a href="#">更多>></a></span><a href="#">聚焦</a></h1>
               <ul>
                 <li><a href="#">善美河源：城市提升</a></li>
                 <li><a href="#">善美河源：城乡联动</a></li>
                 <li><a href="#">客家天下：价值引领</a></li>
                 <li><a href="#">客家天下：城市提升</a></li>
               </ul>
            </div><!--小栏目1-->
            
             <div class="theme_2">  <!--小栏目2-->
               <h1><span><a href="#">更多>></a></span><a href="#">文明创建</a></h1>
               <ul>
                 <li><a href="#">广东河源：全力以文迎检工作</a></li>
                 <li><a href="#">广东河源：全力以文迎检工作</a></li>
                 <li><a href="#">广东河源：赴做好创文迎检工作</a></li>
               </ul>
            </div><!--小栏目2class="rightsidebar"</span>-->
            
           <div class="theme_3">  <!--小栏目3-->
               <h1><span><a href="#">更多>></a></span><a href="#">主题活动</a></h1>
               <div class="img"><img src="images/img_1.png" width="160" height="137"></div>
            </div><!--小栏目3-->
         </div><!--左边框-->
         <div class="right"> <!--右边框-->
            <div class="news_title"> <!--标题栏-->
                <h2><span>您当前位置：<a href="index.php">首页>></a><a href="#"><?php echo $array[1];?></a></span><a href="#"><?php echo $array[1];?></a></h2>
            </div><!--标题栏-->
            <div class="news_content"><!--新闻内容-->
              <div class="news_container"><span class="right_1">点击数：<?php echo $array[6]?></span><span>发布者：<?php echo $array[3]?></span><span>时间:<?php echo $array[7]?></span></div>
              <div class="news-tilt-img"></div>
              <div class="news-containe"><?php echo $array[4]?></div>
            </div><!--新闻内容-->
            </div><!--新闻内容-->
         </div><!--右边框-->
      </div><!--内容-->
  </div>  <!--内容-->   
 </div><!--主要内容-->  
<div class="footer">  <!--版权信息-->
   <span>版权信息：本网站仅供学习参考</span>
   <div class="resulttop"><a href="javascript:;">顶部</a></div>
</div>  <!--版权信息-->
<?php mysql_close($conn);?>
</body>
</html>
