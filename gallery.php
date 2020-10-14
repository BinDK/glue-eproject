
  <?php
  require_once('./admin/connect.php');
  $result = mysqli_query($con, 'select * from db_gallary limit 4');
  ?>


  <link href="style.css" rel="stylesheet" type="text/css"
  >
<div class="container-fluid " style="background-color: rgba(133,240,234,0.2) !important;" id="ticket">
  <span class="text-nowrap text-left m-0 p-0 " style="font-size: 30px">Gallery</span>
</div>


  <div class="container-fluid" style="background-color: #EAE6E5 !important;height: 550px;">
  <div class="container " style="max-width: 100%; padding-top: 50px;">
    <div class="row">
      <?php while ($gallery = mysqli_fetch_array($result)) { ?>
        <div class="col" align="center">
          <?php
          $photo = explode('-', $gallery['fileAddress']);?>
          <img src="./img/galleryUpload/<?= $photo[0] ?>"  style="width:340px; height: 300px;">
          <!-- <img src="./img/galleryUpload/< ?= $gallery['fileAddress'] ?>" style="width:250px"> -->
          <h4><b><?= $gallery['name'] ?></b></h4>
          <span style="font-size: 15px;"><b><?= $gallery['shortDescription'] ?></b></span>
          <p><a class="btn btn-block btn-secondary" href="gallery_view.php?id=<?= $gallery['id'] ?>">Detail</a></p>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</body>

</html>