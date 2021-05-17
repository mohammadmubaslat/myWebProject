<?php
include "navBar.php";



$_SESSION['notloged'] = 1 ;



?>



<div id="img_slider">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask flex-center">
                    <div class="img_container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Everything Your <br>
                                    Home Needs</h4>
                                <p>Shop The Best Furniture Online For Your Home <br>
                                    Luxury Living Shop is your best choice is always.</p>
                                <a href="mainProducts.php">BUY NOW</a></div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="mainUI/imgs/png_sofa_cover1.png"
                                                                                 class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="img_container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Everything Your <br>
                                    Home Needs</h4>
                                <p>Shop The Best Furniture Online For Your Home <br>
                                    Luxury Living Shop is your best choice is always.</p>
                                <a href="mainProducts.php">BUY NOW</a></div>

                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="mainUI/imgs/png_bed_cover2.png"
                                                                                 class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">

                <div class="mask flex-center">

                    <div class="img_container">

                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Everything Your <br>
                                    Home Needs</h4>
                                <p>Shop The Best Furniture Online For Your Home <br>
                                    Luxury Living Shop is your best choice is always.</p>
                                <a href="mainProducts.php">BUY NOW</a></div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img
                                        src="mainUI/imgs/png_Bigsofa_cover3.png" class="mx-auto" alt="slide"></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span
                    class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span
                    class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span> </a>
    </div>
</div>

<div id="sections_div">
     <div class="sections_container">
        <div class="row">
            <div class="col-md-4">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://i.imgur.com/7cNRozs.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">FENDI Casa collection</h3>
                            <p class="content-text"><i class="fa fa-map-marker"></i> Italy</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-md-4">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://i.imgur.com/CS59IJZ.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Bentley Home collection</h3>
                            <p class="content-text"><i class="fa fa-map-marker"></i> United Kingdom</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-md-4">
                <div class="content"><a href="#">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://i.imgur.com/LITAKvq.jpg">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Trussardi Casa collection</h3>
                            <p class="content-text"><i class="fa fa-map-marker"></i> Turkey</p>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</div>


<div id="new_products_div">
    <p style="margin-left: 40px; margin-top: 30px ;font-weight: bold;font-size: 22px;">NEW PRODUCTS </p>
    <div class="new_container">
        <div class="row">

            <?php



             $product_query = "SELECT * FROM products where 1";

    $run_query = mysqli_query($con, $product_query);

            $DB_Count= 16 ;

    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id = $row['product_id'];
            $pro_cat = $row['product_cat'];
            $pro_brand = $row['product_brand'];
            $pro_title = $row['product_title'];
            $pro_price = $row['product_price'];
            $pro_image = $row['product_image'];
            $pro_image2 = $row['product_image2'];

            $last_price = $pro_price + 150;

            //     echo $pro_id . '  ' . $pro_cat .'  ' . $pro_brand .'  '.$pro_title ;

            echo "
  <div class='col-md-3 col-sm-6'>
       <div class='product-grid3'>
            <div class='product-image3'>
                                    <a href='productView.php?p=$pro_id'>
                                        <img class='pic-1' src='./mainUI/imgs/$pro_image'>
                                        <img class='pic-2' src='./mainUI/imgs/$pro_image2'>
                                    </a>
                                    <ul class='social'>
                                        <li><a href='productView.php?p=$pro_id'><i class='fa fa-shopping-bag'></i></a></li>
                                        <li><a pid='$pro_id' id='product' href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                    </ul>
                                    <span class='product-new-label'>New</span>
                                </div>
                                <div class='product-content'>
                                    <h3 class='title'><a href='#'>$pro_title</a></h3>
                                    <div class='price'>
                                        $$pro_price
                                       <span>$$last_price</span>
                                    </div>
                                    <ul class='rating'>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star disable'></li>
                                        <li class='fa fa-star disable'></li>
                                    </ul>
            </div>
       </div>
  </div>
           ";

            $DB_Count--;

            if (  $DB_Count==0)
                break;

        }

            }?>






        </div>
    </div>
</div>


<div id="advert_div">

    <img id="adv_img" src="mainUI/imgs/advert.jpg" alt="">
    <div id="container_div">

        <div id="timer_div">


            <div class="timer_container">
                <div class="timer_row">
                    <div class="timer_col-lg-6 offset-3">

                        <div class="timer">
                            <div>
                                <span class="days" id="day"></span>
                                <div class="smalltext">Days</div>
                            </div>
                            <div>
                                <span class="hours" id="hour"></span>
                                <div class="smalltext">Hours</div>
                            </div>
                            <div>
                                <span class="minutes" id="minute"></span>
                                <div class="smalltext">Minutes</div>
                            </div>
                            <div>
                                <span class="seconds" id="second"></span>
                                <div class="smalltext">Seconds</div>
                            </div>
                            <p id="time-up"></p>
                        </div>
                    </div>
                </div>
            </div>


            <h2> hot deal this week </h2>
            <p class="timer_div_p">New Collection Up to 50% OFF</p>

            <div id="shop_now_timer_div">
                <p> Shop Now</p>
            </div>
        </div>


        <div>

        </div>


    </div>

</div>



<div id="big_Top_slider">
    <p style="margin-left: 40px; margin-top: 30px ;font-weight: bold;font-size: 22px;"> Top Selling Products</p>
    <div id="top_slider">

        <div class="slider_container mt-100">
            <div class="top_slider_row">
                <div class="col-md-8 mr-auto ml-auto">
                    <div class="card card-raised card-carousel">
                        <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselindicators" data-slide-to="0" class=""></li>
                                <li data-target="#carouselindicators" data-slide-to="1" class="active"></li>
                                <li data-target="#carouselindicators" data-slide-to="2" class=""></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item active carousel-item-left">

                                    <div class="d-block w-100" alt="First slide" class="new_container">
                                        <div class="row">

                                            <?php


                                            $product_query = "SELECT * FROM `products` WHERE product_id in(SELECT product_id from order_products) limit 4";
                                            $run_query = mysqli_query($con, $product_query);
                                            if (mysqli_num_rows($run_query) > 0) {
                                                while ($row = mysqli_fetch_array($run_query)) {
                                                    $pro_id = $row['product_id'];
                                                    $pro_cat = $row['product_cat'];
                                                    $pro_brand = $row['product_brand'];
                                                    $pro_title = $row['product_title'];
                                                    $pro_price = $row['product_price'];
                                                    $pro_image = $row['product_image'];
                                                    $pro_image2 = $row['product_image2'];

                                                    $last_price = $pro_price + 150;

                                                    //     echo $pro_id . '  ' . $pro_cat .'  ' . $pro_brand .'  '.$pro_title ;

                                                    echo "
  <div class='col-md-3 col-sm-6'>
       <div class='product-grid3'>
            <div class='product-image3'>
                                    <a href='productView.php?p=$pro_id'>
                                        <img class='pic-1' src='./mainUI/imgs/$pro_image'>
                                        <img class='pic-2' src='./mainUI/imgs/$pro_image2'>
                                    </a>
                                    <ul class='social'>
                                        <li><a href='productView.php?p=$pro_id'><i class='fa fa-shopping-bag'></i></a></li>
                                        <li><a pid='$pro_id' id='product' href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                    </ul>
                                    
                                </div>
                                <div class='product-content'>
                                    <h3 class='title'><a href='#'>$pro_title</a></h3>
                                    <div class='price'>
                                        $$pro_price
                                       <span>$$last_price</span>
                                    </div>
                                    <ul class='rating'>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star disable'></li>
                                        <li class='fa fa-star disable'></li>
                                    </ul>
            </div>
       </div>
  </div>
           "; }

                                            }

                                            ?>

                                        </div>
                                    </div>


                                </div>




                                <div class="carousel-item">

                                    <div class="d-block w-100" alt="Third slide" class="new_container">
                                        <div class="row">

                                            <?php


                                            $product_query = "SELECT * FROM `products` WHERE product_id in(SELECT product_id from order_products) limit 4";
                                            $run_query = mysqli_query($con, $product_query);
                                            if (mysqli_num_rows($run_query) > 0) {
                                                while ($row = mysqli_fetch_array($run_query)) {
                                                    $pro_id = $row['product_id'];
                                                    $pro_cat = $row['product_cat'];
                                                    $pro_brand = $row['product_brand'];
                                                    $pro_title = $row['product_title'];
                                                    $pro_price = $row['product_price'];
                                                    $pro_image = $row['product_image'];
                                                    $pro_image2 = $row['product_image2'];

                                                    $last_price = $pro_price + 150;

                                                    //     echo $pro_id . '  ' . $pro_cat .'  ' . $pro_brand .'  '.$pro_title ;

                                                    echo "
  <div class='col-md-3 col-sm-6'>
       <div class='product-grid3'>
            <div class='product-image3'>
                                    <a href='productView.php?p=$pro_id'>
                                        <img class='pic-1' src='./mainUI/imgs/$pro_image'>
                                        <img class='pic-2' src='./mainUI/imgs/$pro_image2'>
                                    </a>
                                    <ul class='social'>
                                        <li><a href='productView.php?p=$pro_id'><i class='fa fa-shopping-bag'></i></a></li>
                                        <li><a pid='$pro_id' id='product' href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                    </ul>
                                    
                                </div>
                                <div class='product-content'>
                                    <h3 class='title'><a href='#'>$pro_title</a></h3>
                                    <div class='price'>
                                        $$pro_price
                                       <span>$$last_price</span>
                                    </div>
                                    <ul class='rating'>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star disable'></li>
                                        <li class='fa fa-star disable'></li>
                                    </ul>
            </div>
       </div>
  </div>
           "; }

                                            }

                                            ?>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--                        <a class="carousel-control-prev" href="#carouselindicators" role="button" data-slide="prev" data-abc="true"> -->
                            <!--                            <i class="fa fa-chevron-left"></i> -->
                            <!--                            <span class="sr-only">Previous</span> -->
                            <!--                        </a> <a class="carousel-control-next" href="#carouselindicators" role="button" data-slide="next" data-abc="true"> -->
                            <!--                            <i class="fa fa-chevron-right"></i> -->
                            <!--                            <span class="sr-only">Next</span> </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>


<?php
include "mini_Footer.php";
?>


</section>

</div>


</div>




<script>

    var deadline = new Date("may 18, 2021 15:37:25").getTime();
    var x = setInterval(function () {
        var currentTime = new Date().getTime();
        var t = deadline - currentTime;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("day").innerHTML = days;
        document.getElementById("hour").innerHTML = hours;
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML = seconds;
        if (t < 0) {
            clearInterval(x);
            document.getElementById("time-up").innerHTML = "TIME UP";
            document.getElementById("day").innerHTML = '0';
            document.getElementById("hour").innerHTML = '0';
            document.getElementById("minute").innerHTML = '0';
            document.getElementById("second").innerHTML = '0';
        }
    }, 1000);


</script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>


<?php
include "php_foot.php";
?>



</body>

</html>