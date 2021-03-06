<?php
session_start();
if(isset($_SESSION['admin_id'])) {
} else {
  header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
    Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
  </head>
  <body class="">
    <div class="wrapper">
      <div class="sidebar">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
        -->
        <div class="sidebar-wrapper">
          <div class="logo">
            <marquee>
            <a href="javascript:void(0)" class="simple-text logo-mini">
              MS &nbsp;-
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
              Medstore
            </a>
            </marquee>
          </div>
          <ul class="nav">
            <li class="active ">
              <a href="./stock.php">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Stock</p>
              </a>
            </li>
            <li>
              <a href="./product.php">
                <i class="tim-icons icon-atom"></i>
                <p>Product</p>
              </a>
            </li>
            <li>
              <a href="purchase.php">
                <i class="tim-icons icon-pin"></i>
                <p>Purchase</p>
              </a>
            </li>
            <li>
              <a href="./notifications.html">
                <i class="tim-icons icon-bell-55"></i>
                <p>Sell</p>
              </a>
            </li>
            <li>
              <a href="./user.html">
                <i class="tim-icons icon-single-02"></i>
                <p>Bill</p>
              </a>
            </li>
            <li>
              <a href="./tables.html">
                <i class="tim-icons icon-puzzle-10"></i>
                <p>Contact Us</p>
              </a>
            </li>
            <li>
              <a href="./typography.html">
                <i class="tim-icons icon-align-center"></i>
                <p>Typography</p>
              </a>
            </li>
            <li>
              <a href="./rtl.html">
                <i class="tim-icons icon-world"></i>
                <p>RTL Support</p>
              </a>
            </li>
            <li class="active-pro">
              <a href="./upgrade.html">
                <i class="tim-icons icon-spaceship"></i>
                <p>Upgrade to PRO</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a class="navbar-brand" href="javascript:void(0)">Medical Store System</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav ml-auto">
                <li class="search-bar input-group">
                  <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Search</span>
                  </button>
                </li>
                <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <div class="photo">
                      <img src="../assets/img/anime3.png" alt="Profile Photo">
                    </div>
                    <b class="caret d-none d-lg-block d-xl-block"></b>
                    <p class="d-lg-none">
                      Log out
                    </p>
                  </a>
                  <ul class="dropdown-menu dropdown-navbar">
                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="nav-link"><a href="../exit.php" class="nav-item dropdown-item">Log out</a></li>
                  </ul>
                </li>
                <li class="separator d-lg-none"></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Navbar -->