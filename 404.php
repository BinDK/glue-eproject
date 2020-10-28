<?php 

header( "Refresh:3.4; url=index.php", true, 303);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="admin/js/jquery-3.5.1.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<script src="admin/js/font-awesome/all.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admin/css/font-awesome/all.min.css">
<link rel="stylesheet" href="style.css">
	<style>
		body{
			/* background: url('../KTPHP/neon_inkscape.svg') ; */
		}
		.gate{padding-top: 50px;}
		.run{
			padding-top: 300px;
		animation-name: comehome;
		animation-duration: 6s;
		animation-iteration-count: 1;
		animation-timing-function: ease;
		animation-direction: normal; 
		}
				@keyframes comehome {
    	from {
        transform:translateX(0);
    	}
    	to {
        transform:translateX(-1100px);
    	}
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-expand-md navbar-dark bg-dark pb-1 d-flex justify-content-between">
        <div class="navbar-brand ">
            <a href="./" class="text text-muted text-decoration-none"><span style="letter-spacing: 4px;">Singapore Central Zoo</span></a>
        </div>
        <div class="nav-item text-white">
            <a href="index.php#animals" class="btn btn-lg text-muted">Animals</a>
            <a href="index.php#about" class="btn btn-lg text-muted">About us</a>
            <a href="index.php#event" class="btn btn-lg text-muted">Events</a>
            <a href="index.php#ticket" class="btn btn-lg text-muted">Ticket</a>
            <a href="index.php#gallery" class="btn btn-lg text-muted">Gallery</a>
            <a href="index.php#contact" class="btn btn-lg text-muted">Contact</a>
        </div>
    </nav>
    <h3 align="center">Oh!!! Look like you run into some trounle, worry-free we will direct you to the homepage just a few second.<br><p>Error code:404</p></h3>
    <div class="container-fluid">
        <img src="img/404/gate.png" class="gate img-fluid" style="width: 397px !important; height: 700px !important" align="left">
    <img src="img/404/voi.gif" class="run img-fluid" style="width: 397px !important; height: 616px !important;" align="right">
</div>
</body>
</html>