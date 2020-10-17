<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_invoice');

    if (isset($_GET['action'])) {
      if ($_GET['action'] == 'deleteInvoice') {
        $id = $_GET['id'];
        mysqli_query($con, 'delete from db_invoice where id = '.$id); 
        header('Location:index.php?page=admin_invoice');
    } 

}
 ?>

<h1 class="mt-4">Invoice</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Invoice</li>
</ol>
  <div class="card mb-4">
<div class="card-header">
<i class="fas fa-table mr-1"></i> Invoice </div>
<div class="card-body">
            <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

<div class="row">
    <div class="col-sm-12">
<table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
<thead>
    <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 70.467px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150.733px;" aria-label="Position: activate to sort column ascending">Customer Name</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">Customer Phone</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 90.2833px;" aria-label="Age: activate to sort column ascending">Number of Adult</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 90.2833px;" aria-label="Photo: activate to sort column ascending">Number of Kid</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150.55px;" aria-label="Start date: activate to sort column ascending">Date Bought</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100.067px;" aria-label="Salary: activate to sort column ascending">Total</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 70.067px;" aria-label="Salary: activate to sort column ascending">Action</th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th rowspan="1" colspan="1">ID</th>
        <th rowspan="1" colspan="1">Customer Name</th>
        <th rowspan="1" colspan="1">Customer Phone</th>
        <th rowspan="1" colspan="1">Number of Adult</th>
        <th rowspan="1" colspan="1">Number of Kid</th>
        <th rowspan="1" colspan="1">Date Bought</th>
        <th rowspan="1" colspan="1">Total</th>
        <th rowspan="1" colspan="1">Action</th>
    </tr>
</tfoot>
    <tbody>
<?php 
$odd = 'odd';
$even = 'even';
while ($invoice = mysqli_fetch_array($result)) { 
    $i = 0;
    $even_odd = ($i/2==0) ? $odd : $even;
    ?>
            <tr role="row" class="<?= $even_odd ?>">
                <td><?= $invoice['id'] ?></td>
                <td><?= $invoice['guest_name'] ?></td>
                <td><?= $invoice['guest_number'] ?></td>
                <td><?= $invoice['num_adult'] ?></td>
                <td><?= $invoice['num_kid'] ?></td>
                <td><?= $invoice['date_bought'] ?></td>
                <td><?= $invoice['total'] ?> USD</td>
                <td align="center">
                <a onclick="return confirm('Are you really want to delete it??')" href="index.php?page=admin_invoice&id=<?= $invoice['id']?>&action=deleteInvoice">Delete</a>
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
</div>
</div>
</div>
<style>
.nav-invoice {
    color: white !important;
    background-color: #E07B3B !important;
}
</style>
<script>
function showAdd() {
    var show = document.getElementById("addForm");
    if (show.style.display === "none") {
        show.style.display = "block";
    } else {
        show.style.display = "none";
    }
}
</script>