<?php
include "dataBase.php";

if (isset($_POST['add_ToCart'])) {

    $prod_id = $_GET['p'];
    $color = $_POST['color'];
    $country = $_POST['Brand_Q'];
    $quan = $_POST['quantity'];

    mysqli_query($con, "insert into cart(user_id,qty,product_id,color,country)
                                        values ('12393' , '$quan' , '$prod_id' , '$color' , '$country')");

    mysqli_close($con);
    header("location:productView.php?p=".$_GET['p']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="bootstrap.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href="navBarStyle.css" rel="stylesheet" >


    <style>
        .pd-wrap {
            padding: 40px 0;
            font-family: 'Poppins', sans-serif;
        }
        .heading-section {
            text-align: center;
            margin-bottom: 20px;
        }
        .sub-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            display: block;
            font-weight: 600;
            color: #2e9ca1;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .heading-section h2 {
            font-size: 32px;
            font-weight: 500;
            padding-top: 10px;
            padding-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }
        .user-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: relative;
            min-width: 80px;
            background-size: 100%;
        }
        .carousel-testimonial .item {
            padding: 30px 10px;
        }
        .quote {
            position: absolute;
            top: -23px;
            color: #2e9da1;
            font-size: 27px;
        }
        .name {
            margin-bottom: 0;
            line-height: 14px;
            font-size: 17px;
            font-weight: 500;
        }
        .position {
            color: #adadad;
            font-size: 14px;
        }
        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            outline: none;
            height: 25px;
        }
        .owl-nav button svg {
            width: 25px;
            height: 25px;
        }
        .owl-nav button.owl-prev {
            left: 25px;
        }
        .owl-nav button.owl-next {
            right: 25px;
        }
        .owl-nav button span {
            font-size: 45px;
        }
        .product-thumb .item img {
            height: 100px;
        }
        .product-name {
            font-size: 22px;
            font-weight: 500;
            line-height: 22px;
            margin-bottom: 4px;
        }
        .product-price-discount {
            font-size: 22px;
            font-weight: 400;
            padding: 10px 0;
            clear: both;
        }
        .product-price-discount span.line-through {
            text-decoration: line-through;
            margin-left: 10px;
            font-size: 14px;
            vertical-align: middle;
            color: #a5a5a5;
        }
        .display-flex {
            display: flex;

        }
        .align-center {
            align-items: center;
        }
        .product-info {
            width: 100%;
        }
        .reviews-counter {
            font-size: 13px;
        }
        .reviews-counter span {
            vertical-align: -2px;
        }
        .rate {
            float: left;
            padding: 0 10px 0 0;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float: right;
            width: 15px;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 21px;
            color:#ccc;
            margin-bottom: 0;
            line-height: 21px;
        }
        .rate:not(:checked) > label:before {
            content: '\2605';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
        .product-dtl p {
            font-size: 14px;
            line-height: 24px;
            color: #7a7a7a;
        }
        .product-dtl .form-control {
            font-size: 15px;
        }
        .product-dtl label {
            line-height: 16px;
            font-size: 15px;
        }
        .form-control:focus {
            outline: none;
            box-shadow: none;
        }
        .product-count {
            margin-top:-10px;
        }
        .product-count .qtyminus,
        .product-count .qtyplus {
            width: 34px;
            height: 34px;
            background: #212529;
            text-align: center;
            font-size: 19px;
            line-height: 36px;
            color: #fff;
            cursor: pointer;
        }
        .product-count .qtyminus {
            border-radius: 3px 0 0 3px;
        }
        .product-count .qtyplus {
            border-radius: 0 3px 3px 0;
        }
        .product-count .qty {
            width: 60px;
            text-align: center;
        }
        .round-black-btn {
            border-radius: 4px;
            background: #212529;
            color: #fff;
            padding: 7px 45px;
            display: inline-block;
            margin-top: 20px;
            border: solid 2px #212529;
            transition: all 0.5s ease-in-out 0s;
        }
        .round-black-btn:hover,
        .round-black-btn:focus {
            background: transparent;
            color: #212529;
            text-decoration: none;
        }

        .product-info-tabs {
            margin-top: 60px;
        }
        .product-info-tabs .nav-tabs {
            border-bottom: 2px solid #d8d8d8;
        }
        .product-info-tabs .nav-tabs .nav-item {
            margin-bottom: 0;
        }
        .product-info-tabs .nav-tabs .nav-link {
            border: none;
            border-bottom: 2px solid transparent;
            color: #323232;
        }
        .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
            border: none;
        }
        .product-info-tabs .nav-tabs .nav-item.show .nav-link,
        .product-info-tabs .nav-tabs .nav-link.active,
        .product-info-tabs .nav-tabs .nav-link.active:hover {
            border: none;
            border-bottom: 2px solid #d8d8d8;
            font-weight: bold;
        }
        .product-info-tabs .tab-content .tab-pane {
            padding: 30px 20px;
            font-size: 15px;
            line-height: 24px;
            color: #7a7a7a;
        }
        .review-form .form-group {
            clear: both;
        }
        .mb-20 {
            margin-bottom: 20px;
        }

        .review-form .rate {
            float: none;
            display: inline-block;
        }
        .review-heading {
            font-size: 24px;
            font-weight: 600;
            line-height: 24px;
            margin-bottom: 6px;
            text-transform: uppercase;
            color: #000;
        }
        .review-form .form-control {
            font-size: 14px;
        }
        .review-form input.form-control {
            height: 40px;
        }
        .review-form textarea.form-control {
            resize: none;
        }
        .review-form .round-black-btn {
            text-transform: uppercase;
            cursor: pointer;
        }

        .add_div
        {
            padding-left: 350px;
            padding-bottom: 100px;
            margin-top: -59px;
        }

        .item
        {
            border-radius: 15px;
        }




        .mt-5, .my-5 {
            margin-top: 0rem !important;
        }

        #related_products
        {
            margin-left: 200px;
            margin-bottom: 100px;

            text-align: center;
            margin-top: 70px;
            height: 420px;
            padding-top: 50px;
            box-shadow: 0 2px 10px #BCBCBC;
            width: 1100px;
            border-radius: 15px;

        }

        #inner_related_products_div
        {

            padding: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
        }


        .product-image3
        {
            height: 100%;

        }

        .btn-primary {
            color: #fff;
            background-color: #212529;
            border-color: #212529;
        }


    </style>

</head>

<body>



<nav id="nav_id" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


    <img  id="logo_img" style="padding-left: 70px" src="mainUI/imgs/productsLogo.png" alt="" >
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
            <div class="input-group-append"> <button  class="btn btn-primary" type="button"> <i class="fa fa-search fa-sm"></i> </button> </div>
        </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow d-sm-none"> <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-search fa-fw"></i> </a>
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
                        <div class="input-group-append"> <button id="bar_search_button" class="btn btn-primary" type="button"> <i class="fa fa-search fa-sm"></i> </button> </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1"> <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell fa-fw"></i> <span class="badge badge-danger badge-counter">3+</span> </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">
                <h6 class="dropdown-header"> Alerts Center </h6> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle"> <i class="fa fa-file"></i> </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">March 12, 2020</div> <span class="font-weight-bold">related snippets sent</span>
                    </div>
                </a>

                </a> <a class="dropdown-item text-center small text-gray-500" href="#">Show All</a>
            </div>
        </li>




        <li class="nav-item dropdown no-arrow mx-1"> <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope fa-fw"></i> <span class="badge badge-danger badge-counter">4</span> </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header"> Messages </h6> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="https://i.imgur.com/nUNhspp.jpg" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Thanks for your answer!</div>
                        <div class="small text-gray-500">Andy flower · 8m</div>
                    </div>



                </a> <a class="dropdown-item text-center small text-gray-500" href="#">Read all Messages</a>
            </div>
        </li>




        <li class="nav-item dropdown no-arrow mx-1"> <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart"></i> <span class="badge badge-danger badge-counter"> 0 </span> </a>

        </li>





        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow"> <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span> <img class="img-profile rounded-circle" src="https://i.imgur.com/uIgDDDd.jpg"> </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#"> <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a> <a class="dropdown-item" href="#"> <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings </a> <a class="dropdown-item" href="#"> <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log </a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>
            </div>
        </li>
    </ul>
</nav>




<div style="padding-top: 60px;" class="container">
    <div class="heading-section">
    </div>
    <div class="row">

        <?php
        $key_word = "";

        $product_id = $_GET['p'];

        $sql = " SELECT * FROM products WHERE product_id = $product_id";

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){

                $last = $row['product_price'] + 150 ;
                $GLOBALS['key_word'] = $row['product_keywords'];

                echo '
        
        <div class="col-md-6">
            <div id="slider" class="owl-carousel product-slider " >
                <div class="item">
                      <img src="./mainUI/imgs/'.$row['product_image'].' " />
                </div>
               
                <div class="item">
                   <img src="./mainUI/imgs/'.$row['product_image2'].' " />
                </div>
                
                <div class="item">
                    <img src="./mainUI/imgs/'.$row['product_image3'].' " />
                </div>
                
                <div class="item">
                  <img src="./mainUI/imgs/'.$row['product_image4'].' " />
                </div>
            </div>
            
            
            <div id="thumb" class="owl-carousel product-thumb">
                <div class="item">
                   <img src="./mainUI/imgs/'.$row['product_image'].' " />
                </div>
                
                <div class="item">
                   <img src="./mainUI/imgs/'.$row['product_image2'].' " />
                </div>
                
                <div class="item">
                  <img src="./mainUI/imgs/'.$row['product_image3'].' " />
                </div>
              
                <div class="item">
                    <img src="./mainUI/imgs/'.$row['product_image4'].' " />
                </div>
            </div>
        </div>
        
        
        <div class="col-md-6">
            <div class="product-dtl">
                <div class="product-info">
                    <div class="product-name">'.$row['product_title'].'</div>
                    <div id="prod_id" name="prod_id" style="font-size: 16px;">Product Parcode: '.$row['product_id'].' </div>
                    <div class="reviews-counter">
                        <div class="rate">
                            <input type="radio" id="star5_1" name="rate" value="5" checked />
                            <label for="star5_1" title="text">5 stars</label>
                            <input type="radio" id="star4_1" name="rate" value="4" checked />
                            <label for="star4_1" title="text">4 stars</label>
                            <input type="radio" id="star3_1" name="rate" value="3" checked />
                            <label for="star3_1" title="text">3 stars</label>
                            <input type="radio" id="star2_1" name="rate" value="2" />
                            <label for="star2_1" title="text">2 stars</label>
                            <input type="radio" id="star1_1" name="rate" value="1" />
                            <label for="star1_1" title="text">1 star</label>
                        </div>
                        <span>3 Reviews</span>
                    </div>
                    <div class="product-price-discount"><span>$'.$row['product_price'].'</span><span class="line-through">$'.$last.'</span></div>
                </div>
                <p>'.$row['product_desc'].'</p>
                <div class="row">
<!--                    <div class="col-md-6">-->
<!--                        <label for="size">Size</label>-->
<!--                        <select id="size" name="size" class="form-control">-->
<!--                            <option>S</option>-->
<!--                            <option>M</option>-->
<!--                            <option>L</option>-->
<!--                            <option>XL</option>-->
<!--                        </select>-->
<!--                    </div>-->

'; }
        }
        ?>

        <form action="productView.php?p=<?php echo $_GET['p']?>" method="post" >

            <div style="display: flex">
                    <div class="col-md-6">
                        <label for="color">Color</label>
                        <select id="color" name="color" class="form-control">
                            <option>Blue</option>
                            <option>Green</option>
                            <option>Red</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 50px" class="col-md-6">
                        <label for="Brand_Q">Brand country</label>
                        <select id="Brand_Q" name="Brand_Q" class="form-control">
                            <option>Italy</option>
                            <option>Turkish</option>
                            <option>UK</option>
                        </select>

                    </div>
            </div>

                    <!--                    <div style="margin-bottom: 50px" class="col-md-6">-->
                    <!---->
                    <!--                       <p style="margin-top: 70px; margin-left :150px  ;font-weight: 550;"> +200$ shipped</p>-->
                    <!--                    </div>-->


                </div>
                <div class="product-count">
                    <label for="size">Quantity</label>

<!--                    <form action="#" class="display-flex">-->
                        <div class="display-flex">
                        <div class="qtyminus">-</div>
                        <input type="text" name="quantity" id="quantity" value="1" class="qty">
                        <div class="qtyplus">+</div>
                        </div>
<!--                    </form>-->

                    <div class="add_div">

                        <input id="add_ToCart" name="add_ToCart" type="submit" value="Add to Cart" class="round-black-btn">
                    </div>

                </div>
</form>
            </div>
        </div>
    </div>

    <div class="product-info-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </div>
            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                <div class="review-heading">REVIEWS</div>
                <p class="mb-20">There are no reviews yet.</p>
                <form class="review-form">
                    <div class="form-group">
                        <label>Your rating</label>
                        <div class="reviews-counter">
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Your message</label>
                        <textarea class="form-control" rows="10"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Name*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Email Id*">
                            </div>
                        </div>
                    </div>
                    <button class="round-black-btn">Submit Review</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<main  class="mt-5 pt-4" >
<div class="container dark-grey-text mt-5">



    <hr>

    <!--Grid row-->
    <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

            <h4 class="my-4 h4">Additional information</h4>

            <p>Design up top and sleek lines below? That's Jarrod. It's the modern way to add an industrial vibe to your home.
                Slim metal frame, soft washed cotton, oversized cushions – on a sofa this sophisticated,
                you won't want to be anywhere else.</p>

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Grid row-->
    <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <img src="./mainUI/imgs/jarodSofa1_1.jfif" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

            <img src="./mainUI/imgs/jarodSofa1_2.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

            <img src="./mainUI/imgs/jarodSofa1_3.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</div>
</main>




<div id="related_products">
    <div id="inner_related_products_div">
        <p style="margin-left: -850px; margin-top: -30px ;font-weight: bold;font-size: 22px;">Related Products </p>
        <div class="new_container">
            <div class="row">


        <?php
        $temp = $GLOBALS['key_word'];

        $related_query = "SELECT * FROM `products` WHERE product_keywords = '$temp' ";
        $run_query = mysqli_query($con, $related_query);


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
                                        $pro_price
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
            }
        }

        else{

        }


        ?>


                <div class="col-md-3 col-sm-6">
                    <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="mainUI/imgs/sofa1_1.jfif">
                                <img class="pic-2" src="mainUI/imgs/sofa1_2.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Men's Blazer</a></h3>
                            <div class="price">
                                $63.50
                                <span>$75.00</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid3">
                        <div class="product-image3">
                            <a href="#">
                                <img class="pic-1" src="mainUI/imgs/table1.jpg">
                                <img class="pic-2" src="mainUI/imgs/table2.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Men's Blazer</a></h3>
                            <div class="price">
                                $63.50
                                <span>$75.00</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
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




<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>

<script>


    $(document).ready(function() {
        var slider = $("#slider");
        var thumb = $("#thumb");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;
        slider.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            autoplay: false,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition);
        thumb
            .on('initialized.owl.carousel', function() {
                thumb.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: true,
                item: 4,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage,
                navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);
        function syncPosition(el) {
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);
            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            thumb
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumb.find('.owl-item.active').length - 1;
            var start = thumb.find('.owl-item.active').first().index();
            var end = thumb.find('.owl-item.active').last().index();
            if (current > end) {
                thumb.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                thumb.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }
        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                slider.data('owl.carousel').to(number, 100, true);
            }
        }
        thumb.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            slider.data('owl.carousel').to(number, 300, true);
        });


        $(".qtyminus").on("click",function(){
            var now = $(".qty").val();
            if ($.isNumeric(now)){
                if (parseInt(now) -1> 0)
                { now--;}
                $(".qty").val(now);
            }
        })
        $(".qtyplus").on("click",function(){
            var now = $(".qty").val();
            if ($.isNumeric(now)){
                $(".qty").val(parseInt(now)+1);
            }
        });
    });

    new WOW().init();


</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>
</html>