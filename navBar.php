

<?php

include "dataBase.php";
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    <link rel="stylesheet" href="bootstrap.css">-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link href="navBarStyle.css" rel="stylesheet" >
    <link rel="stylesheet" href="mainProductsStyle.css">
    <link href="productCategoryStyle.css" rel="stylesheet" >




</head>
<body>



<nav id="nav_id" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <a  href="mainProducts.php"><img  id="logo_img" style="padding-left: 70px" src="mainUI/imgs/productsLogo.png" alt="" > </a>
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
            <div class="input-group-append"> <button  id="bar_search_button" class="btn btn-primary" type="button"> <i class="fa fa-search fa-sm"></i> </button> </div>
        </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow d-sm-none"> <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-search fa-fw"></i> </a>
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
                        <div class="input-group-append"> <button  class="btn btn-primary" type="button"> <i class="fa fa-search fa-sm"></i> </button> </div>
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
                        <div class="text-truncate">you have new messages</div>
                        <div class="small text-gray-500">Admin · 8m</div>
                    </div>

                </a> <a class="dropdown-item text-center small text-gray-500" href="#">Read all Messages</a>
            </div>
        </li>

        <li class="nav-item dropdown no-arrow mx-1"> <a class="nav-link dropdown-toggle" href="shoppingCartPage.php" id="" >
                <i class="fas fa-shopping-cart"></i> <span class="badge badge-danger badge-counter"> 0 </span> </a>

        </li>

        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<!--                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span> -->
<!--                -->

                <img class="img-profile rounded-circle" src="https://i.imgur.com/uIgDDDd.jpg"> </a>


            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> <a class="dropdown-item" href="profilePage.php"> <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="Login.php"> <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>

        <!--                data-toggle="modal" data-target="#logoutModal"-->

            </div>
        </li>
    </ul>
</nav>



<div class="wrapper">
         <div class="d-md-flex align-items-md-center">
                    <div class="ml-auto d-flex align-items-center views"> <span class="btn text-success"> <span class="fas fa-th px-md-2 px-1"></span><span>Grid view</span> </span> <span class="btn"> <span class="fas fa-list-ul"></span><span class="px-md-2 px-1">List view</span> </span> <span class="green-label px-md-2 px-1">428</span> <span class="text-muted">Products</span> </div>
         </div>


          <div class="content py-md-0 py-3">
                     <section id="sidebar">
                         <div class="py-3">
                             <h5 class="font-weight-bold"><a href="productCategory.php">CATEGORIES</a></h5>
                             <ul class="list-group" id="get_category">

                             </ul>

                           </div>
                     <div class="py-3">
                            <h5 class="font-weight-bold"><a href="productCategory.php"> Brands </a></h5>
                               <ul class="list-group" id="get_brand">

                               </ul>
                     </div>

                          <div   class="py-3" style="height: 230px ;   border: 0.1px solid #A9A9A9;">

                              <div style=" height: 100%;">

                                  <div class="upper_div"  >
                                        <p style="padding-top: 10px"> Welcome in Luxury Living</p>
                                 </div>

                                  <div class="login_signup_side_div">
                                      <div class="div_buttons">

                                          <form method="post" action="Login.php">
                                              <button type="submit" class="btn btn-secondary">Login</button>
                                          </form>


                                      </div>

                                      <div  class="div_buttons">

                                          <form method="post" action="Login.php">
                                              <button  type="submit" class="btn btn-dark">Sign Up</button>
                                          </form>


                                      </div>

                                  </div>

                                  <div class="login_signup_img_div">
                                      <img class="login_signup_img" src="mainUI/imgs/advertDesign.jpg"
                                  </div>

                              </div>


                          </div>



                     </section>

                     <!-- Products Section now ..  -->

                     <section id="products">



<!--            -->
<!--            -->
<!--        </section>-->
<!--        -->


