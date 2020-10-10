<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con, 'select * from db_feedback');

if (isset($_POST['addFeedback'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];

mysqli_query($con,'INSERT INTO db_feedback (user_name,user_email,user_phone,user_text) VALUES ("'.$name.'", "'.$email.'", "'.$phone.'", "'.$text.'") ');
}
?>
<div class=" pb-1 pt-5" style="width: 100%;">
<div class="card" style="padding:50px 100px;">
    <div class="row no-gutters">
        <div class="card-header" style="background: url('img/contact.jpg') top left/cover no-repeat;display: table-cell; width: 31%;">
        </div>
            <div class="card-body m-5">
              <h3>We're very appreciate your feedback :)</h3>
                <form method="POST" onload="return false;">
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Name" name="name">
                        <span class="border"></span>
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Phone" name="phone">
                        <span class="border"></span>
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Email" name="email">
                        <span class="border"></span>
                    </div>
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Your message here!" name="text">
                        <span class="border"></span>
                    </div>
                    <div class="pt-3">
                        <button class="btn btn-success" type="submit" name="addFeedback"><i class="fa fa-paper-plane"></i> Send Message</button>
                    </div>
                </form>
          </div>
       </div>
   </div>
</div>
<style type="text/css">
 .input-group {
 position: relative;
 margin-bottom: 32px;
 border-bottom: 1px solid #e5e5e5;
 }
 .input--style-2 {
 padding: 9px 0;
 color: #fa4251;
 font-size: 16px;
 font-weight: 500;
 }
 input{
 outline: none;
 margin: 0;
 border: none;
 -webkit-box-shadow: none;
 -moz-box-shadow: none;
 box-shadow: none;
 width: 100%;
 font-size: 14px;
 font-family: inherit;
 }
 .input--style-2 ~ .border {
 position: absolute;
 bottom: 0;
 left: 0;
 width: 0;
 height: 1px;
 }
 .input--style-2:focus ~ .border{
 width: 100%;
 transition: 0.5s;
 border-color: #FC9CA4 !important;
 }
</style>