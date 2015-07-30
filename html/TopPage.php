<?php

session_start();

$link = mysql_connect('localhost', 'root', '');
$db_select = mysql_select_db('audioyamauchi', $link);
mysql_set_charset('utf8');

$ear = mysql_query("select name, format(price,0) as prices, picture from product where genre_ID = 1 and product_ID between 1 and 3");
$head = mysql_query("select name, format(price,0) as prices, picture from product where genre_ID = 2 and product_ID between 6 and 8");
$etc = mysql_query("select name, format(price,0) as prices, picture from product where genre_ID = 3 and product_ID between 11 and 13");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Audio Yamauchi</title>
<link rel="stylesheet" href="../css/NewFile.css" type="text/css">
</head>
<body>
<div id="pagebody">
	<!-- アカウント -->
	<div id="account">
	<?php
	if(!isset($_SESSION['name'])){
	?>
		<a href="Sign Up.php"><img id=sign_up src="../photo/Button_Sign_Up.gif" alt="Sign Up"></a>
		<a href="Sign In.php"><img id=sign_in src="../photo/Button_Sign_In.gif" alt="Sign In"></a>
	<?php
	}else{
	?>
		<a href="Mypage.php"><img id=mypage src="../photo/Button_Mypage.gif" alt="My Page"></a>
		<a href="logout.php"><img id=sign_out src="../photo/Button_Sign_out.gif" alt="Sign Out"></a>
	<?php
	}
	?>
		<a href="Cart.php"><img id=cart src="../photo/Cart.gif" alt="Cart"></a>
	</div>

	<!-- ヘッダ -->
	<div id="header"><h1><a href="TopPage.php">Audio Yamauchi</a></h1>
	</div>

	<!-- 検索 -->
	<div id="select" align="center">
		<form action="Product.php" method="post">
			<select name="kaden">
				<option value="earphone">イヤホン</option>
				<option value="headphone">ヘッドホン</option>
				<option value="anything">その他</option>
			</select>
			<input type="text" name="name" size="100">
			<input type="submit" name="submit" value="検索">
		</form>
	</div>

	<!-- メインメニュー -->
	<div id="menu">
		<a id="menu01" href="EarPhone.php">イヤホン</a>
		<a id="menu02" href="HeadPhone.php">ヘッドホン</a>
		<a id="menu03" href="AnyThing.php">その他</a>
	</div>

	<!-- サブメニュー（左カラム） -->
	<div id="submenu">
		<div id="submenu_header"><h2>メーカーで探す</h2></div>
		<ul id="submenu_body">
			<li><a href="">SONY</a></li>
			<li><a href="">audio-technica</a></li>
			<li><a href="">JVC</a></li>
			<li><a href="">sennheiser</a></li>
			<li><a href="">ELECOM</a></li>
			<li><a href="">SHURE</a></li>
			<li><a href="">BOSE</a></li>
			<li><a href="">AKG</a></li>
			<li><a href="">westone</a></li>
			<li><a href="">Astrotec</a></li>
			<li><a href="">pioneer</a></li>
			<li><a href="">GRADO</a></li>
			<li><a href="">beyerdynamic</a></li>
			<li><a href="">ULTRASONE</a></li>
			<li><a href="">PHILIPS</a></li>
			<li><a href="">Panasonic</a></li>
		</ul>
	</div>

	<!-- 中央カラム -->
	<div id="center">
		<h2>新製品紹介</h2>
		<!-- 新製品紹介（中央カラム） -->
		<div id="new_product">
		<div id="new_product_header"><h3>イヤホン</h3></div>
		<hr>
		<ol id="new_product_body">
			<table>
			<?php 
			while($row = mysql_fetch_assoc($ear)){
			?>
			<tr>
			<td><a href="EarPhone.php"><img src=<?php print $row['picture']; ?> Border=0 width=180 height=180 /></a></td>
			</tr>
			<?php 
			}
			?>
		</table>
		</ol>
		<hr>
		</div>

		<!-- 売れ筋製品（中央カラム） -->
		<div id="top_product">
		<div id="top_product_header"><h3>ヘッドホン</h3></div>
		<hr>
		<ol id="top_product_body">
		<table>
			<?php 
			while($row = mysql_fetch_assoc($head)){
			?>
			<tr>
			<td><a href="HeadPhone.php"><img src=<?php print $row['picture']; ?> Border=0 width=180 height=180 /></a></td>
			</tr>
			<?php 
			}
			?>
		</table>
		</ol>
		<hr>
		</div>

		<!-- 注目製品！！（中央カラム） -->
		<div id="chumoku">
		<div id="chumoku_header"><h3>MP3プレイヤー</h3></div>
		<hr>
		<ol id="chumoku_body">
		<table>
			<?php 
			while($row = mysql_fetch_assoc($etc)){
			?>
			<tr>
			<td><a href="AnyThing.php"><img src=<?php print $row['picture']; ?> Border=0 width=180 height=180 /></a></td>
			</tr>
			<?php 
			}
			?>
		</table>
		</ol>
		<hr>
		</div>
	</div>

	<!-- フッタ -->
	<div id="footer"><address>Copyright (c) HTMQ All Rights Reserved.</address></div>

</div>
<?php ?>
</body>
</html>