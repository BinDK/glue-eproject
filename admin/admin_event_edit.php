<?php 
require_once 'connect.php';
$result = mysqli_query($con, 'select * from db_event');
$event = mysqli_fetch_array($result);
$msg = null;
$success = null;

if (isset($_POST['btnChangeEvent'])) {
    $id = $_POST['id'];
    $editTitle = $_POST['editTitle'];
    $editDetail = $_POST['editDetail'];
    $editDescription = $_POST['editDescription'];
    $editDate = explode('/',$_POST['editDate']);
    $created = $editDate[2].'-'.$editDate[0].'-'.$editDate[1];
    mysqli_query($con,'update db_event set title = "'.$editTitle.'", detail = "'.$editDetail.'", date = "'.$created.'", description = "'.$editDescription.'" where id = '.$id);        
    }

 ?>

<html lang="en"><head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Change Event</title>
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change Event row no <?= $_GET['id'] ?></h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="editTitle">Title</label>
                                                <input class="form-control py-4" name="editTitle" type="text" placeholder="Enter new title">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="editDetail">Detail</label>
                                                <input class="form-control py-4" name="editDetail" type="text" placeholder="Enter new detail">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="editDate">Date</label>
                                                <input class="form-control py-4" name="editDate" type="text" placeholder="Choose new date" id="created">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="small mb-1" for="editDescription">Description</label>
                                                <input class="form-control py-4" name="editDescription" type="text" placeholder="Enter new description">
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">    
                                                <div><?= $success; ?> <?=  $msg; ?></div>
                                                <input type="submit" class="btn btn-primary" name="btnChangeEvent" value="  Change Event  ">
                                                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                  <div class="small"><a href="index.php?page=admin_event">Back to Event</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
           <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
              $( function() {
    $( "#created" ).datepicker();
  } );
  </script>


</body></html>