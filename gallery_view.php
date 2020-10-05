<?php
require_once 'admin/connect.php';
$result = mysqli_query($con, 'select * from db_gallary where id =' . $_GET['id']);
$resultAll = mysqli_query($con, 'select * from db_gallary');
$gallery = mysqli_fetch_array($result)
?>
<?php require_once isset($_GET['page']) ? $_GET['page'] . '.php' : 'header.php'; ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="bootstrap.min.css">

    
    <?php
        if($_GET['id']==="viewall"){?>
        <div class="container">
            <div class="row-event">
                <?php while ($gallery = mysqli_fetch_array($resultAll)) { ?>
                    <div class="col" style="max-width:320px">
                    <img src="./img/galleryUpload/<?= $gallery['fileAddress'] ?>" style="width:100%">
                    <h3><?= $gallery['name'] ?></h3>
                    <p><?= $gallery['description'] ?></p>
                    <p><a class="w3-button w3-light-grey w3-block" href="gallery_view.php?id=<?= $gallery['id'] ?>">Detail</a></p>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php } else {?>
        <div class="container">
            <br>
            <img src="./img/galleryUpload/<?= $gallery['fileAddress'] ?>" style="width:500px">
            <h3><?= $gallery['name'] ?></h3>
            <p><?= $gallery['description'] ?></p>
        </div>
    <?php } ?>

    <?php require_once isset($_GET['page']) ? $_GET['page'] . '.php' : 'footer.php'; ?>
