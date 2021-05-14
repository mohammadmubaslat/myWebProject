
<?php
include "side_Nav_Admin.php";
include "../dataBase.php";


?>



<div class="mainContent">


    <form id="messages_id" action="" method="POST" enctype="multipart/form-data" class="form">
    <div class="formHeader row">
        <h2 style="padding-left: 50%" class="text-1 fl">Messages</h2>
        <!--            <div class="fr">-->
        <!--                <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>-->
        <!--            </div>-->
    </div>
    <div class="formBody row">

        <section id="messages_section">

                <div id="messages_div">


                     <div class="message">
                           <div class="message_header">
                                 <span>  Mohammad Mubaslat </span>
                               <span class="offline_class"> Offline</span>
                           </div>

                           <div class="message_body">

                                 <p class="my_message">

                                           hello form me
                                 </p>

                                 <p class="his_message">

                                     hello , how are you  ?
                                 </p>

                           </div>

                         <div class="send_div">


                                 <label class="text_group">
                                      <textarea   class="message_textArea" name="description"></textarea>
                                 </label>

                               <div class="send_icon">

                                   <a  href=" "><span   class="far fa-paper-plane">  </span></a>
                               </div>

                         </div>
                      </div>

                </div>

        </section>

    </div>

    </form>



    <form id="mails_tables" action="" method="POST" enctype="multipart/form-data" class="form">
        <div class="formHeader row" style="padding-left: 50%">
            <h2 class="text-1 fl">Mails</h2>

        </div>
        <div class="formBody row">

            <section>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr >
                            <th >Full Name</th>
                            <th >Phone Number </th>
                            <th>Email</th>
                            <th class="message_class">Message</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                        <?php
                        $result=mysqli_query($con,"select * from contact_us where 1")or die ("query 1 incorrect.....");

                        while(list($name,$phone,$email,$text)=mysqli_fetch_array($result))
                        {

                            echo "
                          <tr>
                                <td>$name</td>
                                <td>$phone</td>
                                <td>$email</td>
                                <td>$text</td>
                            
                                <td> <a href='#'> <button type='button' class='close' aria-label='Close'>
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



    <?php
    include "footer_Admin.php";
    ?>
