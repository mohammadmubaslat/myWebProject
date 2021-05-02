


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


    <style>

        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

        #nav_id {
            font-family: 'Manrope', sans-serif;
        }
        .topbar {
            height: 4.375rem
        }
        .topbar .nav-item .nav-link {
            height: 4.375rem;
            display: flex;
            align-items: center;
            padding: 0 .75rem
        }
        .topbar .nav-item .nav-link .badge-counter {
            position: absolute;
            transform: scale(.7);
            transform-origin: top right;
            right: .25rem;
            margin-top: -.25rem
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link {
            color: #d1d3e2
        }

        .dropdown-toggle::after {
            content: none !important
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .35rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .form-control:focus {
            box-shadow: none !important
        }

        .input-group-append button {
            box-shadow: none !important
        }

        .topbar .nav-item .nav-link .badge-counter {
            position: absolute;
            transform: scale(.7);
            transform-origin: top right;
            right: .25rem;
            margin-top: -.25rem
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .35rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .rounded-circle {
            width: 40px;
            height: 40px
        }

        .topbar .topbar-divider {
            width: 0;
            border-right: 1px solid #e3e6f0;
            height: calc(4.375rem - 2rem);
            margin: auto 1rem
        }

        .topbar .dropdown-list {
            width: 20rem !important
        }

        .input-group
        {
            padding-left: 550px;

        }


        .font-weight-bold
        {
            font-family: "Roboto", sans-serif;
        }


        /* second one !!!*/





        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /*font-family: 'Poppins', sans-serif*/
        }

        .wrapper {
            padding: 0px;
            max-width: 1400px;
            margin: auto
        }

        .h3 {
            font-weight: 900
        }

        .views {
            font-size: 0.85rem
        }

        .btn {
            color: #666;
            font-size: 0.85rem
        }

        .btn:hover {
            color: #61b15a
        }

        .green-label {
            background-color: #defadb;
            color: #48b83e;
            border-radius: 5px;
            font-size: 0.8rem;
            margin: 0 3px
        }

        .radio,
        .checkbox {
            padding: 6px 10px
        }

        .border {
            border-radius: 12px
        }

        .options {
            position: relative;
            padding-left: 25px
        }

        .radio label,
        .checkbox label {
            display: block;
            font-size: 14px;
            cursor: pointer;
            margin: 0
        }

        .options input {
            opacity: 0
        }

        .checkmark {
            position: absolute;
            top: 0px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 50%
        }

        .options input:checked~.checkmark:after {
            display: block
        }

        .options .checkmark:after {
            content: "";
            width: 9px;
            height: 9px;
            display: block;
            background: white;
            position: absolute;
            top: 52%;
            left: 51%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark {
            background: #61b15a;
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1)
        }

        .count {
            font-size: 0.8rem
        }

        label {
            cursor: pointer
        }

        .tick {
            display: block;
            position: relative;
            padding-left: 23px;
            cursor: pointer;
            font-size: 0.8rem;
            margin: 0
        }

        .tick input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0
        }

        .check {
            position: absolute;
            top: 1px;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 3px
        }

        .tick:hover input~.check {
            background-color: #f3f3f3
        }

        .tick input:checked~.check {
            background-color: #61b15a
        }

        .check:after {
            content: "";
            position: absolute;
            display: none
        }

        .tick input:checked~.check:after {
            display: block;
            transform: rotate(45deg) scale(1)
        }

        .tick .check:after {
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg) scale(2)
        }

        #country {
            font-size: 0.8rem;
            border: none;
            border-left: 1px solid #ccc;
            padding: 0px 10px;
            outline: none;
            font-weight: 500
        }

        .close {
            font-size: 1.2rem
        }

        div.text-muted {
            font-size: 0.85rem
        }

        #sidebar {
            width: 20%;
            float: left
        }

        .category {
            font-size: 0.9rem;
            cursor: pointer
        }

        .list-group-item {
            border: none;
            padding: 0.3rem 0.4rem 0.3rem 0rem
        }

        .badge-primary {
            background-color: #defadb;
            color: #48b83e
        }

        .brand .check {
            background-color: #fff;
            top: 3px;
            border: 1px solid #666
        }

        .brand .tick {
            font-size: 1rem;
            padding-left: 25px
        }

        .rating .check {
            background-color: #fff;
            border: 1px solid #666;
            top: 0
        }

        .rating .tick {
            font-size: 0.9rem;
            padding-left: 25px
        }

        .rating .fas.fa-star {
            color: #ffbb00;
            padding: 0px 3px
        }

        .brand .tick:hover input~.check,
        .rating .tick:hover input~.check {
            background-color: #f9f9f9
        }

        .brand .tick input:checked~.check,
        .rating .tick input:checked~.check {
            background-color: #61b15a
        }

        #products {
            width: 75%;
            padding-left: 30px;
            margin: 0;
            float: right
        }

        .card:hover {
            transform: scale(1.1);
            transition: all 0.5s ease-in-out;
            cursor: pointer
        }

        .card-body {
            padding: 0.5rem
        }

        .card-body .description {
            font-size: 0.78rem;
            padding-bottom: 8px
        }

        div.h6,
        h6 {
            margin: 0
        }

        .product .fa-star {
            font-size: 0.9rem
        }

        .rebate {
            font-size: 0.9rem
        }

        .btn.btn-primary {
            background-color: #1C1C1C;
            color: #fff;
            border: 1px solid #008000;
            border-radius: 10px;
            font-weight: 800
        }

        .btn.btn-primary:hover {
            background-color: #48854C
        }

        img {
            width: 192px;
            height: 132px;
            object-fit: contain
        }

        .clear {
            clear: both
        }

        .btn.btn-success {
            visibility: hidden
        }

        @media(min-width:992px) {

            .filter,
            #mobile-filter {
                display: none
            }
        }

        @media(min-width:768px) and (max-width:991px) {

            .radio,
            .checkbox {
                padding: 6px 10px;
                width: 49%;
                float: left;
                margin: 5px 5px 5px 0px
            }

            .filter,
            #mobile-filter {
                display: none
            }
        }

        @media(min-width:576px) and (max-width:767px) {
            #sidebar {
                width: 35%
            }

            #products {
                width: 65%
            }

            .filter,
            #mobile-filter {
                display: none
            }

            .h3+.ml-auto {
                margin: 0
            }
        }

        @media(max-width:575px) {
            .wrapper {
                padding: 10px
            }

            .h3 {
                font-size: 1.3rem
            }

            #sidebar {
                display: none
            }

            #products {
                width: 100%;
                float: none
            }



            .clear {
                float: left;
                width: 80%
            }

            .btn.btn-success {
                visibility: visible;
                margin: 10px 0px;
                color: #fff;
                padding: 0.2rem 0.1rem;
                width: 20%
            }

            .green-label {
                width: 50%
            }

            .btn.text-success {
                padding: 0
            }

            .content,
            #mobile-filter {
                clear: both
            }
        }

        .fas.fa-star
        {
            color: #E8F163;
        }


        .d-lg-flex
        {
            padding-left: 370px;
        }
        .d-sm-flex
        {
            padding-left: 380px;
        }


        #sidebar
        {

            margin-top: -50px;
        }




        /*      products style  :     */



        .product-grid3{font-family:Roboto,sans-serif;text-align:center;position:relative;z-index:1}
        .product-grid3:before{content:"";height:81%;width:100%;background:#fff;border:1px solid rgba(0,0,0,.1);opacity:0;position:absolute;top:0;left:0;z-index:-1;transition:all .5s ease 0s}
        .product-grid3:hover:before{opacity:1;height:100%}
        .product-grid3 .product-image3{position:relative}
        .product-grid3 .product-image3 a{display:block}
        .product-grid3 .product-image3 img{width:100%;height:auto}
        .product-grid3 .pic-1{opacity:1;transition:all .5s ease-out 0s}
        .product-grid3:hover .pic-1{opacity:0}
        .product-grid3 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
        .product-grid3:hover .pic-2{opacity:1}
        .product-grid3 .social{width:120px;padding:0;margin:0 auto;list-style:none;opacity:0;position:absolute;right:0;left:0;bottom:-23px;transform:scale(0);transition:all .3s ease 0s}
        .product-grid3:hover .social{opacity:1;transform:scale(1)}
        .product-grid3:hover .product-discount-label,.product-grid3:hover .product-new-label,.product-grid3:hover .title{opacity:0}
        .product-grid3 .social li{display:inline-block}
        .product-grid3 .social li a{color:#e67e22;background:#fff;font-size:18px;line-height:50px;width:50px;height:50px;border:1px solid rgba(0,0,0,.1);border-radius:50%;margin:0 2px;display:block;transition:all .3s ease 0s}
        .product-grid3 .social li a:hover{background:#e67e22;color:#fff}
        .product-grid3 .product-discount-label,.product-grid3 .product-new-label{background-color:#e67e22;color:#fff;font-size:17px;padding:2px 10px;position:absolute;right:10px;top:10px;transition:all .3s}
        .product-grid3 .product-content{z-index:-1;padding:15px;text-align:left}
        .product-grid3 .title{font-size:14px;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
        .product-grid3 .title a{color:#414141}
        .product-grid3 .price{color:#000;font-size:16px;letter-spacing:1px;font-weight:600;margin-right:2px;display:inline-block}
        .product-grid3 .price span{color:#909090;font-size:14px;font-weight:500;letter-spacing:0;text-decoration:line-through;text-align:left;display:inline-block;margin-top:-2px}
        .product-grid3 .rating{padding:0;margin:-22px 0 0;list-style:none;text-align:right;display:block}
        .product-grid3 .rating li{color:#ffd200;font-size:13px;display:inline-block}
        .product-grid3 .rating li.disable{color:#dcdcdc}
        @media only screen and (max-width:1200px){.product-grid3 .rating{margin:0}
        }
        @media only screen and (max-width:990px){.product-grid3{margin-bottom:30px}
            .product-grid3 .rating{margin:-22px 0 0}
        }
        @media only screen and (max-width:359px){.product-grid3 .rating{margin:0}
        }

        #products {
            width: 75%;
            padding-left: 30px;
            margin: 0;
            float: right;
            padding-top: 30px;
        }

        .col-md-3
        {
            padding-bottom: 20px;
        }




        #range_div {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            margin-top: 50px;
        }

        .PrixMin {
            float: left;
            color: #181D31;
            font-size: 15px;
            margin-right: 5px;
        }

        .selecteurPrix {
            margin-top: -50px;
        }

        body {
            font-family: sans-serif;
            padding: 40px;
        }

        .valeurPrix {
            position: absolute;
            top: -29px;
            left: 50px;
        }

        .range-slider {
            position: relative;
            width: 189px;
            float: left;
            margin-right: 5px;
        }

        .range-slider .input-range {
            -webkit-appearance: none;
            width: 195px;
            height: 5px;
            border-radius: 5px;
            background: #ccc;
            outline: none;
        }

        .range-slider .input-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #181D31;
            cursor: pointer;
            -webkit-transition: background .15s ease-in-out;
            transition: background .15s ease-in-out;
        }

        .range-slider .input-range::-webkit-slider-thumb:hover {
            background: #181D31;
        }

        .range-slider .input-range:active::-webkit-slider-thumb {
            background:#181D31;
        }

        .range-slider .input-range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border: 0;
            border-radius: 50%;
            background:#181D31;
            cursor: pointer;
            -webkit-transition: background .15s ease-in-out;
            transition: background .15s ease-in-out;
        }

        .range-slider .input-range::-moz-range-thumb:hover {
            background: #181D31;
        }

        .range-slider .input-range:active::-moz-range-thumb {
            background: #181D31;
        }

        .range-slider .range-value {
            display: inline-block;
            position: relative;
            width: 75px;
            color: #fff;
            font-size: 15px;
            line-height: 20px;
            text-align: center;
            border-radius: 3px;
            background:#181D31;
            padding: 5px 10px;
            margin-left: 7px;
        }

        .range-slider .range-value:after {
            position: absolute;
            top: 27px;
            left: 36px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-right: 7px solid #181D31;
            border-bottom: 7px solid transparent;
            content: '';
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        ::-moz-range-track {
            background: #ccc;
            border: 0;
        }

        input::-moz-focus-inner {
            border: 0;
        }


        #rating_div
        {
            margin-top: -35px;
        }

        #nav_id
        {
            position: fixed;
            z-index: 9999;
            top: 0;
            right: 0;
            left: 0;
        }

        #sidebar
        {
            position: fixed;
            z-index: 9999;
            height: 500px;
        }



        img {
            width: 250px;
            height: 60px;
            object-fit: contain;
        }

        .input-group > .custom-file, .input-group > .custom-select, .input-group > .form-control {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 500px;
            margin-bottom: 0;
            margin-left: -300px;
        }


        .d-lg-flex {
            padding-left: 490px;
        }


        .product-image3
        {
            height: 280px;
        }




    </style>

</head>
<body>


<nav id="nav_id" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


    <img  style="padding-left: 70px" src="mainUI/imgs/productsLogo.png" alt="" >
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
    <div class="d-lg-flex align-items-lg-center pt-2">
        <div class="form-inline d-flex align-items-center my-2 mr-lg-2 radio bg-light border"> <label class="options">Most Popular <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Cheapest <input type="radio" name="radio" checked> <span class="checkmark"></span> </label> </div>
        <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Farm <input type="checkbox" checked="checked"> <span class="check"></span> </label> <span class="text-success px-2 count"> 328</span> </div>
        <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Bio <input type="checkbox"> <span class="check"></span> </label> <span class="text-success px-2 count"> 72</span> </div>
        <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Czech republic <input type="checkbox"> <span class="check"></span> </label> <span class="border px-1 mx-2 mr-3 font-weight-bold count"> 12</span> <select name="country" id="country" class="bg-light">
                <option value="" hidden>Country</option>

                <option value="USA">USA</option>
                <option value="Uk">UK</option>
            </select> </div>
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
                <h5 class="font-weight-bold">Bedrooms</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Bed <span class="badge badge-primary badge-pill">328</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Mirror <span class="badge badge-primary badge-pill">112</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Dining Accessories <span class="badge badge-primary badge-pill">32</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Storage <span class="badge badge-primary badge-pill">48</span> </li>
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


            <div class="py-3" id="range_div">
                <div class="selecteurPrix">
                    <div class="PrixMin">1 $</div>
                    <div class="range-slider">
                        <input class="input-range" type="range" value="5000" min="1" max="10000">
                        <div class="valeurPrix">
                            <span class="range-value"></span>

                        </div>

                    </div>    <div class="PrixMin">10000 $</div></div>

            </div>

            <div id="rating_div" class="py-3">
                <h5 class="font-weight-bold">Rating</h5>
                <form class="rating">
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                </form>
            </div>
        </section> <!-- Products Section -->


        <section id="products">


            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid3">
                            <div class="product-image3">
                                <a href="#">
                                    <img class="pic-1" src="mainUI/imgs/bed2.jpg">
                                    <img class="pic-2" src="mainUI/imgs/per6.jpg">
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
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-4.jpg">
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












                </div>
            </div>

        </section>


    </div>
</div>






<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" ></script>

<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>

<script>


    var range = $('.input-range'),
        value = $('.range-value');

    value.html(range.attr('value') + ' $');

    range.on('input', function() {
        value.html(this.value + ' $');
    });



</script>


</body>


</body>
</html>