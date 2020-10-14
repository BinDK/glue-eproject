<?php  
require_once 'connect.php';
$result = mysqli_query($con, 'select * from db_user');
session_start();
$msg = null;
if (isset($_POST['btnLogin'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            while ($account = mysqli_fetch_array($result)) {
            // if ($username == $account['username'] && $password == $account['password']) {
            // while ($account = mysqli_fetch_array($result)) {
            // if ($username == $account['username'] && $password == $account['password']) { sql injection chổ $result phía dưới

            // $result = mysqli_query($con, 'select * from db_user where username = "'.$username.'" and password = "'.$password.'"');
            if ($username == $account['username'] && $password == $account['password']) {
                $_SESSION['admin'] = $username;
                header('Location:index.php');
              } else if($username == '' || $password == '' ){$msg = 'Field cannot be empty!!';}
               else { $msg = 'Invalid'; }
            }
    }
    // }
?>


<?php 
if (isset($_GET['action'])) {
unset($_SESSION['admin']);
header('Location:login.php');
}
?>

<html lang="en"><head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/font-awesome.min.js"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Admin</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Enter account" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password">
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <span style="color:red !important;"><?=  $msg; ?></span>
                                                <input type="submit" class="btn btn-primary" name="btnLogin" value="  Login  ">
                                            </div>
                                        </form>
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
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
</body></html>