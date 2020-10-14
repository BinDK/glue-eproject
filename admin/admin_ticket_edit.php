<?php 
require_once 'connect.php';
$result = mysqli_query($con, 'select * from db_event');
$event = mysqli_fetch_array($result);
$msg = null;
$success = null;

if (isset($_POST['btnChangeTicket'])) {
    $id = $_POST['id'];
    $editName = $_POST['editName'];
    $editType = $_POST['editType'];
    $editPrice = $_POST['editPrice'];
    mysqli_query($con,'update db_ticket set name = "'.$editName.'", type = "'.$editType.'", price = "'.$editPrice.'" where id = '.$id);        
    }

 ?>

<html lang="en"><head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Change Ticket</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change Ticket row no <?= $_GET['id'] ?></h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="editName">Name</label>
                                                <input class="form-control py-4" name="editName" type="text" placeholder="Enter new title">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="editType">Type</label>
                                                <input class="form-control py-4" name="editType" type="text" placeholder="Enter new Type">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="editPrice">Price</label>
                                                <input class="form-control py-4" name="editPrice" type="number" min="0" placeholder="Enter Price">
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">    
                                                <div><?= $success; ?> <?=  $msg; ?></div>
                                                <input type="submit" class="btn btn-primary" name="btnChangeTicket" value="  Change Ticket  ">
                                                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                  <div class="small"><a href="index.php?page=admin_ticket">Back to Ticket</a></div>
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
<style>
.nav-ticket{
 color: white !important;
 background-color: #D571B8 !important;
}
</style>
</body></html>