<?php 
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:login.php');

}

if (isset($_POST['btnAnswer'])) {
       header('Location:index.php'); 
    }

if (isset($_POST['addEventButton'])) {
        header('Location:index.php?page=admin_event');
     } 
if (isset($_POST['btnChangeEvent'])) {
       header('Location:index.php?page=admin_event'); 
     }

if (isset($_POST['addTicketButton'])) {
        header('Location:index.php?page=admin_ticket');
     } 
if (isset($_POST['btnChangeTicket'])) {
       header('Location:index.php?page=admin_ticket'); 
     }

if (isset($_POST['addCateButton'])) {
        header('Location:index.php?page=admin_category');
     } 
if (isset($_POST['btnChangeCategory'])) {
       header('Location:index.php?page=admin_category'); 
     }
 ?>


<html class="fontawesome-i2svg-active fontawesome-i2svg-complete" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singapore Zoo - Admin Page</title>
    <link rel="stylesheet" href="css/style1.css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/styleTable.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Admin Page</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Logout/ Change-pass-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="change_pass.php">Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php?action=logout">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Admin
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse show" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link nav-index" href="index.php">Dashboard</a>
                                <a class="nav-link nav-animal" href="index.php?page=admin_animal">Animal</a>
                                <a class="nav-link nav-cate" href="index.php?page=admin_category">Category</a>
                                <a class="nav-link nav-gallery" href="index.php?page=admin_gallery">Gallery</a>
                                <a class="nav-link nav-event" href="index.php?page=admin_event">Event</a>
                                <a class="nav-link nav-ticket" href="index.php?page=admin_ticket">Ticket</a>
                                <a class="nav-link nav-invoice" href="index.php?page=admin_invoice">Invoice</a>
                            </nav>
                        </div>
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php require_once isset($_GET['page']) ? $_GET['page'].'.php' : 'admin_feedback.php'; ?>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright © Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            ·
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/font-awesome.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>