

<?php

include "side_Nav_Admin.php";

?>



<div class="mainContent">
    <!-- LIST FORM -->


    <!-- DETAIL FORM -->
    <form id="add_product" action="" method="POST" enctype="multipart/form-data" class="form">
        <div class="formHeader row">
            <h2 class="text-1 fl">Add Product </h2>
            <div class="fr">
                <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button><a href="" class="btnAdd fa fa-plus bg-1 text-fff"></a>
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

                <label class="inputGroup">
                    <span>Size</span>
                    <span>
                    <select name="cate">
                        <option value="cate01">Large</option>
                        <option value="cate02">Medium</option>
                        <option value="cate02">Small</option>

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
                    <textarea name="description"></textarea>
                </label>
            </div>


            <div class="column">
                <label class="inputGroup">
                    <span style="width: 00px;">Aditional Description</span>
                    <textarea name="aditional_description"></textarea>
                </label>
            </div>



        </div>
    </form>





<?php

include "footer_Admin.php";

?>

