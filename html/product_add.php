<?php
session_start();
$member = $_SESSION['member_ID'];
$product = $_POST['product2'];

$link = mysql_connect('localhost', 'root', '');
$db_select = mysql_select_db('audioyamauchi', $link);
mysql_set_charset('utf8');

$result = mysql_query("select product_ID from product where name = '$product'");
$row = mysql_fetch_assoc($result);
$id = $row['product_ID'];

mysql_query("INSERT INTO cart (member_ID, product_ID) VALUES('$member', '$id')");

session_write_close();

include 'Cart.php';


?>