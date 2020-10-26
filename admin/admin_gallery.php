<?php
require_once 'connect.php';
if (isset($_POST['buttonAdd'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $shortDescription = $_POST['shortDescription'];
    $date = date('ymdHis');
    // upload file
    $photoArray = [];
    foreach ($_FILES['photo']['name'] as $key => $value) {
        $fileName = date('ymdHis') . $value;
        copy($_FILES['photo']['tmp_name'][$key], '../img/galleryUpload/' . $fileName);
        $photoArray[$key] = $fileName;
    };
    $photoName = join('-', $photoArray);
    mysqli_query($con, 'insert into db_gallary (name,description,fileAddress,shortDescription,date) values("' . $name . '","' . $description . '","' . $photoName . '","' . $shortDescription . '","' . $date . '")');
}
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        $id = $_GET['deleteId'];
        mysqli_query($con, 'delete from db_gallary where id = ' . $id);
    };
};
$result = mysqli_query($con, 'select * from db_gallary');
?>

<!-- View -->

<h1 class="mt-4">Gallery</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Gallery</li>
</ol>
<form method="post" style="width:300px" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Gallery's name</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="shortDescription">Short Description:</label>
        <textarea name="shortDescription" cols="20" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" cols="100" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="file">Gallery Photo</label>
        <input type="file" name="photo[]" accept=".png, .jpg, .jpeg" multiple="true">
    </div>
    <input type="submit" name="buttonAdd" value="Add" id="created" class="btn btn-primary btn-lg w-75">
</form>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Short Description</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($gallery = mysqli_fetch_array($result)) { ?>
            <tr align="center">
                <td style="width:100px;vertical-align: middle;"><?= $gallery['name'] ?></td>
                <!-- showing photoArray -->
                <td>
                    <?php
                    $photo = explode('-', $gallery['fileAddress']);
                    for ($i = 0; $i < count($photo); $i++) { ?>
                        <img src="../img/galleryUpload/<?= $photo[$i] ?>" width="100px">
                    <?php }
                    ?>
                </td>
                <td style="width:100px;vertical-align: middle;"><?= $gallery['shortDescription'] ?></td>
                <td style="width:100px;vertical-align: middle;"><?= $gallery['date'] ?></td>
                <td align="center" style="vertical-align: middle;">
                    <a href="index.php?page=admin_gallery_edit&id=<?= $gallery['id'] ?>">Edit</a> |
                    <a onclick="return confirm('Are you really want to delete it??')" href="index.php?page=admin_gallery&id=viewall&view=1&action=delete&deleteId=<?= $gallery['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<style>
.nav-gallery{
 color: white !important;
 background-color: #2FA9B3 !important;
}
</style>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>