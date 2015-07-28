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

	<!-- サブメニュー（左カラム） -->
	<div id="cart">
		<div id="cart_header"><h2>商品内訳</h2></div>
		<Table Border="1" Border Width="700" Height="500" align="left">
 			<Tr>
 			<Th>購入</Th><Th>カートに追加した商品</Th><Th>単価</Th><th>注文個数</th><th>削除</th>
 			</Tr>

 			<Tr>
			<td align="center">
      		<input id="check_item[0]" type="checkbox" name="check_item[0]" value="true"  checked="checked" >
  			</td>

  			<Td Align="center" Valign="middle">
  			<A id=price Href="Product.php" Target="_blank">
			<img src="../photo/SHE9710.jpg" Align="left" alt="SHE9710" Border="0" width="200" height="155" /></A>
			SHE9710
  			</td>

			<td>
			1990円
			</td>

			<td width="60" align="center">
      		<select name="units[0]">
        	<option value="1" selected="selected">1</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
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
            </select>
  			</td>

			<td width="40" bgcolor="#ffffff" nowrap align="center">
    		<font size="-1">
          	<a href="Product.php"><img src="../photo/Button_Delete.gif" border="0" width="50" height="21" vspace="5"></a>
        	</font>
  			</td>
  			</Tr>

			<Tr>
			<td align="center">
      		<input id="check_item[0]" type="checkbox" name="check_item[0]" value="true"  checked="checked" >
  			</td>
			<Td>
			<A Href="Product.php" Target="_blank">
			<img src="../photo/SHE9710.jpg" alt="SHE9710" Border="0" width="200" height="155" /></A>
			</Td>
			<td>
			1990円
			</td>
			<td width="60" align="center">
      		<select name="units[0]">
        	<option value="1" selected="selected">1</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
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
            </select>
  			</td>

  			<td width="40" bgcolor="#ffffff" nowrap align="center">
    		<font size="-1">
          	<a href="Product.php"><img src="../photo/Button_Delete.gif" border="0" width="50" height="21" vspace="5"></a>
        	</font>
  			</td>
			</Tr>
 		</Table>

 		<form action="From.php" method="post">
		<input type="submit" name="submit" value="レジに進む">
		</form>

	</div>


	<!-- フッタ -->
	<div id="footer"><address>Copyright (c) HTMQ All Rights Reserved.</address></div>

</div>
</body>
</html>