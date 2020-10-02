<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_ticket');

    if (isset($_GET['action'])) {
      if ($_GET['action'] == 'deleteTicket') {
        $id = $_GET['id'];
        mysqli_query($con, 'delete from db_ticket where id = '.$id); 
        header('Location:index.php');
    } 

}
         if (isset($_POST['addTicketButton'])) {
     	$addName =  $_POST['addName'];
     	$addType =  $_POST['addType'];
     	$addPrice = $_POST['addPrice'];
     	mysqli_query($con, 'INSERT INTO db_ticket (name, type, price) values ("'.$addName.'","'.$addType.'","'.$addPrice.'")');
     }
 ?>



<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Ticket</li>
</ol>
  <div class="card mb-4">
<div class="card-header">
<i class="fas fa-table mr-1"></i> Ticket </div>
<div class="card-body">
            <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

<div class="row">
    <div class="col-sm-12">
<table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
<thead>
<tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100.467px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 207.733px;" aria-label="Position: activate to sort column ascending">Name</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 153.9px;" aria-label="Office: activate to sort column ascending">Type</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 170.2833px;" aria-label="Age: activate to sort column ascending">Price</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119.067px;" aria-label="Salary: activate to sort column ascending">Edit</th>
</tr>
</thead>
<tfoot>
<tr><th rowspan="1" colspan="1">ID</th>
    <th rowspan="1" colspan="1">Name</th>
    <th rowspan="1" colspan="1">Type</th>
    <th rowspan="1" colspan="1">Price</th>
    <th rowspan="1" colspan="1">Edit</th>
</tr>
</tfoot>
    <tbody>
<?php 
$odd = 'odd';
$even = 'even';
while ($ticket = mysqli_fetch_array($result)) { 
    $i = 0;
    $even_this_Shit = ($i/2==0) ? $odd : $even;
    ?>
            <tr role="row" class="<?= $even_this_Shit ?>">
 				<td><?= $ticket['id'] ?></td>
 				<td><?= $ticket['name'] ?></td>
 				<td><?= $ticket['type'] ?></td>
 				<td><?= $ticket['price'] ?></td>
                <td align="center"><a href="index.php?page=admin_ticket_edit&id=<?= $ticket['id']; ?>">Edit</a> |
                <a onclick="return confirm('Are you really want to delete it??')" href="index.php?page=admin_ticket&id=<?= $ticket['id']?>&action=deleteTicket">Delete</a>
                </td>
            </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>

    </div>
    </div>
    	<div>
    		<button onclick="showAdd()" class="btn btn-primary">Add more Ticket</button>
    	</div>
    </div>
  </div>

    <form method="post" id="addTicket" style="display:none; margin:10px 50px;">
    	<h5>Add more ticket </h5>
			<input type="text" name="addName" placeholder="Enter Ticket Name">
			<input type="text" name="addType" placeholder="Enter Ticket Type">
			<input type="number" min="0" name="addPrice" placeholder="Enter Ticket Price ">

				<input type="submit" name="addTicketButton" value="Submit">
</form>

   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  	    	  $( function() {
    $( "#created" ).datepicker();
  } );
  </script>

<script>

	function showAdd() {
  var show = document.getElementById("addTicket");
  if (show.style.display === "none") {
    show.style.display = "block";
  } else {
    show.style.display = "none";
  }
}
</script>