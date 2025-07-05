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
    body{
      background-color:  #071952;
    }
      /*-------------------attendance-report---------------------------*/
      #bca-attendancereport{
        background-color:white;
        margin:10px;
        border-radius:10px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
      }
      .bca1{
      
            color: #071952;
            width: 200px;
            margin: 15px 10px;
            margin-top:20px;
            border-radius: 5px;
            border-left: 5px solid red;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            /* position:relative; */
        }

      .bca2{
        height: 86vh;
        /* background-color: #35A29F; */
        margin: 18px 0px;
        /* border-radius: 10px; */
        overflow: scroll;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

      }
	 /*-----------------------attendance-table--------------*/
      .bca2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 15px;
        border-radius: 20px;

        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
      }
      .bca2 th{
        font-weight: bolder;
        background-color: #071952;
        color: #97FEED;
      }
     .bca2 table td,th{
        border: 1px solid #071952;
        width: 63vw;
        text-align: left;
        padding: 25px 10px;
      }
       /*-------------------attendance-button----------------*/
        .view{
        padding: 8px;
        color: white;
        background-color: #071952;
        font-size: 15px;
        text-decoration: none;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        transition:0.3s;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
      .view:hover{
        background-color: #97FEED;
        color: black;
        opacity: 0.8;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
       }
      .edit{
        padding: 8px;
        color: white;
        background-color: #0B666A;
        font-size: 16px;
        text-decoration: none;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        transition:0.3s;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;

      }
      .edit:hover{
        background-color: #97FEED;
        color: black;
        opacity: 0.8;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;

      }
      .delete{
        padding: 8px;
        color: white;
        background-color: red;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        transition:0.3s;
        text-decoration: none;
        cursor: pointer;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
       .delete:hover{
        background-color: #97FEED;
        color: black;
        opacity: 0.8;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
      }
      .insert{
        padding: 8px;
        color: #071952;
        background-color: #97FEED;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        width: 150px; 
        margin-left: 20px;
      }
      .insert:hover{
        background-color: red;
        color: white;
      }
      /*------------------------------------delete message display-----------------------------*/
	
#toast-message {
      display: none;
      position: fixed;
      top: 11px;
      right: 40%;
      background-color: red;
      color: #fff;
      padding: 15px;
      border-radius: 5px;
    }
/*------------------------------------edit message display-----------------------------*/
#toast-message1 {
      display: none;
      position: fixed;
      top: 11px;
      right: 40%;
      background-color: #0B666A;
      color: #fff;
      padding: 15px;
      border-radius: 5px;
    }

/*------------------------------------register message display-----------------------------*/
#toast-message2 {
      display: none;
      position: fixed;
      top: 11px;
      right: 40%;
      background-color: #0B666A;
      color: #fff;
      padding: 15px;
      border-radius: 5px;
    }
 
 .form-control{
  position:absolute;
 margin-left:52%;
 margin-top:-42px;
 padding:10px;
 width: 300px;
 background-color:#1f1f1f;
 color:white;
 outline:none;
 border:none;
 box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
 border-radius:20px;
 }
  .form-control:focus{
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
   
 border-radius:50px;
 background-color: #071952;
    
 color:white;
 }
 .search-img{
height:38px;
width:39px;
border-radius:50px;
position:absolute;
margin-left:73%;
 margin-top:-43px;
 box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;


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
        margin-top:-12px;
        position: absolute;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }
   </style>
 </head>
 <body>
<!----------------attendance-bca details(start)-------------------->  
                <div id="bca-attendancereport">
                    <div class="bca1">
                        <h4>Department of BCA</h4>
                         <div id="toast-message"></div>
                         <div id="toast-message1"></div>
                         <div id="toast-message2"></div>
                         <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="search....." ><img src="searchicon.png" class="search-img">
     <a href="bbaclass.php"> <span class="close" title="Close Modal"><img  id="cimg" src="cancal.jpg"></span></a>
                         
                    </div>
                    <div class="bca2" id="bbca">
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
			 include 'dbconnection.php';
			 $sql = 'select * FROM studentbba ORDER BY name ASC';
			 $query = mysqli_query($connec,$sql);
			 $num = mysqli_num_rows($query);
			 if($num>0){
				while($result=mysqli_fetch_assoc($query)){
                           echo '<tr>';
                           echo '<td>'.$result['name'].'</td>';
                           echo '<td>'.$result['id'].'</td>';
                           echo '<td>'.$result['rollno'].'</td>';
                           $result['department'];
                           echo '<td>'.$result['email'].'</td>';
			   echo '<td>'.$result['pass'].'</td>';
                           echo '<td>'.$result['gender'].'</td>';
                                       $result['image'];
                             echo "<td><a href='studentprofile.php?fn=".$result['name']."&ri=".$result['id']."&rn=".$result['rollno']."&em=".$result['email']."&ps=".$result['pass']."&gn=".$result['gender']."&im=".$result['image']."&dep=".$result['department']."'  class='view'>PROFILE</a></td>";
             echo "<td><a href='editprocess.php?fn=".$result['name']."&ri=".$result['id']."&rn=".$result['rollno']."&em=".$result['email']."&ps=".$result['pass']."&gn=".$result['gender']."&dep=".$result['department']."'  class='edit'>EDIT</a></td>";

             echo "<td><a href='deleteprocess.php?id=".$result['id']."&dep=".$result['department']."'  class='delete'>DELETE</a></td>";
                           echo '</tr>';
				}
			}
			?>

                        </table>
                         <div id="search_result"></div>
                    </div>
                </div>
     
	<!------------attendance-bca details(end)------------>
	
	  <script>
    // Check for the success flag in local storage
    const formSubmitted = localStorage.getItem('formSubmitted');

    // If the form was submitted, show a toast message
    if (formSubmitted === 'true') {
      const toastMessage = document.getElementById('toast-message');

      toastMessage.innerHTML = 'Record deleted successfully!';
      toastMessage.style.display = 'block';

      // Clear the success flag from local stor
      localStorage.removeItem('formSubmitted');

      
       setTimeout(() => {
        toastMessage.style.display = 'none';
      }, 5000);
    }
  </script>
  
  <script>
  const  editsubmitted = localStorage.getItem('editdata');
  
  if(editsubmitted === 'true'){
  	const toastMessage1 = document.getElementById('toast-message1');

  	toastMessage1.innerHTML = 'Record Edit Successfully!';
  	toastMessage1.style.display = 'block';

  	
  	localStorage.removeItem('editdata');
  	

  	 setTimeout(() => {
        toastMessage1.style.display = 'none';

      }, 5000);
    }
  
  </script>
  
  <script>
  const  insertsubmitted = localStorage.getItem('insertdata');
  
  if(insertsubmitted === 'true'){
  	const toastMessage2 = document.getElementById('toast-message2');
  	toastMessage2.innerHTML = 'Record insert Successfully!';
  	toastMessage2.style.display = 'block';
  	
  	localStorage.removeItem('insertdata');
  	
  	 setTimeout(() => {
        toastMessage2.style.display = 'none';
        
      }, 5000);
    }
  
  </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#live_search").keyup(function(){
		var input = $(this).val();
		
		if(input != ""){
		    $("#table").css("display","none");
			
		    $.ajax({

			url:"livesearch.php",
			method:"POST",
			data:{input:input},
		
			success:function(data){
				$("#search_result").html(data);
				
				$("#search_result").css("display","block");
		  	}

	             });
		}
		else{
		 $("#search_result").css("display","none");
		 $("#table").css("display","block");
		}
	});
});
	</script>
</body>
</html>
