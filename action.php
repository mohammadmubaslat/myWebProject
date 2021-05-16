<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "dataBase.php";
$_SESSION['btncat'] = "";

if(isset($_POST["category"])){
    $category_query = "SELECT * FROM categories";

    $run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
    if(mysqli_num_rows($run_query) > 0){
        $i=1;
        while($row = mysqli_fetch_array($run_query)){

            $cid = $row["cat_id"];
            $cat_name = $row["cat_title"];
            $sql = "SELECT COUNT(*) AS count_items FROM products WHERE product_cat=$i";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            $i++;

            echo "
            
<div type='button' class='category' cid='$cid'>

					<a href='#' style='text-decoration: none;'  >
					<span ></span>
                   <li class='list-group-item list-group-item-action d-flex justify-content-between align-items-center '> $cat_name <span>$count</span> </li>
                    </a>
                    
                    </div>
			";

        }

    }
}

if(isset($_POST["brand"])){
    $brand_query = "SELECT * FROM brands";
    $run_query = mysqli_query($con,$brand_query);

    if(mysqli_num_rows($run_query) > 0){
        $i=1;
        while($row = mysqli_fetch_array($run_query)){

            $bid = $row["brand_id"];
            $brand_name = $row["brand_title"];
            $sql = "SELECT COUNT(*) AS count_items FROM products WHERE product_brand=$i";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            $i++;
            echo "
					
                    
                    <div type='button' class='selectBrand' bid='$bid'>
									
									<a href='#'>
										<span ></span>
										  <li class='list-group-item list-group-item-action d-flex justify-content-between align-items-center '> $brand_name <span>$count</span> </li>
										
									</a>
								</div>
			";
        }

    }
}


///////////////////////////////////////////////////////////////////.........

if(isset($_POST["getProduct"])) {
    $limit = 9;
    if (isset($_POST["setPage"])) {
        $pageno = $_POST["pageNumber"];
        $start = ($pageno * $limit) - $limit;
    } else {
        $start = 0;
    }
    $product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id";
    $run_query = mysqli_query($con, $product_query);
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id = $row['product_id'];
            $pro_cat = $row['product_cat'];
            $pro_brand = $row['product_brand'];
            $pro_title = $row['product_title'];
            $pro_price = $row['product_price'];
            $pro_image = $row['product_image'];
            $pro_image2 = $row['product_image2'];

            $cat_name = $row["cat_title"];
            $last_price = $pro_price + 150;

            //     echo $pro_id . '  ' . $pro_cat .'  ' . $pro_brand .'  '.$pro_title ;

            echo "
  <div class='col-md-3 col-sm-6'>
       <div class='product-grid3'>
            <div class='product-image3'>
                                    <a href='productView.php?p=$pro_id'>
                                        <img class='pic-1' src='./mainUI/imgs/$pro_image'>
                                        <img class='pic-2' src='./mainUI/imgs/$pro_image2'>
                                    </a>
                                    <ul class='social'>
                                        <li><a href='productView.php?p=$pro_id'><i class='fa fa-shopping-bag'></i></a></li>
                                        <li><a pid='$pro_id' id='product' href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                    </ul>
                             
                                </div>
                                <div class='product-content'>
                                    <h3 class='title'><a href='#'>$pro_title</a></h3>
                                    <div class='price'>
                                        $$pro_price
                                       <span>$$last_price</span>
                                    </div>
                                    <ul class='rating'>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star disable'></li>
                                        <li class='fa fa-star disable'></li>
                                    </ul>
            </div>
       </div>
  </div>
        ";

        }
    }
}
/////////////////////////////////////////////////////////////........
///
///


if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){

    if(isset($_POST["get_seleted_Category"])){
        $id = $_POST["cat_id"];
        $sql = "SELECT * FROM products,categories WHERE product_cat = '$id' AND product_cat=cat_id";

    }
    else if(isset($_POST["selectBrand"])){
        echo '<script>"hii" </script>';
        $id = $_POST["brand_id"];
        $sql = "SELECT * FROM products,categories WHERE product_brand = '$id' AND product_cat=cat_id";
    }
    else {

        $keyword = $_POST["keyword"];
        header('Location:store.php');
        $sql = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_keywords LIKE '%$keyword%'";

    }

    $run_query = mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_query)){
        $pro_id = $row['product_id'];
        $pro_cat = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_image = $row['product_image'];
        $pro_image2 = $row['product_image2'];
        $cat_name = $row["cat_title"];
        $last_price = $pro_price + 150;
        echo "
				
                        <div class='col-md-3 col-sm-6'>
       <div class='product-grid3'>
            <div class='product-image3'>
                                    <a href='productView.php?p=$pro_id'>
                                        <img class='pic-1' src='./mainUI/imgs/$pro_image'>
                                        <img class='pic-2' src='./mainUI/imgs/$pro_image2'>
                                    </a>
                                    <ul class='social'>
                                        <li><a href='productView.php?p=$pro_id'><i class='fa fa-shopping-bag'></i></a></li>
                                        <li><a pid='$pro_id' id='product' href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                    </ul>
                             
                                </div>
                                <div class='product-content'>
                                    <h3 class='title'><a href='#'>$pro_title</a></h3>
                                    <div class='price'>
                                        $$pro_price
                                       <span>$$last_price</span>
                                    </div>
                                    <ul class='rating'>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star'></li>
                                        <li class='fa fa-star disable'></li>
                                        <li class='fa fa-star disable'></li>
                                    </ul>
            </div>
       </div>
  </div>
			";
    }
}



if(isset($_POST["addToCart"])){


    $p_id = $_POST["proId"];


    if(isset($_SESSION["uid"])){

        $user_id = $_SESSION["uid"];

        $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
        $run_query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($run_query);
        if($count > 0){
            echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
        } else {
            $sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
            if(mysqli_query($con,$sql)){
                echo "
					<div class='alert alert-succes'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
            }
        }
    }else{
        $sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
        $query = mysqli_query($con,$sql);
        if (mysqli_num_rows($query) > 0) {
            echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
            exit();
        }
        $sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
        if (mysqli_query($con,$sql)) {
            echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
            exit();
        }

    }




}

//Count User cart item

//Count User cart item

//Get Cart Item From Database to Dropdown menu


//Remove Item From cart


//Update Item From cart





?>






