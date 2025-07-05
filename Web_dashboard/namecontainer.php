<?php session_start();
if(empty($_SESSION['password'])):
    header('Location:alogin.php');
endif;
?>
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
			   $email = $result['email'];
			   $gender = $result['gender'];
               $image = $result['image'];
                             			   
			}
		   }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
           .resentview{
             width:760px;
        height:155px;
         margin-left:10px; 
         /* margin:5px 20px;  */
        background-color:white;
        display:grid;
        grid-template-columns:1fr 1fr 1fr 2fr;

    } 
    #recentimg{
        margin-top:15px;
        margin-left:10px;
        width:110px;
        height:120px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
        
    }
    /* .resent-content1 table td{
        font-weight:bold;
        color:071952;
    } */

        
    </style>
</head>

<body>


                <div class="resentview" id="recent_view">
                                <div class="resent-img">
                                  <h3>Recent ReadTag</h3>
                                  <img src="read.png" class="recentimg">
                                </div>
                                <div class="resent-contant">
                                <?php 	echo "<img id='recentimg' src='upload/{$image}'>";	?>
                                </div>
                                <div class="resent-content1">
                                <table style="border:0; cellspacing:0;">
                                    <tr>
                                        <td style="padding:3px; color:#071952;">Rfid No : </td>
                                        
                                    </tr>
                                    <tr>
                                    <td style="padding:3px; color:#071952;"> Name : </td>
                                    </tr>
                                    <tr>
                                    <td style="padding:3px;  color:#071952;">Roll No :</td>

                                    </tr>
                                    <tr>
                                    <td style="padding:3px; color:#071952;"> Email Id : </td>   
                                   

                                    </tr>
                                    <tr>
                                    <td style="padding:3px; color:#071952;"> Gender : </td>   
                                     
                                   

                                    </tr>
                                    </table>
                                </div>
                                <div class="resent-content2">
                                <table style="border:0; cellspacing:0;">
                                    <tr>
                                    <td style="padding:3px;color:green;"> <?php echo $id; ?> </td>
                                    </tr>
                                    <tr>
                                    <td style="padding:3px;color:green;"> <?php echo $name; ?></td>
                                    </tr>
                                    <tr>
                                    <td style="padding:3px;color:green;"><?php echo $rollno; ?></td>
                                    </tr>
                                    <tr>
                                    <td style="padding:3px;color:green;"> <?php echo $email; ?></td>
                                    </tr>
                                    <tr>
                                    <td style="padding:3px; color:green;"> <?php echo $gender; ?></td>
                                    </tr>
                                    </table>
                                </div>
                </div>
</body>
</html>
