<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="style.css">
<body>

<!-- Header -->
  <?php require_once 'header.php'; ?>
<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

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
</div>
<?php require_once 'footer.php'; ?>
</body>
</html>
