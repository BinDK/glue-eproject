<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con, 'SELECT * FROM db_event LIMIT 3');

 ?>

<div class="w3-container w3-padding-32" id="event">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Event</h3>
  </div>

  <div class="container">
    <div class="row-event">
<?php while ($event = mysqli_fetch_array($result)) { ?>
    <div class="col ">
      <img src="img/eventUpload/<?= $event['event_photo'] ?>" alt="John" style="width:347px;; height: 262px;">
      <h3><?= $event['title'] ?></h3>
      <p><?= $event['detail'] ?></p>
      <p><button class="w3-button w3-light-grey w3-block"><a href="event_detail.php?id=<?= $event['id'] ?>">Deatil</a></button></p>
    </div>
<?php } ?>

  </div>
  </div>