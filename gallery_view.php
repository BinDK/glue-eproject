<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet" type="text/css">
<?php
require_once 'admin/connect.php';

$resultEachItem = mysqli_query($con, 'select * from db_gallary');
$galleryEachItem = mysqli_fetch_array($resultEachItem);
$resultItem = mysqli_query($con, 'select * from db_gallary');
$no_of_items = 0;
while ($resultArray = mysqli_fetch_array($resultItem)) {
    $no_of_items++;
};
$item_perpage = 2;
$no_of_pages = ceil($no_of_items / $item_perpage);

$page = [];
for ($i = 0; $i < $no_of_pages; $i++) {
    $page[$i] = $i + 1;
}
$startItem = ($_GET['view'] - 1) * $item_perpage;
$result = mysqli_query($con, 'select * from db_gallary limit ' . $item_perpage . ' offset ' . $startItem);
?>
<?php require_once  'header.php' ?>
<?php
if ($_GET['id'] === "viewall") { ?>
    <div class="container">
        <div class="row-event">
            <?php while ($gallery = mysqli_fetch_array($result)) { ?>
                <div class="col-3" style="max-width:320px">
                    <img src="./img/galleryUpload/<?= $gallery['fileAddress'] ?>" style="width:100%">
                    <h3><?= $gallery['name'] ?></h3>
                    <p><?= $gallery['description'] ?></p>
                    <p><a class="w3-button w3-light-grey w3-block" href="gallery_view.php?id=<?= $gallery['id'] ?>">Detail</a></p>
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

<?php } else { ?>
    <div class="container">
        <br>
        <img src="./img/galleryUpload/<?= $galleryEachItem['fileAddress'] ?>" style="width:500px">
        <h3><?= $galleryEachItem['name'] ?></h3>
        <p><?= $galleryEachItem['description'] ?></p>
    </div>
<?php } ?>


<?php require_once  'footer.php' ?>