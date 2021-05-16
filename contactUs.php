<script src="js/sweetalert.min.js"></script>

<?php
include "dataBase.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <style>

        .d-block
        {
            height: 800px;
        }

        .container
        {

            padding-top: 80px;
            padding-bottom: 100px ;
        }


        .form-control
        {
            margin-bottom: 15px;
        }


    </style>


</head>


<body>

<div id="bg_div">
    <img src="mainUI/imgs/contact.jpg" class="d-block w-100" alt="...">

</div>


<div class="container">

    <h1 style="text-align: center ; font-size: 30px ; margin-bottom: 70px">CONTACT US</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="contactUs.php" method="post">
                <input class="form-control" name="name" id="name" placeholder="Name..." /><br />
                <input class="form-control" name="phone" id="phone" placeholder="Phone..." /><br />
                <input class="form-control" name="email" id="email" placeholder="E-mail..." /><br />
                <textarea class="form-control" name="text" id="text " placeholder="How can we help you?" style="height:150px;"></textarea><br />
                <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Send" /><br /><br />
            </form>
        </div>
        <div class="col-md-4">
            <b>Customer service:</b> <br />
            Phone: +970-595-266-581<br />
            E-mail: <a href="mailto:support@mysite.com">support@LuxuryLiving.com</a><br />
            <br /><br />
            <b>Ramallah :</b><br />
            Company Inc, <br />
            Lions street 201<br />
            55001 Ramallah, Palestine<br />
            Phone: -970 595 266 581 <br />
            <a href="mailto:usa@mysite.com">MohammadMubaslat@LuxuryLiving.com</a><br />


            <br /><br />
            <b>Jerusalem :</b><br />
            Company LL Litd, <br />
            Sultan Suleiman street <br />
             Jerusalem ,Palestine<br />
            Phone: +970 597 598 615<br />
            <a href="mailto:hk@mysite.com">HamzehSaleh@LuxuryLiving.com</a><br />


        </div>
    </div>

</div>

<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

mysqli_query($con , "INSERT INTO `contact_us` (`name`, `phone`, `email`, `messege`)
     VALUES ('$name', '$phone', '$email', '$text');");

     mysqli_close($con);

    echo '<script>
       swal({
        title: "Your message sent ",
        icon: "success",
        button: "Ok",
    });
    </script>';

    //header("location:mainProducts.php");

    echo '<script>  window.location.replace("IntroductionPage.php"); </script>' ;


}

?>



</body>
</html>