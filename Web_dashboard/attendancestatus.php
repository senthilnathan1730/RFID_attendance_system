<?php
// include 'dbconnection.php';
// $date = date("y-m-d");
//    $sqlDate = "SELECT * FROM attendance WHERE date = '$date'";
//     $query = mysqli_query($connec,$sqlDate);
//    $num = mysqli_num_rows($query);
// //    echo $num;
//    if($num > 0) {
//        while($result=mysqli_fetch_assoc($query)){
                  
                
//                 $rollno = $result['rollno'];
//                 $name = $result['name'];
//                 $id = $result['id'];
//                 $period1 = $result['period1'];
//                 $period2 = $result['period2'];
//                 $period3 = $result['period3'];
//                 $period4 = $result['period4'];
//                 $period5 = $result['period5'];
//                 $presentStatus = array($period1,$period2,$period3,$period4,$period5);
//                 $count =0;
//                 for($i=0;$i<5;$i++)
//                 {
//                     if($presentStatus[$i] == 'present'){
//                         $count++;
//                     }
//                 }
//                 if($count == 5)
//                 {
//                     echo $count;
//                     $update = "UPDATE attendance SET status = '1' WHERE rollno='$rollno' AND date='$date'";
                            
//                     $data = mysqli_query($connec, $update);
                    
//                     if ($data) {
//                         // $attendance = "Attendance inserted for First hour $date.<br>";
                        
//                     } else {
//                         // $attendance = "Attendance inserted error for $date.<br>";
//                     }
//                 }
//                 elseif($count == 4)
//                 {
//                     echo $count;

//                     $update = "UPDATE attendance SET status = '0.8' WHERE rollno='$rollno' AND date='$date'";
                            
//                     $data = mysqli_query($connec, $update);
                    
//                     if ($data) {
//                         // $attendance = "Attendance inserted for First hour $date.<br>";
                        
//                     } else {
//                         // $attendance = "Attendance inserted error for $date.<br>";
//                     }
//                 }
//                 elseif($count == 3)
//                 {
//                     echo $count;

//                     $update = "UPDATE attendance SET status = '0.6' WHERE rollno='$rollno' AND date='$date'";
                            
//                     $data = mysqli_query($connec, $update);
                    
//                     if ($data) {
//                         // $attendance = "Attendance inserted for First hour $date.<br>";
                        
//                     } else {
//                         // $attendance = "Attendance inserted error for $date.<br>";
//                     }
//                 }
//                 elseif($count == 2)
//                 {
//                     echo $count;

//                     $update = "UPDATE attendance SET status = '0.4' WHERE rollno='$rollno' AND date='$date'";
                            
//                     $data = mysqli_query($connec, $update);
                    
//                     if ($data) {
//                         // $attendance = "Attendance inserted for First hour $date.<br>";
                        
//                     } else {
//                         // $attendance = "Attendance inserted error for $date.<br>";
//                     }
//                 }
//                 else
//                 {
//                     $update = "UPDATE attendance SET status = '0.2' WHERE rollno='$rollno' AND date='$date'";
                            
//                     $data = mysqli_query($connec, $update);
                    
//                     if ($data) {
//                         // $attendance = "Attendance inserted for First hour $date.<br>";
                        
//                     } else {
//                         // $attendance = "Attendance inserted error for $date.<br>";
//                     }
//                 }
             
//                 //    $insertQuery1 = "INSERT INTO attendance(name, rfidno, rollno, date, period1, period2, period3, period4, period5, status) 
//                 //                    VALUES('$name','$id','$rollno','$date', '$period1', '$period2', '$period3', '$period4', '$period5', '$status')";
//                 //    $result1 = $connec->query($insertQuery1);
           
//                 //    if ($result1 == TRUE) {
//                 //        $insert_attendance = "Attendance details inserted for $date.<br>";
//                 //    } else {
//                 //        // echo "Error inserting attendance details: " . $connec->error . "<br>";
//                 //    }
//                 }
                 
// }
// $sql1 = "SELECT * FROM attendance where name = '{$_SESSION['user_name']}'";
// $query1 = mysqli_query($connec, $sql1);
// $num1 = mysqli_num_rows($query1);
// if($num1 > 0){
// while($result1=mysqli_fetch_assoc($query1)){
// $status =array($result1['status']);
// }
// }

?>