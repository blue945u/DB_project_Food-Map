<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>Delicious Fruit | Dieter Schneider 2007 | www.csstemplateheaven.com</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<center>
<h4> <?php echo "你的選擇是:"."<br>"; ?> </h4>
</center>
<h2>
<?php
	include("connect_db.php");	
		$choose = $_POST ["kind"];
	foreach ($choose as $value) {
		$result = mysql_query("select * FROM restaurant where restaurant.region=
		'$value';");
		while($p = mysql_fetch_array($result,MYSQL_ASSOC)){
			
			echo $p['restaurant_name']."<br>";
			echo "<br>";
		}		
	}	
?>
</h2>