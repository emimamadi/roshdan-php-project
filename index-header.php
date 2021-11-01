<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Document</title>
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/resopnsive.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->


    <style>

    .dokmeh{
        background-color:lightblue;
        color:white;
        margin-left:5px;
        border:1px solid lightblue;
        border-radius:5px;
    }
    </style>


</head>



<body>
    <!-- scroll-up -->
    <button id="scroll-up">
        <i class="fa fa-2x fa-chevron-up" aria-hidden="true"></i>
    </button>
    <!-- header -->
    <header>
        <!-- nav -->
        <nav id="nav">
            <div class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navbar">
            <li class="nav-item">
                    <a href="index.php" style="color:purple">صفحه اصلی</a>
                </li>
                <li class="nav-item submenu">
                    <a href="#">درباره‌ما</a>
                    <ul class="dropdown">
                        <li class="dropdown-item"><a href="#">آیتم 1</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 2</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#">همکاری با‌ما</a>
                </li>
                <li class="nav-item submenu">
                    <a href="#">تماس ‌با‌ما</a>
                    <ul class="dropdown">
                        <li class="dropdown-item"><a href="#">آیتم 1</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 2</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 3</a></li>
                    </ul>
                </li>
                <li class="blog-item blog-item1 submenu">
                    <a href="#">طبیعت</a>
                    <ul class="dropdown">
                        <li class="dropdown-item"><a href="#">آیتم 1</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 2</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 3</a></li>
                    </ul>
                </li>
                <li class="blog-item">
                    <a href="#">مردم</a>
                </li>
                <li class="blog-item">
                    <a href="#">سفرها</a>
                </li>
                <li class="blog-item submenu">
                    <a href="#">حیوانات</a>
                    <ul class="dropdown">
                        <li class="dropdown-item"><a href="#">آیتم 1</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 2</a></li>
                        <li class="dropdown-item"><a href="#">آیتم 3</a></li>
                    </ul>
                </li>
                <li class="blog-item">
                    <a href="#">سبک</a>
                </li>
                <li class="blog-item">
                    <a href="#">فن‌آوری</a>
                </li>


                <li>
                  
                  <a href="#"  class="badge bg-secondary"> <?php 
                   if(!empty($_SESSION["login_user"]))
                  {echo "سلام " .$_SESSION["login_user"];}?> </a>
                  
                  </li>


                <form action="" class="search">
                    <input class="search-box" type="search" placeholder="جستجو" style="width:80px">
                    <a href="#" class="search-btn" type="submit">
                        <img src="./img/Layer 2.png" alt="search-icon">
                    </a>
                </form>
           



               

                
                
                <?php if(!isset($_SESSION["login_user"])){


                    echo '<button class="dokmeh "><a href="register.php">ثبت نام </a></button>';
                    echo '<button class="dokmeh "><a href="login.php"> ورود  </a></button>';

               }
               else{
                    echo '<button class="dokmeh "><a href="compose.php"> نوشتن پست  </a></button>';
                     echo '<button class="dokmeh "><a href="logout.php"> خروج  </a></button>';
               }
                ?>


               



               






            </ul>
        </nav>