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

	
			
			$_SESSION["login_user"] = $myusername;

	
		
		header("location:compose.php");
	 }else {

		header("location:login.php");
	 }







}






?>

<?php
include "index-header.php";

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
	

<div class="container mt-5">
	
	<form class="well form-horizontal" action="" method="post"  id="contact_form">
		<fieldset>
		
		<!-- Form Name -->
		<legend><center><h2><b> فرم ورود  </b></h2></center></legend><br>
		
		
		
		
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-8 control-label">اسم کاربری </label>  
		<div class="col-md-12 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="username" placeholder="اسم کاربری" class="form-control"  type="text">
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-8 control-label" >رمز عبور </label> 
			<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input name="password" placeholder="رمز عبور" class="form-control"  type="password">
			</div>
		</div>
		</div>
		
		

		
		<!-- Button -->
		<div class="form-group">
		<label class="col-md-6 "></label>
		<div class="col-md-7" ><br>
			<button type="submit" name="login" class="btn btn-warning"> <span class="glyphicon glyphicon-send"> ورود</span></button>
		</div>
		
		
		
		</div>
		
		</fieldset>
	</form>

	

</div><!-- /.container -->



<?php include "index-footer.php"; ?>
		
</body>
</html>

