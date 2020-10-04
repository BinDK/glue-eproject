<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>ZOO</b>CLEVELAND METROPARKS</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#animals" class="w3-bar-item w3-button">Animals</a>
      <a href="#about" class="w3-bar-item w3-button">About us</a>
      <a href="#event" class="w3-bar-item w3-button">Events</a>
      <a href="#ticket" class="w3-bar-item w3-button">Ticket</a>
      <a href="#gallery" class="w3-bar-item w3-button">Gallery</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="./img/avatar1.jpg" alt="Architecture" width="1500" height="500">
</header>

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
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  



<!-- Image of location/map -->
<div id="map" class="row">
<div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4263757203335!2d106.68802821400804!3d10.778619592320068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3a9d97282b%3A0x45e74ca0fc0300dc!2sAptech%20Computer%20Education!5e0!3m2!1svi!2s!4v1601463722600!5m2!1svi!2s" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="600" height="450" frameborder="0"></iframe>
</div>
<div id="about" class="col-md-6">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About us</h3>
    <p>CENTRAL zoo is one of the biggest zoo in the town. The land area of the zoo is 33 acres. 
      CENTRAL zoo was established in the year 1980 with 10 acre 
      land but lately it was modified and land area was also added in the year 2000.
    </p>
  </div>
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
</body>
</html>
