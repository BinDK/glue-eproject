<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con, 'select * from db_event');
 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php while ($event = mysqli_fetch_array($result)) { ?>
	    <h3><?= $event['title'] ?></h3>
	    <h3><?= $event['detail'] ?></h3>
	    <h3><?= $event['date'] ?></h3>
	    <h3><img src="img/<?= $event['event_photo'] ?>" alt=""></h3>
	    <h3><?= $event['description'] ?></h3>
	<?php } ?> 
</body>
</html>
