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

  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form method="post">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
      <input class="w3-input w3-section w3-border" type="Email" placeholder="Email" required name="email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Phone" required name="phone">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Text" required name="text">
      <button class="w3-button w3-black w3-section" type="submit" name="addFeedback">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>