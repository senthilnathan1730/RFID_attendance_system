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
  box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
  /* width:700px; */
  height:500px;
  /* margin-top:-40px; */
  margin:0px 18px;
  /* margin-left:350px;
  margin-top:50px; */
  display:grid;
  grid-template-columns:1fr 1fr 1fr;
  /* background-image:url(bca.webp); */
  background-image:linear-gradient(rgba(245, 70, 66, 0.75),rgba(8, 83, 156, 0.75)),url(bca.webp);

  background-repeat:no-repeat;
  background-size:cover;
}
.bca{
           background-color: white;
           margin-left: 370px;
           margin-top:70px;
           opacity:0.9;
           /* position:absolute; */
           width:600px;
           height: 50vh;
           padding: 15px;
           border-radius: 10px;
           box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        } 

        .bca button{
          margin-top:80px;
          position:absolute;
          margin-left: 420px;    
          padding: 10px 40px;
          width: 170px;
          border-radius: 15px;
          color: white;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;
          cursor:pointer;
          transition:0.3s;


        }
        .bca button:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
    background-color:#f44336;
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
        margin-top:15px;
        margin-left:-2px;
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
#year{
  padding:10px 60px;
  margin:10px 30px;
  width:200px;
  color: white;
  background-color: #071952;
  border-radius:8px;
  font-weight:bold;
  font-size:15px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#section{
  padding:10px 80px;
  width:200px;
  margin:10px 60px;
  color: white;
  background-color: #071952;
  border-radius:8px;
  font-weight:bold;
  font-size:15px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

}
#goimg{
  width:40px;
  padding:10px;
  position:absolute;
  height:40px;
  margin-top:-17px;
  margin-left:15px;
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

	<a href="admin.php#attendance"><span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"><img  id="cimg" src="cancal.jpg"></span></a>
                 <div class="container">
                      <div class="bca">
                      <h1 style="text-align:center;">DEPARTMENT OF BCA</h1><br>
                      <form action="bcaclassprocess.php" method="post">
                      <select id="year" name="year">
                                            <option value="first">1 Years</option>
                                            <option value="secont">2 Years</option>
                                            <option value="third">3 Years</option>
                                           
                                        </select>

                                        <select id="section" name="section">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                           
                                        </select><br>

                            <button id="report1" name="go">Go<img src="go2.png" id="goimg"></button>
                      </form>

                      </div>
                     

               </div>
 </div>

 <script>
    // function submitedit() {
    //   // Perform form submission logic here

    //   // Set a success flag in local storage
    //   localStorage.setItem('editdata', 'true');
     
    // }
  </script>

</body>
</html>

