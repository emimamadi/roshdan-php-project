<?php



include "db.php";

echo "<br>";

require "auth.php";




if(!empty($_POST['title'])){


	$title=$_POST['title'];
	$author=$_SESSION["login_user"];
	// $_SESSION["author"]= $author;
	$category=$_POST['category'];
	$content=$_POST['content'];
	$date=$_POST['date'];
	
	
	$stmt = $conn->prepare("INSERT INTO post (title, author, category,content,date) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $title, $author, $category,$content,$date);
	
	if($stmt->execute()){

		
		
	  	header("location:index.php");
	  

	}else {
		
		$msg="error";
	}

	echo "New records created successfully";
	
	$stmt->close();
	$conn->close();

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
	<style>
	
	</style>
	<title>سایت جدید | نوشتن مطلب جدید  </title>
</head>
<body dir="ltr">
	





<div class="container mt-5">




	<form class="well form-horizontal" action="" method="post"  id="contact_form" style="margin:0 auto">
		<fieldset>
		
		<!-- Form Name -->
		<legend><center><h2><b> پست جدید </b></h2></center></legend><br>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-12 control-label">عنوان</label>  
		<div class="col-md-12 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="title" class="form-control"  type="text">
			</div>
		</div>
		</div>


		<!-- Text input-->
		<div class="form-group">
		<label class="col-md-12 control-label">دسته </label>  
		<div class="col-md-12 inputGroupContainer">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input name="category"  class="form-control"  type="text">
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-12 control-label" > متن </label> 
			<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<textarea rows="10" cols="200" name=content></textarea>
		</div>
		</div>
		
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 ">تاریخ  </label>  
		<div class="col-md-12 " style="direction:ltr">
		<div class="input-group">
		
		<input  name="date" class="form-control"  type="date">
			</div>
		</div>
		</div>
		
	
		
	
		
	
		
		

		
		<!-- Button -->
		<div class="form-group">
		<label class="col-md-2 control-label"></label>
		<div class="col-md-12"><br>
			<button type="submit" name=register class="btn btn-warning" > <span class="glyphicon glyphicon-send"> اضافه کردن</span></button>
		</div>
		</div>
		
		</fieldset>
	</form>

</div><!-- /.container -->



	
</body>
</html>

<?php include "index-footer.php"; ?>
