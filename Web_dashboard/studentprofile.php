<?php session_start();
if(empty($_SESSION['password'])):
    header('Location:alogin.php');
endif;
?>
<?php


include 'dbconnection.php';
$dep = $_GET['dep'];
$message = "";
if (isset($_FILES["my_image"]) && !empty($_FILES["my_image"]["name"])) {
    $allowedTypes = ["jpg", "png", "jpeg"];
    $fileType = strtolower(pathinfo($_FILES["my_image"]["name"], PATHINFO_EXTENSION));

    if (!in_array($fileType, $allowedTypes)) {
        $message = "Image upload failed. Invalid format.";
    } else if ($_FILES["my_image"]["size"] > 307200) {
        $message = "Image upload failed. Image size greater than 300KB.";
    } else {
        $filename = time() . "." . $fileType;

        if (move_uploaded_file($_FILES["my_image"]["tmp_name"], "upload/" . $filename)) {
            $rn = isset($_GET['rn']) ? $_GET['rn'] : '';

            // Sanitize the input (you should use proper sanitation methods, e.g., prepared statements)
            $rn = mysqli_real_escape_string($connec, $rn);
        
            $sql = "UPDATE student SET image = '{$filename}' WHERE rollno = '{$rn}'";

         
            // Execute the SQL query
            if (mysqli_query($connec, $sql)) {
                $message = "Image uploaded successfully.";
            } else {
                $message = "Image upload failed. Try again.";
            }
        } else {
            $message = "Image upload failed. Try again.";
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
    body{
      background-color: #071952;
    }
      /*-------------------attendance-report---------------------------*/
      .bca1{
            background-color:white;
            color: #071952;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 7px solid red;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

      .bca2{
        height: 87vh;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        margin: 12px;
        border-radius: 8px;
        overflow: scroll;
	display:grid;
	grid-template-columns:1fr 2fr;
      }
	 /*-----------------------attendance-table--------------*/
      .bca2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 15px;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
      }
      .bca2 th{
        font-weight: bolder;
        background-color: #071952;
        color: #97FEED;
      }
     .bca2 table td,th{
        border: 1px solid #071952;
        width: 65vw;
        text-align: left;
        padding: 20px;
      }
      
#date{
margin:left;
}
 .image-uplode{
 background-color:white;
 height:480px;
 margin:20px;
 box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
 border-radius:15px;
 display:grid;
 grid-template-rows:1fr 2fr;
 }
 .img-st{
 	height:180px;
 	width:170px;
 	margin:10px;
 	margin-left:120px;
 	background-color: white;
   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
 }
 #stimg{
 height:180px;
 	width:170px;
 }
 #button{
 margin-left:90px;
 border:1px solid black;
 box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
 }
 lable{
  margin-left:145px;
  
 }
 #upload{

 padding:10px;
 margin-left:10px;
 margin-top:15px;
 width:380px;
  background-color:#071952;
 color:white;
 border-radius:10px;
 border:none;
 font-size:18px;
 cursor:pointer;
 box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;

 }
 #upload:hover{
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 background-color: #97FEED;
 color:#071952;
 }
 .details-uplode{
 background-color:white;
 height:480px;
 margin:20px;
 box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
 border-radius:8px;
 }
 .bca-back-button{
 position:absolute;
 margin-left:84%;
 font-size:50px;
 margin-top:-70px;
 /* padding:8px 30px; */
 /* background-color:#071952; */
 color:white;
 text-decoration:none;
 border-radius:10px;
 
 }
 .bca-back-button:hover,.bca-back-button:focus{
 /* box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; */
 /* color:red; */
 color:red;
 }
       .edit{
        padding: 8px 30px;
        color: #071952;
        background-color: #97FEED;
        font-size: 15px;
        text-decoration: none;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        position:absolute;
        margin-left:700px;
        margin-top:30px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;

      }
      .edit:hover{
        background-color: white;
        color: #071952;
      }
      #cimg{
        width:47px;
        height:47px;
        border-radius:25px;
        margin-left:38px;
        margin-top:38px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
      #edit{
        padding:8px 60px;
 margin-left:10px;
 margin-top:15px;
 /* width:380px; */
  background-color:red;
  text-decoration:none;
 color:white;
 border-radius:10px;
 border:none;
 font-size:18px;
 cursor:pointer;
 box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
 
      }
      .atedit0{
        display:grid;
	grid-template-columns:1fr 1fr;
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;

      }
      .atedit1{
        margin-top:50px;
        
      }
   </style>
 </head>
 <body>
<!----------------attendance-bca details(start)-------------------->  
                <div id="bca-attendancereport">
                    <div class="bca1">
                        <!--<h4>Student Profile</h4>-->
                     	<?php  
                     	$fn = $_GET['fn'];
                     	echo "<h4>".$fn. "</h4>";
                     	?>
                        <a class="bca-back-button" href="bca-report.php"><img  id="cimg" src="cancal.jpg"></a>
                    </div>
                    <div class="bca2" id="bbca">
			<?php
  			include 'dbconnection.php';
  			error_reporting(0);
  			$fn = $_GET['fn'];
  			$ri = $_GET['ri'];
  			$rn = $_GET['rn'];
  			$em = $_GET['em'];
  			$ps = $_GET['ps'];
  			$gn = $_GET['gn'];
  			$im = $_GET['im'];
  			$dep = $_GET['dep'];

			?>
			<div class="image-uplode">
        <!-- <div class="p1"> -->
				<div class="img-st">
				<?php
				echo "<img id='stimg' src='upload/{$im}'>";	
				?>
				</div>
				<div class="img-select">
				<form method="post" enctype="multipart/form-data">
				   <lable>choose Image</lable><br>
				   <input type="file" name="my_image" id="button"><br>
				   <button type="submit" name="submit" id="upload">Upload</button>
				</form><br>
        <div class="atedit0">
        <div class="atedit">
        <h3 style="text-align:center; color:#071952;">Edit Attendance</h3>
        <?php 
         $date = date("Y-m-d");
          echo "<h4 style='text-align:center;'>$date</h4>";
        ?>
        <?php echo "<h4 style='text-align:center;'>$fn</h4>"; ?>

      </div>
    <div class="atedit1">
    <a href="attendanceeditprocess.php?fn=<?php echo $fn; ?> &rn=<?php echo $rn;?>" id="edit">Edit</a>


    </div>
    </div>
				</div>
    <!-- </div> -->
    <!-- <div class="p2"> -->
   
    <!-- </div> -->
				
				<?php echo $message; ?>
			</div>
			
			<div class="details-uplode">
			<table id="table1">
                            <tr>
                                <th colspan="2" >Personal Information</th>
                                <?php
                                echo "<a href='editprocess.php?fn=".$fn."&ri=".$ri."&rn=".$rn."&em=".$em."&ps=".$ps."&gn=".$gn."'  class='edit'>EDIT</a>";
				?>
                            </tr>
                              
                            <tr>	
                           	<td id="date">Name</td>
                           	<?php echo "<td id='date'>$fn</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Rfid No</td>
                      		<?php echo "<td id='date'>$ri</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Roll No</td>
                           	<?php echo "<td id='date'>$rn</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Email Id</td>
                           	<?php echo "<td id='date'>$em</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Gender</td>
                           	<?php echo "<td id='date'>$gn</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Password</td>
                           	<?php echo "<td id='date'>$ps</td>"; ?>
                        
			    </tr>
		
			</table>
			</div>
                    </div>
                </div>
      
	<!------------attendance-bca details(end)------------>
	


</body>
</html>
