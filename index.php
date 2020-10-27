<!DOCTYPE html>
<html>
<title>Singapore Central Zoo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="admin/js/jquery-3.5.1.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<script src="admin/js/font-awesome/all.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/font-awesome/all.min.css">
<link rel="stylesheet" href="style.css">
<body>

<!-- Header -->
  <?php require_once 'header.php'; ?>
<!-- Page content -->

  <!-- Animal Section -->
<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'animal.php'; ?>

<!-- Gallery Section -->
  <?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'gallery.php'; ?>


<!-- Event Section -->
<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'event.php'; ?>

<!-- Ticket Section -->
<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'ticket.php'; ?>

  <!-- Contact Section -->
<?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'contact.php'; ?>
<!-- End page content -->

<!-- Footer -->
<?php require_once 'footer.php'; ?>
<style>
.navbar-nav, .show {
    /* display: -ms-flexbox; */
    display: flex;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.navbar-nav, .show  > li{
    padding-right: 1rem;
}
html{
	scroll-behavior: smooth;
}
</style>
</body>
</html>
