<?php

$cart = $_POST['product2'];
$id = $_POST['num'];

session_start();

$link = mysql_connect('localhost', 'root', '');
$db_select = mysql_select_db('audioyamauchi', $link);
mysql_set_charset('utf8');

if(isset($_SESSION['member_ID'])){	
	$member = $_SESSION['member_ID'];
	mysql_query("delete from cart where member_ID = '$member' and product_ID = '$id'");
}else{
	unset($_SESSION['array']);
}
session_write_close();
include 'Cart.php';

?>