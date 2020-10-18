# SimpleLogin
Simple login with PHP
<!DOCTYPE html>
<html>
<head>
<title>Aryak Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type ="text/css">
	#main{
		background-color:#333;
		width:600px;
		height:300px;
		border-radius:30px;
	}
	h1{
		color:white;
		background-color:black;
		border-top-right-radius:30px;
		border-top-left-radius:30px;
	}
	.text{
		background-color:#333;
		color:white;
		width:250px;
		font-weight:bold;
		border:none;
		text-align:center;
	}
	.txt:focus{
		outline:none;
	}
	hr{
		width:250px;
		margin-top:0px!important;
	}
	#sub{
	width:250px;
	height:30px;
	background-color:#5f5;
	border:none;
	
	}
	</style>
    
</head>
<body>
      <center>
    <div id ="main">
	<h1>SIMPLE LOGIN </h1>
	<form method ="POST">
	Username<imput type ="text" name ="username " class="text" autocomplete ="off"
	required>
	password<input type="password"name="password" class="text" required>
	<input type ="Submit "name="submit" id="sub">
	</form>
	</div>
</body>

</html>
<?php
   mysql_connect("localhost","root","password");
   mysql_select_db("simplelogin");

if (isset($_POST['submit'])) {

    $un = $_POST['username'];
    $pw = $_POST['password'];
	$sql=mysql_query("select password from user where username ='$un'");
	if($row=mysql_fetch_array($sql)){
		if($pw==$row[_'password_']){
			header("location:admin.html");
			exit();
		}
		else
		 echo"<script>alert('Invalid password')</script>";
	}
	else
		echo"<script>alert('Invalid username')</script>";

    
    }


?>

