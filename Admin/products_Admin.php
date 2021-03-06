<script src="../js/sweetalert.min.js"></script>

<?php

include "side_Nav_Admin.php";

session_start() ;
include '../dataBase.php';

error_reporting(0);
if(isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete'){
    $product_code = $_GET['product_id'];
    $result=mysqli_query($con , "select product_image from products where product_id='$product_code'") or die("query is incorrect...");

    list($pic) = mysqli_fetch_array($result);
    $path = "../mainUI/imgs/$pic" ;

    if(file_exists($path)==true)
    {
        unlink($path);
    }
    else
    {}
    mysqli_query($con,"delete from products where product_id='$product_code'")or die("query is incorrect...");
    mysqli_query($con,"delete from cart where product_id='$product_code'")or die("query is incorrect...");
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

if(isset($_POST['btn_save'])){


    $product_id = $_POST['code'];
    $product_cat = $_POST['category'];
    $product_brand = $_POST['brand'];
    $product_title =$_POST['name'];
    $product_price = $_POST['price'];
    $product_desc = $_POST['description'];
    $color = $_POST['color'];
    $country = $_POST['country'];
    $keyword = $_POST['keyword'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];
    $img4 = $_POST['img4'];

    $flag = 1;

    if($product_id != '' && $product_cat != '' && $product_brand != '' && $product_title != '' && $product_price != '' &&
        $product_desc != '' && $color != '' && $country != '' && $keyword !='' && $img1 != '' && $img2 != '' && $img3 != '' && $img4 !='' ){



        $sql = "select product_id from products";
        $run_query = mysqli_query($con, $sql);
        $count = mysqli_num_rows($run_query);
        $row = mysqli_fetch_array($run_query);

        for ($i = 0; $i < $count; $i++) {
            if ($product_id == $row['product_id']) {
                $flag = 0;
                echo '<script>
       swal({
        title: "Product Code Exist",
        text: "please enter different code",
        icon: "error",
        button: "Ok",
    });
    </script>';
                break;
            }
        }

        if($flag == 1){

            mysqli_query($con , "insert into products(product_id,product_cat,product_brand,product_title,
                                         product_price,product_desc,product_image,product_keywords,product_image2 ,
                                        product_image3 , product_image4, country , color)
                                        values ('$product_id' , '$product_cat' , '$product_brand' ,'$product_title','$product_price',
                                        '$product_desc' , '$img1' ,'$keyword' ,'$img2' , '$img3' ,'$img4' ,'$country','$color')");

//    mysqli_query($con , "insert into products(product_id,product_cat,product_brand,product_title, product_price,product_desc,product_image,product_keywords,product_image2 , product_image3 , product_image4, country , color) values ('2233' , '1' , 'bed' ,'test','44', 'assd' , 'im.png' ,'bed' ,'im2.png' , 'im3.pnf' ,'im4.png' ,'paa','adf')");

            mysqli_close($con);

            echo '<script>
       swal({
        title: "Product Added",
        icon: "success",
        button: "Ok",
    });
    </script>';


        }

    }

    else{
        echo '<script> 
       swal({
        title: "Missing Information",
        text: "please enter full data",
        icon: "warning",
        button: "Ok",
    });
    </script>';


    }


    echo '<script>  window.location.replace("products_Admin.php"); </script>' ;


}



?>


<div class="mainContent">


    <form id="show_products_tables" action="products_Admin.php" method="POST" enctype="multipart/form-data" class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Products in warehouse</h2>
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
                            <th >Image</th>
                            <th >Code</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Color</th>

                            <th>Country</th>
                            <th>Brand</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                        <?php

                        $result=mysqli_query($con,"select product_image,product_id, product_title,product_price , color , COUNTRY , product_cat from products  where product_cat=1 or  product_cat=2 or product_cat=3 or product_cat=4 or product_cat=5 or product_cat=6 Limit $page1,100")or die ("query 1 incorrect.....");

                        while(list($product_image,$product_id,$product_title,$product_price,$color , $country ,$product_cat)=mysqli_fetch_array($result))
                        {
                            echo "
                          <tr>
                                <td><img style='height: 40px; width: 40px;' src='../mainUI/imgs/$product_image' alt='' > </td>
                                <td>$product_id</td>
                                <td>$product_title</td>
                                <td>$product_price</td>
                                <td>$color</td>
                                <td>$country</td>
                                <td>$product_cat</td>
                                <td> <a href='products_Admin.php?product_id=$product_id&action=delete'> <button type='button' class='close' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button> </a> </td>
                            </tr> ";
                        }

                        ?>



                        </tbody>
                    </table>
                </div>
            </section>

        </div>

    </form>




    <!-- DETAIL FORM -->

    <form id="add_product" action="products_Admin.php" method="POST" class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Add Product </h2>
            <div class="fr">
                <button type="submit" id="btn_save" name="btn_save" class="btnSave bg-1 text-fff text-bold fr">SAVE</button><a href="" class="btnAdd fa fa-plus bg-1 text-fff"></a>
            </div>
        </div>
        <div class="formBody row">
            <div class="column s-6">
                <label class="inputGroup">
                    <span>Name</span>
                    <span><input type="text" id="name" name="name"></span>
                </label>
                <label class="inputGroup">
                    <span>Code</span>
                    <span><input type="text" id="code" name="code"></span>
                </label>
                <label class="inputGroup">
                    <span>Price</span>
                    <span><input type="text" id="price" name="price"></span>
                </label>
                <label class="inputGroup">
                    <span>Note</span>
                    <span><input type="text" name="note"></span>
                </label>

                <label class="inputGroup">
                    <span>??Color</span>
                    <span>
                    <select name="color">
                        <option value="White">White </option>
                        <option value="Brown">Brown</option>
                        <option value="Black">Black</option>
                        <option value="Blue">Blue</option>
                         <option value="Red">Red</option>
                        <option value="Green">Green</option>
                         <option value="Yellow">Yellow</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>



                <label class="inputGroup">
                    <span>Country</span>
                    <span>
                    <select name="country">
                        <option value="Italy">Italy</option>
                        <option value="UK">UK</option>
                        <option value="Turkish">Turkish</option>

                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>


            </div>
            <div class="column s-6">
                <label class="inputGroup">
                    <span>Category</span>
                    <span>
                    <select name="category">
                        <option value="1">Bedroom</option>
                        <option value="2">Living</option>
                        <option value="3">Storage</option>
                         <option value="4" >Decor</option>
                         <option value="5">Study</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>

                <label class="inputGroup">
                    <span>Brand</span>
                    <span>
                    <select name="brand">
                        <option value="1">Bentley</option>
                        <option value="2">Fendi</option>
                         <option value="3">Trussardi</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>


                <label class="inputGroup">
                    <span style="padding-top: 5px;">Keywords</span>
                    <span><input type="text" name="keyword" id="keyword"></span>
                </label>


                <!--                <label class="inputGroup hide">-->
                <!--                    <span>Brand</span>-->
                <!--                    <span>-->
                <!--                    <input type="text" name="cate">-->
                <!--                    <select name="brand">-->
                <!--                        <option value="cate01">Brand01</option>-->
                <!--                        <option value="cate02">Brand02</option>-->
                <!--                    </select>-->
                <!--                </span>-->
                <!--                </label>-->


                <label class="inputGroup">
                    <span>Image 1</span>
                    <input type="hidden" id="img1" name="img1" value="src">
                    <span>
                    <input type="file" name="img1" id="img1" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 2</span>
                    <input type="hidden" id="img2" name="img2" value="src">
                    <span>
                    <input type="file" name="img2" id="img2" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 3</span>
                    <input type="hidden" id="img3" name="img3" value="src">
                    <span>
                    <input type="file" name="img3" id="img3" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 4</span>
                    <input type="hidden" id="img4" name="img4" value="src">
                    <span>
                    <input type="file" name="img4" id="img4" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>


            </div>
            <div class="column">
                <label class="inputGroup">
                    <span>Description</span>
                    <textarea class="textArea_products_class" name="description"></textarea>
                </label>
            </div>


            <div class="column">
                <label class="inputGroup">
                    <span style="width: 00px;">Aditional Description</span>
                    <textarea class="textArea_products_class" name="aditional_description"></textarea>
                </label>
            </div>



        </div>
    </form>


    <!-- //////////////////////   update    ///////////////// -->

    <form id="add_top_products" action="products_Admin.php" method="POST"  class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Edit Product Info </h2>
            <div class="fr">
                <button type="submit" class="btnSave bg-1 text-fff text-bold fr" id="update_btn" name="update_btn">SAVE</button>
            </div>
        </div>
        <div class="formBody row">
            <div class="column s-6">
                <label class="inputGroup">
                    <span>Name</span>
                    <span><input type="text" name="upname" id="upname"></span>
                </label>
                <label class="inputGroup">
                    <span>Code</span>
                    <span><input type="text" name="upcode" id="upcode"></span>
                </label>
                <label class="inputGroup">
                    <span>Price</span>
                    <span><input type="text" name="upprice" id="upprice"></span>
                </label>
                <label class="inputGroup">
                    <span>Note</span>
                    <span><input type="text" name="note"></span>
                </label>

                <label class="inputGroup">
                    <span>??Color</span>
                    <span>
                    <select name="upcolor">
                        <option value="White">White </option>
                        <option value="Brown">Brown</option>
                        <option value="Black">Black</option>
                        <option value="Blue">Blue</option>
                         <option value="Red">Red</option>
                       <option value="Green">Green</option>
                         <option value="Yellow">Yellow</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>

                <label class="inputGroup">
                    <span>Country</span>
                    <span>
                    <select name="upcountry">
                        <option value="Italy">Italy</option>
                        <option value="UK">UK</option>
                        <option value="Turkish">Turkish</option>

                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>


            </div>
            <div class="column s-6">
                <label class="inputGroup">
                    <span>Category</span>
                    <span>
                     <select name="upcategory">
                        <option value="1">Bedroom</option>
                        <option value="2">Living</option>
                        <option value="3">Storage</option>
                         <option value="4" >Decor</option>
                         <option value="5">Study</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>

                <label class="inputGroup">
                    <span>Brand</span>
                    <span>
                    <select name="upbrand">
                        <option value="1">Bentley</option>
                        <option value="2">Fendi</option>
                         <option value="3">Trussardi</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>




                <label class="inputGroup">
                    <span style="padding-top: 5px;">Keywords</span>
                    <span><input type="text" name="upkeyword" id="upkeyword"></span>
                </label>


                <!--                <label class="inputGroup hide">-->
                <!--                    <span>Brand</span>-->
                <!--                    <span>-->
                <!--                    <input type="text" name="cate">-->
                <!--                    <select name="brand">-->
                <!--                        <option value="cate01">Brand01</option>-->
                <!--                        <option value="cate02">Brand02</option>-->
                <!--                    </select>-->
                <!--                </span>-->
                <!--                </label>-->
                <!--                -->

                <label class="inputGroup">
                    <span>Image 1</span>
                    <input type="hidden" id="upimg1" name="upimg1" value="src">
                    <span>
                    <input type="file" name="upimg1" id="upimg1" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 2</span>
                    <input type="hidden" id="upimg2" name="upimg2" value="src">
                    <span>
                    <input type="file" name="upimg2" id="upimg2" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 3</span>
                    <input type="hidden" id="upimg3" name="upimg3" value="src">
                    <span>
                    <input type="file" name="upimg3" id="upimg3" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 4</span>
                    <input type="hidden" id="upimg4" name="upimg4" value="src">
                    <span>
                    <input type="file" name="upimg4" id="upimg4" onchange="getImg(this)" multiple>
                    <img src="" alt="" width="50">
                </span>

                </label>


            </div>
            <div class="column">
                <label class="inputGroup">
                    <span>Description</span>
                    <textarea class="textArea_products_class" name="updescription"></textarea>
                </label>
            </div>


            <div class="column">
                <label class="inputGroup">
                    <span style="width: 00px;">Aditional Description</span>
                    <textarea class="textArea_products_class" name="aditional_description"></textarea>
                </label>
            </div>



    </form>

    <?php


    if(isset($_POST['update_btn'])){

        $product_id = $_POST['upcode'];
        $product_cat = $_POST['upcategory'];
        $product_brand = $_POST['upbrand'];
        $product_title =$_POST['upname'];
        $product_price = $_POST['upprice'];
        $product_desc = $_POST['updescription'];
        $color = $_POST['upcolor'];
        $country = $_POST['upcountry'];
        $keyword = $_POST['upkeyword'];
        $img1 = $_POST['upimg1'];
        $img2 = $_POST['upimg2'];
        $img3 = $_POST['upimg3'];
        $img4 = $_POST['upimg4'];


        if($product_id != '' && $product_cat != '' && $product_brand != '' && $product_title != '' && $product_price != '' &&
            $product_desc != '' && $color != '' && $country != '' && $keyword !='' && $img1 != '' && $img2 != '' && $img3 != '' && $img4 !='' ){


            mysqli_query($con , "UPDATE `products` SET `product_cat`='$product_cat',`product_brand`='$product_brand',
            `product_title`='$product_title',`product_price`='$product_price',
            `product_desc`='$product_desc',`product_image`='$img1',`product_keywords`='$keyword',
            `product_image2`='$img2',`product_image3`='$img3',`product_image4`='$img4',`COUNTRY`='$country',`color`='$color' where `product_id`='$product_id'");




//    mysqli_query($con , "insert into products(product_id,product_cat,product_brand,product_title, product_price,product_desc,product_image,product_keywords,product_image2 , product_image3 , product_image4, country , color) values ('2233' , '1' , 'bed' ,'test','44', 'assd' , 'im.png' ,'bed' ,'im2.png' , 'im3.pnf' ,'im4.png' ,'paa','adf')");

            mysqli_close($con);

            echo '<script>
       swal({
        title: "Product updated",
        icon: "success",
        button: "Ok",
    });
    </script>';


        }

    }




    ?>



    <?php
    include "footer_Admin.php";
    ?>

