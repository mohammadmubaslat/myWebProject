


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="mainStyle.css">
    <link rel="stylesheet" href="cardStyle.css">
    <link rel="stylesheet" href="introStyle.css">

</head>

</script>
<body >
<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators" data-interval="4000">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img alt="First slide" class="d-block w-100 body_img"  src="./mainUI/imgs/luxury1.jpg">
            <div class="carousel-caption d-none d-md-block">
<!--                <h5>Slider One Item</h5>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>-->
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Second slide" class="d-block w-100 body_img" src="./mainUI/imgs/luxury2.jpg">
            <div class="carousel-caption d-none d-md-block">
<!--                <h5>Slider One Item</h5>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>-->
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Third slide" class="d-block w-100 body_img" src="./mainUI/imgs/luxury3.jpg">
            <div class="carousel-caption d-none d-md-block">
<!--                <h5>Slider One Item</h5>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>-->
            </div>
        </div>
    </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
</div>


<div id="header_div">



    <div id="header_table">


        <ul class="Navcontainer">
            <li class="box"> Home </li>
            <li class="box"> Products </li>
            <li class="box"> Accessories </li>
          <li>  <img id="logo_img" src="mainUI/imgs/logo.png" alt=""> </li>
            <li class="box"> Offers </li>
            <li class="box"> About Us </li>
            <li class="box"> Contact Us</li>

        </ul>


    </div>

</div>




<div id="bentley_Logo_div" data-aos="fade-up">
    <img id="bentley_img" src="mainUI/imgs/bentlyLogo.png" alt="">

</div >


<div style="background-color:#E4E4E4; height:170px; text-align: center; padding-top:10px;

     left: 0;
     width: 100%; " data-aos="fade-up">
    <p id="bentley_Desc"  >

        The Bentley Home collection has been interpreting the luxurious personality of the automobile brand since 2013.<br />
        The silhouettes, precious materials and iconic shapes of Bentley Motors have been translated into a
        new language intended for the home.<br />
        Sporting a passion for technology,
        goods can be customised in the finishes that have made the British brand unique,
        from the most exquisite leathers to <br /> Calacatta and Valentine Grey marbles,
        right through to the woods that echo the automotive codes</p>

</div>


<div style="text-align: center ; padding-top: 20px;" data-aos="fade-up">
    <p style="font-family:'Abel', sans-serif; font-weight: bold; font-size: 35px;   "> TAKE THE TOUR</p>
    <p style="font-size: 17px; "> Dive in to the new Bently Home refurbishment.. </p>

</div>

<?php
include 'scroll.php';
?>


<hr data-aos="fade-up">

<div id="top_products_div" style="padding-top: 10px" data-aos="fade-up" >
    <div style="text-align: center">
        <p style="font-family:'Abel', sans-serif; font-weight: bold; font-size: 35px;   "> PRODUCTS YOU MAY LIKE </p>
        <p style="font-size: 17px; "> The Best of 2021 </p>

        <section>
            <div class="container">

                <main>

                    <div class="card" >
                        <img class="top_imgs" src="mainUI/imgs/chair.png" alt="">
                        <div class="blogcontent">
                            <h3>Italian Chair<span> 379.00 $ </span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn" >SHOW MORE</a>

                        </div>
                    </div>


                    <div class="card" >
                        <img class="top_imgs" src="mainUI/imgs/rakaraTabel1_4.png" alt="">
                        <div class="blogcontent">
                            <h3>Luxury Chair <span> 870.00 $ </span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn">SHOW MORE</a>

                        </div>
                    </div>


                    <div class="card" >
                        <img  class="top_imgs" src="mainUI/imgs/sofa.jpg" alt="">
                        <div class="blogcontent">
                            <h3>Turkish Gold Sofa <span>450.00 $</span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn">SHOW MORE</a>

                        </div>
                    </div>



                    <div class="card" >
                        <img class="top_imgs"height=""  src="mainUI/imgs/sofa2.png" alt="">
                        <div class="blogcontent">
                            <h3>Blue Nice Sofa <span>1050.00 $</span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn">SHOW MORE</a>

                        </div>
                    </div>

                    <div class="card" >
                        <img class="top_imgs" src="mainUI/imgs/furniture.png" alt="">
                        <div class="blogcontent">
                            <h3>Full Office  <span>249.00 $</span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn">SHOW MORE</a>


                        </div>
                    </div>

                    <div class="card">
                        <img class="top_imgs" src="mainUI/imgs/pngSofa.png" alt="">
                        <div class="blogcontent">
                            <h3>Red Love Sofa <span>599.00 $</span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn">SHOW MORE</a>

                        </div>
                    </div>

                    <div class="card">
                        <img class="top_imgs" src="mainUI/imgs/22.jpg" alt="">
                        <div class="blogcontent">
                            <h3>Red Love Sofa <span>599.00 $</span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn">SHOW MORE</a>

                        </div>
                    </div>


                    <div class="card" >
                        <img class="top_imgs" src="mainUI/imgs/Graychair1.png" alt="">
                        <div class="blogcontent">
                            <h3>Red Love Sofa <span>599.00 $</span></h3>
                            <br>
                            <!--                    <p>by <a href="#">hamzeh saleh </a></p>-->
                            <a href="" class="btn">SHOW MORE</a>

                        </div>
                    </div>


                </main>
                <br>
                <button  class="btn btn-primary" type="button"> Shopping Now! </button>
                <br>
        </section>
            </div>

    </div>
</div>


<hr>






<div id="advert_div" data-aos="fade-in">


    <div class="advert_divs">
        <img src="mainUI/imgs/advertDesign.jpg" class="img-fluid" alt="...">

    </div>

    <div class="advert_divs">
        <img src="mainUI/imgs/Intro_sale1.jpg" class="img-fluid" alt="...">
    </div>

</div>





<!--footer starts from here-->
<footer class="footer">
    <div class=" bottom_border">
        <ul class="social_footer_ul">
<!--            <li> <h1 STYLE="color:#D6C7A6; font-size: 22px;">FOLLOW US </h1></li>-->
            <li><a href="http://facebook.com"><i><img src="./mainUI/imgs/facebook.png" alt=""></i></a></li>
            <li><a href="http://twitter.com"><i><img src="./mainUI/imgs/twitter.png" alt=""></i></a></li>
            <li><a href="http://linkedin.com"><i><img src="./mainUI/imgs/insatgram.png" alt=""></i></a></li>
            <li><a href="http://instagram.com"><i><img src="./mainUI/imgs/insatgram.png" alt=""></i></a></li>
        </ul>

    </div>


        <!--foote_bottom_ul_amrc ends here-->
        <p class="text-center" style="padding-top: 15px;">Copyright @2021 | Designed by Mohammad Mubaslat and Hamzeh Saleh</p>


        <!--social_footer_ul ends here-->
    </div>

</footer>




<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

<script src='https://unpkg.com/aos@next/dist/aos.js'></script>
<script id="rendered-js" >
    AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
    });
    //# sourceURL=pen.js
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>

</body>
</html>

