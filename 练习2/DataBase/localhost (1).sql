-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 01 月 02 日 13:36
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `news`
--
CREATE DATABASE `news` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `news`;

-- --------------------------------------------------------

--
-- 表的结构 `newslist`
--

CREATE TABLE IF NOT EXISTS `newslist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(10) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `title` varchar(100) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `author` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `content` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `thumbnail` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_bin DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `updatetime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=47 ;

--
-- 转存表中的数据 `newslist`
--

INSERT INTO `newslist` (`id`, `classname`, `title`, `author`, `content`, `thumbnail`, `hits`, `updatetime`) VALUES
(1, '新闻聚焦', '用社会主义核心价值体系引领当代大众文化', '信息中心', '文化建设的根本目的,是为人的精神生活构建一个"意义世界"。', NULL, 0, '2017-04-08'),
(2, '文明创建', '全面深化群众性精神文明创建活动', '信息中心', '把群众性精神文明创建作为宣传群众、发动群众、依靠群众、服务群众的最有力抓手，以文明城市、文明村镇、文明单位、文明家庭、文明校园“五大创建”活动为引领，精心设计群众普遍受惠的活动项目', NULL, 0, '2017-04-09'),
(16, '文明创建', '广泛开展移风易俗、弘扬时代新风行动', '信息中心', '针对城市软环境建设中存在的突出问题，围绕讲文明、有公德、守秩序、树新风，大力普及工作生活、社会交往、人际关系、公共场所等方面的文明礼仪规范', NULL, 0, '2017-04-09'),
(17, '文明创建', '小善举也可汇聚大文明', '信息中心', '把群众性精神文明创建作为宣传群众、发动群众、依靠群众、服务群众的最有力抓手，以文明城市、文明村镇、文明单位、文明家庭、文明校园“五大创建”活动为引领，精心设计群众普遍受惠的活动项目', NULL, 0, '2017-04-09'),
(18, '文明创建', '礼让斑马线 呵护城市文明', '信息中心', '衡量一座城市的文明程度，不但要看市容市貌这样的显性指标，更要检验市民素质这样的隐形标签。', NULL, 0, '2017-04-09'),
(19, '文明创建', '道德模范故事基层巡演让美德再升华', '信息中心', '道德模范是我们身边的道德坐标，是培育和践行社会主义核心价值观的生动范例', NULL, 0, '2017-04-09'),
(20, '新闻聚焦', '弘扬社会主义核心价值观', '信息中心', '人无信不立，业无信不兴，国无信则衰。诚实信用在一个国家的发展中起着至关重要的作用。', NULL, 0, '2017-04-08'),
(21, '新闻聚焦', '用社会主义核心价值体系引领当代大众文化', '信息中心', '文化建设的根本目的,是为人的精神生活构建一个"意义世界"。', NULL, 0, '2017-04-08'),
(22, '新闻聚焦', '从"站起来"到"强起来"：新时代文艺如何塑造英雄形象', '信息中心', '英雄是时代的楷模，文艺是时代的先声。塑造英雄形象，彰显时代精神是中国文艺的一个优良传统。', NULL, 0, '2017-04-08'),
(23, '新闻聚焦', '人民日报：没有乡村的振兴就没有中华民族伟大复兴', '信息中心', '没有乡村的振兴，就没有中华民族伟大复兴。实施乡村振兴战略“是中国特色社会主义进入新时代做好‘三农’工作的总抓手。', NULL, 0, '2017-04-08'),
(24, '文明创建', '共享便利，更要共享文明', '信息中心', '全国多个城市曾出台监管意见，将城市共享单车纳入规范化管理。', NULL, 0, '2017-04-09'),
(25, '新闻聚焦', '四十多年光阴 习近平对农村公路的发展始终牵挂于心', '信息中心', '习近平总书记对“四好农村路”建设作出重要指示强调，既要把农村公路建好，更要管好、护好、运营好，为广大农民致富奔小康、为加快推进农业农村现代化提供更好保障。', NULL, 0, '2017-04-08'),
(26, '文明创建', '习近平在全国生态环境保护大会上强调 坚决打好污染防治攻坚战 推动生态文明建设迈上新台阶', '信息中心', '习近平指出，新时代推进生态文明建设，必须坚持好以下原则。一是坚持人与自然和谐共生，坚持节约优先、保护优先、自然恢复为主的方针，像保护眼睛一样保护生态环境，像对待生命一样对待生态环境，让自然生态美景永驻人间，还自然以宁静、和谐、美丽。二是绿水青山就是金山银山，贯彻创新、协调、绿色、开放、共享的发展理念，加快形成节约资源和保护环境的空间格局、产业结构、生产方式、生活方式，给自然生态留下休养生息的时间和', NULL, 0, '2019-01-02'),
(27, '文明创建', '习近平在四川战旗村强调：城市与乡村要同步发展', '信息中心', '在战旗村，习近平对乡亲们说，在实现了温饱、实现了全面小康以后，我们还要继续振兴乡村。中国有13亿多人口，吃饭问题始终要靠自己解决，无论城镇化怎么发展都会有几亿农村人口，我们不能一面有繁荣的城市，一面却是落后甚至衰落的乡村。农村的发展不单是产业发展，不单是物质文明，精神文明、文化生活也要搞好。', NULL, 0, '2019-01-03'),
(28, '文明创建', '天津河东区：让孩子在文明校园里健康成长', '信息中心', '校园是社会文明之地，办学校的根本目的是育人。2018年11月，《天津市预防和治理校园欺凌若干规定》出台，这是全国首部规范校园欺凌预防和治理的地方性法规，彰显了我市打造无校园欺凌城市的坚定决心。', NULL, 0, '2019-01-03'),
(29, '文明创建', '以文化人，精神力量在传承中发展', '信息中心', '校园文化是学校独特的精神标识。如何在继承中发展，在发展中创新，形成具有自我“灵魂”的校园文化特色？江苏省14所入选第一届全国文明校园的学校，从传统汲取营养，用历史凝聚力量，以特色厚植精神，多彩纷呈。', NULL, 0, '2019-01-04'),
(30, '文明创建', '立德铸魂，播下理想信念的种子', '信息中心', '校园是一代人筑梦追梦的摇篮。育人贵在立心，树人重在铸魂，学校教育如何更好地为一代人立德铸魂，这些文明校园为我们提供了诸多启示。', NULL, 0, '2019-01-04'),
(31, '文明创建', '清华大学：一流大学，更要有一流文化', '信息中心', '清华园里，最美的风景是什么？在清华大学党委副书记邓卫的眼里，不是挺拔清丽的二校门，也不是落叶金黄的主干道。', NULL, 0, '2019-01-04'),
(32, '文明创建', '-4℃！石家庄大学生深夜跳下冰河救人 自己却是旱鸭子', '信息中心', '22时许，零下4℃的寒夜里，一名男子不慎掉进石津灌渠，河水很快没过了他的胸部。危急之际，路过此处的石家庄铁道大学学生王子卓，脱下自己的外套给男子披上，用自己的裤子、秋裤等做成绳子，试图救援但没有成功。为防止男子呛水，王子卓只穿着一件卫衣、一条短裤，顺着护堤斜坡滑入水中。尽管当时就被冻僵了，但他紧紧拉住了落水男子。几分钟后，十几名同学赶到，将两人陆续拉上岸。', NULL, 0, '2019-01-04'),
(33, '文明创建', '百廿传承心中梦 “真?爱”浇筑文明花', '信息中心', '从1897年的乌龙寺讲堂到今天的南宁三中，在一代又一代三中人的辛勤耕耘下，今天的南宁三中正以先进的办学理念、丰富的课程体系、严谨的学校制度、全面的发展愿景，朝着建设现代化学校的目标大步迈进。', NULL, 0, '2019-01-04'),
(34, '文明创建', '立德树人 融入教育血脉', '信息中心', '近年来，张家口市职教中心在大力发展职业教育的同时，把学生思想和心灵的培育放在重要地位，以德育工作作为学校的立校之本，将“立德树人”融入教育教学的血脉中，让学生“内心有温度、外行有深度”。', NULL, 0, '2019-01-04'),
(35, '文明创建', '湖南师大附中：创新德育理念 学生能力出众更有担当意识', '信息中心', '湖南师大附中已经走过了113个年头，学校坚持“立德树人成大器”的教育理念，在不断夯实教学水平的同时，全方位地提升学生的道德品质，让学生们在社会中锻造磨炼，努力成为德才兼备的人。', NULL, 0, '2019-01-04'),
(36, '文明创建', '大同小学：让每一个生命绽放独特魅力', '信息中心', '“让每一个生命绽放独特魅力”这是大同小学龙继红校长的办学理念。在开放、融合、绿色、温馨、诗意、文明的校园里，每一个生命都有着不一样的精彩。', NULL, 0, '2019-01-03'),
(37, '文明创建', '南宁：“安全文明?因爱而行”地铁主题专列开行', '信息中心', '246天搜寻，32个典型案例，287件好人好事……12月28日下午，南宁轨道交通集团在1号线火车东站举行南宁轨道交通安全文明形象大使聘用暨安全文明主题列车发布仪式，聘用“最美地铁乘客”为南宁轨道交通2019年度安全文明乘车形象大使，同步始发安全文明主题专列。今年度“寻找最美地铁乘客”活动圆满收官。', NULL, 0, '2019-01-04'),
(38, '文明创建', '余姚：兰江街道匠心打造首条“城市文明示范线”', '信息中心', '这几天，余姚市兰江街道正在紧锣密鼓筹备“红小西”跨年运动会，四明西路沿线900多家学校、商业、餐饮、金融、文化机构的团体及经营者热情参与报名，力争在“六公里彩跑”“个人趣味闯关”“团体趣味竞赛”等环节中赛出友谊、赛出风采，共同点亮四明西路“城市文明示范线”。', NULL, 0, '2019-01-04'),
(39, '文明创建', '北京东城：谁给公交站装上小棉垫？文明引导员现身', '信息中心', '进入冬天，天气渐冷，但近日很多在东城区公交候车亭等车的市民发现，站台不锈钢的长凳上绑上了小棉垫。这是谁做的？人们纷纷猜测。走访后，终于在文明引导员中找到答案。', NULL, 0, '2019-01-05'),
(40, '文明创建', '习近平寄语上海：勇创国际一流城市管理水平', '信息中心', '上海中心大厦总高度632米，是已建成的中国第一、世界第二高楼，是上海的一座标志性建筑。2007年，习近平在上海工作期间亲自审定了大厦的设计方案。6日上午，习近平来到大厦119层观光厅。东方明珠、环球金融中心、金茂大厦、杨浦大桥、世博园区……一处处经典建筑铺展成一幅壮美长卷。习近平不时驻足观看，同大家一起回顾上海城市建设和发展历程。他表示，改革开放以来，中国发生了翻天覆地的变化，上海就是一个生动例证', NULL, 0, '2019-01-01'),
(41, '新闻聚焦', '增强脚力眼力脑力笔力 守正创新做好新形势下宣传思想工作', '信息中心', '习近平总书记在2018年召开的全国宣传思想工作会议上强调，要不断增强脚力、眼力、脑力、笔力，努力打造一支政治过硬、本领高强、求实创新、能打胜仗的宣传思想工作队伍。这是对新形势下宣传思想战线队伍建设提出的总要求，是对广大宣传思想工作者寄予的殷切期望，为宣传思想战线提高站位、夯实基础、开创工作新局面指明了方向、提供了遵循。 ', NULL, 0, '2019-01-02'),
(42, '新闻聚焦', '【民族复兴英烈谱】廖海涛:奋战到最后一刻的抗日英雄', '信息中心', '新华社福州1月2日电（记者陈弘毅）闽西崇山峻岭中的上杭县溪口镇风光秀丽。青山下，清澈见底的小溪从古色古香的民居旁流过。历史回溯百年，这里走出了一位在抗战前线奋战到生命最后一刻的英烈??廖海涛。  　　廖海涛，1909年出生，福建省上杭县溪口乡人。1927年12月加入中国共产党，1929年5月领导当地农民暴动。土地革命战争时期，他历任乡苏维埃政府主席，区苏维埃政府副主席，中共代英县委副书记、县苏维埃', NULL, 0, '2019-01-02'),
(43, '新闻聚焦', '安徽推出《理响新时代》第二季 首度聚焦"五大思维"', '信息中心', '在改革开放40周年的大背景下，如何深度解读习近平新时代中国特色社会主义思想？如何让理论节目更加有温度、动人心？日前，由中共安徽省委宣传部、安徽广播电视台主创的《理响新时代》第二季即将以生动活泼的形式给出答案。该节目共分六期，首度聚焦阐释习近平总书记倡导的“五大思维”，生动解读习近平新时代中国特色社会主义思想，和观众一起赢思维、赢未来。  　　据悉，《理响新时代》作为国内首档综艺化脱口秀理论节目，去', NULL, 0, '2019-01-02'),
(44, '新闻聚焦', '河北廊坊健全机制礼遇"身边好人" 帮扶资金1600多万元', '信息中心', '“有了这笔钱，我就可以带着父母去看病，让母亲病情不再发展，父亲不再受病痛的困扰。”近日，河北省廊坊市“新时代好少年”金天凤在拿到2.5万元廊坊市道德模范和身边好人救助基金时激动得热泪盈眶，因为有了这笔钱，她离自己梦想更近了一步。  　　金天凤是霸州市十五中学的一名学生，她有一个特殊的家庭，母亲有智力障碍，生活不能自理，患病的父亲以放羊维持家中生计。金天凤有三个愿望，第一个愿望就是自己给父母买新衣服', NULL, 0, '2019-01-03'),
(45, '新闻聚焦', '“我和我的祖国”征文征集活动正式启动', '信息中心', '活动启事在人民网、新华网、“学习强国”学习平台同步推出。启事提出，作品应紧紧围绕庆祝中华人民共和国成立70周年这一主线，深入贯彻习近平新时代中国特色社会主义思想，以“个人”与“国家”的关系为视角，用文艺的形式生动展现在中国共产党领导下国家取得的辉煌成就，生动展现中国人民追求幸福生活努力奋斗的精神风貌。用文艺表达人民群众对祖国的赤子之情，激励和鼓舞全国各族人民更加紧密地团结在以习近平同志为核心的党中', NULL, 0, '2019-01-03'),
(46, '新闻聚焦', '铁凝：新时代中国文艺要将广大人民从精神上凝聚起来', '信息中心', '2017年，在党的十九大上，习近平总书记向世界庄严宣告：“中国特色社会主义进入新时代，意味着近代以来久经磨难的中华民族迎来了从站起来、富起来到强起来的伟大飞跃，迎来了实现中华民族伟大复兴的光明前景。”  　　习近平总书记指出，这个新时代，“是我国发展新的历史方位”，“意味着科学社会主义在二十一世纪的中国焕发出强大生机活力，在世界上高高举起了中国特色社会主义伟大旗帜；意味着中国特色社会主义道路、理论', NULL, 0, '2019-01-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
