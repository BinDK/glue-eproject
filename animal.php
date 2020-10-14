<?php
require_once 'admin/connect.php';
$input = mysqli_query($con, 'select * from db_animal');
$input2 = mysqli_query($con, 'select * from db_animal order by RAND()');
$input_category = mysqli_query($con, 'select * from db_category');
// $lenght[] = mysqli_fetch_lengths($input);
if (isset($_POST['buttonSearch'])) {
  if ($_POST['category'] == -1) {
    $input = mysqli_query($con, 'select * from db_animal');
    $input2 = mysqli_query($con, 'select * from db_animal');
  } else {
    $input = mysqli_query($con, 'select * from db_animal where category_id = ' . $_POST['category']);
    $input2 = mysqli_query($con, 'select * from db_animal where category_id = ' . $_POST['category']);
  }
};
?>
<div class="container-fluid " style="background-color: rgba(133,240,234,0.2) !important;" id="ticket">
    <span class="text-nowrap text-left m-0 p-0 " style="font-size: 30px">Animal</span>
</div>
<div class="container-fluid">
    <!-- CATEGORY -->
    <form method="post">
        Category <select name="category" style="width:200px" id="comboboxCategory">
            <option value="-1">All</option>
            <?php while ($category = mysqli_fetch_array($input_category)) { ?>
            <option value="<?= $category['id'] ?>">
                <?= $category['species_name'] ?>
            </option>
            <?php } ?>
        </select>
        <a target="_self"><button type="submit" name="buttonSearch">Search</button></a>
    </form>
</div>
<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <!-- Indicator -->
    <ol class="carousel-indicators">
        <?php $counter =0;  while ($indi = mysqli_fetch_array($input)) { 
    if ($counter == 0) { ?>
        <li data-target="#carouselExampleIndicators1" data-slide-to="<?= $indi['id'] ?>" class="active"></li>
        <?php } else {?>
        <li data-target="#carouselExampleIndicators1" data-slide-to="<?= $indi['id'] ?>" class=""></li>
        <?php } $counter++; ?>
        <?php }?>
    </ol>
    <!-- slide -->
    <div class="carousel-inner">
        <?php $counter2 = 0; while ($output = mysqli_fetch_array($input2)) { 
        if ($counter2 == 0) { ?>
        <div class="carousel-item active">
            <img src="img/animalPhoto/<?= $output['avatar'] ?>" class="d-block w-100" height="550" alt="Ask the dev for picture"></div>
        <?php } else { ?>
        <div class="carousel-item">
            <img src="img/animalPhoto/<?= $output['avatar'] ?>" class="d-block w-100" height="550" alt="Ask the dev for picture"></div>
        <?php } $counter2++;?>
        <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<style>
.btn:hover {
    color: black !important;
    background-color: #fff !important;
}

.btn.btn-lg:active {
    color: white !important;
}

.btn.btn-lg:focus {
    /* backgr */
    color: white !important;
    border-color: transparent !important;
    background-color: transparent !important;
    outline: 0 !important;
    box-shadow: 0 0 0 0 !important;
}

.text:hover {
    color: #ccc !important;
}
</style>
<script>
$('.btn').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
});
</script>