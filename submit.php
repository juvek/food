<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>submit</title>
</head>

<body>

<?php
		//get details
		include_once('connect.php');
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$address=$_POST["address"];
		$landmark=$_POST["landmark"];
		$city=$_POST["city"];
		$pincode=$_POST["pincode"];
		$phoneno=$_POST["phoneno"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$query1="INSERT INTO `usertable`(`fname`, `lname`, `address`, `landmark`, `city`, `pincode`,`phnno`, `email` ) VALUES('$fname','$lname','$address','$landmark','$city','$pincode','$phoneno','$email')";
	    $result1=mysqli_query($connect,$query1);
		
		$query2="SELECT uid FROM `usertable` ORDER BY uid DESC ";
		$result2=mysqli_query($connect,$query2);
		$rows=mysqli_fetch_array($result2);
		
		$query3="INSERT INTO `login`(`uid`, `username`, `password`) VALUES ('$rows[0]','$email','$password')";
		$result3=mysqli_query($connect,$query3);
		
		if($result1 && $result3){
			header('Location: index.php');
		}
		       
		//else include_once('indexlogout.php');
		
	?>
</body>
</html>
	