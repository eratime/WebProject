<?php
$conn=mysql_connect("localhost","hzyuser12","123456") or die("数据库连接失败".mysql_error());
$db=mysql_select_db("hzyuser12",$conn);
mysql_query("set names utf8");
?>