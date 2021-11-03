<?php
require("conn.php");
session_start();
include_once('usernamecheck.php');
?>
<!DOCTYPE html>
<html lang="en">



<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
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
                                <!-- <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge badge-primary">3</span>
                                </a> -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <h5 class="notification_title">Notifications</h5>
                                    <ul class="list-unstyled">
                                        <!-- <li class="media dropdown-item">
                                            <img class="mr-3" src="images/avatar/1.jpg" alt="Quixlab">
                                            <div class="media-body">
                                                <a href="#">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Mr John</h5>
                                                    </div>
                                                    <p class="m-0">signed nup now</p>
                                                </a>
                                            </div>
                                        </li> -->
                                         <!-- <li class="media dropdown-item">
                                            <img class="mr-3" src="images/avatar/8.jpg" alt="Quixlab">
                                            <div class="media-body">
                                                <a href="#">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Lisa Heiden</h5>
                                                    </div>
                                                    <p class="m-0">Reset password</p>
                                                </a>
                                            </div>
                                        </li> -->
                                        <!-- <li class="media dropdown-item">
                                            <img class="mr-3" src="images/avatar/2.jpg" alt="Quixlab">
                                            <div class="media-body">
                                                <a href="#">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Mr khan</h5>
                                                    </div>
                                                    <p class="m-0">Email sent</p>
                                                </a>
                                            </div>
                                        </li> -->
                                    </ul>
                                    <!-- <a class="all-notification" href="#">All Notifications</a> -->
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
                            <span class="ml-1">Farm Record</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Farm Records</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">View Record</a></li>
                        </ol>
                    </div>
                </div>
                <!-- Button section -->
            <div class="row">
                <div class="col-sm-12">
                        <div class="card">
                                <div class="card-header d-block">
                                    <h4 class="card-title" id="view"
                                    >View Reports</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <?php include_once ("catego.php"); ?>
                                    <h4 class="card-title"></h4>
                                    <button type="button" style="color: white" class="btn btn-rounded btn-primary"  id="weekly" ><a style="color:white;" href="weekly.php?id=<?php echo $row['id']; ?>"> Weekly</a></button>
                                    <button type="button" class="btn btn-rounded btn-secondary"  id="monthly"><a style="color:white;" href="monthly.php?id=<?php echo $row['id']; ?>"> Monthly</a></button>
                                    <button type="button" class="btn btn-rounded btn-success" id="quater" ><a style="color:white;" href="quater.php?id=<?php echo $row['id']; ?>"> Yearly </a></button>
                                </div>
                            </div>
                </div>
                <div id="tablo" class="parent" style="visibility: hidden;">
                    <table>
                        <thead style="border:1px solid blue;">
                            <tr>
                                <th  style="width:10%;">Date</th>
                                <th scope="col">Mortality</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>me</td>
                                <td>you</td>
                                <td>us</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                       
                        <div class="col-lg-12">
                        <?php 


                         
                            
                            
            $newid = $row['id'];

$conn = mysqli_connect($severname,$username,$password,$dbname);

                            if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                            $page_no = $_GET['page_no'];
                            } else {
                                $page_no = 1;
                                }

                             $total_records_per_page = 14;

                             $offset = ($page_no-1) * $total_records_per_page;
                            $previous_page = $page_no - 1;
                            $next_page = $page_no + 1;
                            $adjacents = "2";


                            $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `farmrecord`");
                            $total_records = mysqli_fetch_array($result_count);
                            $total_records = $total_records['total_records'];
                            $total_no_of_pages = ceil($total_records / $total_records_per_page);
                            $second_last = $total_no_of_pages - 1; // total pages minus 1

                       

            $sql = "SELECT * FROM `farmrecord`  where farmno = $farmno LIMIT $offset, $total_records_per_page";
            $query = mysqli_query($conn,$sql);
            // $rows = mysqli_fetch_all($query, MYSQLI_NUM);
         //             echo $rows[1] [3];
            $count = mysqli_num_rows($query);
            $i = 0;
            //$result=mysqli_store_result($query);
            
             ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Farm Records</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered verticle-middle table-responsive-sm display" id="example" class="" style="min-width: 845px" >
                                            <thead style="border:1px solid blue;">
                                                <tr>
                <th>Date</th>
                <th>Day of the week</th>
                <th>Week no</th>
                <th>Mortality</th>
                <th>Drug/Vaccine used</th>
                <th>Feed Consumption</th>
                <th>Cost</th>
                <th>Operation/Management remarks</th>
                <th>Month</th>
                <th>Year</th>
                
                                                    
                                                </tr>
                                            </thead>
                                            
             <?php
                    while ($i < $count) {
                        mysqli_data_seek($query,$i);
                        $row = mysqli_fetch_assoc($query);
                        
                         //echo $row['drug']."\n";
                         $week_no = $row['week_no'];

                        //$week_no = $row[$i][3];
                        $day = $row['dayOfWeek'];
                    
                    ?>
             
                                            <tbody>
                                                <tr>
                <td><?php echo $row['date'];  ?> </td>
                <td><?php echo $row['dayOfWeek'];  ?> </td>
                <td><?php echo $row['week_no'];  ?> </td>
                <td><?php echo $row['mortality'];  ?> </td>
                <td><?php echo $row['drugs'];  ?> </td>
                <td><?php echo $row['feed'];  ?> </td>
                <td><?php echo $row['cost'];  ?> </td>
                <td><p><?php echo $row['remarks'];  ?></p> </td>
                <td><?php echo $row['year'];  ?> </td>
                <td><?php echo $row['month'];  ?> </td>
                
                                                </tr>
                                                <tr>
                    <td>
                        <?php

                    
                    if ($day == "Sunday") {
                    $weel = $week_no;
                    $severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
                    $query2 = mysqli_query($conn,"SELECT  SUM(cost) AS value_sum FROM farmrecord WHERE week_no = $weel");


                              $number=mysqli_fetch_array($query2);

                              $sum = $number['value_sum'];


                              $query3 = mysqli_query($conn,"SELECT  SUM(mortality) AS value_mortality FROM farmrecord WHERE week_no = $weel");


                              $number=mysqli_fetch_array($query3);

                              $sum2 = $number['value_mortality'];


                              $query4 = mysqli_query($conn,"SELECT  SUM(feed) AS value_feed FROM farmrecord WHERE week_no = $weel");


                              $number=mysqli_fetch_array($query4);
                    // $week = "SELECT  SUM(cost) FROM pondtable WHERE week_no = $weel ";
                              $sum3 = $number['value_feed']/1000;
                    
                    
                    echo "<tr> <td colspan='3'> <b>Total _For_Week</b>  </td><td colspan='2'> ".$sum2."  </td><td> ".$sum3."  KG   </td><td> ".$sum."</td> <td colspan='4'> Total for the week ".$week_no." </td> </tr> ";
            }
             ?>
                 </td>
                </tr>
                                               
                                                <?php 
            
            
            $i++;

                }

?>
                                            </tbody>
                                        </table>
                                        <br>
                                        <nav  aria-label="Page navigation example">
                                            <ul class="pagination">
                                                
                                                <?php if($page_no > 1){
                                                   
                    echo "<li ><a href='?page_no=1&id=$newid'>First Page</a></li>";
                    } ?>
                        
                    <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                    <a <?php if($page_no > 1){
                    echo "href='?page_no=$previous_page&id=$newid'";
                    } ?>>Previous</a>
                    </li>
                        
                    <li <?php if($page_no >= $total_no_of_pages){
                    echo "class='disabled'";
                    } ?>>
                    <a <?php if($page_no < $total_no_of_pages) {
                    echo "href='?page_no=$next_page&id=$newid'";
                    } ?>>Next</a>
                    </li>
                     
                    <?php if($page_no < $total_no_of_pages){
                    echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                    }

                    if ($total_no_of_pages <= 10){   
                     for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                     if ($counter == $page_no) {
                     echo "<li class='active'><a>$counter</a></li>"; 
                             }else{
                            echo "<li><a href='?page_no=$counter&id=$newid'>$counter</a></li>";
                                    }
                            }
                    }elseif ($total_no_of_pages > 10){
                    if($page_no <= 4) {
                                        // first we will check that if current page number is equal or less than 4 then do the following 
                     for ($counter = 1; $counter < 8; $counter++){ 
                     if ($counter == $page_no) {
                        echo "<li class='active'><a>$counter</a></li>"; 
                     }else{
                               echo "<li><a href='?page_no=$counter&id=$newid'>$counter</a></li>";
                                    }
                    }
                    echo "<li><a>...</a></li>";
                    echo "<li><a href='?page_no=$second_last&id=$newid'>$second_last</a></li>";
                    echo "<li><a href='?page_no=$total_no_of_pages&id=$newid'>$total_no_of_pages</a></li>";
                    }
                    }
                    // Now we will check that if current page number is greater than 4 and less than (total number of pages -4) then do the following
                    elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) { 
                    echo "<li><a href='?page_no=1&id=$newid'>1</a></li>";
                    echo "<li><a href='?page_no=2&id=$newid'>2</a></li>";
                    echo "<li><a>...</a></li>";
                    for (
                         $counter = $page_no - $adjacents;
                         $counter <= $page_no + $adjacents;
                         $counter++
                         ) { 
                         if ($counter == $page_no) {
                     echo "<li class='active'><a>$counter</a></li>"; 
                     }else{
                            echo "<li><a href='?page_no=$counter&id=$newid'>$counter</a></li>";
                              }                  
                           }
                    echo "<li><a>...</a></li>";
                    echo "<li><a href='?page_no=$second_last&id=$newid'>$second_last</a></li>";
                    echo "<li><a href='?page_no=$total_no_of_pages&id=$newid'>$total_no_of_pages</a></li>";
                    }
                    // Now we will check that if current page number is greater than 4 but not less than (total number of pages -4) then do the following
                    else {
                    echo "<li><a href='?page_no=1&id=$newid'>1</a></li>";
                    echo "<li><a href='?page_no=2&id=$newid'>2</a></li>";
                    echo "<li><a>...</a></li>";
                    for (
                         $counter = $total_no_of_pages - 6;
                         $counter <= $total_no_of_pages;
                         $counter++
                         ) {
                         if ($counter == $page_no) {
                     echo "<li class='active'><a>$counter</a></li>"; 
                     }else{
                            echo "<li><a href='?page_no=$counter&id=$newid'>$counter</a></li>";
                     }                   
                         }
                    }



                    ?>
                                               
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-xxl-12">
                        <!-- <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                                        <label class="form-check-label">
                                                            First radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                                        <label class="form-check-label">
                                                            Second radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled>
                                                        <label class="form-check-label">
                                                            Third disabled radio
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-2">Checkbox</div>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">
                                                        Example checkbox
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
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
    
    
</body>
</html>