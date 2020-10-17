<?php
require_once 'admin/connect.php';
$input = mysqli_query($con, 'select * from db_animal');
$input1 = mysqli_query($con, 'select * from db_animal');
$input2 = mysqli_query($con, 'select * from db_animal order by rand() LIMIT 1');
$input_category = mysqli_query($con, 'select * from db_category');
$input_category1 = mysqli_query($con, 'select * from db_category');
?>
<div class="container-fluid " style="background-color: rgba(133,240,234,0.2) !important;" id="animal">
  <span class="text-nowrap text-left m-0 p-0 " style="font-size: 30px">ANIMAL</span>
</div>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  /* #test css of UL LIST OF ANIMAL */
  #test {

    width: 200px;
    height: 300px;
    overflow-x: hidden;
    overflow-y: auto;
  }
  li {
    text-align: left;
  }

  #animalPhoto {
    width: 100%;
    height: 300px;
  }

  button {
    text-align: left;
  }

  /* Dropdown Button */
  .dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  /* Dropdown button on hover & focus */
  .dropbtn:hover,
  .dropbtn:focus {
    background-color: #2980B9;
  }

  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {
    background-color: #ddd
  }

  /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
  .show {
    display: block;
  }
</style>
<!-- MAIN PART -->
<div class=" w3-row w3-margin-bottom">

  <!-- MENU BAR -->
  <div class="w3-col l2 w3-center" style="padding:3%">
    <!-- SIDEBAR IN LARGE SCREEN -->
    <div class="w3-collapse w3-hide-small w3-hide-medium" id="sidenav">
      <div id="test">
        <!-- SELECT CATEGORY -->
        <select style="background-color: transparent;" class="w3-select selectClass">
          <option value="-1">All list of animals</option>
          <?php while ($output = mysqli_fetch_array($input_category)) { ?>
            <option value="<?= $output['id'] ?>"><?= $output['species_name'] ?></option>
          <?php } ?>
        </select>
        <!-- SELECT CATEGORY -->

        <!-- UL LIST OF ANIMAL -->
        <ul class="ulClass">
          <?php while ($output = mysqli_fetch_array($input)) { ?>
            <li> <button style="border: none;" value="<?= $output['id'] ?>" class="btnClass"><?= $output['name'] ?></button></li>
          <?php } ?>
        </ul>
        <!-- UL LIST OF ANIMAL -->
      </div>
    </div>

    <!-- SIDEBAR IN LARGE SCREEN -->
    <!-- SIDEBAR IN SMALL SCREEN -->
    <div class="w3-hide-large">
      <!-- SELECT CATEGORY IN SMALL CREEN -->
      <select style="background-color: transparent;" class="w3-select selectClass">
        <option value="-1">All list of animals</option>
        <?php while ($output = mysqli_fetch_array($input_category1)) { ?>
          <option value="<?= $output['id'] ?>"><?= $output['species_name'] ?></option>
        <?php } ?>
      </select>
      <!-- SELECT CATEGORY IN SMALL CREEN -->
      <!-- DROP DOWN AND UL LIST OF ANIMAL IN SMALL SCREEN -->
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn" style="background-color: transparent; font-style: italic; color: black"> List of animals </button>
        <div id="myDropdown" class="dropdown-content">
          <ul class="ulClass">
            <?php while ($output = mysqli_fetch_array($input1)) { ?>
              <li> <button style="border: none;" value="<?= $output['id'] ?>" class="btnClass"><?= $output['name'] ?></button></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <!-- DROP DOWN AND UL LIST OF ANIMAL IN SMALL SCREEN -->
    </div>
    <!-- SIDEBAR IN SMALL SCREEN -->
  </div>
  <!-- MENU BAR -->

  <!-- BRIEF INFOR OF ANIMAL -->
  <?php $output = mysqli_fetch_array($input2)  ?>
  <div class="w3-col l5 w3-center" style="padding:3%">
    <h1 class="nameAjax"><?= $output['name'] ?></h1>
    <p class="w3-xlarge w3-text-dark-grey">More detail information of <span style="font-style: italic;" class="nameAjax"><?= $output['name'] ?></span> : </p>
    <p class="descriptionAjax"><?= $output['description'] ?></p>
  </div>

  <!-- BRIEF INFOR OF ANIMAL -->

  <!-- DETAIL INFOR OF ANIMAL -->
  <div class="w3-col l5" style="padding:3%;">
    <div class="w3-light-grey w3-card-2" style="padding:16px;">
      <h3>Image of <span style="font-style: italic;" class="nameAjax"><?= $output['name'] ?></span>:</h3>
      <div class="w3-code htmlHigh notranslate w3-border-green imageAjax">
        <img id="animalPhoto" src="img/animalPhoto/<?= $output['avatar'] ?>" alt="Ask the dev for image">
      </div>
    </div>
  </div>

  <!-- DETAIL INFOR OF ANIMAL -->
</div>
<!-- MAIN PART -->

<script>
  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  /*JQUERRY AJAX */
  $(document).ready(function() {
    /* Ajax choose category*/
    $('.selectClass').change(function() {
      var categoryId = $(this).val();
      $.ajax({
        type: 'GET',
        url: 'ajax_animal_category.php',
        data: {
          categoryId: categoryId
        },
        dataType: 'json',
        contentType: 'application/json',
        success: function(result) {
          var s = '';
          for (var i = 0; i < result.length; i++) {
            s += '<li> <button style="border: none;" value="' + result[i].id + '"  class="btnClass">' + result[i].name + '</button></li>'
          }
          $('.ulClass').html(s);
        }
      });

    });
    /*  Ajax choose animals to see detail */
    $(document).on('click', '.btnClass', function() {
      // alert($(this).val());
      var detailId = $(this).val();
      $.ajax({
        type: 'GET',
        url: 'ajax_animal_detail.php',
        data: {
          detailId: detailId
        },
        dataType: 'json',
        contentType: 'application/json',
        success: function(result) {
          var sName = '';
          var sDescription = '';
          var sImage = '';
          for (var i = 0; i < result.length; i++) {
            sName += result[i].name;
            sDescription += result[i].description;
            sImage += '<img src="img/animalPhoto/' + result[i].avatar + '" id="animalPhoto">';
          }
          $('.nameAjax').html(sName);
          $('.descriptionAjax').html(sDescription);
          $('.imageAjax').html(sImage);
        }
      });
    });
  });
</script>