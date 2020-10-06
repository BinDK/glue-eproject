<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con, 'select * from db_event where id ='.$_GET['id']);
$event = mysqli_fetch_array($result);
 ?>


<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="bootstrap.min.css"> 
</head>
<body>
<div class="card flex-row m-5" style="height: 300px;">
    <div class="card-header border-0"><img width="350" height="275" src="img/eventUpload/<?= $event['event_photo'] ?>" alt=""></div>
    <div class="card-block px-2">  
    <p class="card-text"><?= $event['detail'] ?></p>
  </div>
</div>
  <div class=" ml-5 mb-5 mt-1">
    <a class="btn btn-sm btn-success" href="index.php">Go Back</a>
  </div>


<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'footer.php'; ?>
</body>
</html>
