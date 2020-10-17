<?php
require_once 'connect.php';
$id = $_GET['id'];
$input_category = mysqli_query($con, 'select * from db_category');

$input = mysqli_query($con, 'select * from db_animal where id = ' . $id);

$output = mysqli_fetch_array($input);

if (isset($_POST['buttonSave'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    if (strlen($_FILES['photo']['name']) > 1) {
        $filename = date('FjYgiais') . '-' . $_FILES['photo']['name'];
        echo 'Filename: ' . $filename;
        copy($_FILES['photo']['tmp_name'], '../img/animalPhoto/' . $filename);
    } else {
        $filename = $output['avatar'];
    };
    mysqli_query($con, 'UPDATE db_animal SET name = "' . $name . '",description= "' . $description . '",avatar= "' . $filename . '" ,category_id = ' . $category_id . '  WHERE id = ' . $id);
}

$input = mysqli_query($con, 'select * from db_animal where id = ' . $id);

$output = mysqli_fetch_array($input);

?>

<h1>EDIT</h1>
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
        <td><?= $output['id'] ?></td>
        <td><?= $output['name'] ?></td>
        <td><?= $output['description'] ?></td>
        <td><img src="../img/animalPhoto/<?= $output['avatar'] ?>" width="100" height="100"></td>
        <td><?= $output['category_id'] ?></td>
        <td></td>
    </tr>
    <tr>
        <form method="post" enctype="multipart/form-data">
            <td></td>
            <td><input name="name" class="form-control" type="text" value="<?= $output['name'] ?>"></td>
            <td><textarea name="description" class="form-control" name="" id="" cols="30" rows="1"><?= $output['description'] ?></textarea></td>
            <td><input name="photo" class="form-control" type="file" value="<?= $output['avatar'] ?>"></td>
            <td>
                <select class="form-control" name="category_id">
                    <?php while ($output_category = mysqli_fetch_array($input_category)) { ?>
                        <option value="<?= $output_category['id'] ?>">
                            <?= $output_category['species_name'] ?>
                        </option>
                    <?php } ?>

                </select>
            </td>
            <td>
                <input class="form-control" type="submit" value="Save" name="buttonSave">
            </td>
        </form>
    </tr>
</table>
<div align="center">
    <h1><?= isset($msg3) ? $msg3 : '' ?></h1>
</div>

<div align="center">
<a href="index.php?page=admin_animal" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">BACK TO DETAIL</a>
</div>
<style type="text/css">
    .nav-animal{
        color: white !important;
        background-color: #B32F33 !important;
    }
</style>