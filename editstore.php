<?php
require("conn.php");
session_start();
include_once('usernamecheck.php');
?>
  <!-- query for transaction purpose -->
  <?php 
require("conn.php");
  if(isset($_POST['edit'])){
    $noSold = $_POST['noSold'];
    $unitsellPrice =$_POST['unitsellPrice'];
    $totsellPrice = $_POST['totsellPrice'];
    $SellerName = $_POST['sellername'];
    $buyerName = $_POST['buyerName'];
    $date = $_POST['date'];
    $streId = $_POST['streId'];
    $unitcostprice = $_POST['unitcostprice'];
    


    // $noSold   $totsellPrice $buyerName  

    $noSold = mysqli_real_escape_string($conn,$noSold);
    $unitsellPrice = mysqli_real_escape_string($conn,$unitsellPrice);
    $totsellPrice = mysqli_real_escape_string($conn,$totsellPrice);
    $SellerName = mysqli_real_escape_string($conn,$SellerName);
    $buyerName = mysqli_real_escape_string($conn,$buyerName);
    $date = mysqli_real_escape_string($conn, $date);
    
    $pros = $unitsellPrice - $unitcostprice;

   $severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
    	
    $query = "INSERT INTO `store_profile`(`noBagSold`,`unitsellPrice`,`totsellprice`,`sellerName`,`buyerName`,`strid`,`date`,`unitcost`,`profit`) VALUES('$noSold','$unitsellPrice','$totsellPrice','$SellerName','$buyerName','$streId','$date','$unitcostprice','$pros')";

    if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg'] = "<script> alert('You have sucessfully created a client page') </script> ";
	 	// header("location:editstore.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);



}
  ?>
  <!-- query for transactio ends here -->

  <!-- query for updating stock and some other things -->
  
  <?php
if (isset($_POST["update"])) {
	$bagno = $_POST['bagno'];
	$unitsllPrice = $_POST['unitsllPrice'];
	$totsellpri = $_POST['totsellprice'];
	$date = $_POST['date'];
	$store_id = $_POST['store_id'];

	 $_SESSSION['store_id'] = $store_id;
      $store_id = $_SESSSION['store_id'];
    
	$query = "INSERT INTO `quantitytbl`(`quantity`,`curUnitPrice`,`totalPrice`,`date`,`strId`) VALUES('$bagno','$unitsllPrice','$totsellpri','$date','$store_id')";

	if (mysqli_query($conn,$query)) {

		$store_id;

	 $severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery2 = mysqli_query($conn,"SELECT SUM(quantity) AS Totalquantity FROM quantitytbl WHERE strId = $store_id");
			$number=mysqli_fetch_array($newquery2);

			$sumquantity = $number['Totalquantity'];
  			$_SESSSION['sumquantity'] = $sumquantity;

 

  		 $severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery4 = mysqli_query($conn,"SELECT SUM(noExist) AS TotalExist FROM store WHERE store_id = $store_id");
  			$number=mysqli_fetch_array($newquery4);
  			$sumExist = $number['TotalExist'];
  			$_SESSSION['sumExist'] = $sumExist;

              $Totalinstore = $_SESSSION['sumquantity'] + $_SESSSION['sumExist'];
             
              $_SESSSION['Totalinstore'] = $Totalinstore;
             
              

  			$res = "UPDATE  `store` SET totalinstore = $Totalinstore WHERE store_id = $store_id";

  			if (mysqli_query($conn,$res)) {

	 	// echo "<script> alert('You have sucessfully updated') </script> ";
	 	// header("location:../NewAdmin/testimony.php");
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);

     
  		 $severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery5 = mysqli_query($conn,"SELECT SUM(noBagSold) AS Totalbag FROM store_profile WHERE strid = $store_id");
  			$number=mysqli_fetch_array($newquery5);
  			$sumbag = $number['Totalbag'];
  			$_SESSSION['sumbag'] = $sumbag;

  			$available = $_SESSSION['Totalinstore'] - $_SESSSION['sumbag'];
  			$_SESSSION['available'] = $available;

  			$res2 = "UPDATE  `store` SET available = $available WHERE store_Id = $store_id";

  			if (mysqli_query($conn,$res2)) {
		 echo  "<script> alert(' You have sucessful deposited.') </script>";
		 
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);



    }
}

	

?>
  <!-- query for updating stock ends here -->
  

<!-- this fetchs info from the store table and also brings the storeid for use here -->
 <?php
  	$id = $_GET['id'];
  	// exit($id);

    $severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
//  i select from the store table and drag to this page
  $result = "SELECT * FROM `store` where `id` = $id";
  $query = mysqli_query($conn,$result);

// now i session the informations from that table to this page.
  $row = mysqli_fetch_array($query);
  $_SESSSION['strNo'] = $row['strNo'];
  $strNum = $_SESSSION['strNo'];
   
  $_SESSSION['productName'] = $row['productName'];
  $prodNm = $_SESSSION['productName'];

  $_SESSION['stocker'] = $row['stocker'];
  $stckName = $_SESSION['stocker'];
  $_SESSION['store_Id'] = $row['store_Id'];
  $streID = $_SESSION['store_Id'];
  $_SESSION['costBag'] = $row['costBag'];
  $unitcostprice = $_SESSION['costBag'];

  $_SESSION['available'] = $row['available'];
  $available = $_SESSION['available'];

  $_SESSION['totalinstore'] = $row['totalinstore'];
  $totalinstore = $_SESSION['totalinstore'];
  ?>
<!DOCTYPE html>
<html lang="en">



<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Farm-Admin DashBoard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Footable -->
    <link rel="stylesheet" href="vendor/footable/css/footable.bootstrap.min.css">
    <!-- Custom Stylesheet -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
            <div class="container">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="breadcrumb-range-picker">
                            <span><i class="icon-calender"></i></span>
                            <span class="ml-1">Store History</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Store Record</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">View Store Record</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
               
                <div class="row">
                        <div class="row card-row">
                            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 ">
                            
                                <div class="card mb-3">     
                                    <div class="card-header">
                                        <h5 class="card-title">Store Number: <?php echo $row['strNo']; ?></h5>
                                    </div>
                                    <div class="card-body" style="background-color:">

                                        <h5>Product Name: <?php echo $row['productName']; ?></h5><br>
                                    <h5>Stocked By: <?php echo $row['stocker']; ?></h5><br>
                                    <h5>Product ID: <?php echo $row['store_Id']; ?></h5><br>
                                    <h5>Initial number In Store: <?php echo $row['noExist'];?></h5><br>
                                    <h5>Available In Store: <?php echo $row['available'];?></h5><br>
                                    <h5>Total Number Stocked: <?php echo $row['totalinstore'];?></h5>
                                   

                                    </div>
                                </div>
                    </div>
                <div class="col-sm-6">
                        <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Transaction</h4>
                                    </div>
                                    <div class="card-body">                                
                                        <div class="basic-form">
                                            <form method="post" action="storeupdate.php" >
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Number Of Bags Sold</label>
                                                        <input type="number" name="noSold" class="form-control" placeholder="1234" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Selling Price/Unit</label>
                                                        <input type="Number" name="unitsellPrice" class="form-control" placeholder="#50,000" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Total Selling Price</label>
                                                        <input type="Number" name="totsellPrice" class="form-control" placeholder="#50,000" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Seller's Name</label>
                                                        <input type="text" name="sellername" class="form-control" placeholder="Mr/Mrs sales rep." style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Buyer's Name</label>
                                                        <input type="text" name="buyerName" class="form-control" placeholder="Mr/Mrs customer" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Date OF Transaction</label>
                                                        <input type="date" name="date" class="form-control" placeholder="MM/DD/YY" style="border: 1px solid blue;" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <input type="hidden" name="streId" class="form-control" value="<?php echo $streID; ?>" placeholder="No. available in store" style="border: 1px solid blue;">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <input type="hidden" name="unitcostprice" class="form-control" value="<?php echo $unitcostprice; ?>" placeholder="No. available in store" style="border: 1px solid blue;">
                                                    </div>
                                                </div>
                                                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                <?php 
        $fav = $_SESSION['rank'];
        switch($fav){
            case "2":
            include_once("editsuper.php");
            break;
            case "1":
            include_once("editnormal.php");
            break;
        }
        ?>
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
                <p>Copyright © Designed &amp; Developed by 2019</p>
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
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    
    
    <!-- Footable -->
    <script src="vendor/footable/js/footable.min.js"></script>
    <script src="js/plugins-init/footable-init.js"></script>

</body>
</html>