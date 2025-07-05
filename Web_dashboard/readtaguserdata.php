<?php
    include 'dbconnection.php';
	$id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
	}
       
        $sql = "SELECT * FROM student where id = '$id'";
        $query = mysqli_query($connec, $sql);
        $num = mysqli_num_rows($query);
		if($num>0){
			while($result=mysqli_fetch_assoc($query)){
			   $name = $result['name'];
			   $id = $result['id'];
			   $rollno = $result['rollno'];
			   $department = $result['department'];
			   $email = $result['email'];
			   $gender = $result['gender'];
               $image = $result['image'];

                             			   
			}
		   }
          
		   $msg = null;
           $date = date("Y-m-d");
           date_default_timezone_set('Asia/Kolkata');
           $currenttime = date('h:i', time());
		 if($num == 0) {
				   $msg = "The ID of your Card / KeyChain is not registered !!!";
				   $result['id'] = $id;
				   $name = $result['name'] = "-----------------";
				   $rollno= $result['rollno'] = "---------------";
				   $email =$result['email'] = "----------------";
				   $gender=$result['gender'] = "---------------";
				   $department =$result['department'] = "----------------";

			   }
         
		 else{
				   $msg = null;

             if($id =='C03779A6' || $id =='0AED1DD9' || $id =='B06BE4A4' || $id =='E0E1D7A3' || $id =='A045E5A4' || $id == 'D37ADD02' || $id == '8360EF02')
             {
                   
                // if($department == 'bca'){
                        $date = date("Y-m-d");
                        $sql1 = "SELECT * FROM attendance where rollno = '$rollno' and date = '$date'";
                        $query1 = mysqli_query($connec, $sql1);
                        $num1 = mysqli_num_rows($query1);
                        $period1 = 'absent';
                        $period2 = 'absent';
                        $period3 = 'absent';
                        $period4 = 'absent';
                        $period5 = 'absent';    
                        
                        // echo $num1;
                        // if($num1 == 0){
                          
                        //     $insertQuery = "INSERT INTO attendance(name, rfidno, rollno, date, period1, period2, period3, period4, period5) 
                        //                     VALUES('$name','$id','$rollno','$date', '$period1', '$period2', '$period3', '$period4', '$period5')";
                        //     $result = $connec->query($insertQuery);
                    
                        //     if ($result == TRUE) {
                        //         $insert_attendance = "Attendance details inserted for $date.<br>";
                        //     } else {
                        //         // echo "Error inserting attendance details: " . $connec->error . "<br>";
                        //     }
                        // }

                        date_default_timezone_set('Asia/Kolkata');
                        $currenttime = date('h:i', time());
                        // echo $currenttime;
                        
                        $one = '10:00';
                        $one1 = '11:00';
                        $one2 = '12:00';
                        $one3 = '13:00';
                        $one4 = '2:00';
                        $one5 = '3:00';
                        $one6 = '4:00';
                        
                        
                        // $present = '';
                        // $persentToday = (int)$present;
                        // if($currenttime == '5:00')
                        // {

                        // } 
                        if (strtotime($currenttime) >= strtotime($one) && strtotime($currenttime) < strtotime($one1)) {
                            // echo strtotime($one);
                            $period1 = 'present';
                            // echo $period1;
                            // $present = $present + 0.2;
                        
                            $update = "UPDATE attendance SET period1 = '$period1' WHERE rollno='$rollno' AND date='$date'";
                            
                            $data = mysqli_query($connec, $update);
                            
                            if ($data) {
                                $attendance = "Attendance inserted for First hour $date.<br>";
                                
                            } else {
                                $attendance = "Attendance inserted error for $date.<br>";
                            }
                            
                        } 
                        // else {
                        //     echo "not working";
                        // }

                        if (strtotime($currenttime) >= strtotime($one1) && strtotime($currenttime) < strtotime($one2)) {
                            // echo strtotime($one);
                            $period1 = 'present';
                            // echo $period1;
                            // $present = $present + 0.2;

                        
                            $update = "UPDATE attendance SET period2 = '$period1' WHERE rollno='$rollno' AND date='$date'";
                            
                            $data = mysqli_query($connec, $update);
                            
                            if ($data) {
                                $attendance = "Attendance inserted for Second hour $date.<br>";
                                // header('Location:bca-report.php');
                            } else {
                                // echo "<script>alert('Record updated error')</script>";
                            }
                            
                        } 
                        // else {
                            // echo "not working";
                        // }
                        // echo "srttotime($one2)";
                        // echo "srttotime($currenttime)";
                        // echo "srttotime($one3)";


                        
                        if (strtotime($currenttime) >= strtotime($one2) && strtotime($currenttime) < strtotime($one3)) {
                            // echo strtotime($one);
                            $period1 = 'present';
                            // echo $period1;
                            // $present = $present + 0.2;
                            
                            $update = "UPDATE attendance SET period3 = '$period1' WHERE rollno='$rollno' AND date='$date'";
                            
                            $data = mysqli_query($connec, $update);
                            
                            if ($data) {
                                $attendance = "Attendance inserted for Third hour $date.<br>";
                                // header('Location:bca-report.php');
                            } else {
                                // echo "<script>alert('Record updated error')</script>";
                            }
                            
                        } 
                        // else {
                            // echo "not working";
                        // }
                        
                        if (strtotime($currenttime) >= strtotime($one4) && strtotime($currenttime) < strtotime($one5)) {
                            // echo strtotime($one);
                            $period1 = 'present';
                            // echo $period1;
                            // $present = $present + 0.2;

                        
                            $update = "UPDATE attendance SET period4 = '$period1' WHERE rollno='$rollno' AND date='$date'";
                            
                            $data = mysqli_query($connec, $update);
                            
                            if ($data) {
                                $attendance = "Attendance inserted for Fourth hour $date.<br>";
                                // header('Location:bca-report.php');
                            } else {
                                // echo "<script>alert('Record updated error')</script>";
                            }
                            
                        } 
                        // else {
                            // echo "not working";
                        // }

                        if (strtotime($currenttime) >= strtotime($one5) && strtotime($currenttime) < strtotime($one6)) {
                            // echo strtotime($one);
                            $period1 = 'present';
                            // echo $period1;
                            // $present = $present + 0.2;

                        
                            $update = "UPDATE attendance SET period5 = '$period1' WHERE rollno='$rollno' AND date='$date'";
                            
                            $data = mysqli_query($connec, $update);
                            
                            if ($data) {
                                $attendance = "Attendance inserted for Fifth hour $date.<br>";
                                // header('Location:bca-report.php');
                            } else {
                                // echo "<script>alert('Record updated error')</script>";
                            }
                            
                        } 
                        // else {
                        //     echo "not working";
                        // }
                       
                    }
                // }else{
                //     $attendance = "not a bca department";

                // }
			 }

    //          $date = date("y-m-d");
    //         $sqlDate = "SELECT * FROM attendance WHERE date = '$date'";
    //         $result = $conn->query($sqlDate);
    //         echo $date;
    //         if ($result1->num_rows > 0) {
    //         while ($row = $result1->fetch_assoc()) {
    //         $detail = $row['rollno'];
        
    //           }
    //         } else {
    //          $sqlSelect = "SELECT * FROM student ORDER BY name ASC";
	// 		 $query = mysqli_query($connec,$sqlSelect);
	// 		 $num = mysqli_num_rows($query);
    //          if($num>0){
    //             $date = date("y-m-d");
    //             $period1 = 'absent';
    //            $period2 = 'absent';
    //            $period3 = 'absent';
    //            $period4 = 'absent';
    //            $period5 = 'absent';
	// 			while($result=mysqli_fetch_assoc($query)){
                           
                         
    //                      $rollno = $result['rollno'];
    //                      $name = $result['name'];
    //                      $id = $result['id'];
                        
    //                         $insertQuery1 = "INSERT INTO attendance(name, rfidno, rollno, date, period1, period2, period3, period4, period5) 
    //                                         VALUES('$name','$id','$rollno','$date', '$period1', '$period2', '$period3', '$period4', '$period5')";
    //                         $result1 = $connec->query($insertQuery1);
                    
    //                         if ($result1 == TRUE) {
    //                             $insert_attendance = "Attendance details inserted for $date.<br>";
    //                         } else {
    //                             // echo "Error inserting attendance details: " . $connec->error . "<br>";
    //                         }
    //                      }
                          
    //     }
    // }
           

            
                       


        //             elseif($currenttime > $one1 or $currenttime <= $one2)
        //             { 
        //             $period2 = 'present';
        //             $update = "UPDATE attendance SET
        //             period2 = '$period2',
        //             WHERE rollno='$rollno' and date='$date'";
        
        //             $data = mysqli_query($connec,$update);
        
        //             if ($data) {
        //                 // echo "<script>alert('Record updated successfully')</script>";
        //                 // header('Location:bca-report.php');
        //             } else {
        //                 // echo "<script>alert('Record updated error')</script>";
        
        //             }
        //             echo "second hour";
        //          }
                
        //          elseif($currenttime > $one2 or $currenttime <= $one3)
        //          { 
        //          $period3 = 'present';
        //          $update = "UPDATE attendance SET
        //          period3 = '$period3',
        //          WHERE rollno='$rollno' and date='$date'";
     
        //          $data = mysqli_query($connec,$update);
     
        //          if ($data) {
        //             //  echo "<script>alert('Record updated successfully')</script>";
        //              // header('Location:bca-report.php');
        //          } else {
        //             //  echo "<script>alert('Record updated error')</script>";
     
        //          }
        //          echo "third hour";
        //       }

        //       elseif($currenttime > $one4 or $currenttime <= $one40)
        //       { 
        //       $period4 = 'present';
        //       $update = "UPDATE attendance SET
        //       period4 = '$period4',
        //       WHERE rollno='$rollno' and date='$date'";
  
        //       $data = mysqli_query($connec,$update);
  
        //       if ($data) {
        //         //   echo "<script>alert('Record updated successfully')</script>";
        //           // header('Location:bca-report.php');
        //       } else {
        //         //   echo "<script>alert('Record updated error')</script>";
  
        //       }
        //       echo "four hour";
        //    }

        //    elseif($currenttime > $one40 or $currenttime <= $one5)
        //    { 
        //    $period5 = 'present';
        //    $update = "UPDATE attendance SET
        //    period5 = '$period5',
        //    WHERE rollno='$rollno' and date='$date'";

        //    $data = mysqli_query($connec,$update);

        //    if ($data) {
        //     //    echo "<script>alert('Record updated successfully')</script>";
        //        // header('Location:bca-report.php');
        //    } else {
        //     //    echo "<script>alert('Record updated error')</script>";

        //    }
        //    echo "five hour";
        
        
        // }

    // }

            // else {
            //     echo "No records found for the given ID.";
            // }
                      
                // if ($currenttime >= $one or $currenttime =< $one1)
                // { 
                // //    $present1 = "INSERT INTO attendance(name, rfidno, rollno, period1) VALUES('$name','$id','$rollno','$period1')";
                // //    echo $present1;
                // //    $result1 = $connec->query($present1);
                // //     if($result1 == TRUE)
                // //     {
                //  //         echo "record insert succesfully...!";
                // //         // header('Location:bca-report.php');
                // //     }
                // echo "first hour";
                // }
             
               
          
		
			
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        td.lf {
            padding-left: 15px;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        #stimg{
 height:150px;
 	width:140px;
    position:absolute;
    margin-left:130px;
    margin-top:20px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
 }
        
    </style>
</head>

<body>
    <div>
        <form>
            <table style="padding: 2px">
                <tr>
                    <td style="background-color:#071952; color:white; padding:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                        <b>Student Details</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width:580px; height:300px; border:0; align:center; cellpadding:5; cellspacing:0;">
                        
                            <?php 	echo "<img id='stimg' src='upload/{$image}'>";	?>

                            <tr>
                                <td style="font-weight:bold; text-align:center; width:100px;" class="lf">RFID No</td>
                                <td style="font-weight:bold; width:50px;">:</td>
                                <td style="text-align:left;"><?php echo $id; ?></td>
                                

                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:100px;" class="lf">NAME</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $name; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:100px;" class="lf">ROLL NO</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $rollno; ?></td>
                            </tr>
                          
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:100px;" class="lf">EMAIL</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:100px;" class="lf">GENDER</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $gender; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align:center; width:100px;" class="lf">DEPARTMENT</td>
                                <td style="font-weight:bold">:</td>
                                <td style="text-align:left;"><?php echo $department; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
		<p style="color:red;"><?php echo $msg; ?></p>
        <p style="color:green;"><?php echo $attendance; ?></p>

    </div>
</body>
</html>
