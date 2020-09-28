<?php 
//để test thì vào localhost:xxxx/session9/admin/ thay vì vào trang index nó sẽ bắt mình đăng nhập
session_start();
//Chổ này anh đẻ ý ! trước isset là để kiểm tra coi coi mình đã đăng nhập vào admin chưa
if(!isset($_SESSION['admin'])){
//Chổ header('Location:xxxx.xxx') gọi là redirect, kiểu như nếu mình chưa đăng nhập vào admin, thì redirect mình tới login.php
    header('Location:login.php');

}
 

 ?>


<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        Welcome <?= $_SESSION['admin'] ?><a href="login.php?action=logout">Log-out</a>&nbsp;&nbsp;
        <a href="index.php?page=menu1">Menu 1</a>
        <a href="index.php?page=menu2">Menu 2</a>
        <a href="index.php?page=menu3">Menu 3</a>
        <br><br>
        <?php 
        require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'menu1.php'; 
        ?>



Action menu

    </body>
</html>