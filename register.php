<?php
session_start();

include "db.php";

echo "<br>";

if(!empty($_POST['fullname']) && !empty($_POST['username']) && !empty($_POST['password'])){


	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$stmt = $conn->prepare("INSERT INTO register (fullname, username, password) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $fullname, $username, $password);
	
	if($stmt->execute()){

		
	  header("location: login.php");
	  

	}else {
		
		$msg="error";
	}

	echo "New records created successfully";
	
	$stmt->close();
	$conn->close();

}




	








?>


<?php include "index-header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style>
	
	</style>
	<title>سایت جدید |فرم ثبت نام</title>
</head>
<body>
	

<div class="container mt-5">




	<form class="well form-horizontal" action="" method="POST"  id="contact_form" style="margin:0 auto">
		<fieldset>
		
		<!-- Form Name -->
		<legend><center><h2><b>فرم ثبت نام</b></h2></center></legend><br>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 control-label">نام و نام خانوادگی</label>  
		<div class="col-md-4 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="fullname" placeholder="First Name" class="form-control"  type="text">
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 control-label">نام کاربری </label>  
		<div class="col-md-4 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="username" placeholder="Username" class="form-control"  type="text" >
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 control-label" >رمز عبور </label> 
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input name="password" placeholder="Password" class="form-control"  type="password">
			</div>
		</div>
		</div>
		
		
		<!-- Button -->
		<div class="form-group">
		<label class="col-md-4 control-label"></label>
		<div class="col-md-4"><br>
		<button type="submit" name=register class="btn btn-warning" >ثبت نام  <span class="glyphicon glyphicon-send"></span></button>
		</div> 
		</div>
		
		</fieldset>
	</form>

</div><!-- /.container -->



		
</body>
</html>

<?php include "index-footer.php"; ?>