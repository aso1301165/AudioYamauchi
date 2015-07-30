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
	<div id="SignIn">
		<div id=SignIn_header><h2>Sign In</h2></div>
		<div id=SignIn_body>
		<form action="Mypage.php" method="post" id="form">
		<ul>
		<li>
    	<label><span>ユーザーID</span><input required type="text" name="id" size=25 value="13011165@st.asojuku.ac.jp" required></label>
    	</li>
    	<li>
    	<label><span>パスワード</span><input type="text" name="pass" size=23 value="nisizono" required></label>
    	</li>
    	<li>
    	<p>
    	<input type="submit" value="Sign In">
    	</p>
    	</li>
		</form>
		</div>
	</div>

	<!-- フッタ -->
	<div id="footer"><address>Copyright (c) HTMQ All Rights Reserved.</address></div>

</div>
<?php ?></body>
</html>