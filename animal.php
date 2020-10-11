<?php
require_once 'admin/connect.php';
$input = mysqli_query($con, 'select * from db_animal');
$input_category = mysqli_query($con, 'select * from db_category');
if (isset($_POST['buttonSearch'])) {
  if ($_POST['category'] == -1) {
    $input = mysqli_query($con, 'select * from db_animal');
  } else {
    $input = mysqli_query($con, 'select * from db_animal where category_id = ' . $_POST['category']);
  }
};
?>
<!DOCTYPE html>
<html>

<head>
  <title>Slick Playground</title>
  <meta charset="UTF-8">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <style type="text/css">
    html,
    body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
      width: 50%;
      margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>

<body>
  <!-- Indicators -->
  <h1>Animal</h1>
  <div id="animal" align="center">
    <br><br>
    <form method="post">
      Category <select name="category" style="width:200px" id="comboboxCategory">
        <option value="-1">All</option>
        <?php while ($category = mysqli_fetch_array($input_category)) { ?>
          <option value="<?= $category['id'] ?>"><?= $category['species_name'] ?></option>
        <?php } ?>
      </select>
      <a target="_self"><input type="submit" name="buttonSearch" value="Search"></a>
    </form>
  </div>
  </select>
  <!-- Indicators -->
  <!-- Slider -->
  <div>
    <section class="center slider">
      <?php while ($output = mysqli_fetch_array($input)) { ?>
        <div>
          <div class="card" style="width: 18rem;">
            <img src="img/<?= $output['avatar'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $output['name'] ?></h5>
              <p class="card-text"><?= $output['description'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </section>
  </div>
  <!-- Slider -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
      });
    });
  </script>
</body>

</html>