<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link href="style.css" rel="stylesheet" type="text/css">
<?php
require_once './admin/connect.php';
// Pagination for view all
// $resultEachItem = mysqli_query($con, 'select * from db_gallary');
// $galleryEachItem = mysqli_fetch_array($resultEachItem);
$resultItem = mysqli_query($con, 'select * from db_gallary');
$no_of_items = 0;
while ($resultArray = mysqli_fetch_array($resultItem)) {
    $no_of_items++;
};
$item_perpage = 8;
$no_of_pages = ceil($no_of_items / $item_perpage);

$page = [];
for ($i = 0; $i < $no_of_pages; $i++) {
    $page[$i] = $i + 1;
}


// Gallery Detail


?>
<nav class="navbar navbar-expand navbar-expand-md navbar-dark bg-dark pb-1 d-flex justify-content-between">
  <div class="navbar-brand ">
    <a href="./" class="text text-muted text-decoration-none"><span style="letter-spacing: 4px;">SINGAPORE CENTRAL ZOO</span> </a>
    </div>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="nav-item text-white">
      <a href="index.php#animal" class="btn btn-lg text-muted">Animals</a>
      <a href="#about" class="btn btn-lg text-muted">About us</a>
      <a href="index.php#event" class="btn btn-lg text-muted">Events</a>
      <a href="index.php#ticket" class="btn btn-lg text-muted">Ticket</a>
      <a href="#gallery" class="btn btn-lg text-white bg-secondary">Gallery</a>
      <a href="index.php#contact" class="btn btn-lg text-muted">Contact</a>
    </div>
</nav>
<!-- Gallery view all -->
<?php
if ($_GET['id'] === "viewall") { ?>
    <div class="container" style="max-width: 100%;">
        <div class="row" style="padding-left: 100px;">
            <?php 
            $startItem = ($_GET['view'] - 1) * $item_perpage;
            $result = mysqli_query($con, 'select * from db_gallary limit ' . $item_perpage . ' offset ' . $startItem);
            while ($gallery_view_all = mysqli_fetch_array($result)) { ?>
                <div class="col col-md-3" align="center" style="max-width:320px">
                    <?php
                        $photo_view_all = explode('-', $gallery_view_all['fileAddress']);
                    ?>
                    <img src="./img/galleryUpload/<?= $photo_view_all[0] ?>" class="img-fluid">
                    <h5><?= $gallery_view_all['name'] ?></h5>
                    <p class="text-truncate"><?= $gallery_view_all['shortDescription'] ?></p>
                    <p><a class="btn btn-block btn-secondary" href="gallery_view.php?id=<?= $gallery_view_all['id'] ?>">Detail</a></p>
                </div>
            <?php } ?>
        </div>
        <ul class="pagination">
            <?php
            $start = $_GET['view'];
            $noItems = 2; //the real number is $noItems +1
            $end = $start + $noItems;
            if ($end > count($page)) {
                $end = count($page);
                $start = $end - $noItems;
            };
            if ($start < 1 && ($end - $start) <= $noItems) {
                $start = 1;
                $end = count($page);
            }
            ?>
            <?php if ($_GET['view'] > 1) { ?>
                <li class="page-item"><a class="page-link" href="gallery_view.php?id=viewall&view=<?= $_GET['view'] - 1 ?>">Previous</a></li>
            <?php } ?>
            <?php
            for ($i = ($start - 1); $i < ($end); $i++) { ?>
                <li class="page-item"><a class="page-link" href="gallery_view.php?id=viewall&view=<?= $page[$i] ?>"><?= $page[$i] ?></a></li>
            <?php } ?>
            <?php if ($end < count($page)) { ?>
                <li class="page-item"><a class="page-link" href="gallery_view.php?id=viewall&view=<?= $start + 1 ?>">Next</a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- Gallery Detail -->
<?php } else { ?>
    <!-- style for gallery detail -->
    <style>
        #slider-wrapper {
            width: 940px;
            height: 470px;
            margin: 50px auto;
            position: relative ;
            margin-bottom: 0px;
            /* background: rgba(0, 0, 0, 0.5); */
            overflow: hidden;
            z-index: 0;
        }

        #s1 {
            padding: 6px;
            background: #000000;
            position: absolute;
            left: 50%;
            bottom: 25px;
            margin-left: -36px;
            border-radius: 20px;
            opacity: 0.3;
            cursor: pointer;
            z-index: 999;
        }

        #s2 {
            padding: 6px;
            background: #000000;
            position: absolute;
            left: 50%;
            bottom: 25px;
            margin-left: -12px;
            border-radius: 20px;
            opacity: 0.3;
            cursor: pointer;
            z-index: 999;
        }

        #s3 {
            padding: 6px;
            background: #000000;
            position: absolute;
            left: 50%;
            bottom: 25px;
            margin-left: 12px;
            border-radius: 20px;
            opacity: 0.3;
            cursor: pointer;
            z-index: 999;
        }

        #s4 {
            padding: 6px;
            background: #000000;
            position: absolute;
            left: 50%;
            bottom: 25px;
            margin-left: 36px;
            border-radius: 20px;
            opacity: 0.3;
            cursor: pointer;
            z-index: 999;
        }

        #s1:hover,
        #s2:hover,
        #s3:hover,
        #s4:hover {
            opacity: .50;
        }

        .inner-wrapper {
            width: 940px;
            height: 470px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 0px;
            overflow: hidden;
        }

        .control {
            display: none;
        }

        #Slide1:checked~.overflow-wrapper {
            margin-left: 0%;
        }

        #Slide2:checked~.overflow-wrapper {
            margin-left: -100%;
        }

        #Slide3:checked~.overflow-wrapper {
            margin-left: -200%;
        }

        #Slide4:checked~.overflow-wrapper {
            margin-left: -300%;
        }

        #Slide1:checked+#s1 {
            opacity: 1;
        }

        #Slide2:checked+#s2 {
            opacity: 1;
        }

        #Slide3:checked+#s3 {
            opacity: 1;
        }

        #Slide4:checked+#s4 {
            opacity: 1;
        }

        .overflow-wrapper {
            width: 400%;
            height: 100%;
            position: relative;
            top: 0;
            left: 0;
            overflow-y: hidden;
            z-index: 1;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .slide img {
            width: 25%;
            float: left;
        }
    </style>
    <!-- view of gallery detail -->
    <div class="container" align="center">
        <br>
        <div id="slider-wrapper">
            <div class="inner-wrapper">
                <?php
                $input = mysqli_query($con, 'select * from db_gallary where id = ' . $_GET['id']);
                $output = mysqli_fetch_array($input);
                $photoDetail = explode('-', $output['fileAddress']);
                for ($i = 0; $i < count($photoDetail); $i++) { ?>
                    <input checked type="radio" name="slide" class="control" id="Slide<?= $i + 1 ?>" />
                    <label for="Slide<?= $i + 1 ?>" id="s<?= $i+1 ?>"></label>
                <?php } ?>
                <div class="overflow-wrapper">
                    <?php
                    for ($i = 0; $i < count($photoDetail); $i++) { ?>
                        <div class="slide"><img  src="./img/galleryUpload/<?= $photoDetail[$i] ?>" width="940px" height="470px"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <h3><?= $output['name'] ?></h3>
        <p><?= $output['description'] ?></p>
    </div>

<?php } ?>


<?php require_once  'footer.php' ?>