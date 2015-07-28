<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="FormGet.php" method="post">
名前<br>
<input type="text" name="name"><br>
<input type="submit" name="submit" value="送信"></form>
</body>
</html>


<?php
print $_POST["name"];
print n12br($_POST["note"]);
?>