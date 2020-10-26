<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con, 'select * from db_event where id ='.$_GET['id']);
$event = mysqli_fetch_array($result);
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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Event All Detail</title>
	<link rel="stylesheet" href="bootstrap.min.css"> 
</head>
<body>
<div class="container pt-4" align="center">
  <div><img width="700" height="400" class="img-fluid" src="img/eventUpload/<?= $event['event_photo'] ?>" alt=""></div>
  <div class="text-primary pt-2" style="font-size: 20px;"><?= $event['detail']; ?></div>
</div>
  <div class=" ml-5 mb-5 mt-1">
    <a class="btn btn-lg btn-success" href="index.php">Go Back</a>
  </div>


<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'footer.php'; ?>
</body>
</html>