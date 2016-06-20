<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
	include("connect_db.php");
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	$pw_2 = $_POST['pw2'];
	$nm = $_POST['name'];
	$tel = $_POST['tel'];

//搜尋資料庫資料
	$sql = "SELECT count(*) FROM customer where id = '$id'";
	$result = mysql_query($sql);
	
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if("$result" >0)
{
	echo "$result";
	$url = "http://dbteam9.comyr.com/customer_assign.html";
	
	echo "<script language=\"javaScript\">"; 
	echo "if( window.confirm(\"不行喔~這個帳號有人用過了~要重新輸入嗎?\") ){
		   window.location.href='$url';
		  }
		  else {
			window.close();
		  }";
	echo "</script>";
}
else
{
	$sql2 = "insert into customer (ID,name,password,tel_number) 
			VALUES('$id','$pw','$nm','$tel')";
	$result2 = mysql_query($sql2);
	if($result2 == true) {
		echo "<script language=\"javaScript\">"; 
		echo "if ( window.confirm(\"註冊成功~你要馬上登入嗎?\") ) { 
			window.alert(\"登入成功~\"); 
			}
		    else { 
			 window.close(); 
			}";
		echo "</script>"; 
	}
}
?>