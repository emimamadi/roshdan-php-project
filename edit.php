<?php



include "db.php";

echo "<br>";

require "auth.php";











if(isset($_POST['update'])){

	if(!empty($_POST['title'])&& !empty($_GET['id'])){


		$title=$_POST['title'];
		$author=$_SESSION["login_user"];
		$category=$_POST['category'];
		$content=$_POST['content'];
		$date=$_POST['date'];
	
		$id = $_GET['id']; 
	
	
		$sql = "UPDATE post SET title='$title', author='$author ', category='$category' , content='$content' , date='$date' WHERE id=$id";

		var_dump($conn->query($sql));
	
		if ($conn->query($sql) === TRUE) {

		header("location:post.php?id=".$id);

		// echo "Record updated successfully";

		} else {
		
			// echo "Error updating record: " . $conn->error;

		}
	
		



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
	<style>
	
	</style>
	<title>سایت جدید | بروز رسانی مطلب جدید  </title>
</head>
<body>
	





<div class="container mt-5">




	<form class="well form-horizontal" action="" method="post"  id="contact_form" style="margin:0 auto">
		<fieldset>
		
		<!-- Form Name -->
		<legend><center><h2><b>  بروز رسانی </b></h2></center></legend><br>
		
		<!-- Text input-->
		<?php 

		if(!empty($_GET['id'])){

		$id = $_GET['id']; 

		$sql = "SELECT * FROM post WHERE id='$id'";

		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);


		?>
		<div class="form-group">
		<label class="col-md-12 control-label">عنوان</label>  
		<div class="col-md-12 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="title" class="form-control"  type="text" value="<?php echo $row['title']; ?>">
			</div>
		</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		<label class="col-md-12 control-label">دسته </label>  
		<div class="col-md-12 inputGroupContainer">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input name="category"  class="form-control"  type="text"  value="<?php echo $row['category']; ?>">
			</div>
		</div>
		</div>
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-12 control-label" > متن </label> 
			<div class="col-md-12 inputGroupContainer">
			<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<textarea rows="10" cols="200" name=content  > <?php echo $row['content']; ?></textarea>
		</div>
		</div>
		
		
		<!-- Text input-->
		
		<div class="form-group">
		<label class="col-md-4 control-label">تاریخ  </label>  
		<div class="col-md-4 inputGroupContainer">
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input  name="date" class="form-control"  type="date" value="<?php echo $row['date']; ?>">
			</div>
		</div>
		</div>
		
	
		<?php } ?>
	
		
	
		
		

		
		<!-- Button -->
		<div class="form-group">
		<label class="col-md-2 control-label"></label>
		<div class="col-md-10"><br>
			<button type="submit" name=update class="btn btn-warning" > <span class="glyphicon glyphicon-send"> بروز رسانی</span></button>
		</div>
		</div>
		
		</fieldset>
	</form>

</div><!-- /.container -->



	
</body>
</html>