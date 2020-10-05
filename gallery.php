<?php
require_once('./admin/connect.php');
$result = mysqli_query($con, 'select * from db_gallary');
?>
<div class="w3-container w3-padding-32" id="gallery">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Gallery</h3>
  <a href="gallery_view.php?id=viewall">View all -></a>
</div>
<div class="container">
  <div class="row-event">
    <?php while ($gallery = mysqli_fetch_array($result)) { ?>
      <div class="col" style="max-width:320px">
        <img src="./img/galleryUpload/<?= $gallery['fileAddress'] ?>" style="width:100%">
        <h3><?= $gallery['name'] ?></h3>
        <p><?= $gallery['description'] ?></p>
        <p><a class="w3-button w3-light-grey w3-block" href="gallery_view.php?id=<?= $gallery['id'] ?>">Detail</a></p>
      </div>
    <?php } ?>
  </div>
</div>