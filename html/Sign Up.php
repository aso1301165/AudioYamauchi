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
	<div id="SignUp">
		<div id=SignUp_header><h2>Sign Up</h2></div>
		<div id=SignUp_body>
		<hr>
		<form action="account_add.php" method="post">
    	mail:　<input type="text" name="id" size=25 value="13011165@st.asojuku.ac.jp" required><br>
    	パスワード:　<input type="text" name="pass" size=23 value="nisizono" required><br>
    	パスワードの確認:<input type="text" name="pass_pass" size=23 value="nisizono" required><br>
    	名前:<input type="text" name="name" size=23 value="最中" required><br>
    	フリガナ:<input type="text" name="huri" size=23 value="モナカ" required><br>
    	住所：<input type="text" name="address" size=32 value="福岡県福岡市博多区" required><br>
    	電話番号:<input type="text" name="telephone" size=23 value="09012345678" required><br>
    	生年月日:<select name="year">
 				 <option value="1990">1990</option>
 				 <option value="1991">1991</option>
 				 <option value="1992">1992</option>
 				 <option value="1993">1993</option>
 				 <option value="1994">1994</option>
 				 <option value="1995">1995</option>
 				 <option value="1996">1996</option>
 				 <option value="1997">1997</option>
 				 <option value="1998">1998</option>
 				 <option value="1999">1999</option>
 				</select>
 				<select name="month">
 				 <option value="01">1</option>
 				 <option value="02">2</option>
 				 <option value="03">3</option>
 				 <option value="04">4</option>
 				 <option value="05">5</option>
 				 <option value="06">6</option>
 				 <option value="07">7</option>
 				 <option value="08">8</option>
 				 <option value="09">9</option>
 				 <option value="10">10</option>
 				 <option value="11">11</option>
 				 <option value="12">12</option>
 				</select>
 				<select name="day">
 				 <option value="01">1</option>
 				 <option value="02">2</option>
 				 <option value="03">3</option>
 				 <option value="04">4</option>
 				 <option value="05">5</option>
 				 <option value="06">6</option>
 				 <option value="07">7</option>
 				 <option value="08">8</option>
 				 <option value="09">9</option>
 				 <option value="10">10</option>
 				 <option value="11">11</option>
 				 <option value="12">12</option>
 				 <option value="13">13</option>
 				 <option value="14">14</option>
 				 <option value="15">15</option>
 				 <option value="16">16</option>
 				 <option value="17">17</option>
 				 <option value="18">18</option>
 				 <option value="19">19</option>
 				 <option value="20">20</option>
 				 <option value="21">21</option>
 				 <option value="22">22</option>
 				 <option value="23">23</option>
 				 <option value="24">24</option>
 				 <option value="25">25</option>
 				 <option value="26">26</option>
 				 <option value="27">27</option>
 				 <option value="28">28</option>
 				 <option value="29">29</option>
 				 <option value="30">30</option>
 				 <option value="31">31</option>
 				</select><br>

    	性別:男性<input type="radio" name="sex" value="男" checked>
    		 女性<input type="radio" name="sex" value="女"><br>
    	<input type="submit" value="登録">
		</form>
		<hr>
		</div>
	</div>

	<!-- フッタ -->
	<div id="footer"><address>Copyright (c) HTMQ All Rights Reserved.</address></div>

</div>
</body>
</html>
