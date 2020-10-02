<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
require_once 'connect.php';
if(isset($_POST['buttonAdd'])){
	$name = $_POST['species_name'];
	$description = $_POST['description'];
	mysqli_query($con,'insert into db_category(species_name,description) values ("'.$name.'","'.$description.'")');
}
$result = mysqli_query($con, 'select * from db_category');
?>
<form  method="post" style="width:300px">
  <div class="form-group">
    <label for="species_name">Category's name:</label>
    <input type="text" class="form-control" name="species_name">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" cols="20" rows="5"></textarea>
  </div>
  <input type="submit" name="buttonAdd" value="Add" id="created" class="btn btn-primary">
</form>
<table class="table table-bordered" style="width:800px">
	<tr style="text-align:center">
		<th>ID</th>
		<th>Species Name</th>
		<th>Description</th>
	</tr>
	<?php while ($category = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?= $category['id'] ?></td>
			<td align="center"><?= $category['species_name'] ?></td>
			<td align="center"><?= $category['description'] ?></td>
		</tr>
	<?php } ?>
</table>