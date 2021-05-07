
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

//    if($_POST['category'] == 'Bedroom'){
//         $product_cat = 1;
//    }
//    if($_POST['category'] == 'Living'){
//        $product_cat = 2;
//    }
//    if($_POST['category'] == 'Storage'){
//        $product_cat = 3;
//    }
//    if($_POST['category'] == 'Decor'){
//        $product_cat = 4;
//    }
//    if($_POST['category'] == 'Study'){
//        $product_cat = 5;
//    }
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

    if($product_id != '' && $product_cat != '' && $product_brand != '' && $product_title != '' && $product_price != '' &&
        $product_desc != '' && $color != '' && $country != '' && $keyword !='' && $img1 != '' && $img2 != '' && $img3 != '' && $img4 !='' ){


    mysqli_query($con , "insert into products(product_id,product_cat,product_brand,product_title,
                                         product_price,product_desc,product_image,product_keywords,product_image2 ,
                                        product_image3 , product_image4, country , color)
                                        values ('$product_id' , '$product_cat' , '$product_brand' ,'$product_title','$product_price',
                                        '$product_desc' , '$img1' ,'$keyword' ,'$img2' , '$img3' ,'$img4' ,'$country','$color')");

//    mysqli_query($con , "insert into products(product_id,product_cat,product_brand,product_title, product_price,product_desc,product_image,product_keywords,product_image2 , product_image3 , product_image4, country , color) values ('2233' , '1' , 'bed' ,'test','44', 'assd' , 'im.png' ,'bed' ,'im2.png' , 'im3.pnf' ,'im4.png' ,'paa','adf')");

mysqli_close($con);

header("location:products_Admin.php");
}

    else{

     echo '<script> alert("please enter all data") </script>' ;

    }

}

?>


<div class="mainContent">


    <form id="show_products_tables" action="" method="POST" enctype="multipart/form-data" class="form">
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

                            $result=mysqli_query($con,"select product_image,product_id, product_title,product_price , color , COUNTRY , product_cat from products  where product_cat=1 or  product_cat=2 or product_cat=3 or product_cat=4 or product_cat=5 or product_cat=6 Limit $page1,12")or die ("query 1 incorrect.....");

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
                    <span>َColor</span>
                    <span>
                    <select name="color">
                        <option >White </option>
                        <option >Brown</option>
                        <option >Black</option>
                        <option >Blue</option>
                         <option>Red</option>
                         <option>Yellow</option>
                    </select>
<!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>



                <label class="inputGroup">
                    <span>Country</span>
                    <span>
                    <select name="country">
                        <option value="cate01">Italy</option>
                        <option value="cate02">UK</option>
                        <option value="cate02">Turkish</option>

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


                <label class="inputGroup hide">
                    <span>Brand</span>
                    <span>
                    <input type="text" name="cate">
                    <select name="brand">
                        <option value="cate01">Brand01</option>
                        <option value="cate02">Brand02</option>
                    </select>
                </span>
                </label>


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




    <form id="add_top_products" action="" method="POST"  class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Add Top Products </h2>
            <div class="fr">
                <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
            </div>
        </div>
        <div class="formBody row">
            <div class="column s-6">
                <label class="inputGroup">
                    <span>Name</span>
                    <span><input type="text" name="name"></span>
                </label>
                <label class="inputGroup">
                    <span>Code</span>
                    <span><input type="text" name="code"></span>
                </label>
                <label class="inputGroup">
                    <span>Price</span>
                    <span><input type="text" name="price"></span>
                </label>
                <label class="inputGroup">
                    <span>Note</span>
                    <span><input type="text" name="note"></span>
                </label>

                <label class="inputGroup">
                    <span>َColor</span>
                    <span>
                    <select name="cate">
                        <option value="cate01">White    </option>
                        <option value="cate02">Brown</option>
                        <option value="cate02">Black</option>
                        <option value="cate02">Blue</option>
                         <option value="cate02">Red</option>
                         <option value="cate02">Yellow</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>






            </div>
            <div class="column s-6">
                <label class="inputGroup">
                    <span>Category</span>
                    <span>
                    <select name="cate">
                        <option value="cate01">Bedroom</option>
                        <option value="cate02">Dining</option>
                        <option value="cate02">Living</option>
                        <option value="cate02">Storage</option>
                    </select>
                        <!--                    <i class="btnNewInput fa fa-plus bg-1 text-fff"></i>-->
                </span>
                </label>




                <label class="inputGroup">
                    <span style="padding-top: 5px;">Keywords</span>
                    <span><input type="text" name="note"></span>
                </label>


                <label class="inputGroup hide">
                    <span>Brand</span>
                    <span>
                    <input type="text" name="cate">
                    <select name="brand">
                        <option value="cate01">Brand01</option>
                        <option value="cate02">Brand02</option>
                    </select>
                </span>
                </label>
                <label class="inputGroup">
                    <span>Image 1</span>
                    <input type="hidden" name="img" value="src">
                    <span>
                    <input type="file" name="img" onchange="getImg(this)" multiple>
                    <img src="http://bookstore.crunchpress.com/wp-content/uploads/2013/05/b2.jpg" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 2</span>
                    <input type="hidden" name="img" value="src">
                    <span>
                    <input type="file" name="img" onchange="getImg(this)" multiple>
                    <img src="http://bookstore.crunchpress.com/wp-content/uploads/2013/05/b2.jpg" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 3</span>
                    <input type="hidden" name="img" value="src">
                    <span>
                    <input type="file" name="img" onchange="getImg(this)" multiple>
                    <img src="http://bookstore.crunchpress.com/wp-content/uploads/2013/05/b2.jpg" alt="" width="50">
                </span>

                </label>

                <label class="inputGroup">
                    <span>Image 4</span>
                    <input type="hidden" name="img" value="src">
                    <span>
                    <input type="file" name="img" onchange="getImg(this)" multiple>
                    <img src="http://bookstore.crunchpress.com/wp-content/uploads/2013/05/b2.jpg" alt="" width="50">
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




    </form>



    <?php
include "footer_Admin.php";
?>

