<?php
require_once 'connect.php';
$input_category = mysqli_query($con, 'select * from db_category');
if (isset($_POST['buttonInsert'])) {
  if ($_POST['name'] != NULL) {
    $name = $_POST['name'];
    echo $name;
  } else {
    $msg1 = 'You have to add name';
  };
  if ($_POST['description'] != NULL) {
    $description = $_POST['description'];
    echo $description;
  } else {
    $msg2 = 'You have to add description';
  };
  $category_id =  $_POST['category_id'];
  echo $category_id;
  if (strlen($_FILES['photo']['name']) > 1) {
    $filename = date('FjYgiais') . '-' . $_FILES['photo']['name'];
    $filetype = $_FILES['photo']['type'];
    echo $filename;
    if (substr_count($filetype, 'image/') > 0) {
      copy($_FILES['photo']['tmp_name'], '../img/animalPhoto/' . $filename);
    } else {
      $msg3 = 'File type is not correct';
    };
  };
  if (!isset($msg1) &&  !isset($msg2) &&  !isset($msg3)) {
    mysqli_query($con, 'insert into db_animal ( name, description, avatar, category_id) values ("' . $name . '","' . $description . '","' . $filename . '",' . $category_id . ')');
  };
};

if (isset($_GET['action1'])) {
  if ($_GET['action1'] == 'delete') {
    $id = $_GET['id'];
        mysqli_query($con, 'delete from db_animal where id = ' . $id);
  };
};
$result = mysqli_query($con, 'select * from db_animal');
?>

<h1 class="mt-4">Animal</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Animal</li>
</ol>
  <div class="card mb-4">
<div class="card-header">
<i class="fas fa-table mr-1"></i> Animal </div>
<div class="card-body">
            <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

<div class="row">
    <div class="col-sm-12">
<table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
<thead>
    <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100.467px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 137.733px;" aria-label="Position: activate to sort column ascending">Name</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 153.9px;" aria-label="Office: activate to sort column ascending">Description</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150.2833px;" aria-label="Age: activate to sort column ascending">Photo</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 70.2833px;" aria-label="Photo: activate to sort column ascending">Category</th>
        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150.55px;" aria-label="Start date: activate to sort column ascending">Action</th>
    </tr>
</thead>
<tfoot>
<tr><th rowspan="1" colspan="1">ID</th>
    <th rowspan="1" colspan="1">Name</th>
    <th rowspan="1" colspan="1">Description</th>
    <th rowspan="1" colspan="1">Photo</th>
    <th rowspan="1" colspan="1">Category</th>
    <th rowspan="1" colspan="1">Edit</th>
</tr>
</tfoot>
    <tbody>
<?php 
$odd = 'odd';
$even = 'even';
while ($animal = mysqli_fetch_array($result)) { 
    $i = 0;
    $even_odd = ($i/2==0) ? $odd : $even;
    ?>
            <tr role="row" class="<?= $even_odd ?>">
                <td><?= $animal['id'] ?></td>
                <td><?= $animal['name'] ?></td>
                <td><?= $animal['description'] ?></td>
                <td><img src="../img/animalPhoto/<?= $animal['avatar'] ?>" width="150" height="100"></td>
                <td><?= $animal['category_id'] ?></td>
                <td align="center"><a href="index.php?page=admin_animal_edit&id=<?= $animal['id']; ?>">Edit</a> |
                <a onclick="return confirm('Are you really want to delete it??')" href="index.php?page=admin_animal&action1=delete&id=<?= $animal['id'] ?>">Delete</a>
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

    <button type="button" id="insert_button" class="btn btn-primary btn-lg btn-block">INSERT</button>
<div align="center">
  <h3> <?= isset($msg1) ? $msg1 : '' ?> </h3>
  <h3> <?= isset($msg2) ? $msg2 : '' ?> </h3>
  <h3> <?= isset($msg3) ? $msg3 : '' ?> </h3>
</div>


<div class="collapse" id="insert_hide_show">
  <h1>Insert</h1>

  <table class="table" border="1">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>Description</th>
      <th>Photo</th>
      <th>Category</th>
      <th>Action</th>
    </tr>
    <tr>
      <form method="post" enctype="multipart/form-data">
        <td></td>
        <td><input class="form-control" placeholder="Insert name" type="text" name="name"></td>
        <td><textarea class="form-control" cols="30" rows="1" placeholder="Insert description" name="description"></textarea></td>
        <td><input class="form-control" type="file" name="photo"></td>
        <td>
          <select class="form-control" name="category_id" id="">
            <?php while ($output_category = mysqli_fetch_array($input_category)) { ?>
              <option value="<?= $output_category['id'] ?>">
                <?= $output_category['species_name'] ?>
              </option>
            <?php } ?>
          </select>
        </td>
        <td>
          <input class="form-control" type="submit" name="buttonInsert" value="Insert">
        </td>
      </form>
    </tr>
  </table>
</div>

<style type="text/css">
    .nav-animal{
        color: white !important;
        background-color: #B32F33 !important;
    }
</style>
<script src="js/jquery-3.5.1.min.js"></script>
<script>
  $(document).ready(function() {
    $('#insert_button').click(function() {
      $('#insert_hide_show').show();
    })
  });
</script>