<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>attendance-report-s</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>
    body{
      background-color: #071952;
    }
    #bca-attendancereport{
      background-color: white;
      margin:10px;
      border-radius:10px;
    }
         
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
  background-color: white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius: 8px;
  width: 50%; /* Could be more or less, depending on screen size */
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
        margin-left:-20px;
        position: absolute;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
 .period1,.period2,.period3,.period4,.period5{
 color:white;
 font-size:18px;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;

  text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px white;
 }
       /*-----------------------attendance-table--------------*/
   
         .bca1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

      .bca2{
        height: 85vh;
        background-color: white;
        margin: 12px;
        border-radius: 8px;
        overflow: scroll;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;


      }
            /*-----------------------attendance-table--------------*/
      .bca2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 10px;
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
      
  </style>
  </head>
  <body>
  <div id="bca-attendancereport">
                    <div class="bca1">
                        <h4>My Attendance</h4>
                        <a href="student.php#attendance"> <span class="close" title="Close Modal"><img  id="cimg" src="cancal.jpg"></span></a>
                    </div>
  <div class="bca2" id="bbca">
                <table id="table1">
                            <tr>
                                <th>Date</th>
				<th>10-11</th>
                                <th>11-12</th>
                                <th>12-1</th>
                                <th>2-3</th>
                                <th>3-4</th>
			
				
                            </tr>
                
           	       <?php
           	         include 'dbconnection.php';
           

                        
  			 
  			  // $dateDifference = $endDate - $startDate;

  			  // $daysDifference = floor($dateDifference / (60 * 60 * 24));

  			 
  			  // if ($daysDifference <= 10 && $daysDifference >= 0) {
			     
    			    
    		 
			if (isset($_POST['report'])) {
			
   			 $startDate = $_POST["start_date"];
         echo $startDate;
  			 $endDate = $_POST["end_date"];
         echo $endDate;
  			/* $datecount = "SELECT DATEDIFF('$endDate','$startDate')";
  			 if($datecount <= 10)
  			 {*/
			$sql = "SELECT * FROM attendance WHERE date>='$startDate' AND date<='$endDate' AND name = '{$_SESSION['user_name']}'";
			
			 $query = mysqli_query($connec,$sql);
			 $num = mysqli_num_rows($query);
			 if($num>0){
				while($result=mysqli_fetch_assoc($query)){
				
                                  $_SESSION['user_date'] = $result['date'];
                                 
    	  			  $_SESSION['user_period1'] = $result['period1'];
    	 			  $_SESSION['user_period2'] = $result['period2'];
    	                          $_SESSION['user_period3'] = $result['period3'];
    	                          $_SESSION['user_period4'] = $result['period4']; 
    	                          $_SESSION['user_period5'] = $result['period5'];
				 
				/*$period1 = $_SESSION['user_period1'];
				$period2 = $_SESSION['user_period2'];
				$period3 = $_SESSION['user_period3'];
				$period4 = $_SESSION['user_period4'];
				$period5 = $_SESSION['user_period5'];*/
			
				
                            echo '<tr>';
                            echo '<td>'.$_SESSION['user_date'].'</td>';
			    /*echo '<td class="period1">'.$result['period1'].'</td>';
			    echo '<td class="period2">'.$result['period2'].'</td>';
			    echo '<td class="period3">'.$result['period3'].'</td>';
			    echo '<td class="period4">'.$result['period4'].'</td>';
			    echo '<td class="period5">'.$result['period5'].'</td>';*/
          			
          echo '<td class="period1" style="' . ($_SESSION['user_period1'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($_SESSION['user_period1'] == 'present' ? '<i class="fa fa-check-square" style="font-size:25px;color:green"></i>' : '<i class="fa fa-close" style="font-size:25px;color:red"></i>') . $_SESSION['user_period1'] . '</td>';
          echo '<td class="period2" style="' . ($_SESSION['user_period2'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($_SESSION['user_period2'] == 'present' ? '<i class="fa fa-check-square" style="font-size:25px;color:green"></i>' : '<i class="fa fa-close" style="font-size:25px;color:red"></i>') . $_SESSION['user_period2'] . '</td>';
          echo '<td class="period3" style="' . ($_SESSION['user_period3'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($_SESSION['user_period3'] == 'present' ? '<i class="fa fa-check-square" style="font-size:25px;color:green"></i>' : '<i class="fa fa-close" style="font-size:25px;color:red"></i>') . $_SESSION['user_period3'] . '</td>';
          echo '<td class="period4" style="' . ($_SESSION['user_period4'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($_SESSION['user_period4'] == 'present' ? '<i class="fa fa-check-square" style="font-size:25px;color:green"></i>' : '<i class="fa fa-close" style="font-size:25px;color:red"></i>') . $_SESSION['user_period4'] . '</td>';
          echo '<td class="period5" style="' . ($_SESSION['user_period5'] == 'present' ? 'font-size:20px;color:green;' : 'font-size:20px;color:red;') . '">' . ($_SESSION['user_period5'] == 'present' ? '<i class="fa fa-check-square" style="font-size:25px;color:green"></i>' : '<i class="fa fa-close" style="font-size:25px;color:red"></i>') . $_SESSION['user_period5'] . '</td>';
          
        

        echo '</tr>';			
                         
                         
                         //----------------
				}
			}
		

    }	  
  		// 	  } else {
     			
      // 			   echo "Please select a date range within 10 days.";
  		// 	  }	
			//   }else {
  			  
 			//    echo "Form not submitted.";
			
			// }
		
	
			?>

	 </table>
  </div>
 </div>
	
</body>
</html>
