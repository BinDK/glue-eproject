<?php
require_once 'connect.php';
if(isset($_POST['buttonAdd'])){
    $description = $_POST['description'];
    // upload file
    $fileName = date('ymdHis').$_FILES['photo']['name'];
    copy($_FILES['photo']['tmp_name'],'../img/galleryUpload/'.$fileName);
    mysqli_query($con,'insert into db_gallary (name,description) values("'.$fileName.'","'.$description.'")');
}
?>
<h3>Gallery Upload</h3>
<form action="admin_gallery.php" method="post" style="width:300px" enctype="multipart/form-data">
  <div class="form-group">
    <label for="file">File</label>
    <input type="file" name="photo">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" cols="20" rows="5"></textarea>
  </div>
  <input type="submit" name="buttonAdd" value="Add" id="created">
</form>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>