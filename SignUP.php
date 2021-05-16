<script src="js/sweetalert.min.js"></script>

<?php
include "dataBase.php";

if (isset($_POST['signup'])){
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);
    $repass = $_POST['repass'];

    $f = 1;

    $random = rand(0 , 99999);

    if($email != '' && $pass != '' && $repass != '' ) {

        $sql = "select email from email_info";
        $run_query = mysqli_query($con, $sql);
        $count = mysqli_num_rows($run_query);
        $row = mysqli_fetch_array($run_query);

        for ($i = 0; $i < $count; $i++) {
            if ($email == $row['email']) {
                $f = 0;

                echo '<script> alert("email exist")
    </script>';
                break;

            }
        }
        if($f == 1){
            mysqli_query($con , "INSERT INTO `user_info`(`user_id`,`password`,`user_img`) values ('$random' , '$pass' , 'noImage.jpg')");
            mysqli_query($con , "INSERT INTO `email_info`(`email_id`,`email`) values ('$random' , '$email')");
            header("location:Login.php");
        }
    }
    else{
        echo '<script>
       swal({
        title: "Missing information",
        icon: "error",
        button: "Ok",
    });
    </script>';

    }



}

?>


<!DOCTYPE html>
<html lang="en" >

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


    <style>

        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: white;
            background-repeat: no-repeat
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px
        }

        .card2 {
            margin: 0px 40px
        }

        .logo {
            width: 200px;
            height: 100px;
            margin-top: 20px;
            margin-left: 35px
        }

        .image {
            width: 360px;
            height: 280px
        }

        .border-line {
            border-right: 1px solid #EEEEEE
        }

        .facebook {
            background-color: #3b5998;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .twitter {
            background-color: #1DA1F2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .linkedin {
            background-color: #2867B2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

        .or {
            width: 10%;
            font-weight: bold
        }

        .text-sm {
            font-size: 14px !important
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-blue {
            background-color: #cf920cf2;
            width: 150px;
            color: white;
            border-radius: 2px
        }

        .btn-blue:hover {
            background-color: #b07d0bf2;
            cursor: pointer;
            color: white;
        }

        .bg-blue {
            color: #fff;
            background-color: #1A237E
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px
            }

            .image {
                width: 300px;
                height: 220px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px
            }


            #social_shortcuts
            {
                margin-left: 100px;
            }




        }

        .container-fluid
        {
            margin-top: -50px;
        }


        .pb-5, .py-5 {
            /*padding-bottom: 3rem!important;*/
            padding-top: 130px;
        }

        .fa
        {

            padding-top: 3px;
        }


    </style>



</head>

<body  >


<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <!--                    <div class="row"> <img src="mainUI/imgs/" class="logo"> </div>-->
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="mainUI/imgs/login_img.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div id="social_shortcuts" class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign up with</h6>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <form action="signUp.php" method="post">
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" name="email" id="email" placeholder="Enter a valid Email address"> </div>


                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" id="password" placeholder="Enter Password"> </div>

                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Repeat Password</h6>
                        </label> <input type="password" name="repass" id="repass" placeholder="Repeat your Password"> </div>

                    <!--                    <div class="row px-3 mb-4">-->
                    <!--                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>-->
                    <!--                    </div>-->
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="signup" id="signup">Sign Up</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold"> Have an account? <a href="Login.php" class="text-danger ">Login</a></small> </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>





<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>

</body>
</html>