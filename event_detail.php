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
	    <h3><?= $event['title'] ?></h3>
	    <h3><?= $event['detail'] ?></h3>
	    <h3><img src="img/eventUpload/<?= $event['event_photo'] ?>" alt=""></h3>

<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'footer.php'; ?>
</body>
</html>
