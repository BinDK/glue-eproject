<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con,'SELECT * FROM db_event where date >= curdate() order by date limit 6');

 ?>
<nav class="navbar navbar-expand navbar-expand-md navbar-dark bg-dark pb-1 d-flex justify-content-between">
  <div class="navbar-brand ">
    <a href="./" class="text text-muted text-decoration-none"><span style="letter-spacing: 4px;">SINGAPORE CENTRAL ZOO</span> </a>
    </div>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="nav-item text-white">
      <a href="index.php#animal" class="btn btn-lg text-muted">Animals</a>
      <a href="#about" class="btn btn-lg text-muted">About us</a>
      <a href="#event" class="btn btn-lg text-white bg-secondary">Events</a>
      <a href="index.php#ticket" class="btn btn-lg text-muted">Ticket</a>
      <a href="index.php#gallery" class="btn btn-lg text-muted">Gallery</a>
      <a href="index.php#contact" class="btn btn-lg text-muted">Contact</a>
    </div>
</nav>

  <div class="container">
    <div class="row">
<?php while ($event = mysqli_fetch_array($result)) { ?>
    <div class="col" align="center" style="max-width: 380px;">
      <h3><?= $event['title'] ?></h3>
      <img src="img/eventUpload/<?= $event['event_photo'] ?>" alt="John" style="width:347px;; height: 262px;">
      <p><?= $event['description'] ?></p>
      <p><a href="event_detail.php?id=<?= $event['id'] ?>" class="btn btn-success btn-block">Detail</a></p>
    </div>
<?php } ?>

  </div>
  </div>
<?php require_once 'footer.php'; ?>