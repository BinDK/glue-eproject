<?php
require_once 'connect.php';
$id = $_GET['id'];
$input_category = mysqli_query($con, 'select * from db_gallary');

$input = mysqli_query($con, 'select * from db_gallary where id = ' . $id);
$output = mysqli_fetch_array($input);
if (isset($_POST['buttonSave'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $shortDescription = $_POST['shortDescription'];
    $photoArray = [];
    $date = date('ymdHis');
    foreach ($_FILES['photo']['name'] as $key => $value) {
        $fileName = date('ymdHis') . $value;
        copy($_FILES['photo']['tmp_name'][$key], '../img/galleryUpload/' . $fileName);
        $photoArray[$key] = $fileName;
    };
    $photoName = join('-', $photoArray);
    mysqli_query($con, 'UPDATE db_gallary SET name = "' . $name . '",description= "' . $description . '",fileAddress= "' . $photoName . '",date= "' . $date . '",shortDescription= "' . $shortDescription . '"   WHERE id = ' . $id);
}
?>
<h1>EDIT</h1>
<table class="table" border="1">
    <tr>
        <th>Name</th>
        <th>Img</th>
        <th>Short description</th>
        <th>Description</th>
    </tr>
    <tr align="center">
        <td style="width:100px;vertical-align: middle;"><?= $output['name'] ?></td>
        <td>
            <?php
            $photo = explode('-', $output['fileAddress']);
            for ($i = 0; $i < count($photo); $i++) { ?>
                <img src="../img/galleryUpload/<?= $photo[$i] ?>" width="100px">
            <?php }
            ?>
        </td>
        <td><?= $output['shortDescription'] ?></td>
        <td><?= $output['description'] ?></td>
    </tr>
    <tr>
        <form method="post" enctype="multipart/form-data">
            <td><input name="name" class="form-control" type="text" value="<?= $output['name'] ?>"></td>
            <td><input name="photo[]" multiple="true" class="form-control" type="file" value="<?= $output['fileAdress'] ?>"></td>
            <td><textarea name="shortDescription" class="form-control" name="" id="" cols="30" rows="1"><?= $output['shortDescription'] ?></textarea></td>
            <td><textarea name="description" class="form-control" name="" id="" cols="30" rows="1"><?= $output['description'] ?></textarea></td>
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
    <a href="index.php?page=admin_gallery&id=viewall&view=1" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">BACK TO DETAIL</a>
</div>