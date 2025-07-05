<?php session_start();

include('dbconnection.php');

  if(isset($_POST['b1'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "select * from adminlogin where username='$user' and password='$pass'";
    $res = mysqli_query($connec, $sql);
    $row=mysqli_fetch_array($res);

    $name=$row['username'];
    $count = mysqli_num_rows($res);
    $pass=$row['password'];
    if ($count == 0) {
	echo "<script>alert('Login Failed Invalid Username and password....')</script>";
        echo "<script>window.open('alogin.php','_self');</script>";
    }
    else {
	$_SESSION['username']=$name;
	$_SESSION['password']=$pass;

        echo "<h2>login successfully...</h2>";
        header("Location:admin.php#dashboard");
    }
}
?>
