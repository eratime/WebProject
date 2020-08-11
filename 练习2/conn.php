<?php
	$conn=mysql_connect("localhost","hzyuser12","123456") or die("数据库连接错误！".mysql_error());
	$db=mysql_select_db("hzyuser12",$conn) or die("找不到数据库！");
	mysql_query("set names utf8");
?>