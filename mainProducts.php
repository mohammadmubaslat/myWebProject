
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="mainProductsStyle.css">
</head>
<body>
<nav id="nav_id" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <img id="logo_img" style="padding-left: 70px" src="mainUI/imgs/productsLogo.png" alt="" >
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
            <div class="input-group-append"> <button class="btn btn-primary" type="button"> <i class="fa fa-search fa-sm"></i> </button> </div>
        </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow d-sm-none"> <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-search fa-fw"></i> </a>
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
                        <div class="input-group-append"> <button class="btn btn-primary" type="button"> <i class="fa fa-search fa-sm"></i> </button> </div>
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
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle"> <i class="fa fa-user"></i> </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Feb 7, 2020</div> you updated your profile!
                    </div>
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle"> <i class="fa fa-download"></i> </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Jan 2, 2020</div> You just downloaded 3 snippets
                    </div>
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
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="https://i.imgur.com/uIgDDDd.jpg" alt="">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Can you answer bbb?</div>
                        <div class="small text-gray-500">John wrong · 4h</div>
                    </div>
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="https://i.imgur.com/HjKTNkG.jpg" alt="">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Your work is awesome</div>
                        <div class="small text-gray-500"> Stanley · 12h</div>
                    </div>
                </a> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3"> <img class="rounded-circle" src="https://i.imgur.com/uIgDDDd.jpg" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Thanks for your support</div>
                        <div class="small text-gray-500">grand misi · 2w</div>
                    </div>
                </a> <a class="dropdown-item text-center small text-gray-500" href="#">Read all Messages</a>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow"> <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span> <img class="img-profile rounded-circle" src="https://i.imgur.com/uIgDDDd.jpg"> </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#"> <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a> <a class="dropdown-item" href="#"> <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings </a> <a class="dropdown-item" href="#"> <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log </a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>
            </div>
        </li>
    </ul>
</nav>


<div class="wrapper">
    <div class="d-md-flex align-items-md-center">
        <div class="ml-auto d-flex align-items-center views"> <span class="btn text-success"> <span class="fas fa-th px-md-2 px-1"></span><span>Grid view</span> </span> <span class="btn"> <span class="fas fa-list-ul"></span><span class="px-md-2 px-1">List view</span> </span> <span class="green-label px-md-2 px-1">428</span> <span class="text-muted">Products</span> </div>
    </div>
    <div id="mobile-filter">
        <div class="py-3">
            <h5 class="font-weight-bold">Bedrooms</h5>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> vegetables <span class="badge badge-primary badge-pill">328</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Fruits <span class="badge badge-primary badge-pill">112</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Kitchen Accessories <span class="badge badge-primary badge-pill">32</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Chefs Tips <span class="badge badge-primary badge-pill">48</span> </li>
            </ul>
        </div>
        <div class="py-3">
            <h5 class="font-weight-bold">Brands</h5>
            <form class="brand">
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields <input type="checkbox" checked> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div>
            </form>
        </div>
        <div  class="py-3" >
            <h5 class="font-weight-bold" >Rating</h5>
            <form class="rating">
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
            </form>
        </div>
    </div>
    <div class="content py-md-0 py-3">
        <section id="sidebar">
            <div class="py-3">
                <h5 class="font-weight-bold">CATEGORIES</h5>
                <ul  class="list-group">
                    <li ><a href="productCategory.php" > <span class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> </span>  Bedroom <span class="badge badge-primary badge-pill">328</span>  </a></li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Living <span class="badge badge-primary badge-pill">112</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Dining <span class="badge badge-primary badge-pill">32</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Decor <span class="badge badge-primary badge-pill">48</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Storage <span class="badge badge-primary badge-pill">48</span> </li>
                </ul>
            </div>
            <div  id="top_selling_div" class="py-3">
                <h5 class="font-weight-bold">Top selling</h5>
                <ul class="list-group">
                    <!--                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Bedroom <span class="badge badge-primary badge-pill">328</span> </li>-->
                    <!--                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Living <span class="badge badge-primary badge-pill">112</span> </li>-->
                    <!--                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Dining <span class="badge badge-primary badge-pill">32</span> </li>-->
                    <!--                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Decor <span class="badge badge-primary badge-pill">48</span> </li>-->
                    <!--                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Storage <span class="badge badge-primary badge-pill">48</span> </li>-->
                </ul>
            </div>
        </section> <!-- Products Section -->
        <section id="products">
            <div id="img_slider">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="mask flex-center">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 col-12 order-md-1 order-2">
                                            <h4>Present your <br>
                                                awesome product</h4>
                                            <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                            <a href="#">BUY NOW</a> </div>
                                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png" class="mx-auto" alt="slide"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="mask flex-center">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 col-12 order-md-1 order-2">
                                            <h4>Present your <br>
                                                awesome product</h4>
                                            <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                            <a href="#">BUY NOW</a> </div>
                                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png" class="mx-auto" alt="slide"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="mask flex-center">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 col-12 order-md-1 order-2">
                                            <h4>Present your <br>
                                                awesome product</h4>
                                            <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                            <a href="#">BUY NOW</a> </div>
                                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                <!--slide end-->
            </div>
            <div id="sections_div">
                <div class="sections_div_1_2_3_4">
                </div>
            </div>
            <div id="new_products_div">
                <p style="margin-left: 40px; margin-top: -20px ;font-weight: bold;font-size: 22px;">NEW PRODUCTS </p>
                <div class="new_container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid3">
                                <div class="product-image3">
                                    <a href="#">
                                        <img class="pic-1" src="mainUI/imgs/storage1_1.jfif">
                                        <img class="pic-2" src="mainUI/imgs/storage1_2.jfif">
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
                                        <img class="pic-1" src="mainUI/imgs/chair1_1.jfif">
                                        <img class="pic-2" src="mainUI/imgs/chair1_2.jfif">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <div class="price">
                                        $43.50
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
            <div id="sale_div" >
                <img id="sale_img" src="mainUI/imgs/sale.jpg" alt="">
            </div>
        </section>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" ></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<script>
    var range = $('.input-range'),
        value = $('.range-value');
    value.html(range.attr('value') + ' $');
    range.on('input', function() {
        value.html(this.value + ' $');
    });
    $('#myCarousel').carousel({
        interval: 100,
    });
</script>
</body>
</body>
</html>