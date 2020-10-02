<?php
require_once 'connect.php';
if(isset($_POST['buttonAdd'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    // upload file
    foreach($_FILES['photo']['name'] as $key => $value){
        $fileName = date('ymdHis').$value;
        copy($_FILES['photo']['tmp_name'][$key],'../img/galleryUpload/'.$fileName);
        mysqli_query($con,'insert into db_gallary (name,description,fileAddress) values("'.$name.'","'.$description.'","'.$fileName.'")');
    }; 
    
}
$result = mysqli_query($con, 'select * from db_gallary');
?>
<h3>Gallery Upload</h3>
<form method="post" style="width:300px" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" cols="20" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="file">File</label>
    <input type="file" name="photo[]" multiple="true">
  </div>
  <input type="submit" name="buttonAdd" value="Add" id="created" class="btn btn-primary">
</form>

<table class="table table-bordered">
    <tr style="text-align:center">
        <td ><b>Name</b></td>
        <td><b>Img</b></td>
        <td><b>Description</b></td>
    </tr>
    <?php while ($gallery = mysqli_fetch_array($result)) {?>
        <tr>
            <td style="width:100px"><?= $gallery['name'] ?></td>
            <td><img src="../img/galleryUpload/<?=$gallery['fileAddress']?>" width="100px"></td>
            <td><?= $gallery['description'] ?></td>
        </tr>
    <?php } ?>
</table>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>