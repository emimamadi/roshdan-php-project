<?php 

session_start();

include "db.php";


if(!empty($_POST['username']) && !empty($_POST['password'])){


	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
	$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
	
	
	$sql = "SELECT username,password FROM register WHERE username = '$myusername' and password = '$mypassword' LIMIT 1 ";

	$result = mysqli_query($conn,$sql);

	// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
	$count = mysqli_num_rows($result);

			
	if($count == 1) {

			// if(empty($_SESSION["login_user"])){

					// session_register("myusername");

					

			// }
			
			$_SESSION["login_user"] = $myusername;

	
		
		header("location:compose.php");
	 }else {

		header("location:login.php");
	 }







}






?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	

<div class="container">
<?php


?>
	<form class="well form-horizontal" action="" method="post"  id="contact_form">
		<fieldset>
		
		<!-- Form Name -->
		<legend><center><h2><b>Login Form</b></h2></center></legend><br>
		
		
		
		
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-8 control-label">Username</label>  
		<div class="col-md-8 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="username" placeholder="Username" class="form-control"  type="text">
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-8 control-label" >Password</label> 
			<div class="col-md-8 inputGroupContainer">
			<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input name="password" placeholder="Password" class="form-control"  type="password">
			</div>
		</div>
		</div>
		
		

		
		<!-- Button -->
		<div class="form-group">
		<label class="col-md-4 control-label offset-6"></label>
		<div class="col-md-6 offset-6" ><br>
			<button type="submit" name="login" class="btn btn-warning"> <span class="glyphicon glyphicon-send"> Submit</span></button>
		</div>
		</div>
		
		</fieldset>
	</form>

	<a href="register.php"><button class="btn btn-primary">Register</button></a>

</div><!-- /.container -->



		
</body>
</html>