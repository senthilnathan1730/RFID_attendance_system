  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>

    <style>
  .bca2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 15px;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
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
      .no-data{
      	text-align:center;
      	font-size:25px;
      	color: #071952;
      	background-color:white;
      	width:350px;
      	border-radius:3px;
      	margin-left:38%;
      	margin-top:10px;
      	box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
      }
        .edit{
        padding: 8px;
        color: white;
        background-color: #0B666A;
        font-size: 15px;
        text-decoration: none;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
      .edit:hover{
        background-color: #97FEED;
        color: #071952;
      }
        .delete{
        padding: 8px;
        color: white;
        background-color: red;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        text-decoration: none;
        cursor: pointer;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
       .delete:hover{
        background-color: #97FEED;
        color: #071952;
      }
      </style>
   </head>
  <body>
  </body>
  </html>
<?php
include 'dbconnection.php';
if(isset($_POST['input'])){
	$input = $_POST['input'];
	
	$query = "SELECT * FROM student WHERE name LIKE '{$input}%' OR id LIKE '{$input}%' OR rollno LIKE '{$input}%' OR email LIKE '{$input}%' OR pass LIKE '{$input}%' OR gender LIKE '{$input}%'";
	
	$result = mysqli_query($connec, $query);
	
	if(mysqli_num_rows($result)>0){?>
	<table id="table">
                            <tr>
                                <th>NAME</th>
				<th>RFID</th>
                                <th>ROLLNO</th>
                                <th>EMAIL ID</th>
                                <th>PASSWORD</th>
                                <th>GENDER</th>
                                <th colspan="3" style="text-align:center;">OPERATION</th>

                            </tr>	
		
	<?php
	
	 while($row = mysqli_fetch_assoc($result)){
	 	 echo '<tr>';
	 	 echo '<td>'.$row['name'].'</td>';
        	 echo '<td>'.$row['id'].'</td>';
          	 echo '<td>'.$row['rollno'].'</td>';
                 echo '<td>'.$row['email'].'</td>';
	         echo '<td>'.$row['pass'].'</td>';
                 echo '<td>'.$row['gender'].'</td>';
                         echo "<td><a href='studentprofile.php?fn=".$row['name']."&ri=".$row['id']."&rn=".$row['rollno']."&em=".$row['email']."&ps=".$row['pass']."&gn=".$row['gender']."'  class='view'>PROFILE</a></td>";
             	 echo "<td><a href='editprocess.php?fn=".$row['name']."&ri=".$row['id']."&rn=".$row['rollno']."&em=".$row['email']."&ps=".$row['pass']."&gn=".   $row['gender']."'  class='edit'>EDIT</a></td>";

                 echo "<td><a href='deleteprocess.php?id=".$row['id']."'  class='delete'>DELETE</a></td>";
                 echo '</tr>';
				
			
	       ?>
	 <?php
	 }
	}else{
		echo "<h4 class='no-data'>No Data Found</h4>";
	}
}	

?>
