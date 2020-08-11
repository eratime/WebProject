<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link href="css/new_style.css" rel="stylesheet" type="text/css">
<link href="css/style_new.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.4.js"></script>
<script src="js/img.js"></script>
<script src="js/right.js"></script>
<script src="js/newslist.js"></script>
<?php
include_once("conn.php");
include_once("mb_substr.php");
$title=mysql_query("select * from zu6_newslist where id=40");
$row=mysql_fetch_row($title);
?>
</head>

<body>
<div class="pos">
	<ul>
    	<li><a id="right_img_0"></a></li>
        <li><a id="right_img_1"><span>新闻聚焦</span></a></li>
        <li><a id="right_img_2"><span>专题</span></a></li>
        <li><a id="right_img_3"><span>图说</span></a></li>
    </ul>
</div>
<div class="top"><img src="images/banner.jpg" width="100%" height="300"></div>
<div class="content">
	<div class="nav">
    	<ul>
        	<li><a href="index.php">首页</a></li>
            <li><a href="#">资讯</a></li>
            <li><a href="#">创建</a></li>
            <li><a href="#">文化</a></li>
            <li><a href="#">典型</a></li>
            <li><a href="#">评论</a></li>
      	</ul>
    </div>
    <div class="box">
    	<div class="box_left">
        	<h3><?php echo $row[2]?></h3>
            <div class="news_img">
                <div class="bt_right"></div>
                <div class="bt_left"></div>
            </div>
            <div class="news">
            	<ul>
                	<?php
                    	$sql_1=mysql_query("select * from zu6_newslist where classname='文明创建' order by id desc limit 3");
						while($array_1=mysql_fetch_row($sql_1)){
							echo '<li class="list"><a href="#">'.cutstr($array_1[2],40,20).'</a></li>';
						}
						$sql_2=mysql_query("select * from zu6_newslist where classname='文明创建' order by id desc limit 3,8");
						while($array_2=mysql_fetch_row($sql_2)){
							echo '<li><img src="images/dian.jpg" width="5" height="5"><a href="#">'.cutstr($array_2[2],40,20).'</a></li>';
							
						}
					?>
                </ul>
                <p><a href="#">更多>></a></p>
            </div>
      	</div>
        <div class="box_right">
       	  <div class="title">
        		<h3>文明创建</h3>
            	<span><a href="#">更多>></a></span>
            </div>
          <ul>
          		<?php
                	$sql_3=mysql_query("select * from zu6_newslist where classname='文明创建' order by id desc limit 11,8");
						while($array_3=mysql_fetch_row($sql_3)){
							echo '<li><img src="images/dian.jpg" width="5" height="5"><a href="#">'.cutstr($array_3[2],40,20).'</a></li>';
						}
				?>
                
          </ul>
            <div class="img"><img src="images/ggt1.jpg" width="262" height="149"></div>
   	  </div>
    </div>
    <div class="gg"><img src="images/guanggao.jpg" width="1232" height="125"></div>
  	<div class="newslist">
    	<div class="x1">
   		<div class="newtitle"><h3>新闻聚焦</h3><a href="#">更多>></a></div>
        <h3>必须用社会主义核心价值观引领校园思潮</h3>
      	<span>青年的价值取向决定了未来整个社会的价值取向，而青年又处在价值观形成和确立的时期，抓好这一时期的价值观养成十分重要。<a href="#">详细>></a></span>
    	<ul class="left">
          <?php
          		$sql_4=mysql_query("select * from zu6_newslist where classname='新闻聚焦' order by id desc limit 5");
				while($array_4=mysql_fetch_row($sql_4)){
					echo '<li><img src="images/dian.jpg" width="5" height="5"><a href="#">'.cutstr($array_4[2],60,30).'</a></li>';
				}
		  ?>
      	</ul>
        <ul class="left">
        	<?php
          		$sql_4=mysql_query("select * from zu6_newslist where classname='新闻聚焦' order by id desc limit 5,5");
				while($array_4=mysql_fetch_row($sql_4)){
					echo '<li><img src="images/dian.jpg" width="5" height="5"><a href="#">'.cutstr($array_4[2],60,30).'</a></li>';
				}
		  	?>
      	</ul>
        </div>
        <div class="book">
        <div class="fd">
    		<ul>
            	<li>讲</li>
                <li>文</li>
                <li>明</li>
                <li>树</li>
                <li>新</li>
                <li>风</li>
            </ul>
            <ul>
            	<li><a id="dian_1"></a></li>
                <li><a id="dian_2"></a></li>
                <li><a id="dian_3"></a></li>
                <li><a id="dian_4"></a></li>
            </ul>
        </div>
        <div class="books"></div>
    	</div>
  	</div>
    <div class="zt">
    	<div class="info">
        	<img src="images/index_tt.jpg" width="36" height="32">
            <h3>专题</h3>
            <a href="#">更多>></a>
        </div>
        <div class="index_img">
        	<ul>
            	<li class="index_left"><img src="images/index_left.png" width="24" height="43"></li>
                <li><img src="images/index_bk1.jpg" width="220" height="145"></li>
                <li><img src="images/index_bk2.jpg" width="220" height="145"></li>
                <li><img src="images/index_bk3.jpg" width="220" height="145"></li>
                <li><img src="images/index_bk4.jpg" width="220" height="145"></li>
                <li><img src="images/index_bk5.jpg" width="220" height="145"></li>
                <li class="index_right"><img src="images/index_right.png" width="24" height="43"></li>
            </ul>
        </div>
  	</div>
  <div class="box_1">
    	<div class="title_1"><h3>关于培育和践行社会主义核心价值观的意见</h3></div>
        <div class="content_box">
        	<div class="left_1">
            	<ul>
                	<li><a id="one">一</a></li>
                    <li><a id="twe">二</a></li>
                    <li><a id="three">三</a></li>
                    <li><a id="four">四</a></li>
                </ul>
            </div>
            <div class="right_0">
            	<h3>什么是社会主义核心价值观?</h3>
                <div class="wb">
                	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;社会主义核心价值观是社会主义核心价值体系的内核，体现社会主义核心价值体系的根本性质和基本特征，反映社会主义核心价值体系的丰富内涵和实践要求，是社会主义核心价值体系的高度凝练和集中表达。</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;社会主义核心价值观包含12个词，共24个字，分别从国家、社会、公民个人三个层面提出社会主义核心价值观的价值目标、价值取向和价值准则。</p>
                </div>
            	<img src="images/下载.png" width="756" height="304"> 
            </div>
            <div class="right_1">
            	<h3>一、培育和践行社会主义核心价值观的重要意义和指导思想</h3>
                <p><span>（一）</span>培育和践行社会主义核心价值观，是推进中国特色社会主义伟大事业、实现中华民族伟大复兴中国梦的战略任务。党的十八大提出，倡导富强、民主、文明、和谐，倡导自由、平等、公正、法治，倡导爱国、敬业、诚信、友善，积极培育和践行社会主义核心价值观。这与中国特色社会主义发展要求相契合，与中华优秀传统文化和人类文明优秀成果相承接，是我们党凝聚全党全社会价值共识作出的重要论断。富强、民主、文明、和谐是国家层面的价值目标，自由、平等、公正、法治是社会层面的价值取向，爱国、敬业、诚信、友善是公民个人层面的价值准则，这24个字是社会主义核心价值观的基本内容，为培育和践行社会主义核心价值观提供了基本遵循。面对世界范围思想文化交流交融交锋形势下价值观较量的新态势，面对改革开放和发展社会主义市场经济条件下思想意识多元多样多变的新特点，积极培育和践行社会主义核心价值观，对于巩固马克思主义在意识形态领域的指导地位、巩固全党全国人民团结奋斗的共同思想基础，对于促进人的全面发展、引领社会全面进步，对于集聚全面建成小康社会、实现中华民族伟大复兴中国梦的强大正能量，具有重要现实意义和深远历史意义。</p>
                <p><span>（二）</span>培育和践行社会主义核心价值观的指导思想是：高举中国特色社会主义伟大旗帜，以邓小平理论、“三个代表”重要思想、科学发展观为指导，深入学习贯彻党的十八大精神和习近平同志系列讲话精神，紧紧围绕坚持和发展中国特色社会主义这一主题，紧紧围绕实现中华民族伟大复兴中国梦这一目标，紧紧围绕“三个倡导”这一基本内容，注重宣传教育、示范引领、实践养成相统一，注重政策保障、制度规范、法律约束相衔接，使社会主义核心价值观融入人们生产生活和精神世界，激励全体人民为夺取中国特色社会主义新胜利而不懈奋斗。</p>
                <p><span>（三）</span>培育和践行社会主义核心价值观要坚持以下原则：坚持以人为本，尊重群众主体地位，关注人们利益诉求和价值愿望，促进人的全面发展；坚持以理想信念为核心，抓住世界观、人生观、价值观这个总开关，在全社会牢固树立中国特色社会主义共同理想，着力铸牢人们的精神支柱；坚持联系实际，区分层次和对象，加强分类指导，找准与人们思想的共鸣点、与群众利益的交汇点，做到贴近性、对象化、接地气；坚持改进创新，善于运用群众喜闻乐见的方式，搭建群众便于参与的平台，开辟群众乐于参与的渠道，积极推进理念创新、手段创新和基层工作创新，增强工作的吸引力感染力。</p>
            </div>
            <div class="right_2">
            	<h3>二、把培育和践行社会主义核心价值观融入国民教育全过程</h3>
                <p><span>（四）</span>培育和践行社会主义核心价值观要从小抓起、从学校抓起。坚持育人为本、德育为先，围绕立德树人的根本任务，把社会主义核心价值观纳入国民教育总体规划，贯穿于基础教育、高等教育、职业技术教育、成人教育各领域，落实到教育教学和管理服务各环节，覆盖到所有学校和受教育者，形成课堂教学、社会实践、校园文化多位一体的育人平台，不断完善中华优秀传统文化教育，形成爱学习、爱劳动、爱祖国活动的有效形式和长效机制，努力培养德智体美全面发展的社会主义建设者和接班人。适应青少年身心特点和成长规律，深化未成年人思想道德建设和大学生思想政治教育，构建大中小学有效衔接的德育课程体系和教材体系，创新中小学德育课和高校思想政治理论课教育教学，推动社会主义核心价值观进教材、进课堂、进学生头脑。完善学校、家庭、社会三结合的教育网络，引导广大家庭和社会各方面主动配合学校教育，以良好的家庭氛围和社会风气巩固学校教育成果，形成家庭、社会与学校携手育人的强大合力。</p>
                <p><span>（五）</span>拓展青少年培育和践行社会主义核心价值观的有效途径。注重发挥社会实践的养成作用，完善实践教育教学体系，开发实践课程和活动课程，加强实践育人基地建设，打造大学生校外实践教育基地、高职实训基地、青少年社会实践活动基地，组织青少年参加力所能及的生产劳动和爱心公益活动、益德益智的科研发明和创新创造活动、形式多样的志愿服务和勤工俭学活动。注重发挥校园文化的熏陶作用，加强学校报刊、广播电视、网络建设，完善校园文化活动设施，重视校园人文环境培育和周边环境整治，建设体现社会主义特点、时代特征、学校特色的校园文化。</p>
                <p><span>（六）</span>建设师德高尚、业务精湛的高素质教师队伍。实施师德师风建设工程，坚持师德为上，完善教师职业道德规范，健全教师任职资格准入制度，将师德表现作为教师考核、聘任和评价的首要内容，形成师德师风建设长效机制。着重抓好学校党政干部和共青团干部，思想品德课、思想政治理论课和哲学社会科学课教师，辅导员和班主任队伍建设。引导广大教师自觉增强教书育人的荣誉感和责任感，学为人师、行为世范，做学生健康成长的指导者和引路人。</p>
            </div>
            <div class="right_3">
            	<h3>三、把培育和践行社会主义核心价值观落实到经济发展实践和社会治理中</h3>
                <p><span>（七）</span>确立经济发展目标和发展规划，出台经济社会政策和重大改革措施，开展各项生产经营活动，要遵循社会主义核心价值观要求，做到讲社会责任、讲社会效益，讲守法经营、讲公平竞争、讲诚信守约，形成有利于弘扬社会主义核心价值观的良好政策导向、利益机制和社会环境。与人们生产生活和现实利益密切相关的具体政策措施，要注重经济行为和价值导向有机统一，经济效益和社会效益有机统一，实现市场经济和道德建设良性互动。建立完善相应的政策评估和纠偏机制，防止出现具体政策措施与社会主义核心价值观相背离的现象。</p>
                <p><span>（八）</span>法律法规是推广社会主流价值的重要保证。要把社会主义核心价值观贯彻到依法治国、依法执政、依法行政实践中，落实到立法、执法、司法、普法和依法治理各个方面，用法律的权威来增强人们培育和践行社会主义核心价值观的自觉性。厉行法治，严格执法，公正司法，捍卫宪法和法律尊严，维护社会公平正义。加强法制宣传教育，培育社会主义法治文化，弘扬社会主义法治精神，增强全社会学法尊法守法用法意识。注重把社会主义核心价值观相关要求上升为具体法律规定，充分发挥法律的规范、引导、保障、促进作用，形成有利于培育和践行社会主义核心价值观的良好法治环境。</p>
                <p><span>（九）</span>要把践行社会主义核心价值观作为社会治理的重要内容，融入制度建设和治理工作中，形成科学有效的诉求表达机制、利益协调机制、矛盾调处机制、权益保障机制，最大限度增进社会和谐。创新社会治理，完善激励机制，褒奖善行义举，实现治理效能与道德提升相互促进，形成好人好报、恩将德报的正向效应。完善市民公约、村规民约、学生守则、行业规范，强化规章制度实施力度，在日常治理中鲜明彰显社会主流价值，使正确行为得到鼓励、错误行为受到谴责。</p>
            </div>
        </div>
    </div>
</div>
<div class="bottom"><p>版权信息：本网站仅供学习参考</p></div>
</body>
</html>