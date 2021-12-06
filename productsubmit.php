<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uproduct submit</title>
</head>

<body>
<?php
	include('connect.php');
	$productname=$_POST["productname"];
	$description=$_POST["description"];
	$category=$_POST["category"];
	$sellingprice=$_POST["sellingprice"];
	$measurement=$_POST["measurement"];
	$quantity=$_POST["quantity"];
	$query1="INSERT INTO `producttable`(`foodname`, `description`, `category`, `sellingprice`, `measurement`, `quantity`) VALUES ('$productname','$description','$category',$sellingprice,'$measurement',$quantity)";
	$result1=mysqli_query($connect,$query1);
	if(!$query1)
		echo "product upload failed";
	
	$query2="SELECT foodid FROM `producttable` order by foodid desc";
	$result2=mysqli_query($connect,$query2);
	$rows=mysqli_fetch_array($result2);
	
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagefile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagefile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagefile"]["tmp_name"],$target_dir ."$rows[0].jpg")) {
		
		header("location: product_upload.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
	
</body>
</html>