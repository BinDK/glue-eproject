<?php 
require_once 'connect.php';
$result = mysqli_query($con,'select * from db_feedback');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'deleteFB') {
        $id = $_GET['id'];
        mysqli_query($con, 'delete from db_feedback where id = '.$id); 
        header('Location:index.php');
    }
}
 ?>
<h1 class="mt-4">Dashboard</h1>
 <ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Dashboard + Feedback</li>
</ol>
  <div class="card mb-4">
<div class="card-header">
<i class="fas fa-table mr-1"></i>User Feedback
</div>
<div class="card-body">
            <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

<div class="row">
    <div class="col-sm-12">
<table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
<thead>
<tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100.467px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 137.733px;" aria-label="Position: activate to sort column ascending">User_name</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 153.9px;" aria-label="Office: activate to sort column ascending">User_email</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 70.2833px;" aria-label="Age: activate to sort column ascending">User_phone</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 329.55px;" aria-label="Start date: activate to sort column ascending">User_text</th>
    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119.067px;" aria-label="Salary: activate to sort column ascending">Edit Answer</th>
</tr>
</thead>
<tfoot>
<tr><th rowspan="1" colspan="1">ID</th>
    <th rowspan="1" colspan="1">User_name</th>
    <th rowspan="1" colspan="1">User_email</th>
    <th rowspan="1" colspan="1">User_phone</th>
    <th rowspan="1" colspan="1">User_text</th>
    <th rowspan="1" colspan="1">Edit-Answer</th>
</tr>
</tfoot>
    <tbody>
<?php 
$odd = 'odd';
$even = 'even';
while ($feedback = mysqli_fetch_array($result)) { 
    $i = 0;
    $even_this_Shit = ($i/2==0) ? $odd : $even;
    ?>
            <tr role="row" class="<?= $even_this_Shit ?>">
                <td><?= $feedback['id'] ?></td>
                <td><?= $feedback['user_name'] ?></td>
                <td><?= $feedback['user_email'] ?></td>
                <td><?= $feedback['user_phone'] ?></td>
                <td><?= $feedback['user_text'] ?></td>
                <td align="center"><a href="index.php?page=admin_feedback_answer&id=<?= $feedback['id']?>&name=<?= $feedback['user_name'] ?>">Answer</a> |
                <a onclick="return confirm('Are you really want to delete it??')" href="index.php?id=<?= $feedback['id']?>&action=deleteFB">Delete</a>
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
</div>