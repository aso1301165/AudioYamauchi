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

	<!-- 住所入力（中央カラム） -->
	<div id="from">
		<div id="from_header"><h2>住所入力</h2></div>
		<div id="from_body">
		<p>お届け先の住所を入力して下さい。</p>
		<form action="Shiharai_Settei.php" method="post">
		住所:既定の住所を選択<input type="radio" name="from" text="既定の住所を選択"><br>
		<hr id=from_keisen><br><br>
    		 新規で住所を選択<input type="radio" name="from" text="新規で住所を選択"><br>
    		 <p>*は、必須項目</p>

    		 都道府県名：　<select name="pref">
<option value="">↓</option>
<option value="1">北海道</option><option value="2">青森県</option>
<option value="3">岩手県</option><option value="4">宮城県</option>
<option value="5">秋田県</option><option value="6">山形県</option>
<option value="7">福島県</option><option value="8">茨城県</option>
<option value="9">栃木県</option><option value="10">群馬県</option>
<option value="11">埼玉県</option><option value="12">千葉県</option>
<option value="13">東京都</option><option value="14">神奈川県</option>
<option value="15">新潟県</option><option value="16">富山県</option>
<option value="17">石川県</option><option value="18">福井県</option>
<option value="19">山梨県</option><option value="20">長野県</option>
<option value="21">岐阜県</option><option value="22">静岡県</option>
<option value="23">愛知県</option><option value="24">三重県</option>
<option value="25">滋賀県</option><option value="26">京都府</option>
<option value="27">大阪府</option><option value="28">兵庫県</option>
<option value="29">奈良県</option><option value="30">和歌山県</option>
<option value="31">鳥取県</option><option value="32">島根県</option>
<option value="33">岡山県</option><option value="34">広島県</option>
<option value="35">山口県</option><option value="36">徳島県</option>
<option value="37">香川県</option><option value="38">愛媛県</option>
<option value="39">高知県</option><option value="40">福岡県</option>
<option value="41">佐賀県</option><option value="42">長崎県</option>
<option value="43">熊本県</option><option value="44">大分県</option>
<option value="45">宮崎県</option><option value="46">鹿児島県</option>
<option value="47">沖縄県</option>
</select><br>
市区町村～番地:<input type="text" name="addr" size="40"><br>

    		 郵便番号*<input type="text" name="name" size="3">-<input type="text" name="name" size="4"><br>
    		 新しくこの住所を登録する:<input type="checkbox" name="new_from"><br>
    		 以下の内容で確定 <input type="submit" name="name" value="決定">
		</form>
		</div>
	</div>

	<!-- フッタ -->
	<div id="footer"><address>Copyright (c) HTMQ All Rights Reserved.</address></div>

</div>
<?php ?></body>
</html>