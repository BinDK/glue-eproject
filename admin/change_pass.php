<?php  
require_once 'connect.php';
$result = mysqli_query($con, 'select * from db_user');
$account = mysqli_fetch_array($result);
session_start();
$msg = null;
$success = null;

if (isset($_POST['btnChange'])) {
            $password0 = $_POST['password0'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            if ($password0 == '' || $password1 == '' || $password2 == '' ) {
                $msg = '<span style="color:red !important;">Field cannot be empty!!</span>';
            }
           else if ($password0 != $account['password']) {
                $msg = '<span style="color:red !important;">Old Password Incorrect!!</span>';;
            } else if ($password1 != $password2) {
                $msg = '<span style="color:red !important;">New Password do not match!!</span>';
            }
            else{
                // password_hash($password2, PASSWORD_BCRYPT);
                $success = '<span style="color:green !important;">You just change your password, heading to Login page after 3second.</span>';
                // mysqli_query($con,'update db_user set password = "'.password_hash($password2, PASSWORD_BCRYPT).'" where id = 1');
                mysqli_query($con,'update db_user set password = "'.$password2.'" where id = 1');
                header( "Refresh:3; url=login.php?action=logout", true, 303);
            }
}
?>


<html lang="en"><head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Change password</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change Password</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Old Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter old password" name="password0">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">New Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter new password" name="password1">
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Confirm Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Re-type new password" name="password2">
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <div><?= $success; ?> <?=  $msg; ?></div>
                                                <input type="submit" class="btn btn-primary" name="btnChange" value="  Change Password  ">
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    

</body></html>