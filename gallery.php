
  <?php
  require_once('./admin/connect.php');
  $result = mysqli_query($con, 'select * from db_gallary limit 4');
  ?>


  <link href="style.css" rel="stylesheet" type="text/css"
  >
<div class="container-fluid " style="background-color: rgba(133,240,234,0.2) !important;" id="ticket">
  <span class="text-nowrap text-left m-0 p-0 " style="font-size: 30px">Gallery</span>
</div>


  <div class="container-fluid" style="padding-top: 100px;background-color: #EAE6E5 !important;height: 550px;">
    <div class="row">
      <?php while ($gallery = mysqli_fetch_array($result)) { ?>
        <div class="col col-md-3 text-truncate" align="center">
          <?php
          $photo = explode('-', $gallery['fileAddress']);?>
          <img src="./img/galleryUpload/<?= $photo[0] ?>"  class="img-fluid">
          <!-- <img src="./img/galleryUpload/< ?= $gallery['fileAddress'] ?>" style="width:250px"> -->
          <h5><b><?= $gallery['name'] ?></b></h5>
          <span style="font-size: 15px;"><b><?= $gallery['shortDescription'] ?></b></span>
          <p><a class="btn btn- btn-block btn-secondary" href="gallery_view.php?id=<?= $gallery['id'] ?>">Detail</a></p>
        </div>
      <?php } ?>
    </div>
</div>
</body>

</html>