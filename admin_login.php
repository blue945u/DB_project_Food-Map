<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//�s����Ʈw
//�u�n�������W���Ψ�s��MySQL�N�ninclude��
	include("connect_db.php");
	$id = $_POST['id'];
	$pw = $_POST['pw'];

//�j�M��Ʈw���
	$sql = "SELECT count(*) FROM customer where ID = '$id', password = '$pw'";
	$result = mysql_query($sql);

//�H��MySQL��Ʈw�̬O�_���o�ӷ|��
if("$result" > 0)
{
        //�N�b���g�Jsession�A��K���ҨϥΪ̨���
        echo "<script language=\"javaScript\">"; 
		echo "window.alert(\"�n�J���\~\");"; 
		echo "</script>";
		
		$url = "http://dbteam9.comyr.com/admin_home.html";
		echo "<script type='text/javascript'>";
		echo "window.open('$url','HOMEPAGE','width=1800,height=800,top=0,left=0,toolbar=yes,menubar=yes,scrollbars=yes,resizable=yes')";
		//echo "window.close();";
		echo "</script>"; 
}
else
{		
        echo "<script language=\"javaScript\">"; 
		echo "window.alert(\"�n�J����~\");"; 
		echo "</script>";
		
		echo "<script type='text/javascript'>";
		echo "window.close()";
		echo "</script>"; 
}
?>