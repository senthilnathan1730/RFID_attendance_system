  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	
	$query = "SELECT * FROM attendance WHERE name LIKE '{$input}%' OR rfidno LIKE '{$input}%' OR rollno LIKE '{$input}%' OR date LIKE '{$input}%'";
	
	$result = mysqli_query($connec, $query);
	
	if(mysqli_num_rows($result)>0){?>
	                    <table id="table">
                            <tr>
                                <th>Name</th>
				                        <th>RfidNo</th>
                                <th>RollNo</th>
                                <th>Date</th>
                                <th>10-11</th>
                                <th>11-12</th>
                                <th>12-1</th>
                                <th>2-3</th>
                                <th>3-4</th>
                             

                            </tr>	
		
	<?php
	
	 while($row = mysqli_fetch_assoc($result)){
	 	 echo '<tr>';
	 	 echo '<td>'.$row['name'].'</td>';
        	 echo '<td>'.$row['rfidno'].'</td>';
          	 echo '<td>'.$row['rollno'].'</td>';
                 echo '<td>'.$row['date'].'</td>';
	       
                	 
        echo '<td class="period1" style="' . ($row['period1'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($row['period1'] == 'present' ? '<i class="fa fa-check-square" style="font-size:30px;color:green"></i>' : '<i class="fa fa-close" style="font-size:30px;color:red"></i>') . $row['period1'] . '</td>';
          echo '<td class="period2" style="' . ($row['period2'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($row['period2'] == 'present' ? '<i class="fa fa-check-square" style="font-size:30px;color:green"></i>' : '<i class="fa fa-close" style="font-size:30px;color:red"></i>') . $row['period2'] . '</td>';
          echo '<td class="period3" style="' . ($row['period3'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($row['period3'] == 'present' ? '<i class="fa fa-check-square" style="font-size:30px;color:green"></i>' : '<i class="fa fa-close" style="font-size:30px;color:red"></i>') . $row['period3'] . '</td>';
          echo '<td class="period4" style="' . ($row['period4'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($row['period4'] == 'present' ? '<i class="fa fa-check-square" style="font-size:30px;color:green"></i>' : '<i class="fa fa-close" style="font-size:30px;color:red"></i>') . $row['period4'] . '</td>';
          echo '<td class="period5" style="' . ($row['period5'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($row['period5'] == 'present' ? '<i class="fa fa-check-square" style="font-size:30px;color:green"></i>' : '<i class="fa fa-close" style="font-size:30px;color:red"></i>') . $row['period5'] . '</td>';
        echo '</tr>';			
                 
				
			
	       ?>
	 <?php
	 }
	}else{
		echo "<h4 class='no-data'>No Data Found</h4>";
	}
}	

?>
