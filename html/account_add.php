<?php

$id = $_POST['id'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$pass_kakunin = $_POST['pass_pass'];
$address = $_POST['address'];
$huri = $_POST['huri'];
$tel = $_POST['telephone'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$sei = $_POST['sex'];


if(!$id || !$name || !$pass || !$pass_kakunin || !$address || !$huri || !$tel || !$year || !$month || !$day || !$sei){
	include 'Sign Up.php';
}else{
	$link = mysql_connect('localhost', 'root', '');
	$db_select = mysql_select_db('audioyamauchi', $link);
	mysql_set_charset('utf8');
	
	mysql_query("INSERT INTO member (member_ID, name, address, telephone, hurigana, seibetu, birthday, pass) VALUES('$id', '$name', '$address', '$tel', '$huri', '$sei', '$year$month$day', '$pass')");

	
	$result = mysql_query("select name from member where member_ID = '$id' and pass = '$pass'");
	$row = mysql_fetch_assoc($result);
	$name = $row['name'];
	
	session_start();
	$_SESSION['name'] = $name;
	session_write_close();
		
	mysql_close($link);
	
	include 'Mypage.php';
	
}

?>