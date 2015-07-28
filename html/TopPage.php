<?php

session_start();

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
		<form action="Product.html" method="post">
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

	<!-- 中央カラム -->
	<div id="center">
		<h2>イヤホン・ヘッドホン</h2>
		<!-- 新製品紹介（中央カラム） -->
		<div id="new_product">
		<div id="new_product_header"><h3>新製品紹介</h3></div>
		<hr>
		<ol id="new_product_body">
			<li>
			<A Href="Product.php">
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A>
			</li>
			<li>
			<A Href="Product.php">
			<img src="../photo/MDR-1A.jpg" alt="MDR-1A" Border="0" width="200" height="155" /></A>
			</li>
			<li>
			<A Href="Product.php">
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A>
			</li>
		</ol>
		<hr>
		</div>

		<!-- 売れ筋製品（中央カラム） -->
		<div id="top_product">
		<div id="top_product_header"><h3>売れ筋製品</h3></div>
		<hr>
		<ol id="top_product_body">
			<li>
			<A Href="Product.php">
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A>
			</li>
			<li>
			<A Href="Product.php">
			<img src="../photo/MDR-1A.jpg" alt="MDR-1A" Border="0" width="200" height="155" /></A>
			</li>
			<li>
			<A Href="Product.php">
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A>
			</li>
		</ol>
		<hr>
		</div>

		<!-- 注目製品！！（中央カラム） -->
		<div id="chumoku">
		<div id="chumoku_header"><h3>注目製品！！</h3></div>
		<hr>
		<ol id="chumoku_body">
			<li>
			<A Href="Product.php">
			メーカー：oriolus 製品名：oriolus
			<img src="../photo/oriolus.jpg" alt="oriolus" Border="0" width="200" height="155" /></A>
			</li>
			<li>
			<A Href="Product.php">
			メーカー：SONY 製品名：MDR-1A
			<img src="../photo/MDR-1A.jpg" alt="MDR-1A" Border="0" width="200" height="155" /></A>
			</li>
			<li>
			<A Href="Product.php">
			メーカー：PHILIPS 製品名：SHE9710
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A>
			</li>
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