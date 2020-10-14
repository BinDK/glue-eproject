<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="admin/js/jquery-3.5.1.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
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
</body>
</html>
