<?php
include "dataBase.php";
session_start();

//$p = $_GET['product_id'];
//echo $p;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



    <style>


        body{margin-top:20px;
            background: #2B2B2A;
            /*background: -webkit-linear-gradient(to right, #5B564D, #C0B397);*/
            /*background: linear-gradient(to right, #5B564D, #C0B397);*/
        }

        /* WRAPPERS */
        .wrapper {
            width: 100%;
            overflow-x: hidden;
        }
        .wrapper {
            padding: 0 20px;
        }
        .wrapper-content {
            padding: 20px 10px 40px;
        }
        #page-wrapper {
            padding: 0 15px;
            min-height: 568px;
            position: relative !important;
        }
        @media (min-width: 768px) {
            #page-wrapper {
                position: inherit;
                margin: 0 0 0 240px;
                min-height: 2002px;
            }
        }

        /* Payments */
        .payment-card {
            background: #ffffff;
            padding: 20px;
            margin-bottom: 25px;
            border: 1px solid #e7eaec;
        }
        .payment-icon-big {
            font-size: 60px;
            color: #d1dade;
        }
        .payments-method.panel-group .panel + .panel {
            margin-top: -1px;
        }
        .payments-method .panel-heading {
            padding: 15px;
        }
        .payments-method .panel {
            border-radius: 0;
        }
        .payments-method .panel-heading h5 {
            margin-bottom: 5px;
        }
        .payments-method .panel-heading i {
            font-size: 26px;
        }

        .payment-icon-big {
            font-size: 60px !important;
            color: #d1dade;
        }

        .form-control,
        .single-line {
            background-color: #FFFFFF;
            background-image: none;
            border: 1px solid #e5e6e7;
            border-radius: 1px;
            color: inherit;
            display: block;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
            font-size: 14px;
        }

        .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0;
        }
        .text-navy {
            color: #1ab394;
        }
        .text-success {
            color: #1c84c6;
        }
        .text-warning {
            color: #f8ac59;
        }
        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }
        .ibox.collapsed .ibox-content {
            display: none;
        }
        .ibox.collapsed .fa.fa-chevron-up:before {
            content: "\f078";
        }
        .ibox.collapsed .fa.fa-chevron-down:before {
            content: "\f077";
        }
        .ibox:after,
        .ibox:before {
            display: table;
        }
        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }
        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }
        .ibox-footer {
            color: inherit;
            border-top: 1px solid #e7eaec;
            font-size: 90%;
            background: #ffffff;
            padding: 10px 15px;
        }
        .text-danger {
            color: #ed5565;
        }

 .left_div
 {

     width: 50%;
     height: 100%;

 }
        .right_div
        {

            width: 50%;
 height: 100%;
        }
 .first_form_group
 {
     padding-left: 120px;
     padding-top: 25px;
 }

 .two_first_divs
 {

     display: flex;
     height: 200px;
 }
    </style>
</head>

<body>


<div class="container">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-4">
                <div class="payment-card">
                    <i class="fa fa-cc-visa payment-icon-big text-success"></i>
                    <h2>
                        **** **** **** 1060
                    </h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <small>
                                <strong>Expiry date:</strong> 10/16
                            </small>
                        </div>
                        <div class="col-sm-6 text-right">
                            <small>
                                <strong>Name:</strong> Mohammad
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-card">
                    <i class="fa fa-cc-mastercard payment-icon-big text-warning"></i>
                    <h2>
                        **** **** **** 7002
                    </h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <small>
                                <strong>Expiry date:</strong> 10/16
                            </small>
                        </div>
                        <div class="col-sm-6 text-right">
                            <small>
                                <strong>Name:</strong> Hamzeh
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-card">
                    <i class="fa fa-cc-discover payment-icon-big text-danger"></i>
                    <h2>
                        **** **** **** 3466
                    </h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <small>
                                <strong>Expiry date:</strong> 10/16
                            </small>
                        </div>
                        <div class="col-sm-6 text-right">
                            <small>
                                <strong>Name:</strong> Rebal
                            </small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-lg-12">

                <form action="paymentForm.php" method="post">
                <div class="ibox">
                    <div class="ibox-title">
                        Shipping details
                    </div>
                    <div class="ibox-content">

                        <div class="panel-group payments-method" id="shipping_details">
                            <div class="panel panel-default">

                                <div class="two_first_divs">
                                    <div class="left_div">
                                        <div class="first_form_group">
                                            <label>Full Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="vname" id="vname"
                                                       placeholder="Valid Name" required="">
                                            </div>
                                        </div>
                                        <div class="first_form_group">
                                            <label>Country</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="vcountry"
                                                       placeholder="Your Country" required="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="right_div">
                                        <div class="first_form_group">
                                            <label>Phone Number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="vphone"
                                                       placeholder="Valid Phone Number" required="">
                                            </div>
                                        </div>

                                        <div class="first_form_group">
                                            <label>Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="vaddress"
                                                       placeholder="Your Address" required="">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>




                <div class="ibox">
                    <div class="ibox-title">
                        Payment method
                    </div>
                    <div class="ibox-content">

                        <div class="panel-group payments-method" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="pull-right">
                                        <i class="fa fa-cc-paypal text-success"></i>
                                    </div>
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">PayPal</a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-md-10">
                                                <h2>Summary</h2>
                                                <strong>Products:</strong>
                                                <ol>
                                                <?php
                                                $total = 0;
                                                $u = $_SESSION['userId'];
                                                $product_query = "SELECT product_id,product_title , product_price FROM products WHERE product_id IN( SELECT product_id FROM `cart` WHERE user_id = '.$u.') ";
                                                $run_query = mysqli_query($con, $product_query);

                                                if (mysqli_num_rows($run_query) > 0) {
                                                    while ($row = mysqli_fetch_array($run_query)) {

                                                        $title = $row['product_title'];
                                                        $price = $row['product_price'];

                                                        $total = $total + $price;
                                                        echo ' 
                                               
                                                    <li>' . $title . '</li>
                                             
                                                ';
                                                    }
                                                }
?>
                                                </ol>

                                                <strong>Price:</strong> <span class="text-navy">$<?php echo $total ?></span> <br>


                                                <a href="https://www.paypal.com/us/signin" class="btn btn-success">
                                                    <i class="fa fa-cc-paypal">
                                                        Purchase via PayPal
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="pull-right">
                                        <i class="fa fa-cc-amex text-success"></i>
                                        <i class="fa fa-cc-mastercard text-warning"></i>
                                        <i class="fa fa-cc-discover text-danger"></i>
                                    </div>
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Credit Card</a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h2>Summary</h2>
                                                <strong>Products:</strong>
                                                <ol>

                                                    <?php
                                                    $total = 0;
                                                    $p_id = " ";
                                                    $product_query = "SELECT product_id,product_title , product_price FROM products WHERE product_id IN( SELECT product_id FROM `cart` WHERE user_id= '$u') ";
                                                    $run_query = mysqli_query($con, $product_query);

                                                    if (mysqli_num_rows($run_query) > 0) {
                                                        while ($row = mysqli_fetch_array($run_query)) {

                                                            $title = $row['product_title'];
                                                            $price = $row['product_price'];
                                                            $GLOBALS['p_id'] = $row['product_id'];

                                                            $total = $total + $price;
                                                            echo ' 
                                               
                                                    <li>' . $title . '</li>
                                             
                                                ';
                                                        }
                                                    }
                                                    ?>
                                                </ol>

                                                <strong>Price:</strong> <span class="text-navy">$<?php echo $total ?></span> <br>


                                            </div>
                                            <div class="col-md-8">

<!--                                                <form role="form" id="payment-form" action="paymentForm.php" method="post">-->
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                <label>CARD NUMBER</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="vcardnum" id="vcardnum" placeholder="Valid Card Number" required="">
                                                                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7 col-md-7">
                                                            <div class="form-group">
                                                                <label>EXPIRATION DATE</label>
                                                                <input type="text" class="form-control" name="vexpd" id="vexpd" placeholder="MM / YY" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-5 col-md-5 pull-right">
                                                            <div class="form-group">
                                                                <label>CV CODE</label>
                                                                <input type="text" class="form-control" name="vcvv" id="vcvv" placeholder="CVC" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                <label>NAME OF CARD</label>
                                                                <input type="text" class="form-control" name="vcardname" id="vcardname" placeholder="NAME AND SURNAME">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <button class="btn btn-primary" type="submit" name="pay" id="pay">Make a payment!</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

if(isset($_POST['pay'])){
    $name = $_POST['vname'];
    $phone = $_POST['vphone'];
    $country = $_POST['vcountry'];
    $address = $_POST['vaddress'];
    $card_num = $_POST['vcardnum'];
    $expd = $_POST['vexpd'];
    $cv = $_POST['vcvv'];
    $cardName = $_POST['vcardname'];
    $order_id = rand(0,999);
    $order_pro_id = rand(0,999);
    $p = $GLOBALS['p_id'];

    mysqli_query($con, "insert into orders_info(order_id,user_id,f_name,address,city,cardname , cardnumber,expdate , cvv )
                                              values ('$order_id','12393' , '$name' , '$address' , '$country' , '$cardName' , '$card_num' , '$expd','$cv')");

    mysqli_query($con, "insert into order_products(order_pro_id,order_id,product_id,qty,amt)
                                              values ('$order_pro_id','$order_id', '$p' , '4' , '4')");


    mysqli_query($con, "delete from cart where product_id = '$p'");


    mysqli_close($con);



    echo '<script>  window.location.replace("mainProducts.php"); </script>' ;

//    header("location:mainProducts.php");
}


?>




<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</body>
</html>