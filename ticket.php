<?php 
require_once 'admin/connect.php';
$result1 = mysqli_query($con, 'SELECT price FROM db_ticket  where name = "Adult"');
$result2 = mysqli_query($con, 'SELECT price FROM db_ticket  where name = "Kid"');
$price1 = $result1->fetch_array()[0];
$price2 = $result2->fetch_array()[0];
 ?>
<div class="container-fluid " style="background-color: rgba(133,240,234,0.2) !important;" id="ticket">
  <span class="text-nowrap text-left m-0 p-0 " style="font-size: 30px">Ticket</span>
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
<div class="" id="ticketForm" style="padding: 10px 100px;height: 550px;background: url('img/ticket.jpg') no-repeat center center/cover;">
    <form action="" class="container w-25 mt-5" style="background:rgba(0,0,0,0.6);">
        <!-- Col left -->
        <div class="p-2">
            <div class="input-group">
                <label for="uName" class="text text-white">Your Name</label>
                <input type="text" class="input--style-3" id="uName">
                <span class="border border-ticket"></span>
            </div>
            <div class="input-group">
                <label for="uPhone" class="text text-white">Your Phone</label>
                <input type="text" class="input--style-3" id="uPhone">
                <span class="border border-ticket"></span>
            </div>
        </div>
        <!-- Col right -->
        <ul class="list-group list-unstyled p-1 text-white">
            <li class=" d-flex justify-content-between">
                <div>
                    <h5>Adult</h5>
                    <small class="text-muted">including 15% VAT</small>
                </div>
                <span>
                    <?= $price1; ?> $</span>
                <div class="ticket-quantity">
                    <button type="button" class="btn ticket-button text-white" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px;">-</button>
                    <input type="text" class="quntity-input" id="adult" style="width: 40px; text-align: center;" value="0">
                    <button type="button" class="btn ticket-button text-white" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px;">+</button>
                </div>
            </li>
            <hr class="w-100" style="border:1px solid #FFF;">
            <li class=" d-flex justify-content-between">
                <div>
                    <h5>Kid</h5>
                    <small class="text-muted">including 15% VAT.<br> Kid under 3 year is FREE</small>
                </div>
                <span>
                    <?= $price2; ?> $</span>
                <div class="ticket-quantity">
                    <button type="button" class="btn ticket-button text-white" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px;">-</button>
                    <input type="text" class="quntity-input" id="kid" style="width: 40px; text-align: center;" value="0">
                    <button type="button" class="btn ticket-button text-white" style="border: 1px solid black; border-radius: 25px; padding: 3px 15px; font-size: 20px;">+</button>
                </div>
            </li>
        </ul>
        <button type="button" class="btn btn-primary float-right mt-1" id="myBtn">Check your price!</button>
    </form>
</div>
<style>
    .border{
        border: none;
    }

     .input--style-3 {
 padding: 4px 0;
 background-color: transparent;
 color: #fa4251;
 font-size: 16px;
 font-weight: 500;
 }
     .input--style-3 ~ .border-ticket {
 position: absolute;
 bottom: 0;
 left: 0;
 width: 0;
 height: 1px;
 }
 .input--style-3:focus ~ .border-ticket{
 width: 100%;
 transition: 0.5s;
 border-color: #FC9CA4 !important;
 }
</style>
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
    