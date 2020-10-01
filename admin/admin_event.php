<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_event');

    if (isset($_GET['action'])) {
      if ($_GET['action'] == 'deleteEvent') {
        $id = $_GET['id'];
        mysqli_query($con, 'delete from db_event where id = '.$id); 
        header('Location:index.php');
    } 

}

    if (isset($_POST['editEventButton'])) {
    	$id = $_POST['id'];
     	$title =  $_POST['editTitle'];
     	$detail =  $_POST['editDetail'];
     	$description = $_POST['editDescription'];
     	$date = $_POST['editDate'];
     	mysqli_query($con, 'update db_event set title = "'.$title.'",detail = "'.$detail.'", date = "'.$date.'", description = "'.$description.'" where id ='.$id);
     	// header('Location:index.php?page=admin_event');
     } 
$test = 'taass';




 ?>



<script>
	function showFunction() {
  var show = document.getElementById("addForm");
  if (show.style.display === "none") {
    show.style.display = "block";
  } else {
    show.style.display = "none";
  }


}
</script>

<div class="card-header">
<i class="fas fa-table mr-1"></i> Event </div>
<div class="card-body">
            <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

<div class="row">
    <div class="col-sm-12">
<table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
<thead>
<tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100.467px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 137.733px;" aria-label="Position: activate to sort column ascending">Title</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 153.9px;" aria-label="Office: activate to sort column ascending">Detail</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 70.2833px;" aria-label="Age: activate to sort column ascending">Date</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 329.55px;" aria-label="Start date: activate to sort column ascending">Desciption</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119.067px;" aria-label="Salary: activate to sort column ascending">Edit</th>
</tr>
</thead>
<tfoot>
<tr><th rowspan="1" colspan="1">ID</th>
    <th rowspan="1" colspan="1">Title</th>
    <th rowspan="1" colspan="1">Detail</th>
    <th rowspan="1" colspan="1">Date</th>
    <th rowspan="1" colspan="1">Desciption</th>
    <th rowspan="1" colspan="1">Edit</th>
</tr>
</tfoot>
    <tbody>
<?php 
$odd = 'odd';
$even = 'even';
while ($event = mysqli_fetch_array($result)) { 
    $i = 0;
    $even_this_Shit = ($i/2==0) ? $odd : $even;
    ?>
            <tr role="row" class="<?= $even_this_Shit ?>">
                <td><?= $event['id'] ?></td>
                <td><?= $event['title'] ?></td>
                <td><?= $event['detail'] ?></td>
                <td><?= $event['date'] ?></td>
                <td><?= $event['description'] ?></td>
                <td align="center"><button href="index.php?page=admin_event&id=<?= $event['id']?>"  onclick="showFunction()">Edit</button> |
                <a onclick="return confirm('Are you really want to delete it??')" href="index.php?page=admin_event&id=<?= $event['id']?>&action=deleteEvent">Delete</a>
                </td>
            </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>

    </div>
    </div>
    </div>
    <form method="post" id="addForm" style="display:none;">
	<table>
		<tr>
			<td>Ttile</td>
			<td><input type="text" name="editTitle"></td>
		</tr>
		<tr>
			<td>Detail</td>
			<td><input type="text" name="editDetail"></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type="text" name="editDate" id="created"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="editDescription"></td>
		</tr>

			<td>
				<input type="submit" name="editEventButton" value="value">
				<input type="hidden" name="id" value="<?= $_GET['id']; ?>">
			</td>
		</tr>
	</table>
 </form>

   <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <!-- <script> -->

  <!-- </script> -->