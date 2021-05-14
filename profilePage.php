<?php
include "dataBase.php";
session_start();

if (isset($_SESSION['loged'])){
   if($_SESSION['loged'] == 1){
       $t = $_SESSION['userId'] ;

$profile_query = "SELECT * FROM `user_info` , `email_info` WHERE user_id = email_id and user_id=" . "$t";
$run_query = mysqli_query($con, $profile_query);


if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $user_id = $row['user_id'];
    $full_name = $row['full_name'];
    $email = $row['email'];
    $password = $row['password'];
    $address = $row['address'];
    $countryPart = $row['country'];
    $user_image = "mainUI/imgs/" . $row['user_img'];
    $phone1 = $row['mobile'];


    $stringParts = explode('-', $address);
    $cityPart = $stringParts[0];
    $streetPart = $stringParts[1];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link href="navBarStyle.css" rel="stylesheet" >



    <style>

        body {
            margin: 0;
            padding-top: 120px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }
        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }
        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }
        .account-settings .user-profile .user-avatar img {
            width: 110px;
            height: 110px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }
        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }
        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }
        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }
        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }
        .account-settings .about p {
            font-size: 0.825rem;
        }
        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }


        .btn-light {

            margin-top: 15px;
        }


        .col-xl-12
        {
            padding-top: 20px;

        }

        .btn-primary{
            color: #fff;
            background-color: #071f38;
            border-color: #071f38;
        }

        .btn-primary:hover{
            color: #fff;
            background-color: #071f38d1;
            border-color: #071f38d1;
        }

.account-settings
{
    margin-top: 70px;
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


<form action="profilePage.php" method="post">

<div style="margin-bottom: 100px;" class="container">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile ">



                            <div class="user-avatar image" id="cancel-btn">
                                <img id="img" src="<?php echo $user_image?>" alt="">
                            </div>



                            <h5 class="user-name" ><?php echo $full_name?></h5>

                            <button onclick="defaultBtnActive()" type="button" id="custom-btn" class="btn btn-light">Edit Photo</button>
                            <input type="file" id="default-btn" name="default-btn" hidden>



                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">


                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="enter your name" value="<?php echo $full_name?>">
                                <!--                                <div class="form-control" > --><?php //echo $full_name?><!-- </div>-->
                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="enter your eamil" value="<?php echo $email?>">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter your phone number" value="<?php echo $phone1?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Password</label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="password" value="<?php echo sha1($password)?>">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary">Address</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">Street</label>
                                <input type="name" class="form-control" name="street" id="street" placeholder="enter your street " value="<?php echo $streetPart?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">City</label>
                                <input type="name" class="form-control" name="city" id="city" placeholder="enter your city" value="<?php echo $cityPart?>">
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">Country</label>
                                <input type="name" class="form-control" name="counTry" id="counTry" placeholder="enter your country" value="<?php echo $countryPart?>">
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Zip Code</label>
                                <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <button type="submit" id="submit_cancel" name="submit_cancel" class="btn btn-secondary">Cancel</button>
                                <button type="submit" id="submit_update" name="submit_update" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</form>

<?php
}
}
   }
}

include "mini_Footer.php";

?>

<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>


<script>
    const wrapper = document.querySelector(".wrapper");
    const fileName = document.querySelector(".file-name");
    const defaultBtn = document.querySelector("#default-btn");
    const customBtn = document.querySelector("#custom-btn");
    const cancelBtn = document.querySelector("#cancel-btn ");
    const img = document.querySelector("#img");
    let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
    function defaultBtnActive(){
        defaultBtn.click();
    }
    defaultBtn.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(){
                const result = reader.result;
                img.src = result;
                wrapper.classList.add("active");
            }
            cancelBtn.addEventListener("click", function(){
                img.src = "";
                wrapper.classList.remove("active");
            })
            reader.readAsDataURL(file);
        }
        if(this.value){
            let valueStore = this.value.match(regExp);
            fileName.textContent = valueStore;
        }
    });
</script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>

<?php




if (isset($_POST['submit_cancel'])) {

    header("location:profilePage.php");

}


if (isset($_POST['submit_update'])) {


    $up_user = $_POST['fullName'];
    $up_email = $_POST['email'];
   $phone = $_POST['phone'];
    $up_pass = $_POST['pass'];
   $up_address = $_POST['street'] . '-' . $_POST['city'] ;
   $up_country = $_POST['counTry'];
    $up_img = $_POST['default-btn'];

$u =  $_SESSION['userId'];

   mysqli_query($con, "UPDATE user_info SET `full_name` = '$up_user' , `password` = '$up_pass ', `mobile` = '$phone' ,`address` = '$up_address', `country` = '$up_country' , `user_img` = '$up_img' WHERE `user_id` = " . "$u");

   mysqli_close($con);
 // echo  $up_user .' , '. $up_email.' , '.$up_pass.' , '. $phone.'  , '.$up_address .' , '.$up_country.' , '. $up_img .' , '. $u;
 header("location:profilePage.php");
}

        ?>