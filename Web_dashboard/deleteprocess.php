<?php
// include 'dbconnection.php';
//  if(isset($_POST['d1'])){
//   //  $id = $_GET['id'];
//    $dep =$_GET['department'];
//    echo $dep;
//    if($dep == 'bba'){
//    $id = $_GET['id'];
//    $delete = mysqli_query($connec,"DELETE FROM `studentbba` WHERE `id`= '$id'");
//    if($delete == TRUE)
//    {
//      header('Location:bbareport-a.php');
//    }
//    }
//    elseif($dep == 'bca'){
//    $id = $_GET['id'];

//    $delete = mysqli_query($connec,"DELETE FROM `student` WHERE `id`= '$id'");
//    if($delete == TRUE)
//    {
//      header('Location:bca-report.php');
//    }

//    }

// }
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'dbconnection.php';

if(isset($_POST['d1'])){
    $dep = $_GET['dep'];
    echo $dep;

    if($dep == 'bba'){
        $id = $_GET['id'];
        $delete = mysqli_query($connec, "DELETE FROM `studentbba` WHERE `id`= '$id'");

        if($delete == TRUE) {
            header('Location: bbareport-a.php');
            exit; // Add exit to prevent further script execution
        }
    } elseif($dep == 'bca'){
        $id = $_GET['id'];
        $delete = mysqli_query($connec, "DELETE FROM `student` WHERE `id`= '$id'");

        if($delete == TRUE) {
            header('Location: bca-report.php');
            exit; // Add exit to prevent further script execution
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>

    <style>
	/*------------------------------attendance delete button------------------------------*/
.delete:hover {
  opacity:1;
}
#id01{
 background-color: white;
 margin:20px 40px;
 width:95%;
 background-image:linear-gradient(rgba(245, 70, 66, 0.75),rgba(8, 83, 156, 0.75)),url(imgaj2.jpg);
 background-size:cover;   
 height:85vh;
  }
body{
 background-color: #071952;

}

.cancelbtn, .deletebtn {
 background-color: #04AA6D;
  color: white;
  padding: 18px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  float: left;
  width: 50%;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.cancelbtn {
  background-color: #97FEED;
  color: black;
  border-radius: 5px;
  width:250px;
  height:18px;
  margin:10px;
  text-decoration:none;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.cancelbtn:hover,.cancelbtn:focus{
    opacity: 1;
}

.deletebtn {
  background-color: #f44336;
  border-radius: 5px;
}
.deletebtn:hover,.deletebtn:focus{
    background-color: #071952;
    color: white;
}

.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  //display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  //z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  //overflow: auto; /* Enable scroll if needed */
  background-color: #071952;
  padding-top: 50px;
}

.modal-content {
  /* background-color: white; */
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius: 8px;
  width: 52%; /* Could be more or less, depending on screen size */
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 25px;
  /* background-color:white;
  width:100px; */
 text-align: center;
  font-weight: bold;
  color: #071952;
  border-radius:10px;
}
#cimg{
        width:47px;
        height:47px;
        border-radius:25px;
        margin-left:1px;
        margin-top:-30px;
        position: absolute;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

/* .close:hover,
.close:focus {
  color: white;
  cursor: pointer;
  background-color: red;
} */

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}

</style>
</head>
<body>
<div id="id01" class="modal">
     <a href="bca-report.php"> <span class="close" title="Close Modal"><img  id="cimg" src="cancal.jpg"></span></a>
          <div class="modal-content">
            <div class="container">
            <h1 style="color:white;">Delete Account</h1>
            <p style="color:white;">Are you sure you want to delete your account?</p><br> 
              <div class="clearfix">
              <form  method="post" onsubmit="submitForm()">
	       <a href="bca-report.php" type="button"  class="cancelbtn" name="cancle">Cancel</a>
               <button class="deletebtn" type="submit" name="d1">Delete</button>
              </form>

              </div>
           </div>
	</div>
</div>


  <script>
    function submitForm() {
      // Perform form submission logic here

      // Set a success flag in local storage
      localStorage.setItem('formSubmitted', 'true');
    }
  </script>


</body>
</html>



