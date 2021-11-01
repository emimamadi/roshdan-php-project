<?php
session_start();

include "db.php";

echo "<br>";

if(!empty($_POST['username'])&&!empty($_POST['password'])){


	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql = "INSERT INTO register(fullname, username, password)
	VALUES ('$fullname', '$username', '$password')";
	
	// mysqli_query($conn, $sql);
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	  
	  mysqli_close($conn);
}



   
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//    // username and password sent from form 

//    $myusername = mysqli_real_escape_string($conn,$_POST['fullname']);
//    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
//    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
   
//    $sql = "SELECT id FROM admin WHERE username = '$myusername'";
   
//    $result = mysqli_query($conn,$sql);

//    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
//    $count = mysqli_num_rows($result);
   
//    // If result matched $myusername and $mypassword, table row must be 1 row
	 
//    if($count == 1) {
// 	  session_register("myusername");
// 	  $_SESSION['login_user'] = $myusername;
	  
// 	  header("location: login.php");
//    }else {
// 	  $error = "Your Login Name or Password is invalid";
//    }
// }


// if(isset($_POST['register'])) {

// 	if(!empty($_POST['fullname']) && !empty($_POST['username']) && !empty($_POST['password'])) {

	// var_dump($_POST);

	// echo "<br>";

	// $fullname=$_POST['fullname'];
	// $username=$_POST['username'];
	// $password=$_POST['password'];
	
	// $sql = "INSERT INTO register(fullname, username, password)
	// VALUES ('$fullname', '$username', '$password')";

	// if (mysqli_query($conn, $sql)) {
	// echo "New record created successfully";
	// } else {
	// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	// }
		
	
// 	}
// 	else{
// 		var_dump($_POST);
		
// 	}
		


// }








?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style>
	
	</style>
	<title>Document</title>
</head>
<body>
	

<div class="container">




	<form class="well form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"  id="contact_form" style="margin:0 auto">
		<fieldset>
		
		<!-- Form Name -->
		<legend><center><h2><b>Register Form</b></h2></center></legend><br>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 control-label">Full Name</label>  
		<div class="col-md-4 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="fullname" placeholder="First Name" class="form-control"  type="text">
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 control-label">Username</label>  
		<div class="col-md-4 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="username" placeholder="Username" class="form-control"  type="text"  value="<?php echo $username; ?>">
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 control-label" >Password</label> 
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
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name=register class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
		</div>
		</div>
		
		</fieldset>
	</form>

</div><!-- /.container -->



		
</body>
</html>