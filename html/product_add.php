<?php

$product = $_POST['product'];

$link = mysql_connect('localhost', 'root', '');
$db_select = mysql_select_db('audioyamauchi', $link);
mysql_set_charset('utf8');

$result = mysql_query("select product_ID from product where name = '$product'");
$row = mysql_fetch_assoc($result);
$id = $row['product_ID'];

mysql_query("INSERT INTO cart (cart_ID, product_ID) VALUES(1, '$id')");

include 'Cart.php';


?>