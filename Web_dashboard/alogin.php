<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background-color: white;
        }
         .signup-container {
            background-color: #fff;
            overflow: hidden;
            width: 320px;
            height:360px;
            text-align: center;
            padding: 20px;
            margin-left: 25%;
            position: absolute;
        }

        .signup-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .signup-form input,
        .signup-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;

            border-radius: 4px;
            box-sizing: border-box;
            box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
	    outline:none;
        }
        .signup-form input:focus{
            background-color:black;
            color:white;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
            font-weight:bold;
        }

        .signup-form .role-dependent-input {
            display: none;
        }

        .signup-form button {
            width: 100%;
            padding: 10px;
            background-color: #071952;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-weight:bold;
            transition:0.3s;
            cursor: pointer;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;

        }

        .signup-form button:hover {
            background-color: #97FEED;
            color: #071952;
        }

        .signup-form p {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .signup-form a {
            color: #2196F3;
            text-decoration: none;
        }

        .signup-form a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            color: #777;
            font-size: 14px;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .google-button {
            background-color: #4285F4;
            color: #fff;
        }
        .img{
            width: 80px;
            border-radius: 50%;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;

        }
	.login-main{
            display: grid;
            grid-template-columns: 1fr 5fr;
        }
         .user-img img{
            height: 38px;
            width: 35px;
            border-radius: 50%;
            background-color: #071952;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }
        .pass-img img{
            height: 38px;
            width: 35px;
            border-radius: 50%;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
	    margin-top: 30px;
        }
	#eyeclose{
		position:absolute;
		width:38px;
		height:33px;
		margin-top:-73px;
		margin-left:210px;
	}
    .container{
        width:700px;
        height:400px;
        margin-top:120px;
        background-color:white;    
        margin-left:350px;    
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;    
        
    }
    .ajimg{
        position:absolute;
        height:400px;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        width:338px;
    }
    </style>
</head>
<body>
  
<div class="container">
    <img src="imgaj2.jpg" class="ajimg" alt="anjac-logo">
    <div class="signup-container">
        <img class="img" src="login1.png">
        <div class="error"></div>
        <h2>Admin LogIn</h2>
	 <div class="login-main">
            <div class="icon">
                <div class="user-img">
                    <img src="user.jpg">
                </div>
                <div class="pass-img">
                    <img src="pass1.png">
            <img src="loginicon.jpg">

                </div>

            </div>
	<form class="signup-form" action="loginprocess.php" method="POST">
            <input type="text" placeholder="User Name" name="user" required><br><br>
            <input type="password" placeholder="Password" name="pass" id="password" required><br><br>
            <!-- <img src="eye-close.avif" id="eyeclose"> -->

            <button type="submit" name="b1">LogIn</button>
        </form>
            </div>
        </div>
</div>
</div>

<script>
let eye-close = document.getElementById("eyeclose");
let password = document.getElementById("passsword");
 eyeclose.onclick = function(){
	if(password.type == "password"){
		password.type = "text";
	}else{
		password.type = "password";
	}
}
</script>
</body>
</html>
