<?php

include "side_Nav_Admin.php";
include "../dataBase.php";

if(isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete'){
    $order_id = $_GET['order_id'];

    //   echo '<script> alert('.$order_id.') </script>';
    mysqli_query($con,"delete from order_products where order_id='$order_id'")or die("query is incorrect...");
    mysqli_query($con,"delete from orders_info where order_id='$order_id'")or die("query is incorrect...");
}

?>


    <div class="mainContent">

    <form id="show_products_orders" action="" method="POST" enctype="multipart/form-data" class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Orders</h2>
            <!--            <div class="fr">-->
            <!--                <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>-->
            <!--            </div>-->
        </div>
        <div class="formBody row">

            <section id="order_table">
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th >Customer</th>
                            <th >Products</th>
                            <th>Order ID</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Shipping</th>
                            <th>Country</th>
                            <th>Section</th>
                            <th>id</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                        <?php
                        $result=mysqli_query($con,"select * from orders_info , order_products where 1")or die ("query 1 incorrect.....");

                        while(list($order_id,$user_id,$f_name,$email,$city,$state,$zip,$cardname,$cardnumber,$exdate,$prod_count, $total_amt,$cvv,$date,$order_pro_id,$product_id , $qty , $amt)=mysqli_fetch_array($result))
                        {
                            echo "
                          <tr>
                                <td>$f_name</td>
                                <td>$product_id</td>
                                <td>$order_id</td>
                                <td>$email</td>
                                <td>$city</td>
                                <td>$total_amt</td>
                                <td>$prod_count</td>
                                <td>$state</td>
                                <td>done</td>
                                <td>$qty</td>
                                <td>$order_id</td>
                               
                             <td>
                                <a href='orders_Admin.php?order_id=$order_id&action=delete'><span class=''>  <i class='far fa-trash-alt'></i></span></a>
                                <a href=''><span class=''>  <i class='fas fa-check-circle'></i></span></a>

                            </td>
                            </tr> ";
                        }

                        ?>




                        </tbody>
                    </table>
                </div>
            </section>

        </div>

    </form>

    <form id="show_products_orders" action="" method="POST" enctype="multipart/form-data" class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Shipped Products</h2>
            <!--            <div class="fr">-->
            <!--                <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>-->
            <!--            </div>-->
        </div>
        <div class="formBody row">

            <section id="order_table">
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr >
                            <th >Customer Name</th>
                            <th >Product Name</th>
                            <th>Section</th>
                            <th>Order ID</th>
                            <th>Product location</th>
                            <th>Shipment Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                        <tr>
                            <td> Hamzeh</td>
                            <td>Sofa</td>
                            <td>Living</td>
                            <td>22f17bb0</td>
                            <td>Istanbul</td>
                            <td>05/03/2021</td>

                            <td>
                                <a href=" "><span class="">  <i class="far fa-trash-alt"></i></span></a>
                                <a href=""><span class="">  <i class="fas fa-check-circle"></i></span></a>


                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </section>

        </div>

    </form>



<?php
include "footer_Admin.php";
?>