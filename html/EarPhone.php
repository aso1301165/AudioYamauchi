<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Audio Yamauchi</title>
<link rel="stylesheet" href="../css/NewFile.css" type="text/css">
</head>
<body>
<?php ?><div id="pagebody">
	<!-- アカウント -->
	<div id="account">
		<a href="Sign Up.php"><img id=sign_up src="../photo/Button_Sign_Up.gif" alt="Sign Up"></a>
		<a href="Sign In.php"><img id=sign_in src="../photo/Button_Sign_In.gif" alt="Sign In"></a>
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
			<li><a href="Company.php">SONY</a></li>
			<li><a href="Company.php">audio-technica</a></li>
			<li><a href="Company.php">JVC</a></li>
			<li><a href="Company.php">sennheiser</a></li>
			<li><a href="Company.php">ELECOM</a></li>
			<li><a href="Company.php">SHURE</a></li>
			<li><a href="Company.php">BOSE</a></li>
			<li><a href="Company.php">AKG</a></li>
			<li><a href="Company.php">westone</a></li>
			<li><a href="Company.php">Astrotec</a></li>
			<li><a href="Company.php">pioneer</a></li>
			<li><a href="Company.php">GRADO</a></li>
			<li><a href="Company.php">beyerdynamic</a></li>
			<li><a href="Company.php">ULTRASONE</a></li>
			<li><a href="Company.php">PHILIPS</a></li>
			<li><a href="Company.php">Panasonic</a></li>
		</ul>
	</div>

	<div id="earphone"><h2>トップ＞イヤホン</h2></div>

		<ol id="earphone_body">
			<li id="all">
			<A Href="Product.php">
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A><h3>すべてのイヤホン</h3>
			<hr></li>
			<li id="canal">
			<A Href="Product.php">
			<img src="../photo/MDR-1A.jpg" alt="MDR-1A" Border="0" width="200" height="155" /></A><h3>カナル型</h3>
			<hr></li>
			<li id="inner">
			<A Href="Product.php">
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A><h3>インナーイヤー</h3>
			<hr></li>
		</ol>
		</div>

	<!-- フッタ -->
	<div id="footer"><address>Copyright (c) HTMQ All Rights Reserved.</address></div>

</div>
<?php ?></body>
</html>