<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>restaurant submit</title>
</head>

<body>
<?php
		//get details
		include_once('connect.php');
		$restaurantname=$_POST["restaurantname"];
		$raddress=$_POST["address"];
		$rlandmark=$_POST["landmark"];
		$rcity=$_POST["city"];
		$rpincode=$_POST["pincode"];
		$rphoneno=$_POST["phoneno"];
		$resvtype=$_POST["resvtype"];
		$usemail=$_POST["usemail"];
		$usphoneno=$_POST["usphoneno"];
		$query1="INSERT INTO `restsubmissions`(`restaurantname`, `address`, `landmark`, `city`, `pincode`, `restaurantphone`, `resvtype`, `usemail`, `usphone`) VALUES ('$restaurantname','$raddress','$rlandmark','$rcity',$rpincode,$rphoneno,'$resvtype','$usemail',$usphoneno)";
	    $result1=mysqli_query($connect,$query1);
		
				
		if(!$result1){
			echo " Registration Failed...";
		}
		
		//else include_once('indexlogout.php');
		
	?>
</body>
</html>