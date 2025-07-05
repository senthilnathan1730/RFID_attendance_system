<?php 
include 'dbconnection.php';
if(isset($_POST['submit']) && isset($_FILES['my_image'])){
	echo "<h2>hello</h2>";
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	  
	if($error === 0){
		if($img_size > 125000)
		{
			$em= "sorry your file size is too large.";
			header("Location:studentprofile.php?error=$em");
		}else{
			echo "<h1>not more than 1mb</h2>";
		}
		
	}
	else{
	$em= "unknown error occured!";
	header("Location:studentprofile.php?error=$em");
	}
}
else{
	echo "Image Does not Exites";
	echo "<script>alert('Image Does Not Exites....')</script>";
	echo "<script>window.open('studentprofile.php','_self');</script>";
}

?>
