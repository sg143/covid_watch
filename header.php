<?php
$path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
define('APP_PATH',$path.$_SERVER["SERVER_NAME"].'/covid_watch/');

session_start();
if(!isset($_SESSION['is_loggin']) || empty($_SESSION['is_loggin'])) {
    header('Location: '.APP_PATH.'pages/login.php');
    die();
}
$curPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
$page = explode(".",$curPage)[0];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>COVID WATCH 2023 | WEB DEV TOT</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/plugins/fontawesome-free/css/all.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/plugins/jqvmap/jqvmap.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/css/adminlte.min.css" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/plugins/daterangepicker/daterangepicker.css" />
        <!-- summernote -->
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>resources/plugins/summernote/summernote-bs4.min.css" />
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="<?php echo APP_PATH; ?>index.php" class="brand-link">
                    <img src="<?php echo APP_PATH; ?>resources/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: 0.8" />
                    <span class="brand-text font-weight-light">GROUP I</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a id="dashboard" href="<?php echo APP_PATH; ?>pages/dashboard.php" class="nav-link <?php echo ($page == 'dashboard'?'active':''); ?>">
                                    <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="crudform" href="#" class="nav-link <?php echo ($page == 'crud'?'active':''); ?>">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>CRUD Form</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="logout" href="<?php echo APP_PATH; ?>api/logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-sign-in-alt"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>