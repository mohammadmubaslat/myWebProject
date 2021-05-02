<?php

include "side_Nav_Admin.php";

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
                            <th >Full Name</th>
                            <th >Email</th>
                            <th>Country</th>
                            <th>Address</th>
                            <th>Password</th>
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
                            <td><img style="height: 40px; width: 40px;" src="../mainUI/imgs/chair1_1.jfif" alt="" > </td>
                            <td>Mohammad Mubaslat</td>
                            <td>mohammad@ll.com</td>
                            <td>Palestine</td>
                            <td>Tubas, Baghdad street</td>
                            <td>1234</td>
                            <td>Beds,Lights</td>
                            <td>

                                <a href=" "><span class="">  <i class="fas fa-user-times"></i></span></a>
                                <a href="messages_Admin.php"><span class=""> <i class="fas fa-comment-dots"></i></span></a>


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
