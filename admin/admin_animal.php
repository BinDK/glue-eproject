<?php
require_once 'connect.php';
$input_category = mysqli_query($con, 'select * from db_category');
if (isset($_POST['buttonInsert'])) {
	if ($_POST['name'] != NULL) {
		$name = $_POST['name'];
	} else {
		$msg1 = 'You have to add name';
	};
	if ($_POST['description'] != NULL) {
		$description = $_POST['description'];
	} else {
		$msg2 = 'You have to add description';
	};

	$category_id =  $_POST['category_id'];
	if (strlen($_FILES['photo']['name']) > 1) {
		$filename = date('FjYgiais') . '-' . $_FILES['photo']['name'];
		$filetype = $_FILES['photo']['type'];
		if (substr_count($filetype, 'image/') > 0) {
			copy($_FILES['photo']['tmp_name'], '../img/' . $filename);
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
<h1> Anh Dien</h1>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Photo</th>
		<th>Category</th>
		<th>Action</th>
	</tr>
	<?php while ($animal = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?= $animal['id'] ?></td>
			<td><?= $animal['name'] ?></td>
			<td><?= $animal['description'] ?></td>
			<td><img src="../img/<?= $animal['avatar'] ?>" width="50" height="50"></td>
			<td align="center"><?= $animal['category_id'] ?></td>


			<td align="center">
				<a href="index.php?page=admin_animal_edit&id=<?= $animal['id'] ?>">Edit</a> |
				<a onclick="return confirm('Are you really want to delete it??')" href="index.php?page=admin_animal&action1=delete&id=<?= $animal['id'] ?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<br>

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


<script src="js/jquery-3.5.1.min.js"></script>
<script>
	$(document).ready(function() {
		$('#insert_button').click(function() {
			$('#insert_hide_show').show();
		})
	});
</script>