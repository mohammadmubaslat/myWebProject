<?php
include "dataBase.php";
session_start();
//if($_SESSION['notloged'] == 1){
//    echo '<script>
//       swal({
//        title: "Not Loged in",
//        text: "please login or signup",
//        icon: "error",
//        button: "Ok",
//    });
//    </script>';
//    header("location:mainProducts.php");
//}
if(isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete') {
    $product_code = $_GET['product_id'];
    mysqli_query($con, "delete from cart where product_id='$product_code'") or die("query is incorrect...");
}

?>

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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link href="navBarStyle.css" rel="stylesheet">


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

        .input-group {
            padding-left: 550px;

        }


        .font-weight-bold {
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

        #bar_search_button {
            color: #666;
            font-size: 0.85rem
        }

        #bar_search_button:hover {
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

        .options input:checked ~ .checkmark:after {
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

        .options input[type="radio"]:checked ~ .checkmark {
            background: #61b15a;
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked ~ .checkmark:after {
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

        .tick:hover input ~ .check {
            background-color: #f3f3f3
        }

        .tick input:checked ~ .check {
            background-color: #61b15a
        }

        .check:after {
            content: "";
            position: absolute;
            display: none
        }

        .tick input:checked ~ .check:after {
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

        .brand .tick:hover input ~ .check,
        .rating .tick:hover input ~ .check {
            background-color: #f9f9f9
        }

        .brand .tick input:checked ~ .check,
        .rating .tick input:checked ~ .check {
            background-color: #61b15a
        }

        #products {
            width: 95%;
            padding-left: 205px;
            padding-right: 70px;
            margin: 0;
            float: right;
            padding-top: 30px;
            margin-right: -50px;


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

        #bar_search_button {
            background-color: #071f38;
            color: #fff;
            border: 1px solid #071f38;
            border-radius: 10px;
            font-weight: 800
        }

        #bar_search_button:hover {
            background-color: #092848;
        }


        .clear {
            clear: both
        }

        #bar_search_button.btn-success {
            visibility: hidden
        }

        @media (min-width: 992px) {

            .filter,
            #mobile-filter {
                display: none
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {

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

        @media (min-width: 576px) and (max-width: 767px) {
            #sidebar {
                width: 35%
            }

            /*#products {*/
            /*    width: 65%*/
            /*}*/
            .filter,
            #mobile-filter {
                display: none
            }

            .h3 + .ml-auto {
                margin: 0
            }
        }

        @media (max-width: 575px) {
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

        .fas.fa-star {
            color: #E8F163;
        }


        .d-lg-flex {
            padding-left: 370px;
        }

        .d-sm-flex {
            padding-left: 380px;
        }


        #sidebar {

            margin-top: -50px;
            margin-left: 30px;
        }


        /*      products style  :     */


        .product-grid3 {
            font-family: Roboto, sans-serif;
            text-align: center;
            position: relative;
            z-index: 1
        }

        .product-grid3:before {
            content: "";
            height: 81%;
            width: 100%;
            background: #fff;
            border: 1px solid rgba(0, 0, 0, .1);
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all .5s ease 0s
        }

        .product-grid3:hover:before {
            opacity: 1;
            height: 100%
        }

        .product-grid3 .product-image3 {
            position: relative
        }

        .product-grid3 .product-image3 a {
            display: block
        }

        .product-grid3 .product-image3 img {
            width: 100%;
            height: 240px;
        }

        .product-grid3 .pic-1 {
            opacity: 1;
            transition: all .5s ease-out 0s
        }

        .product-grid3:hover .pic-1 {
            opacity: 0
        }

        .product-grid3 .pic-2 {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: all .5s ease-out 0s
        }

        .product-grid3:hover .pic-2 {
            opacity: 1
        }

        .product-grid3 .social {
            width: 120px;
            padding: 0;
            margin: 0 auto;
            list-style: none;
            opacity: 0;
            position: absolute;
            right: 0;
            left: 0;
            bottom: -23px;
            transform: scale(0);
            transition: all .3s ease 0s
        }

        .product-grid3:hover .social {
            opacity: 1;
            transform: scale(1)
        }

        .product-grid3:hover .product-discount-label, .product-grid3:hover .product-new-label, .product-grid3:hover .title {
            opacity: 0
        }

        .product-grid3 .social li {
            display: inline-block
        }

        .product-grid3 .social li a {
            color: #e67e22;
            background: #fff;
            font-size: 18px;
            line-height: 50px;
            width: 50px;
            height: 50px;
            border: 1px solid rgba(0, 0, 0, .1);
            border-radius: 50%;
            margin: 0 2px;
            display: block;
            transition: all .3s ease 0s
        }

        .product-grid3 .social li a:hover {
            background: #e67e22;
            color: #fff
        }

        .product-grid3 .product-discount-label, .product-grid3 .product-new-label {
            background-color: #e67e22;
            color: #fff;
            font-size: 17px;
            padding: 2px 10px;
            position: absolute;
            right: 10px;
            top: 10px;
            transition: all .3s
        }

        .product-grid3 .product-content {
            z-index: -1;
            padding: 15px;
            text-align: left
        }

        .product-grid3 .title {
            font-size: 14px;
            text-transform: capitalize;
            margin: 0 0 7px;
            transition: all .3s ease 0s
        }

        .product-grid3 .title a {
            color: #414141
        }

        .product-grid3 .price {
            color: #000;
            font-size: 16px;
            letter-spacing: 1px;
            font-weight: 600;
            margin-right: 2px;
            display: inline-block
        }

        .product-grid3 .price span {
            color: #909090;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0;
            text-decoration: line-through;
            text-align: left;
            display: inline-block;
            margin-top: -2px
        }

        .product-grid3 .rating {
            padding: 0;
            margin: -22px 0 0;
            list-style: none;
            text-align: right;
            display: block
        }

        .product-grid3 .rating li {
            color: #ffd200;
            font-size: 13px;
            display: inline-block
        }

        .product-grid3 .rating li.disable {
            color: #dcdcdc
        }

        @media only screen and (max-width: 1200px) {
            .product-grid3 .rating {
                margin: 0
            }
        }

        @media only screen and (max-width: 990px) {
            .product-grid3 {
                margin-bottom: 30px
            }

            .product-grid3 .rating {
                margin: -22px 0 0
            }
        }

        @media only screen and (max-width: 359px) {
            .product-grid3 .rating {
                margin: 0
            }
        }

        /*#products {*/
        /*    width: 85%;*/
        /*    padding-left: 90px;*/
        /*    margin: 0;*/
        /*    float: right;*/
        /*    padding-top: 30px;*/
        /*}*/

        .col-md-3 {
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
            background: #181D31;
        }

        .range-slider .input-range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border: 0;
            border-radius: 50%;
            background: #181D31;
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
            background: #181D31;
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


        #rating_div {
            margin-top: -35px;
        }

        #nav_id {
            position: fixed;
            z-index: 9999;
            top: 0;
            right: 0;
            left: 0;
        }

        #sidebar {
            position: fixed;
            z-index: 9999;
            height: 500px;
        }


        #logo_img {
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

        #sidebar {
            width: 15%;
            float: left;
            margin-top: 40px;

        }

        footer {
            padding-top: 40px;
        }


        body {
            background-color: #eeeeee
        }

        .footer-background {
            background-color: rgb(204, 199, 199)
        }

        @media (max-width: 991px) {
            #heading {
                padding-left: 50px
            }

            #prc {
                margin-left: 70px;
                padding-left: 110px
            }

            #quantity {
                padding-left: 48px
            }

            #produc {
                padding-left: 40px
            }

            #total {
                padding-left: 54px
            }
        }

        @media (max-width: 767px) {
            .mobile {
                font-size: 10px
            }

            h5 {
                font-size: 14px
            }

            h6 {
                font-size: 9px
            }

            #mobile-font {
                font-size: 11px
            }

            #prc {
                font-weight: 700;
                margin-left: -45px;
                padding-left: 105px
            }

            #quantity {
                font-weight: 700;
                padding-left: 6px
            }

            #produc {
                font-weight: 700;
                padding-left: 0px
            }

            #total {
                font-weight: 700;
                padding-left: 9px
            }

            #image {
                width: 60px;
                height: 60px
            }

            .col {
                width: 100%
            }

            #zero-pad {
                padding: 2%;
                margin-left: 10px
            }

            #footer-font {
                font-size: 12px
            }

            #heading {
                padding-top: 15px
            }
        }

    </style>


</head>
<body>


<nav id="nav_id" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <a  href="mainProducts.php"> <img id="logo_img" style="padding-left: 70px"  src="mainUI/imgs/productsLogo.png" alt=""> </a>
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group"><input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for...">
            <div class="input-group-append">
                <button id="bar_search_button" class="btn btn-primary" type="button"><i class="fa fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow d-sm-none"><a class="nav-link dropdown-toggle" href="#"
                                                            id="searchDropdown" role="button" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"> <i
                        class="fa fa-search fa-fw"></i> </a>
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                 aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group"><input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="Search for...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search fa-sm"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1"><a class="nav-link dropdown-toggle" href="#" id="alertsDropdown"
                                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false"> <i class="fa fa-bell fa-fw"></i> <span
                        class="badge badge-danger badge-counter">3+</span> </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">
                <h6 class="dropdown-header"> Alerts Center </h6> <a class="dropdown-item d-flex align-items-center"
                                                                    href="#">
                    <div class="mr-3">
                        <div class="icon-circle"><i class="fa fa-file"></i></div>
                    </div>
                    <div>
                        <div class="small text-gray-500">March 12, 2020</div>
                        <span class="font-weight-bold">related snippets sent</span>
                    </div>
                </a>

                </a> <a class="dropdown-item text-center small text-gray-500" href="#">Show All</a>
            </div>
        </li>

        <li class="nav-item dropdown no-arrow mx-1"><a class="nav-link dropdown-toggle" href="#" id="messagesDropdown"
                                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false"> <i class="fa fa-envelope fa-fw"></i> <span
                        class="badge badge-danger badge-counter">4</span> </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header"> Messages </h6> <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                               src="https://i.imgur.com/nUNhspp.jpg" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">you have new messages</div>
                        <div class="small text-gray-500">Admin · 8m</div>
                    </div>

                </a> <a class="dropdown-item text-center small text-gray-500" href="#">Read all Messages</a>
            </div>
        </li>

        <li class="nav-item dropdown no-arrow mx-1"><a class="nav-link dropdown-toggle" href="#" id="messagesDropdown"
                                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                <i class="fas fa-shopping-cart"></i> <span class="badge badge-danger badge-counter"> 0 </span> </a>

        </li>

        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">

                <!--                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span> -->
                <!--                -->

                <img class="img-profile rounded-circle" src="https://i.imgur.com/uIgDDDd.jpg"> </a>


            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"><a
                        class="dropdown-item" href="profilePage.php"> <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Login.php" data-toggle="modal" data-target="#logoutModal"> <i
                            class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>
            </div>
        </li>
    </ul>
</nav>


<div class="container bg-white rounded-top mt-5" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12 pt-3">

            <div class="d-flex flex-column pt-4">


            </div>

            <?php
            $total = 0;

            $t = $_SESSION['userId'];

            $product_query = "SELECT product_id , product_title , product_image , product_price FROM products WHERE product_id IN( SELECT product_id FROM `cart` WHERE user_id = $t) ";
            $run_query = mysqli_query($con, $product_query);

            if (mysqli_num_rows($run_query) > 0) {
                while ($row = mysqli_fetch_array($run_query)) {

                    $title = $row['product_title'];
                    $img = $row['product_image'];
                    $price = $row['product_price'];
                    $product_id = $row['product_id'];

                    $total = $total + $price ;

                    echo "
                    
                      <div class='d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile'>
                <div class='d-flex flex-row align-items-center'>
                    <div>
                        <img src='mainUI/imgs/$img' '
                             width='150' height='150' alt='' id='image'></div>
                    <div class='d-flex flex-column pl-md-3 pl-1'>
                        <div>
                            <h6>$title</h6>
                        </div>

                        <div>Color:<span class='pl-3'>White</span></div>

                    </div>
                </div>
                <div class='pl-md-0 pl-1'><b>$$price</b></div>
                <div class='pl-md-0 pl-2'><span class='fa fa-minus-square text-secondary'></span><span
                            class='px-md-3 px-1'>1</span><span class='fa fa-plus-square text-secondary'></span></div>
                <div class='pl-md-0 pl-1'><b>$$price</b></div>
                  <a href='shoppingCartPage.php?product_id=$product_id&action=delete'> <button type='button' class='close'>
                    <span aria-hidden='true'>&times;</span>
                </button> </a>
            </div>
                    
                    ";
                }
            }

            ?>



        </div>
    </div>
</div>
<div class="container bg-light rounded-bottom py-4" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                   <a  href="mainProducts.php" > <button class="btn btn-sm bg-light border border-dark" >GO BACK</button> </a>
                </div>
                <div class="px-md-0 px-1" id="footer-font"><b class="pl-md-4">SUBTOTAL<span
                                class="pl-md-4"><?php echo '$'.$total ?></span></b></div>
                <div>
                    <a href='paymentForm.php'>
                        <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">CONTINUE</button></a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

include "mini_Footer.php";

?>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>

</body>
</html>