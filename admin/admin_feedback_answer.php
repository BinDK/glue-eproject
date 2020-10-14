<?php 
require_once 'connect.php';
$result = mysqli_query($con, 'select * from db_feedback');
$event = mysqli_fetch_array($result);
$msg = null;
if (isset($_POST['btnAnswer'])) {
    $id = $_POST['id'];
    $message = $_POST['message'];
        mysqli_query($con,'delete from db_feedback where id = '.$id);
        header('Location:index.php');
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Answer Customer Name "<?= $_GET['name'] ?>"</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="message">Your message</label>
                                                <input class="form-control py-4" name="message" type="text" placeholder="Enter your message">
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">    
                                                <div><?= $msg; ?></div>
                                                <input type="submit" class="btn btn-primary" name="btnAnswer" value="  Answer & Delete  ">
                                                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                  <div class="small"><a href="index.php">Back to Dashboard</a></div>
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
</body></html>