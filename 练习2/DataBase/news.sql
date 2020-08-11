-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 12 月 29 日 01:23
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES gb2312 */;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `newslist`
--

INSERT INTO `newslist` (`id`, `classname`, `title`, `author`, `content`, `thumbnail`, `hits`, `updatetime`) VALUES
(1, ' 新闻聚焦', '用社会主义核心价值体系引领当代大众文化', '信息中心', '文化建设的根本目的,是为人的精神生活构建一个"意义世界"。', NULL, 0, '2017-04-08'),
(2, '文明创建', '全面深化群众性精神文明创建活动', '信息中心', '把群众性精神文明创建作为宣传群众、发动群众、依靠群众、服务群众的最有力抓手，以文明城市、文明村镇、文明单位、文明家庭、文明校园“五大创建”活动为引领，精心设计群众普遍受惠的活动项目', NULL, 0, '2017-04-09'),
(16, '文明创建', '广泛开展移风易俗、弘扬时代新风行动', '信息中心', '针对城市软环境建设中存在的突出问题，围绕讲文明、有公德、守秩序、树新风，大力普及工作生活、社会交往、人际关系、公共场所等方面的文明礼仪规范', NULL, 0, '2017-04-09'),
(17, '文明创建', '小善举也可汇聚大文明', '信息中心', '把群众性精神文明创建作为宣传群众、发动群众、依靠群众、服务群众的最有力抓手，以文明城市、文明村镇、文明单位、文明家庭、文明校园“五大创建”活动为引领，精心设计群众普遍受惠的活动项目', NULL, 0, '2017-04-09'),
(18, '文明创建', '礼让斑马线 呵护城市文明', '信息中心', '衡量一座城市的文明程度，不但要看市容市貌这样的显性指标，更要检验市民素质这样的隐形标签。', NULL, 0, '2017-04-09'),
(19, '文明创建', '道德模范故事基层巡演让美德再升华', '信息中心', '道德模范是我们身边的道德坐标，是培育和践行社会主义核心价值观的生动范例', NULL, 0, '2017-04-09'),
(20, ' 新闻聚焦', '弘扬社会主义核心价值观', '信息中心', '人无信不立，业无信不兴，国无信则衰。诚实信用在一个国家的发展中起着至关重要的作用。', NULL, 0, '2017-04-08'),
(21, ' 新闻聚焦', '用社会主义核心价值体系引领当代大众文化', '信息中心', '文化建设的根本目的,是为人的精神生活构建一个"意义世界"。', NULL, 0, '2017-04-08'),
(22, ' 新闻聚焦', '从"站起来"到"强起来"：新时代文艺如何塑造英雄形象', '信息中心', '英雄是时代的楷模，文艺是时代的先声。塑造英雄形象，彰显时代精神是中国文艺的一个优良传统。', NULL, 0, '2017-04-08'),
(23, ' 新闻聚焦', '人民日报：没有乡村的振兴就没有中华民族伟大复兴', '信息中心', '没有乡村的振兴，就没有中华民族伟大复兴。实施乡村振兴战略“是中国特色社会主义进入新时代做好‘三农’工作的总抓手。', NULL, 0, '2017-04-08'),
(24, '文明创建', '共享便利，更要共享文明', '信息中心', '全国多个城市曾出台监管意见，将城市共享单车纳入规范化管理。', NULL, 0, '2017-04-09'),
(25, ' 新闻聚焦', '四十多年光阴 习近平对农村公路的发展始终牵挂于心', '信息中心', '习近平总书记对“四好农村路”建设作出重要指示强调，既要把农村公路建好，更要管好、护好、运营好，为广大农民致富奔小康、为加快推进农业农村现代化提供更好保障。', NULL, 0, '2017-04-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
