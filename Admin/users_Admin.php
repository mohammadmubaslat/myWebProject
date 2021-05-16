<?php

include "side_Nav_Admin.php";


session_start() ;
include '../dataBase.php';
error_reporting(0);
if(isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete'){
    $user_code = $_GET['user_id'];
    $result=mysqli_query($con , "select user_img from user_info where user_id='$user_code'") or die("query is incorrect...");

    list($pic) = mysqli_fetch_array($result);
    $path = "../mainUI/imgs/$pic" ;

    if(file_exists($path)==true)
    {
        unlink($path);
    }

    mysqli_query($con," delete from `email_info` where email_id='$user_code'")or die("query is incorrect...");
    mysqli_query($con," delete from `user_info` where email_id='$user_code'")or die("query is incorrect...");


    echo '<script>  window.location.reload(false);  </script>';


}

$page=$_GET['page'];

if($page=="" || $page=="1")
{
    $page1=0;
}
else
{
    $page1=($page*10)-10;
}

?>

<div class="mainContent">




    <form id="show_users" action="" method="POST" enctype="multipart/form-data" class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Users</h2>
            <div class="fr">
                <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
            </div>
        </div>
        <div class="formBody row">

            <section>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr >
                            <th>Photo</th>
                            <th>ID</th>
                            <th >Full Name</th>
                            <th >Email</th>
                            <th>Country</th>
                            <th>Address</th>
                            <!--                            <th>Password</th>-->
                            <th>Interests</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                        <tr>


                            <?php

                            $result=mysqli_query($con,"SELECT * FROM `email_info` , `user_info` WHERE user_id = email_id")or die ("query 1 incorrect.....");

                            while(list($email_id , $email , $user_id,$name,$password,$address,  $img  , $mobile ,$country, $interest  )=mysqli_fetch_array($result))
                            {

                                echo "

                          <tr>
                                <td><img style='height: 40px; width: 40px;' src='../mainUI/imgs/$img' alt='' > </td>
                               
            
                                <td>$user_id</td>
                                 <td>$name</td>
                                 <td>$email</td>
                                <td>$country</td>
                                 <td>$address</td>
                                <td>$interest</td>
              
                                <td> <a href='users_Admin.php?user_id=$user_id&action=delete'> <button type='button' class='close' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button> </a> </td>
                            </tr>
";
                            }

                            ?>




                        </tbody>
                    </table>
                </div>
            </section>

        </div>

    </form>





    <?php

    include "footer_Admin.php";

    ?>
