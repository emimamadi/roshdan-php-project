<?php

session_start();

include "db.php";

echo "<br>";




?>






<!----------------------------------------------------header------------------------------------------------------->



<?php include "index-header.php"; ?>




<!----------------------------------------------------header------------------------------------------------------->





       <!--- slider -->
        <div id="slider" class="owl-carousel owl-theme">
            <div class="item item1">
                <div class="card animated bounceInRight">
                    <figure class="figure">
                        <img src="./img/Layer 4.png" class="user-img" alt="user">
                        <figcaption class="card-text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="item item2">
                <div class="card animated bounceInRight">
                    <figure class="figure">
                        <img src="./img/Layer 4.png" class="user-img" alt="user">
                        <figcaption class="card-text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="item item3">
                <div class="card animated bounceInRight">
                    <figure class="figure">
                        <img src="./img/Layer 4.png" class="user-img" alt="user">
                        <figcaption class="card-text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </header>
    <!-- main -->
    <main>







<!--//////////////////////////////////////////////////////////////////////////////////////////// -->








        <!-- line1 -->
        <section id="line1">
            
            <div class="container">

                    
        <?php 

                    $sql = "SELECT * FROM post ORDER BY id DESC LIMIT 4";

                    $result = mysqli_query($conn,$sql);


                    if ($result->num_rows > 0) {
                        
                        while($row = $result->fetch_assoc()) {

                       
        ?>

               <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 4-1.png" alt="user">
                        <div class="tag tag-tech">
                           <p><?php echo $row["category"];?></p>
                        </div>
                    </figure>
                    <h6 class="card-headline">

                   
                    <a href="post.php?id=<?php echo $row["id"];?>"><?php echo $row["title"];?></a>
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="post.php?id=<?php echo $row["id"];?>">
                            <?php echo $row["author"];?>
                            </a>
                        </div>
                        <div class="date">
                            <p>
                            <?php echo $row["date"];?>
                            </p>
                        </div>
                    </div>
                </div>

        <?php }}  ?>



            </div>
        </section>










        <!-- call to action -->
        <section id="call-to-action">
            <div class="container">
                <div class="call-card">
                    <div class="call-header wow fadeInRight">
                        <span></span>
                        <h6>
                            لورم ایپسوم متن ساختگی
                        </h6>
                    </div>
                    <div class="call-main">
                        <h4>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                        </h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                        </p>
                    </div>
                    <a href="#" class="call-btn" type="submit">
                        شروع کن!
                    </a>
                </div>
            </div>
        </section>
        <!-- line2 -->
        <section id="line2">
            <div class="container">
                <div class="top-card">
                    <figure>
                        <img src="./img/Layer 11.png" alt="">
                        <figcaption class="figure-text">
                            <h4>
                                لورم ایپسوم متن ساختگی
                            </h4>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.
                            </p>
                        </figcaption>
                    </figure>
                    <div class="card-footer">
                        <div class="tag tag-trips">
                            <p>سفرها</p>
                        </div>
                        <div class="author-date">
                            <div class="author">
                                <a href="#">
                                    علی پیوندی
                                </a>
                            </div>
                            <div class="date">
                                <p>
                                    20 دی 1399
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 6.png" alt="user">
                        <div class="tag tag-tech">
                            <p>فن‌آوری</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 7.png" alt="user">
                        <div class="tag tag-people">
                            <p>فن‌آوری</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 5.png" alt="user">
                        <div class="tag tag-nature">
                            <p>فن‌آوری</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 10.png" alt="user">
                        <div class="tag tag-fashion">
                            <p>فن‌آوری</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 9.png" alt="user">
                        <div class="tag tag-trips">
                            <p>فن‌آوری</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 8.png" alt="user">
                        <div class="tag tag-trips">
                            <p>فن‌آوری</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- line1 -->
        <section id="line1">
            <div class="container">
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 4-1.png" alt="user">
                        <div class="tag tag-tech">
                            <p>فن‌آوری</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <figure class="figure">
                        <img src="./img/Layer 4-2.png" alt="user">
                        <div class="tag tag-trips">
                            <p>سفرها</p>
                        </div>
                    </figure>
                    <h6 class="card-headline">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </h6>
                    <div class="author-date">
                        <div class="author">
                            <a href="#">
                                علی پیوندی
                            </a>
                        </div>
                        <div class="date">
                            <p>
                                20 دی 1399
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

           <!-- newsletter -->
           <section id="newsletter">
            <div class="container">
                <h3>خبرنامه</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </p>
                <form action="" class="news-form">
                    <a href="#" class="email-btn" type="submit">
                        عضویت
                    </a>
                    <input class="email-box" type="email" placeholder="" required>
                </form>
            </div>
        </section>
    </main>





<!----------------------------------------------------footer------------------------------------------------------->




<?php include "index-footer.php"; ?>



<!----------------------------------------------------footer------------------------------------------------------->





    