<?php
session_start();
require_once ('conn.php');
include_once ('usernamecheck.php');
$farmno=$_SESSION['assignfrmno'];
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from quixlab.com/demo/corbin/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 08:19:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Corbin - Simple Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
                <a href="index-2.html" class="brand-logo">
                        <span class="logo-abbr">Y</span>
                        <span class="logo-compact"> <span style="position: absolute; top: 0;left: -5px; color: #ff4200; z-index: -1;padding-top:25px;padding-left:41px;">Y</span>YIMALGS</span>
                        <span class="brand-title">YIMALGS</span>
                    </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header"> 
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon d-md-none p-3 c-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-search"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form class="form-inline">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <!-- <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge badge-primary">3</span>
                                </a> -->
                                <!-- <div class="dropdown-menu dropdown-menu-right">
                                    <h5 class="notification_title">Notifications</h5>
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <img class="mr-3" src="images/avatar/1.jpg" alt="Quixlab">
                                            <div class="media-body">
                                                <a href="#">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Mr John</h5>
                                                    </div>
                                                    <p class="m-0">signed nup now</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <img class="mr-3" src="images/avatar/8.jpg" alt="Quixlab">
                                            <div class="media-body">
                                                <a href="#">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Lisa Heiden</h5>
                                                    </div>
                                                    <p class="m-0">Reset password</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <img class="mr-3" src="images/avatar/2.jpg" alt="Quixlab">
                                            <div class="media-body">
                                                <a href="#">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Mr khan</h5>
                                                    </div>
                                                    <p class="m-0">Email sent</p>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">All Notifications</a>
                                </div> -->
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        
                                        <span>My profile</span>
                                    </a>
                                    <!-- <a href="#!" class="dropdown-item">
                                        
                                        <span>Calender</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        
                                        <span>Inbox</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        
                                        <span>Settings</span>
                                    </a> -->
                                    <a href="#!" class="dropdown-item">
                                        
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php 
        $fav = $_SESSION['rank'];
        switch($fav){
            case "2":
            include_once("adminside.php");
            break;
            case "1":
            include_once("normalside.php");
            break;
        }
        
        
        
        ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
    
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="breadcrumb-range-picker">
                            <span><i class="icon-calender"></i></span>
                            <span class="ml-1">Update</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Farm Records</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Admin Assigned Farm</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="container">
        <?php
                         
                        $sql = "SELECT * FROM `farmdata` WHERE farmno = $farmno";
                        $query = mysqli_query($conn,$sql);
                        // $row=mysqli_fetch_array($query);
                    ?>
                    <?php 
                        while($row=mysqli_fetch_array($query)){
                        ?>
        <button type="button" class="btn btn-rounded btn-danger btn-lg"><a href="monthly.php?id=<?php echo $row['id']; ?>"><?php echo $row["farmno"]; ?> </a> </button>
        <?php 
                        }
                         ?>
                
    </div>

                                </div>
                                       
                                    
                                </div> 
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-xxl-12"> 
                        
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://themeforest.net/user/quixlab" target="_blank">Quixlab</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--removeIf(production)-->
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger gradient-5" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <!-- <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#home8">
                            <span><i class="icon-settings" aria-hidden="true"></i></span>
                        </a>
                    </li>
                </ul> -->

                <div class="tab-content tab-content-default tabcontent-border">
                    <div class="tab-pane fade active show" id="home8" role="tabpanel">
                        <div class="admin-settings">
                            <h4>Pick your style</h4>
                            <div>
                                <p>Navigation Header</p>
                                <div>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_color_1">
                                        <label for="nav_header_color_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_color_2">
                                        <label for="nav_header_color_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_color_3">
                                        <label for="nav_header_color_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_color_4">
                                        <label for="nav_header_color_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_color_5">
                                        <label for="nav_header_color_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_color_6">
                                        <label for="nav_header_color_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_color_7">
                                        <label for="nav_header_color_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_color_8">
                                        <label for="nav_header_color_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_color_9">
                                        <label for="nav_header_color_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_color_10">
                                        <label for="nav_header_color_10"></label>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>Header</p>
                                <div>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_color_1">
                                        <label for="header_color_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_color_2">
                                        <label for="header_color_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_color_3">
                                        <label for="header_color_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_color_4">
                                        <label for="header_color_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_color_5">
                                        <label for="header_color_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_color_6">
                                        <label for="header_color_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_color_7">
                                        <label for="header_color_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_color_8">
                                        <label for="header_color_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_color_9">
                                        <label for="header_color_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_color_10">
                                        <label for="header_color_10"></label>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>Sidebar</p>
                                <div>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_color_1">
                                        <label for="sidebar_color_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_color_2">
                                        <label for="sidebar_color_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_color_3">
                                        <label for="sidebar_color_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_color_4">
                                        <label for="sidebar_color_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_color_5">
                                        <label for="sidebar_color_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_color_6">
                                        <label for="sidebar_color_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_color_7">
                                        <label for="sidebar_color_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_color_8">
                                        <label for="sidebar_color_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_color_9">
                                        <label for="sidebar_color_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_color_10">
                                        <label for="sidebar_color_10"></label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
        <!--endRemoveIf(production)-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Here is navigation script -->
    <script src="vendor/quixnav/quixnav.min.js"></script>
    <script src="js/quixnav-init.js"></script>
    <script src="js/custom.min.js"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="js/styleSwitcher.js"></script>
    <!--endRemoveIf(production)-->
</body>
<!-- <?php

?> -->

<!-- Mirrored from quixlab.com/demo/corbin/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 08:19:59 GMT -->
</html>