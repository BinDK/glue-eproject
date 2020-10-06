<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con,'SELECT * FROM db_event where date >= curdate() order by date limit 6');

 ?>

<div class="w3-container w3-padding-32" id="event">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Event</h3>
  </div>

  <div class="container">
    <div class="row">
<?php while ($event = mysqli_fetch_array($result)) { ?>
    <div class="col" style="max-width: 380px;">
      <h3><?= $event['title'] ?></h3>
      <img src="img/eventUpload/<?= $event['event_photo'] ?>" alt="John" style="width:347px;; height: 262px;">
      <p><?= $event['description'] ?></p>
      <p><a href="event_detail.php?id=<?= $event['id'] ?>" class="btn btn-success btn-block">Detail</a></p>
    </div>
<?php } ?>

  </div>
  </div>