<?php 
require_once 'admin/connect.php';
$result1 = mysqli_query($con, 'SELECT price FROM db_ticket  where name = "Adult"');
$result2 = mysqli_query($con, 'SELECT price FROM db_ticket  where name = "Kid"');
$price1 = $result1->fetch_array()[0];
$price2 = $result2->fetch_array()[0];
 ?>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="admin/js/jquery-3.5.1.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>
<div class="w3-container w3-padding-32" id="ticket">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Ticket</h3>
</div>

  <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content m-auto" style="width: 700px;">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>Your name is: <span id="uNameResult"></span> and Your phone is: <span id="uPhoneResult"></span>. You go to our zoo with <span id="ticketAdult"></span> Adult and <span id="ticketKid"></span> Kid. Total is: <span id="total"></span> USD</p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

 
<div class="container" id="ticketForm" style="padding: 10px 100px;background-image: url('img/h1.gif');">
    <form action="">
        <div class="row">
            <!-- Col left -->
            <div class="col-md-5 col-sm-12">
                    <div class="p-2 bg-danger">
                        <div class="form-group">
                            <label for="uName">Your Name</label>
                            <input type="text" class="form-control" id="uName">
                        </div>
                        <div class="form-group">
                            <label for="uPhone">Your Phone</label>
                            <input type="text" class="form-control" id="uPhone">
                        </div>
                    </div>
                    <!-- <div class="number-tickets-block number-tickets-block--ticketing residents-only"> -->
                    <!-- </div> -->
            </div>
            <!-- Col right -->
            <div class="col-md-5 col-sm-12">
                <ul class="list-group list-unstyled border p-3 bg-light">
                    <li class=" d-flex justify-content-between">
                        <div>
                            <h5>Adult</h5>
                            <small class="text-muted">including 15% VAT</small>
                        </div>
                        <span>
                            <?= $price1; ?> $</span>
                        <div class="ticket-quantity">
                            <button type="button" class="btn ticket-button" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px; color:brown;">-</button>
                            <input type="text" class="quntity-input" id="adult" style="width: 40px; text-align: center;" value="0">
                            <button type="button" class="btn ticket-button" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px; color:brown;">+</button>
                        </div>
                    </li>
                    <hr class="w-100" style="border:1px solid brown;">
                    <li class=" d-flex justify-content-between">
                        <div>
                            <h5>Kid</h5>
                            <small class="text-muted">including 15% VAT.<br> Kid under 3 year is FREE</small>
                        </div>
                        <span>
                            <?= $price2; ?> $</span>
                        <div class="ticket-quantity">
                            <button type="button" class="btn ticket-button" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px; color:brown;">-</button>
                            <input type="text" class="quntity-input" id="kid" style="width: 40px; text-align: center;" value="0">
                            <button type="button" class="btn ticket-button" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px; color:brown;">+</button>
                        </div>
                    </li>
                </ul>
                 <button type="button" class="btn btn-primary float-right mt-3" id="myBtn">Open Modal</button>

            </div>
        </div>
    </form>
</div>
<script>
	$(document).ready(function() {
	    $("#myBtn").click(function() {
	        $('#uNameResult').html($('#uName').val());
	        $('#uPhoneResult').html($('#uPhone').val());
	        var adult = $('input#adult').val();
	        $('#ticketAdult').html(adult);

	        var kid = $('input#kid').val();
	        $('#ticketKid').html(kid);

	        var total = (adult * 120) + (kid * 90);
	        $('#total').html(total);
	        $("#myModal").modal();
	    });
	    // Plus and Minus btn
	    $(".ticket-button").on("click", function() {
	        var $button = $(this);
	        var oldValue = $button.closest('.ticket-quantity').find("input.quntity-input").val();
	        if ($button.text() == "+") {
	            var newVal = parseFloat(oldValue) + 1;
	        } else {
	            // Don't allow decrementing below zero
	            if (oldValue > 0) {
	                var newVal = parseFloat(oldValue) - 1;
	            } else {
	                newVal = 0;
	            }
	        }
	        $button.closest('.ticket-quantity').find("input.quntity-input").val(newVal);
	    });
	});
</script>
    