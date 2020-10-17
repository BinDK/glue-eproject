<?php 
require_once 'admin/connect.php';
$category_id = '';
$result = mysqli_query($con, 'select * from db_animal');
$result2 = mysqli_query($con, 'select * from db_animal order by RAND()');
$categories = mysqli_query($con,'select * from db_category');

 ?>
<script src="admin/js/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
$('#comboboxCategory').change(function() {
 var categoryId = $('#comboboxCategory option:selected').val(); 
 $.ajax({
        type: 'GET',
        url: 'ajaxAnimal.php',
        data: {categoryId: categoryId},
        dataType: 'json',
        contentType: 'application/json',
        success: function(result){
                var s = '';
                var counter3 = 0;
                var x = '';
                var counter4 = 0;

                for (var i = 0; i < result.length; i++) {
                if (counter4 == 0) {
                x += '<li data-target="#carouselExampleIndicators1" data-slide-to="'+ result[i].id +'" class="active"></li>';
            }   else {
                x += '<li data-target="#carouselExampleIndicators1" data-slide-to="'+ result[i].id +'" class=""></li>';
                } counter4++;
            }
                for (var i = 0; i < result.length; i++) {
                if (counter3 == 0) {
                s += '<div class="carousel-item active">';
                s += '<img src="img/animalPhoto/'+ result[i].avatar +'" class="d-block w-100" height="550" alt="Ask the dev for picture"></div>';  
                s += "</div>";
            }   else {
                s += '<div class="carousel-item">';
                s += '<img src="img/animalPhoto/'+ result[i].avatar +'" class="d-block w-100" height="550" alt="Ask the dev for picture"></div>';  
                s += "</div>";
                } //end else
                counter3++;
            }
            $('#carouselExampleIndicators1 .carousel-indicators').html(x)
            $('#carouselExampleIndicators1 .carousel-inner').html(s);
        }
    });
            
        });
    });


</script>
<link rel="stylesheet" href="bootstrap.min.css">
<!-- <script src="admin/js/jquery-3.5.1.min.js"></script> -->
<script src="admin/js/bootstrap.min.js"></script>
    <form method="post">
        Category <select name="category" style="width:200px" id="comboboxCategory">
            <option value="-1">All</option>
            <?php while ($category = mysqli_fetch_array($categories)) { ?>
            <option value="<?= $category['id'] ?>"><?= $category['species_name'] ?></option>
            <?php } ?>
        </select>
    </form>



<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <!-- Indicator -->
    <ol class="carousel-indicators">
        <?php $counter =0;  while ($indi = mysqli_fetch_array($result)) { 
    if ($counter == 0) { ?>
        <li data-target="#carouselExampleIndicators1" data-slide-to="<?= $indi['id'] ?>" class="active"></li>
        <?php } else {?>
        <li data-target="#carouselExampleIndicators1" data-slide-to="<?= $indi['id'] ?>" class=""></li>
        <?php } $counter++; ?>
        <?php }?>
    </ol>
    <!-- slide -->
    <div class="carousel-inner">
        <?php $counter2 = 0; while ($output = mysqli_fetch_array($result2)) { 
        if ($counter2 == 0) { ?>
        <div class="carousel-item active">
            <img src="img/animalPhoto/<?= $output['avatar'] ?>" class="d-block w-100" height="550" alt="Ask the dev for picture">
        </div>
        <?php } else { ?>
        <div class="carousel-item">
            <img src="img/animalPhoto/<?= $output['avatar'] ?>" class="d-block w-100" height="550" alt="Ask the dev for picture">
        </div>
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