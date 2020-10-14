<?php 
require_once 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($con, 'select * from db_event where id = '.$id);
$msg = null;
$success = null;

if (isset($_POST['btnChangeEvent'])) {
    $editTitle = $_POST['editTitle'];
    $editDetail = $_POST['editDetail'];
    $editDescription = $_POST['editDescription'];
    $editDate = explode('/',$_POST['editDate']);
    $created = $editDate[2].'-'.$editDate[0].'-'.$editDate[1];
        $photo = date('YmHis').$_FILES['photo']['name'];
  copy($_FILES['photo']['tmp_name'], '../img/eventUpload/'.$photo);
    mysqli_query($con,'update db_event set title = "'.$editTitle.'", detail = "'.$editDetail.'", date = "'.$created.'", event_photo = "'.$photo.'" ,description = "'.$editDescription.'" where id = '.$id);        
    }
$event = mysqli_fetch_array($result);
$dashDate = explode('-',$event['date']);
$showDate = $dashDate[1].'/'.$dashDate[2].'/'.$dashDate[0];
 ?>
<link href="css/styles.css" rel="stylesheet">
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
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="small mb-1" for="editTitle">Title</label>
                                                <input class="form-control py-4" name="editTitle" type="text" placeholder="Enter new title" value="<?= $event['title'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="editDetail">Detail</label>
                                                <input class="form-control py-4" name="editDetail" type="text" placeholder="Enter new detail" value="<?= $event['detail'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="editDate">Date</label>
                                                <input class="form-control py-4" name="editDate" type="text" placeholder="Choose new date" id="created" value="<?= $showDate ?>">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="small mb-1" for="editDescription">Description</label>
                                                <input class="form-control py-4" name="editDescription" type="text" placeholder="Enter new description" value="<?= $event['description'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="photo" type="file">
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
        <script>
              $( function() {
    $( "#created" ).datepicker();
  } );
  </script>
<style>
.nav-event {
    color: white !important;
    background-color: #AE77D9 !important;
}
</style>
</body></html>