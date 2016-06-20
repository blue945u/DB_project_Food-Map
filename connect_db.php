<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$hostname="mysql6.000webhost.com";
	$database="a9531360_team9";
	$username="a9531360_team9";
	$password="team263135";
	$user=mysql_connect($hostname,$username,$password);
	if(!$user) die("Unable to connect MySQL:".mysql_error());
	
	mysql_query("SET NAMES utf8");
	
	if(!@mysql_select_db($database))
        die("無法使用資料庫"); 
?>