

<?php

session_start();

include "db.php";










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/post-style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>


<!----------------------------------------------------header------------------------------------------------------->



<?php include "index-header.php"; ?>




<!----------------------------------------------------header------------------------------------------------------->


<?php




?>




<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->

                       <header class="mb-4" style="height:10vh;">

                        <?php  
                        
                       
                        
                        if(!empty($_GET['category_id']) ){

                        $category_id = $_GET['category_id'];     

                        $qry = mysqli_query($conn,"select * from post where category='$category_id' order by id desc");

                        while($row=mysqli_fetch_array($qry)){

                        ?>



                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?php echo $row["title"] ; ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2"><?php echo "در تاریخ ".$row["date"]." نگارش با  ".$row["author"];?></div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light mb-2" href="category.php?category_id=<?php echo $row["category"];?>"><?php echo $row["category"]; ?></a>




                        <?php  if(!empty($_SESSION["login_user"])&& !empty($row["author"])){

                                    if($_SESSION["login_user"]==$row["author"]){

                        printf('<a class="badge bg-secondary text-decoration-none link-light"  href="edit.php?id=%d"> ویرایش </a>',$row["id"]);   
                                }
                                
                            }
                        ?>



                 
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo  $row["content"]; ?></p>
                        </section>
                            <?php
                            }
                        }
                            ?>
                        
                        

                     

                    </article>

                  
                
        </div>
                <!-- Side widgets-->
                
    </div>
</div>



<!----------------------------------------------------footer------------------------------------------------------->






<?php include "index-footer.php"; ?>


<!----------------------------------------------------footer------------------------------------------------------->

    
</body>
</html>

