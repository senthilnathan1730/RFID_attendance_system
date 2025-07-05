<?php session_start();
include 'dbconnection.php';
  error_reporting(0);
  $fn = $_GET['fn'];
  $ri = $_GET['ri'];
  $rn = $_GET['rn'];
  $em = $_GET['em'];
  $ps = $_GET['ps'];
  $gn = $_GET['gn'];
  $dep = $_GET['dep'];
  
if(isset($_POST['upb1'])) {
    $period1 = $_POST['period1'];
    $period2 = $_POST['period2'];
    $period3 = $_POST['period3'];
    $period4 = $_POST['period4'];
    $period5 = $_POST['period5'];
    $rollno = $_POST['rollno']; 
    // $date = date("Y-m-d");
    // echo $period1;
    // echo $date;

  // $dep = $_GET['dep'];

//   if($dep == 'bca'){ 
    // Update query with prepared statement
    // $update = "UPDATE attendance SET
    //         period1 = '$period1',
    //         period2 = '$period2',
    //         period3 = '$period3',
    //         period4 = '$period4',
    //         period5 = '$period5',
    //         WHERE rollno='$rollno' and date='$date'";
    $update = "UPDATE attendance SET period1 = '$period1', period2 = '$period2', period3 = '$period3', period4 = '$period4', period5 = '$period5' WHERE rollno='$rollno' AND date='$date'";


    $data = mysqli_query($connec,$update);

 if ($data) {
        echo "<script>alert('Record updated successfully')</script>";
        header('Location:bca-report.php');
    } else {
        echo "<script>alert('Record updated error')</script>";

    }
  }
//   elseif($dep == 'bba'){ 
//     // Update query with prepared statement
//     $update = "UPDATE studentbba SET
//             name = '$name',
//             rollno = '$rollno',
//             email = '$email',
//             pass = '$password',
//             gender = '$gender',
//             id = '$id' WHERE rollno='$rollno'";

//     $data = mysqli_query($connec,$update);

//  if ($data) {
//         echo "<script>alert('Record updated successfully')</script>";
//         header('Location:bbareport-a.php');
//     } else {
//         echo "<script>alert('Record updated error')</script>";

//     }
//   }

// }

$connec->close();
?>

<?php
  // include 'dbconnection.php';
  // error_reporting(0);
  // $fn = $_GET['fn'];
  // $ri = $_GET['ri'];
  // $rn = $_GET['rn'];
  // $em = $_GET['em'];
  // $ps = $_GET['ps'];
  // $gn = $_GET['gn'];
  // $dep = $_GET['dep'];
//   include 'dbconnection.php';
//   $date = date("Y-m-d");

//   $sql = "SELECT * FROM attendance where id = '$id' and  date='$date'";

//   $query = mysqli_query($connec,$sql);
//   $num = mysqli_num_rows($query);
//   if($num>0){
//      while($result=mysqli_fetch_assoc($query)){
                
//              $period1 = $result['period1'];
//              $period1 = $result['period2'];
//              $period1 = $result['period3'];
//              $period1 = $result['period4'];
//              $period1 = $result['period5'];

//      }
//  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>
<style>
  /*------------------------------attendance delete button------------------------------*/
  body{
 background-color: #071952;

  }
  #id02{
 background-color: white;
 margin:20px 40px;
 width:95%;
 background-image:linear-gradient(rgba(245, 70, 66, 0.75),rgba(8, 83, 156, 0.75)),url(imgaj2.jpg);
  
        background-size:cover;   
 height:85vh;
  }
.delete:hover {
  opacity:1;
}

.cancelbtn, .deletebtn {
 background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  float: left;
  width: 50%;
  height:50%;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.cancelbtn {
  background-color: #97FEED;
  color: black;
  border-radius: 5px;
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
  margin-top:-75px;
  margin-left:35px;
  /* opacity:0.7; */
  
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
  width: 50%; /* Could be more or less, depending on screen size */
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  /* font-size: 25px; */
  /* background-color:white; */
  width:15px;
  height:15px;

 text-align: center;
  font-weight: bold;
  color: #071952;
  border-radius:10px;
}
#cimg{
        width:47px;
        height:47px;
        border-radius:25px;
        margin-left:15px;
        margin-top:-25px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
      #edit-account{
      padding: 10px 0;margin:20px;width:400px; border: none; background-color: #97FEED; cursor: pointer; color: #071952; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      font-weight:bold;
      transition:0.3s;
      }
      #edit-account:hover{
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
background-color:#071952;
color:white;
opacity:0.8;
}
/* .close:hover,
.close:focus {
  color: white;
  cursor: pointer;
  background-color:red;
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
<div id="id02" class="modal">
<?php   $date = date("Y-m-d");
?>
	<a href="bca-report.php"><span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"><img  id="cimg" src="cancal.jpg"></span></a>
                 <div class="container">
                      <form class="modal-content" method="post" onsubmit="submitedit()">
                      <h1 style="color:white;">Attendance Edit</h1>

                           <div class="clearfix">
                               <div id="editbtn">
      				<input type="text" placeholder="Full Name" name="name" value="<?php echo "$fn" ?>" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5); ">
        			<input type="text" placeholder="Roll No" value="<?php echo "$rn" ?>" name="rollno" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);"><br>
      				<input type="text" placeholder="Date"  value="<?php echo "$date" ?>" name="date" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);">
    				<input type="text" placeholder="Period1" value="<?php echo "$period1" ?>"  name="period1" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);"><br>
   				<input type="text" placeholder="Period2" value="<?php echo "$period2" ?>" name="period2" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);">
    				<input type="text" placeholder="Period3" value="<?php echo "$period3" ?>"  name="period3" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);"><br>
    				<input type="text" placeholder="Period4" value="<?php echo "$period4" ?>"  name="period4" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);">
    				<input type="text" placeholder="Period5" value="<?php echo "$period5" ?>"  name="period5" required style="padding: 10px 0;color:white;border:1px solid black; font-weight:bold;font-size:15px; outline:none; background-color:transparent; margin:20px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);"><br>

		 		<button type="submit" name="upb1"  id="edit-account">Attendance Edit</button>

                               </div>
                           </div>
                       </form>
               </div>
 </div>

 <script>
    function submitedit() {
      // Perform form submission logic here

      // Set a success flag in local storage
      localStorage.setItem('editdata', 'true');
     
    }
  </script>

</body>
</html>

