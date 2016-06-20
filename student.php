


<?php
	#FileName="index.html"
	#Type="MYSQL"
	#HTML="true"
	$hostname_student="mysql6.000webhost.com";
	$database_student="a9531360_team9";
	$username_student="a9531360_team9";
	$password_student="team263135";
	$student=mysql_connect($hostname_student,$username_student,$password_student);
	if(!$student) die("Unable to connect MySQL:".mysql_error());
	
	mysql_query("SET NAMES'utf8'");
	mysql_select_db($database_student);
	
	$result = mysql_query("SELECT * FROM student ;", $student);
	
	while($row = mysql_fetch_array($result)) {
		echo $row['name']."<br>";
		echo $row['s_id']."<br>";
		echo $row['password']."<br>";
	}
?>

