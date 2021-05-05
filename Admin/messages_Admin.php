
<?php
include "side_Nav_Admin.php";
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




    <?php
    include "footer_Admin.php";
    ?>
