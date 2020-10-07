<?php 
require_once 'admin/connect.php';
$result1 = mysqli_query($con, 'SELECT price FROM db_ticket  where name = "Adult"');
$result2 = mysqli_query($con, 'SELECT price FROM db_ticket  where name = "Kid"');
$price1 = $result1->fetch_array()[0];
$price2 = $result2->fetch_array()[0];
 ?>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="admin/js/jquery-3.5.1.js"></script>
<div class="w3-container w3-padding-32" id="ticket">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Ticket</h3>
</div>
  <div class="w3-row-padding w3-grayscale">
      <form action="">
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="number-tickets-block disable">
<div class="number-tickets-block number-tickets-block--ticketing residents-only">
<div class="number-tickets-block number-tickets-block--ticketing residents-only">
</div>
</div>
</div>
</div>
<!-- Co -->
<div class="col-md-6 col-sm-12">
<div class="number-tickets-block">
<h2 class="title-1">Choose your Tickets</h2>
<ul class="list-tickets">
<li class="ticket-row ticket-row--no-padding" data-ticket-type="nrTKWEBTRFLEX195AD" data-ticket-price="$32.40">
<div class="ticket-decription">
<p class="main-text"><span>Adult</span><span>
<sup>from S$</sup><?= $price1 ?></span></p>
<p> &nbsp;</p>
</div>
<div class="ticket-amount" data-validate=""><span class="fa fa-minus disable" data-minus=""></span>
<input name="834_4_1152_32.40_tourist_TKWEBTRFLEX195AD_36.00" class="input-form" type="tel" value="0" min="0" max="4" data-analytics-prod-name="River Safari Admission" data-analytics-prod-group="Single Park" data-analytics-prod-add-type="nradult" data-number-ticket=""><span class="fa fa-plus" data-plus=""></span>
</div>
</li>
<li class="ticket-row ticket-row--no-padding" data-ticket-type="nrTKWEBTRFLEX195CH" data-ticket-price="$21.60">
<div class="ticket-decription">
<p class="main-text"><span>Child</span><span>
<sup>from S$</sup><?= $price1 ?></span></p>
<p>Ages 3 to 12 &nbsp;</p>
</div>
<div class="ticket-amount" data-validate=""><span class="fa fa-minus disable" data-minus=""></span>
<input name="835_4_1153_21.60_tourist_TKWEBTRFLEX195CH_24.00" class="input-form" type="tel" value="0" min="0" max="4" data-analytics-prod-name="River Safari Admission" data-analytics-prod-group="Single Park" data-analytics-prod-add-type="nrchild" data-number-ticket=""><span class="fa fa-plus" data-plus=""></span>
</div>
</li>
</ul>
</div>

</div>
</div>
</form>
  </div>
    