<?php session_start();
if(empty($_SESSION['user_pass'])):
    header('Location:slogin.php');
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
	*{
            padding: 0;
            margin: 0;
            font-family: serif;
        }
        body{
            background-color: #97FEED;
        }
        .body-container{
            display: grid;
            grid-template-columns: 1fr 4fr;


        }
        /*------------------------********************************-------------------------*/


        /*--------------------- nave-bar details----------------- */

        .navebar{
            background-color: #071952;
            height: 100vh;
            position: relative;
            display: block;
            display: grid;
            grid-template-rows: 1fr 1fr 2fr;

        }

         .sub-link2{ 
            width:200px;
            line-height: 40px;
            margin-left: 25px;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            position: absolute;
            font-size: 18px;
            text-align: center;
            border-radius: 10px;
        } 
        .sub-link2:hover{
            background-color: white;
            color:  #97FEED;
	    font-size:18px;
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
		box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;

        }
        .sub-link1 a{ 
            width:220px;
            line-height: 40px;
            margin-left: 25px;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            position: absolute;
            font-size: 18px;
            text-align: center;
            border-radius: 10px;
        }


        .sub-link1 a:hover{
            background-color: white;
            color: #071952;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;

        }
        .sub-link1 a:focus{
            background-color:  #0B666A;
            color: red;
            border-left: 5px solid red;
            border-radius: 5px;
        }
        /*------------------------********************************-------------------------*/



        /*-----------------------dash-details-------------- */
        #dashboard{
            display: grid;
            grid-template-rows: 1fr 1fr 1fr;

        }
 #dashboard1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;

            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        .dashboard2{

            background-color: white;
            height: 50vh;
            margin: 10px;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
            display:grid;
            grid-template-columns:1fr 1fr;


        }
        .tagdetails{
          background-color: white;
          width:480px;
          height:40vh;
          margin:20px 20px;
          box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
          background-image:linear-gradient(rgba(30, 47, 85, 0.78),rgba(8, 83, 156, 0.75)),url(rfidd1.jpg);
             background-size:cover;
        }
        .todaystatus{
          background-color: white;
          width:480px;
          height:40vh;
          margin:20px 20px;
          box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
          background-image:linear-gradient(rgba(30, 47, 85, 0.78),rgba(8, 83, 156, 0.75)),url(attendance.jpg);
             background-size:cover;
        }
        .dashboard3{

            background-color: white;
            margin: 10px;
            height: 25vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;

        }
        .present{
            display: grid;
            grid-template-columns:1fr 1fr;
            height: 17vh;
            background-color: white;
            color: white;
            margin: 25px;
            border-radius: 10px;
            background-image:linear-gradient(rgba(30, 47, 85, 0.78),rgba(8, 83, 156, 0.75)),url(daypresent.webp);
             background-size:cover;
           box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .absent{
          display: grid;
            grid-template-columns:1fr 1fr;
            height: 17vh;
            background-color: white;
            color: white;
            margin: 25px;
            border-radius: 10px;
            background-image:linear-gradient(rgba(30, 47, 85, 0.78),rgba(8, 83, 156, 0.75)),url(dayabsent.jpg);
             background-size:cover;
          box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
      
        .hours{
          display: grid;
            grid-template-columns:1fr 1fr;
            height: 17vh;
            background-color: white;
            color: white;
            margin: 25px;
            border-radius: 10px;
            background-image:linear-gradient(rgba(30, 47, 85, 0.78),rgba(8, 83, 156, 0.75)),url(working.jpg);
             background-size:cover;
	  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

        }
          .present:hover{
           box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
           background-color: #071952;
           color:white;
           background-size:cover;
        background-image:linear-gradient(rgba(245, 70, 66, 0.75),rgba(8, 83, 156, 0.75)),url(daypresent.webp);
        }
         .absent:hover{
           box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
           background-color: #071952;
           color:white;
           background-size:cover;
        background-image:linear-gradient(rgba(245, 70, 66, 0.75),rgba(8, 83, 156, 0.75)),url(dayabsent.jpg);
        }
         .hours:hover{
           box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
           background-color: #071952;
           color:white;
           background-size:cover;
        background-image:linear-gradient(rgba(245, 70, 66, 0.75),rgba(8, 83, 156, 0.75)),url(working.jpg);
        }
        /*------------------------********************************-------------------------*/


        /*----------------department details-------------------*/

        #department{
            display: grid;
            grid-template-rows: 1fr 2fr;
        }
        #department1{
            background-color: #35A29F;
            color: #F0F5F9;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        #departments3{
            height: 60vh;
            background-color: #35A29F;
            margin: 10px;
            border-radius: 8px;
            color: #F0F5F9;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
        }
        #bca1{
           background-color: #bbbfca;
           margin: 50px;
           width:260px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
           }
     #date1{
           background-color: white;
           margin: 50px;
           width:260px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
           background-image:linear-gradient(rgba(30, 47, 85, 0.78),rgba(8, 83, 156, 0.75)),url(dates.jpg);
             background-size:cover;
	   box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

        }
        #date2{
           background-color: white;
           margin: 50px;
           width:260px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
           background-image:linear-gradient(rgba(30, 47, 85, 0.78),rgba(8, 83, 156, 0.75)),url(dates.jpg);
             background-size:cover;
       	box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;


        }
        #get-report{
           background-color: white;
           margin: 50px;
          
           height: 20vh;
           padding: 15px;
           border-radius: 10px;


        }
        #get-report button{
          padding: 15px;
          margin-top:30px;
          margin-left:23px;
          background-color:#071952;
          text-decoration:none;
          outline:none;
          color:white;
          border:none;
          font-size:17px;
          position:absolute;
          cursor:pointer;
          border-radius:10px;
          transition:0.4s;
          box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
        }
       #get-report button:hover{
       background-color:#97FEED;
       color:#071952;
       box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
        /*------------------------********************************-------------------------*/
	
	
        #timetable{
            display: grid;
            grid-template-rows: 1fr 2fr;
        }
        #timetable1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;

            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        #timetable2{
            background-color: white;
            margin: 10px;
            border-radius: 8px;
            
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
          
        }
              #timetable-bca{
           background-color: white;
           /* margin: 25px; */
           width:76vw;
           height: 70vh;
           padding: 15px;
             overflow:scroll;
           border-radius: 10px;
    	   box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        } 
	
        /*----------------attendance details--------------*/

        #attendance{
            display: grid;
            grid-template-rows: 1fr 2fr;
        }
        #attendance1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;

            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        #attendance2{
            background-color: white;
            margin: 10px;
            border-radius: 8px;
            color: #0B666A;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
            
        }
     
        
      
        
        /*------------------------********************************-------------------------*/





        /*----------------displayblocking  details--------------*/

        #dashboard:target, #attendance:target, #timetable:target {
         display: block;
         }

        #dashboard, #attendance, #timetable{
         display: none;
        }
        .dash-details{
            display: grid;
            grid-template-rows: 1fr 6fr;
        }
        .header{
            background-color: white;
            height: 13vh;
            top: 0;
        }
       /*------------------dropdown------------------*/
       .dropdown {
          position: relative;
        }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #0B666A;
        min-width: 160px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        z-index: 1;
        width: 200px;
        }
        .dropdown-content a {
      color: #F0F5F9;
      padding: 12px 20px;
      display: block;
      text-decoration: none;
    }
    .dropdown:hover .dropdown-content {
      display: block;
      color: #97FEED;
    }
    .sub-link2 a{
        text-decoration: none;
        /* color: #F0F5F9; */
    }
    .sub-link2 ul li a:hover{
        color: #1E2022;
        /* color: #F0F5F9; */
        
    }

    ul.no-bullets{
        list-style-type: none;
        
      }
      #a1:hover{
        color:#1E2022;
      }
      #al{
        color: #F0F5F9;
      }
      .dropdown-content a:hover{
            color: #1E2022;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            border-left: 5px solid red;
            border-radius: 5px;
      }
      .img{
        border-radius: 50%;
        width: 130px;
        height: 130px;
        margin-left: 70px;
    	box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background-color: white;
        margin-top: -40px;
      }
      #resize{
      margin-left:5px;
      margin-top:5px;
        border-radius: 50%;
        width: 120px;
        height: 120px;
      	box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
}

      .img img{
        width: 100px;
        height: 100px;
        border-radius: 60%;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
      }
      
         .name{
      margin-top:20px;
      text-align:center;
      color:white;
      
      }
      .img_aj{
        border-radius: 50%;
        width: 65px;
        height: 65px;
        border: 3px solid white;
        float: right;
        margin-top: -55px;
        margin-right: 10px;
      
        cursor: pointer;
      }
      .img_aj img{
        width: 65px;
        height: 65px;
        border-radius: 50px;
      }
        .name-student{
      margin-top:30px;
      margin-left:20px;
      color:#071952;
      
      }
       .email-student{
      margin-top:-20px;
      margin-left:59%;
      color:#071952;
      position:absolute;
      
      }
      /*-------------------attendance-report---------------------------*/
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
        height: 75vh;

        background-color: #35A29F;
        margin: 12px;
        border-radius: 8px;
        overflow: scroll;

      }
   
        /*------------------------********************************-------------------------*/
       

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
  
	/*------------------logout process----------------------------------*/
	.dropbtn1 {
  margin-left:-5px;
  width:75px;
  height:75px;
  border-radius:60%;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
#samllresize{
 width: 80px;
height: 80px;
}

.dropbtn:hover, .dropbtn:focus {

}
.dropdown1{
position:relative;
display:inline-block;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color:#071952;
  padding: 15px 40px;
  margin-left:-160px;

  border-radius:10px;
  overflow: auto;
  box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}

.dropdown-content1 a {
  color:white;
  padding: 15px 30px;
  text-decoration: none;
  font-weight:bold;
  display: block;
}

.dropdown-content1 a:hover {color: red}

.show {display:block;}

#date{
text-align:center;
color: white;
            font-weight:bold;
}

#timetable2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 5px;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
        background-image:linear-gradient(rgba(245, 70, 66, 0.75),rgba(8, 83, 156, 0.75)),url(time.webp);
        background-size:cover;
        /* opacity:0.9; */
      }
      #timetable2 th{
        font-weight: bolder;
        background-color: #071952;
        color: #97FEED;
      }
     #timetable2 table td,th{
        border: 2px solid black;
        width: 65vw;
        text-align: left;
        padding: 20px;
        text-align:center;
      }
      .dashimg{
        width:35px;
        height:35px;
        position:absolute;
        margin-left:-50px;
        margin-top:6px;
    }
    .attimg{
        width:35px;
        height:35px;
        position:absolute;
        margin-left:-45px;
        margin-top:6px;
    }
    .imgstu{
        width:90px;
        height:80px;
        margin:10px;
        box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
    }
    #imgrfid{
      width:120px;
      height:140px;
      float:right;
      margin:10px;
      box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }
    #logimg{
        height:50px;
        width:50px;
        position:absolute;
        margin-left:-55px;
        margin-top:-10px;
    }
 
        /*------------------------********************************-------------------------*/

</style>
</head>
<body>

<!-------------------------------------------------body-container(start)---------------------------------------------------->

    <div class="body-container">

        <!---------------------side navebar details(start)--------------------------->
        <div class="navebar">
                <div class="aj">
                    <h1 style="color:#52616B; margin-top: 20px;  margin-right: 10px; text-decoration: none; text-align: center;"><a href="https://www.anjaconline.org/" style="color: white; text-decoration: none;  text-shadow: 2px 2px 4px #000000;">ANJAC</a></h1>

                    <br><hr>
                </div>
                <div class="img-name">
                    <div class="img">
        		<?php
			 include 'dbconnection.php';
			$sql = "SELECT * FROM student WHERE name = '{$_SESSION['user_name']}'";
			 $query = mysqli_query($connec,$sql);
			 $num = mysqli_num_rows($query);
			 if($num>0){
				while($result=mysqli_fetch_assoc($query)){
				    $img = $result['image'];
            $rfid =$result['id'];
            $rollno = $result['rollno'];
            $gender = $result['gender'];
            $pass = $result['pass']; 
				     }
				   }
			  	    echo "<img id='resize' src='upload/{$img}'>";
			?>	   
                    </div>
                      <div class="name">
                    		<?php
                    		echo "<h4>".$_SESSION['user_name']."</h4>";
                    		echo "<h5>".$_SESSION['user_email']."</h5>";
                    	?>
                    </div>
                </div>

             <!-------------------navebar details link tages--------------------->
                <div class="link"><br><br>
                    <div class="sub-link1">
              		 <a id="dash" href="#dashboard"><img src="dash1.png" class="dashimg">Dashboard</a><br><br><br>
                    </div>
                    <div class="sub-link1">
                        <a id="attend"href="#attendance" style="margin-left:40px;"><img src="attendance2.png" class="attimg">My Attendance</a><br><br><br>
                    </div>
                    <div class="sub-link1">
                        <a id="attend"href="#timetable"><img src="timetable.webp" class="attimg">TimeTable</a>
                    </div>
                </div>
        </div>
            <!-----------------------------sidenavebar details (end)--------------------------------->

    <!---------------------------------------------------------------------------------------------------------------->

        <!-------------------------------over all dashboard container details(start)-------------------------------->


        <div class="dash-details">
            <!--------header details(start)----->
            <div class="header" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
              <div class="name-student">
            	<?php
                    		echo "<h3>welcome, ".$_SESSION['user_name']."</h3>";
                    	?>
             </div>
              <div class="email-student">
            	<?php
                    		echo "<h5>".$_SESSION['user_email']."</h5>";
                    	?>
             </div>
                  <div class="img_aj">
                    <button id="mybtn1" class="dropbtn1">  <?php echo "<img id='smallresize' src='upload/{$img}'onclick='logout()' >";?> </button>
                    <div id="myDropdown1" class="dropdown-content1">
			              <a href="student-logoutprocess.php"><img src="logout.png" id="logimg" >Logout</a>
			              <a href="slogin.php"><img src="user.png" id="logimg" >Switch User</a>

		              </div>
		</div>
            </div>
            <!------header details(end)----->



            <!------------------------- dashboard1 details(start)------------------>

            <div class="dashboard-container">
                <!-------dashboard details(start)-------->
                <div id="dashboard">
                    <div id="dashboard1">
                        <h4 style="margin-left: 20px;">Dashboard</h4>

                    </div>
                    <div class="dashboard2">
                      <div class="tagdetails">
                        <h3 style="text-align: center; margin:5px; color: white;">Rfid Tag Details</h3>
                        <?php echo "<img id='imgrfid' src='upload/{$img}'>"; ?>
                        <table style="border:0; cellspacing:0;">
                                    <tr>
                                        <td style="padding:4px; color:white;font-weight:bold;;">Rfid No : </td>
                                        <td style="padding:4px;color:#97FEED; font-weight:bold;"> <?php echo $rfid; ?> </td>
                                        
                                    </tr>
                                    <tr>
                                    <td style="padding:4px; color:white;font-weight:bold;"> Name : </td>
                                    <td style="padding:4px;color:#97FEED; font-weight:bold;""> <?php echo $_SESSION['user_name'] ?></td>

                                    </tr>
                                    <tr>
                                    <td style="padding:4px;  color:white;font-weight:bold;">Roll No :</td>
                                    <td style="padding:4px;color:#97FEED; font-weight:bold;""><?php echo $rollno; ?></td>


                                    </tr>
                                    <tr>
                                    <td style="padding:4px; color:white;font-weight:bold;"> Email Id : </td>   
                                    <td style="padding:4px;color:#97FEED; font-weight:bold;"> <?php echo $_SESSION['user_email'] ?></td>

                                   

                                    </tr>
                                    <tr>
                                    <td style="padding:4px;color:white;font-weight:bold;;"> Gender : </td>   
                                    <td style="padding:4px; color:#97FEED; font-weight:bold;""> <?php echo $gender; ?></td>

                                     
                                   

                                    </tr>
                                    <tr>
                                    <td style="padding:4px; color:white;font-weight:bold;"> Password : </td>   
                                    <td style="padding:4px; color:#97FEED; font-weight:bold;""> <?php echo $pass; ?></td>

                                     
                                   

                                    </tr>
                                    </table>
                      </div>
                      <div class="todaystatus">
                        <h3 style="text-align: center;  margin:5px; color: white;">Today Attendance Status</h3>
                        <?php 
                        $date = date("Y-m-d");
                        // echo $date;
                        $sql1 = "SELECT * FROM attendance where name = '{$_SESSION['user_name']}' and date = '$date'";
                        $query1 = mysqli_query($connec, $sql1);
                        $num1 = mysqli_num_rows($query1);
                        if($num1 > 0){
                        while($result1=mysqli_fetch_assoc($query1)){
                          $_SESSION['user_period1'] = $result1['period1'];
                          $_SESSION['user_period2'] = $result1['period2'];
                                           $_SESSION['user_period3'] = $result1['period3'];
                                           $_SESSION['user_period4'] = $result1['period4']; 
                                           $_SESSION['user_period5'] = $result1['period5'];
                        }
                      }
?>
                          <h2 style="float:right;  margin-left:340px; position:absolute; margin-top:30px; color:#97FEED; "><?php echo date("D" ,strtotime($date)); ?></h2>
                          <h2 style="float:right; margin-left:340px; margin-top:58px; position:absolute; color:white; "><?php echo $date; ?></h2>

                        <table style="border:0; cellspacing:0;">
                                    <tr>
                                        <td style="padding:5px; color:#97FEED; font-weight:bold;  margin:5px; width:160px;">First Hour</td>
                                        <td style=" color:white; font-weight:bold; ">:</td>
                                        <td style="padding: 5px; color: #0B666A; font-weight: bold; <?php echo ($_SESSION['user_period1'] == 'present' ? 'font-size: 20px; color: #00ff00;' : 'font-size: 20px; color: red;'); ?>">
    <?php echo ($_SESSION['user_period1'] == 'present' ? '<i class="fa fa-check-square" style="font-size: 20px; color: #00ff00;"></i>' : '<i class="fa fa-close" style="font-size: 20px; color: red;"></i>') . $_SESSION['user_period1']; ?>
</td>

                                        
                                    </tr>
                                    
                                    <tr>
                                    <td style="padding:5px;color:#97FEED; font-weight:bold; margin:5px;"> Second Hour  </td>
                                    <td style=" color:white; font-weight:bold; ">:</td>

                                    <td style="padding: 5px; color: #0B666A; font-weight: bold; <?php echo ($_SESSION['user_period2'] == 'present' ? 'font-size: 20px; font-weight:bold; color:#00ff00;' : 'font-size: 20px; color: red;'); ?>">
    <?php echo ($_SESSION['user_period2'] == 'present' ? '<i class="fa fa-check-square" style="font-size: 20px; color: #00ff00;"></i>' : '<i class="fa fa-close" style="font-size: 25px; color: red;"></i>') . $_SESSION['user_period2']; ?>
</td>

                                    </tr>
                                    <tr>
                                    <td style="padding:5px;  color:#97FEED; font-weight:bold; margin:5px;">Third Hour </td>
                                    <td style=" color:white; font-weight:bold; ">:</td>

                                    <td style="padding: 5px; color: #0B666A; font-weight: bold; <?php echo ($_SESSION['user_period3'] == 'present' ? 'font-size: 20px; color: #00ff00; font-weight:bold;'  : 'font-size: 20px; color: red;'); ?>">
    <?php echo ($_SESSION['user_period3'] == 'present' ? '<i class="fa fa-check-square" style="font-size: 20px; color: #00ff00;"></i>' : '<i class="fa fa-close" style="font-size: 25px; color: red;"></i>') . $_SESSION['user_period3']; ?>
</td>

                                    </tr>
                                    <tr>
                                    <td style="padding:5px; color:#97FEED; font-weight:bold; margin:5px;"> Fourth Hour  </td>   
                                    <td style=" color:white; font-weight:bold; ">:</td>

                                    <td style="padding: 5px; color: #0B666A; font-weight: bold; <?php echo ($_SESSION['user_period4'] == 'present' ? 'font-size: 20px; color: #00ff00;' : 'font-size: 20px; color: red;'); ?>">
    <?php echo ($_SESSION['user_period4'] == 'present' ? '<i class="fa fa-check-square" style="font-size: 20px; color: #00ff00;"></i>' : '<i class="fa fa-close" style="font-size: 25px; color: red;"></i>') . $_SESSION['user_period4']; ?>
</td>
                                   

                                    </tr>
                                    <tr>
                                    <td style="padding:5px; color:#97FEED; font-weight:bold; margin:5px;"> Fifth Hour  </td>   
                                    <td style=" color:white; font-weight:bold; ">:</td>

                                    <td style="padding: 5px; color: #0B666A; font-weight: bold; <?php echo ($_SESSION['user_period5'] == 'present' ? 'font-size: 20px; color: #00ff00;' : 'font-size: 20px; color: red;'); ?>">
    <?php echo ($_SESSION['user_period5'] == 'present' ? '<i class="fa fa-check-square" style="font-size: 20px; color: #00ff00;"></i>' : '<i class="fa fa-close" style="font-size: 25px; color: red;"></i>') . $_SESSION['user_period5']; ?>
</td>

                                     
                                   

                                    </tr>
                                    
                                    </table>
                      </div>
                    </div>
                    <div class="dashboard3">
                           <div class="present">
                            <div class="present1">
                            <img src="absent1.png" alt="presenttoday" class="imgstu">
                            </div>
                            <div class="present2">
                            <h3 style="text-align: center;">DAY PRESENT</h3>
                            <?php
                              $sql1 = "SELECT * FROM attendance where name = '{$_SESSION['user_name']}'";
                              $query1 = mysqli_query($connec, $sql1);
                        $num1 = mysqli_num_rows($query1);
                        if($num1 > 0){
                          $status = array(); // Initialize an empty array to store status values
                        while($result1=mysqli_fetch_assoc($query1)){
                          $status[] =$result1['status'];
                        }
                        // var_dump($status);
                        // print_r($status);
                        $dayPresent = array_sum($status);
                       echo "<h1 style='margin-left:50px; margin-top:20px;'>".$dayPresent."</h1>";
                      }
                            ?>
                            </div>
                           </div>
                           <div class="absent">
                           <div class="absent1">
                           <img src="absent2.png" alt="presenttoday" class="imgstu">
                            </div>  
                            <div class="absent2">
                            <h3 style="text-align: center;">DAY ABSENT</h3>
                            <?php
                            $dayAbsent = $num1 - $dayPresent;
                       echo "<h1 style='margin-left:50px; margin-top:20px;'>".$dayAbsent."</h1>";
                            ?>
                            </div>
                           </div>
                           <div class="hours">
                           <div class="hours1">
                           <img src="hours.png" alt="presenttoday" class="imgstu">
                            </div>  
                            <div class="hours2">
                            <h3 style="text-align: center;margin:5px;">WORKING DAYS</h3>
                            <h1 style="text-align: center;margin-top:-10px;">90</h1>
                            </div>
                           </div> 
                    </div>
                </div>

    

                <!-------------attendance details(start)-------------->

                <div id="attendance">
                    <div id="attendance1">
                    <h4 style="margin-left: 20px;">My Attendance</h4>
                    </div>
                   <!-- <h3 style="margin-left: 10px;">Attendance report</h3><br><br>-->
                   <form method="POST" action="student-attendancereport.php">
                    <div id="attendance2">
                      
                            
                            	
				            <div id="date1">
                            		<h2 style="color:white;">Select Start Date</h2><br>
                            		<input type="date" style="background-color:#071952; color:white; padding:13px 28px; border:none; outline:none; box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;" name="start_date" required />
                        	</div>
                        	<div id="date2">
                            		<h2 style="color:white;">Select End Date</h2><br>
                            		<input type="date" style="background-color:#071952; color:white; padding:13px 28px; border:none; outline:none; box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;" name="end_date" required/>
                        	</div>
                        	<div id="get-report">
                            		<button id="report" name="report">Get Report</button>
                        	</div>
                        	
        

                    </div>
                  <form>
                </div>
   
                <!-------------attendance details(end)-------------->
                
                <!-------------timetable details(start)-------------->
			<div id="timetable">
                    <div id="timetable1">
                    <h4 style="margin-left: 20px;">Student Timetable</h4>
                    </div>
                    <div id="timetable2">
                        <div id="timetable-bca">
                            <h3 style="margin-left: 10px;">View Timetable and attendance report</h3>
                            
  			<table id="table1">
                            <tr>
                                <th id="date">Date</th>
                                <th id="date">10-11</th>
                                <th id="date">11-12</th>
				                        <th id="date">12-1</th>
				                        <th id="date">2-3</th>
				                        <th id="date">3-4</th>
				
                            </tr>
                            <tr>	
                           	<td id="date">Monday</td>
                                <td id="date">Mobile Computing</td>
                                <td id="date">Computer Network</td>
				                        <td id="date">Mobile Computing</td>
				                        <td id="date">Soft Skill</td>
				                        <td id="date">Computer Network</td>
			                    </tr>
			                    <tr>	
                           	<td id="date">Tuesday</td>
                            <td id="date">SEC</td>
                            <td id="date">Elective</td>
				                    <td id="date">Project LAB</td>
				                    <td id="date">Computer Network</td>
				                    <td id="date">Mobile Computing</td>
			                    </tr>
			                    <tr>	
                           	<td id="date">Wednesday</td>
                            <td id="date">Computer Network</td>
                            <td id="date">Project LAB</td>
				                    <td id="date">Elective</td>
				                    <td id="date">Mobile Computing</td>
				                    <td id="date">MC LAB</td>
			                     </tr>
			                    <tr>	
                           	<td id="date">Thursday</td>
                            <td id="date">Soft Skill</td>
                            <td id="date">Computer Network</td>
				                    <td id="date">Mobile Computing</td>
				                    <td id="date">Project LAB</td>
				                    <td id="date">Elective</td>
			                    </tr>
			                    <tr>	
                           	<td id="date">Friyday</td>
                            <td id="date">Project LAB</td>
                            <td id="date">Project LAB</td>
				                    <td id="date">MC LAB</td>
				                    <td id="date">SEC</td>
				                    <td id="date">SEC</td>
			                    </tr>
			                    <tr>	
                           	<td id="date">Saturady</td>
                            <td id="date">MC LAB</td>
                            <td id="date">Computer Network</td>
				                    <td id="date">Mobile Computing</td>
				                    <td id="date">Elective</td>
				                    <td id="date">Computer Network</td>
			                    </tr>
			                  </table>
                        </div>
           


                    </div>
                </div>
        </div>
		<!-------------timetable details(end)-------------->
           
        </div>
	 
        <!----------------------------over all dashboard container details(end)------------------------------>
    </div>
        <!--------------------------------------overall body-container details(end)------------------------------------>


  <script>
 	document.getElementById("mybtn1").onclick = function(){
			myFunction()
			};
		 function myFunction()
			{
			document.getElementById("myDropdown1").classList.toggle("show");
			}

 </script>
   
    
</body>
</html>
