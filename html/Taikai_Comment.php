<?php

session_start();
$name = $_SESSION['name'];

$link = mysql_connect('localhost', 'root', '');
$db_select = mysql_select_db('audioyamauchi', $link);
mysql_set_charset('utf8');

mysql_query("delete from member where name = '$name'");
unset($_SESSION['name']);


?>
<!DOCTYPE html>
<HTML>
 <HEAD>
 <meta charset="UTF-8">
 <TITLE>タイトル</TITLE>
<link rel="stylesheet" href="../css/NewFile.css" type="text/css">
<META HTTP-EQUIV="REFRESH" CONTENT = "5; URL=TopPage.php" >

 </HEAD>

<?php ?> <BODY>
 アカウントを削除しました。
３秒後に トップページ に変わります。<BR>
<?php ?> </BODY>

 </HTML>