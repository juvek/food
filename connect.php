<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>connect</title>
</head>

<body>
<?php
	//create connection
	$connect=mysqli_connect("localhost","root","","foodsphere0");
	//check connection
	if($connect->connect_error)
		echo "connection error";	
?>
</body>
</html>