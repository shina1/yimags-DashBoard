<?php
ob_start();
session_start();
require_once('conn.php');
include_once('usernamecheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Corbin - Simple Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap-daterangepicker/daterangepicker.css">
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
                        <span class="brand-title">YIMAGS</span>
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
                                <span class="search_icon d-lg-none p-3 c-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                               
                                <div class="dropdown-menu dropdown-menu-right">
                                    <h5 class="notification_title">Notifications</h5>
                                    <ul class="list-unstyled">
                                     
                                    </ul>
                                   
                                </div>
                            </li> 
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        
                                        <span>My profile</span>
                                    </a>
                                  
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
            <!-- row -->

                <div class="container">
                        <div class="row">
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                                        <div class="card mb-3">
                                            <img class="card-img-top img-fluid" src="images/1.jpg" alt="Card image cap">
                                            <div class="card-header">
                                                <h3 class="card-title">Admin Name: <?php echo $_SESSION['name'];?></h3>
                                            </div>
                                            <div class="card-body">
                                            <h5>Phone Number: <?php echo $_SESSION['phone'];?></h5>
                                            <h5>Email: <?php echo $_SESSION['email'];?></h5>
                                            <h5>Address: <?php echo $_SESSION['address'];?></h5>
                                            <h5>Farm Number: <?php echo $_SESSION['assignfrmno'];?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                               
                                        <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Farm Record</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <table id="bootgrid-basic" class="table table-condensed table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th data-column-id="farm number" data-type="numeric">Farm No</th>
                                                                    <th data-column-id="fish number">Number of Fish</th>
                                                                    <th data-column-id="breed" data-order="desc">Breed</th>
                                                                    <th data-column-id="fish source">Source of Fish</th>
                                                                    <th data-column-id="feed source">Source of Feed</th>
                                                                    <th data-column-id="date">Date</th>
                                                                </tr>
                                                            </thead>
                                                            <?php 
                                                                                $conn=mysqli_connect("localhost","yimalbur_owner","qaz1234wsX","yimalbur_dataBase");
                                                                                $sql = "SELECT * FROM `farmrecord` ";
                                                                                $query = mysqli_query($conn,$sql);
                                                                                // $count = mysqli_num_rows($query);
                                                                                // $i = 0;
			                                                ?>
                                                            <?php 
                                                            while($row = mysqli_fetch_assoc($query)){

                                                            
                                                            
                                                            ?>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?php echo $row['farmno']; ?></td>
                                                                    <td><?php echo $row['fish No']; ?></td>
                                                                    <td><?php echo $row['breed']; ?></td>
                                                                    <td><?php echo $row['sourceOfFish']; ?></td>
                                                                    <td><?php echo $row['SourceOfFeed']; ?></td>
                                                                    <td><?php echo $row['date']; ?></td>
                                                                </tr>
                                                            </tbody>
                                                            <?php
                                                            } 
                                                            ?>
                                                        </table>
                                                        
                                                    </div>
                                                </div>
                                        </div>
                               
                                <!-- table ends -->
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
                <p>Copyright © Designed &amp; Developed by CypherDev Enterprise</a> 2019</p>
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
    <!-- shina's js -->
    <script src="display.js"></script>
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

    
    <!-- Daterange picker library -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>

    
    <!-- Vectormap -->
   


    <!-- daterangepicker init -->
    <!-- <script src="./js/plugins-init/card-headerdatepicker-init.js"></script> -->

    
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/dashboard/dashboard-1.js"></script>

</body>


</html>