<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
	include("connect_db.php");
	$id = $_POST['id'];
	$pw = $_POST['pw'];

//搜尋資料庫資料
	$sql = "SELECT * FROM customer where id = '$id'";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);

//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['id'] = $id;
        echo "<script language=\"javaScript\">"; 
		echo "window.alert(\"登入成功~\");"; 
		echo "</script>";
        
		
		$url = "http://dbteam9.comyr.com/customer_home.html";
		echo "<script type='text/javascript'>";
		echo "window.open('$url','HOMEPAGE','width=1800,height=800,top=0,left=0,toolbar=yes,menubar=yes,scrollbars=yes,resizable=yes')";
		//echo "window.close();";
		echo "</script>"; 
}
else
{		
        echo "<script language=\"javaScript\">"; 
		echo "window.alert(\"登入失敗~\");"; 
		echo "</script>";
		
		echo "<script type='text/javascript'>";
		echo "window.close()";
		echo "</script>"; 
}
?>