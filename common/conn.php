<?php
header("content-type:text/html; charset=gbk");
if (!isset ($_SESSION)) {
	ob_start();
	session_start();
}
	//mysql服务器地址
	$hostname="localhost"; 
	//mysql数据库用户名
	$basename="root"; 
	 //mysql数据库密码
	$basepass="XX";
	//mysql数据库名称
	$database="shebei"; 
	//连接mysql 
	$conn=mysql_connect($hostname,$basename,$basepass)or die("error!"); 
	//选择mysql数据库
	mysql_select_db($database,$conn); 
 ?>