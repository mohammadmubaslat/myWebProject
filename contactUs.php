

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
            <form action="/post" method="post">
                <input class="form-control" name="name" placeholder="Name..." /><br />
                <input class="form-control" name="phone" placeholder="Phone..." /><br />
                <input class="form-control" name="email" placeholder="E-mail..." /><br />
                <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
                <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
            </form>
        </div>
        <div class="col-md-4">
            <b>Customer service:</b> <br />
            Phone: +970-595-266-581<br />
            E-mail: <a href="mailto:support@mysite.com">support@mysite.com</a><br />
            <br /><br />
            <b>Headquarter:</b><br />
            Company Inc, <br />
            Las vegas street 201<br />
            55001 Nevada, USA<br />
            Phone: +1 145 000 101<br />
            <a href="mailto:usa@mysite.com">usa@mysite.com</a><br />


            <br /><br />
            <b>Hong kong:</b><br />
            Company HK Litd, <br />
            25/F.168 Queen<br />
            Wan Chai District, Hong Kong<br />
            Phone: +852 129 209 291<br />
            <a href="mailto:hk@mysite.com">hk@mysite.com</a><br />


        </div>
    </div>

</div>






</body>
</html>