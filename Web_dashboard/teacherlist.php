<?php session_start();
if(empty($_SESSION['password'])):
    header('Location:alogin.php');
endif;
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
  /* text-align: center; */
  background-color:white;
  /* width:700px; */
  height:500px;
  margin:15px;
  /* margin-left:350px;
  margin-top:50px; */
  display:grid;
  grid-template-columns:1fr 1fr 1fr;
}
.bca, .mca, .bsc-cs, .bba, .bcom, .chemistry{
           background-color: white;
           margin: 30px;
           width:250px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
           box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        } 

        .bca a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }

        .mca a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }
        .bsc-cs a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }
        .bba a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }
        .bcom a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }
        .chemistry a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }
        .bca a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        .mca a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        .bsc-cs a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        .bba a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        .bcom a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        .chemistry a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
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
        margin-left:5px;
        margin-top:18px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
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

	<a href="admin.php#dashboard"><span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"><img  id="cimg" src="cancal.jpg"></span></a>
                 <div class="container">
                      <div class="bca">
                      <h3 style="margin-left: 10px;">DEPARTMENT OF BCA</h3><br>
                            <a href="#" id="report1" >BCA</a> 
                      </div>
                      <div class="mca">
                      <h3 style="margin-left: 10px;">DEPARTMENT OF MCA</h3><br>
                            <a href="#mca-attendancerport" id="report1" >MCA</a>
                      </div>
                      <div class="bsc-cs">
                      <h3 style="margin-left: 10px;">DEPARTMENT OF BSc CS </h3><br>
                            <a href="#msc-attendancereport" id="report1">BSc CS</a>
                      </div>
                      <div class="bba">
                      <h3 style="margin-left: 10px;">DEPARTMENT OF BBA</h3><br>
                            <a href="#bba-attendancereport" id="report1">BBA</a>
                      </div>
                      <div class="bcom">
                      <h3 style="margin-left: 10px;">DEPARTMENT OF BCOM</h3><br>
                            <a href="#bcom-attendancereport" id="report1">BCOM</a>
                      </div>
                      <div class="chemistry">
                      <h3 style="margin-left: 4px;">DEP OF CHEMISTRY</h3><br>
                            <a href="#che-attendancereport" id="report1">CHEMISTRY</a>
                      </div>

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

