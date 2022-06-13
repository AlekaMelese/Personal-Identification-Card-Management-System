<html>
<head>
<title>uploading images</title>
</head>
<body>
<form action="upload_image.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" name="upload" value="upload_now">
</form>
<?php
if(isset($_POST['upload'])){
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
if($image_name==''){
	echo "<script>alert('pls select img!!')</script>";
	exit();
	}
	else
	move_uploaded_file($image_tmp_name,"photos/$image_name");
	echo "Image uploaded successfully<br>";
	echo "<img src='photos/$image_name'>";
	}
?>
</body>
</html>