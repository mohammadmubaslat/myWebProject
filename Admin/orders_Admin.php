
<?php

include "side_Nav_Admin.php";
include "../dataBase.php";
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
                            <th>Email</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Color</th>
                            <th>Quantity</th>
                            <th>Shipping</th>
                            <th>Country</th>
                            <th>Section</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                        <?php
                        $result=mysqli_query($con,"select * from orders_info where 1")or die ("query 1 incorrect.....");

                        while(list($id,$user_id,$f_name,$email,$city,$prod_count, $total_amt)=mysqli_fetch_array($result))
                        {
                            echo "
                          <tr>
                                <td>$f_name</td>
                                <td>the products</td>
                                <td>$id</td>
                                <td>$email</td>
                                <td>$city</td>
                                <td>$total_amt</td>
                                <td>red</td>
                                <td>$prod_count</td>
                                <td>palestine</td>
                                <td>done</td>
                                <td>2</td>
                               
                             <td>
                                <a href=' '><span class=''>  <i class='far fa-trash-alt'></i></span></a>
                                <a href=''><span class=''>  <i class='fas fa-check-circle'></i></span></a>


                            </td>
                            </tr> ";
                        }

                        ?>


                        <tr>
                            <td> Hamzeh</td>
                            <td>22qp5</td>
                            <td>Big Sofa</td>
                            <td>-500 $</td>
                            <td>Red</td>
                            <td>Medium</td>
                            <td>Italy</td>
                            <td>Noth ..</td>
                            <td>-500 $</td>

                            <td>Medium</td>
                            <td>Italy</td>
                            <td>Noth ..</td>
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