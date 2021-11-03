<?php
require_once("conn.php");
session_start();
include_once ('usernamecheck.php');

  ?>

 <?php
	 if (isset($_POST["deposite"])) {
	 		$amount = $_POST['amount'];
		$date = $_POST['date'];
		$client_id = $_POST['client_id'];


		$amount = mysqli_real_escape_string($conn,$amount);
		$date = mysqli_real_escape_string($conn,$date);
		$client_id = mysqli_real_escape_string($conn,$client_id);


	  $_SESSSION['client_id'] = $client_id;
	  $client_id = $_SESSSION['client_id'];
		
		

	$query = "INSERT INTO `deposite`(`amount`,`date`,`client_id`) VALUES('$amount','$date',$client_id)";

	// header("deposite.php?id=<?php echo $row['id'];");

	if (mysqli_query($conn,$query)) {

		$client_id;

			$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery2 = mysqli_query($conn,"SELECT SUM(amount) AS Totalamount FROM deposite WHERE client_id = $client_id");
			$number=mysqli_fetch_array($newquery2);
  			$depositamount = $number['Totalamount'];
  			$_SESSSION['depositamount'] = $depositamount;


  			// exit($depositamount);

  			$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery2 = mysqli_query($conn,"SELECT SUM(cost) AS Totalcost FROM client_records WHERE client_id = $client_id");
  			$number=mysqli_fetch_array($newquery2);
  			$sumcost = $number['Totalcost'];
  			$_SESSSION['sumcost'] = $sumcost;

  			// exit($_SESSSION['sumcost']);

  			$sum = $_SESSSION['depositamount'] - $_SESSSION['sumcost'];
  			// echo "<p> Amount remainig is".$sum ." </p>";
  			$_SESSSION['sum'] = $sum;
  			// exit($_SESSSION['sum']);

  			$query2 = "UPDATE `client` SET `balance` = '$sum' WHERE client_id = $client_id";


		$query = "UPDATE `client` SET `amount` = '$depositamount' WHERE client_id = $client_id";
	// exit($id);

		

  			

	if (mysqli_query($conn,$query)) {
		 echo  "<script> alert(' You have sucessful deposited.') </script>";
		 
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);



	}
	;
	header("location: customer-record.php");

	
	 }
	 ?>
 

  <?php
  if (isset($_POST["upload"])) {
  	$date = $_POST['date'];
  	$day = $_POST['day'];
  	$goods_no = $_POST['goods_no'];
  	$cost = $_POST['cost'];
  	$remark = $_POST['remark'];
  	$client_id = $_POST['client_id'];

  	$query = "INSERT INTO `client_records`(`date`,`day`,`goods_no`,`cost`,`remark`,client_id) VALUES('$date','$day','$goods_no','$cost','$remark','$client_id')";

  	if (mysqli_query($conn,$query)) {
		 echo  "<script> alert(' New entry sucessful.') </script>";
		  mysqli_close($conn);
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 @mysqli_close($conn);

	}
  ?>

  <?php
  	$id = $_GET['id'];
  	// exit($id);

   	$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
 
  $result = "SELECT * FROM `client` where id = $id";
  $query = mysqli_query($conn,$result);
  $newquery = mysqli_query($conn,"SELECT SUM(amount) AS Totalamount FROM client where id = $id");
  $number=mysqli_fetch_array($newquery);
  $depositamount = $number['Totalamount'];
  $_SESSSION['depositamount'] = $depositamount;


  $row = mysqli_fetch_array($query);
  $_SESSSION['client_id'] = $row['client_id'];
  $client_id = $_SESSSION['client_id'];

  $_SESSSION['id'] = $row['id'];
  $id = $_SESSSION['id'];
  ?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from quixlab.com/demo/corbin/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 08:20:33 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Corbin - Simple Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   <!-- Sweetalert -->
   <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    
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
                            <span class="ml-1">Customer's Profile</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row card-row">
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 ">
                    	<!--  -->
                        <div class="card mb-3">

			
                            
                            <div class="card-header">
                                <h5 class="card-title"><?php echo $row['client']; ?></h5>
                            </div>
                            <div class="card-body">

                                 <h5><?php echo $row['phone']; ?></h5>
                               <h5><?php echo $row['address']; ?></h5>
                            </div>
                        </div>
                    </div> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                   

                   

                   <!-- new entry -->
                    <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6 ">
                    	<!--  -->
                        <div class="card mb-12">

			
                            
                            <div class="container">
                            	<h2>Deposite an ammount</h2>
		<form action="deposite.php" method="POST">
			<div class="row" style="padding: 30px;">
                                                    <div class="col-sm-6">
                                                        <input type="number" name="amount" class="form-control" placeholder="Amount">
                                                    </div>
                                                    <div class="col-sm-6 mt-2 mt-sm-0">
                                                        <input type="date" name="date" class="form-control" placeholder="Date of Deposit">
                                                    </div> 
                                                </div>
			<td><input type="hidden" name="client_id" value="<?php echo$client_id ?>"> </td>
			<center style="padding: 25px;">
			 <button  type="submit" class="btn btn-danger" name="deposite">Submit</button></center>
		</form>
		
	</div>
                    </div> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                   
                   
                </div>

                <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6 ">
                    	<!--  -->
                        <div class="card mb-12">

			
                            
                            <div class="container">
		
		<table class="table table-bordered table-responsive">
			
			<thead>
				<th>Name</th>
				<th>Total amount deposited</th>
				<th>Date of last deposited transaction</th>
				<th>Avaliable Balance</th>
			</thead>
			<tbody>
				<tr>
				<td><?php echo $row['client']; ?> </td>
				<td>#<?php echo $row['amount']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td>#<?php echo $row['balance']; ?> </td>
				</tr>				
			</tbody>
		
		</table>
	</div>
                    </div> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                   
                   
                </div>




                <div class="col-xl-12 col-xxl-12 col-lg-6 col-sm-6 ">
                    	<!--  -->
                        <div class="card mb-12">

			
                            
                            <div class="container">
                            	<div class="card-header">
                                    <h4 class="card-title">Input Client Purchase</h4>
                                </div>
		
		<table class="table table-bordered table-responsive">
			
			<thead>
				<th>Date</th>
				<th>Day of the week</th>
				<th>Quantity purchased</th>
				<th>Type of goods</th>
				<th>Cost</th>
				<th>Operation/Management remarks</th>
				<th>Action</th>
			</thead>
			<tbody>
				<form action="uploadcust.php" method="POST">
					
				<td><input class="form-control" type="date" name="date"> </td>
				<td> <select type="text" name="day" >
					<option>Monday</option>
					<option>Tuesday</option>
					<option>Wesnday</option>
					<option>Thursday</option>
					<option>Friday</option>
					<option>Saturday</option>
					<option>Sunday</option>
				</select> </td>
				<td><input class="form-control" type="number" name="amount" > </td>
				<td><input class="form-control" type="text" name="goods_no" > </td>
				<td><input class="form-control" type="number" name="cost" > </td>
				<td><textarea class="form-control" name="remark"></textarea> </td>
				<input type="hidden" name="client_id" value="<?php echo$client_id ?>"> 
				<td><button class="btn btn-danger" name="upload">Upload</button> </td>
				</form>
			</tbody>
		
		</table>
	</div>
                    </div> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                   
                   
                </div>



                <div class="row">
                        <div class="col-12">
                            <div class="card" >
                                <div class="card-header">
                                    <h4 class="card-title">Client purchase Details</h4>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                            	<th>Date</th>
				<th>Day of the week</th>
				<th>Quantity Purchased </th>
				<th>Type of goods</th>
				<th>Cost</th>
				<th>Operation/Management remarks</th>
				<!-- <th>Total Balance Remaining</th> -->
                                              
                                            </tr>
                                        </thead>
                                        <?php 

			

			$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery2 = mysqli_query($conn,"SELECT SUM(cost) AS Totalcost FROM client_records WHERE client_id = $client_id");
  			$number=mysqli_fetch_array($newquery2);
  			$sumcost = $number['Totalcost'];
  			$_SESSSION['sumcost'] = $sumcost;
			$sql = "SELECT * FROM `client_records` WHERE client_id = $client_id";
			$query = mysqli_query($conn,$sql);
		

		$sum = $_SESSSION['depositamount'] - $_SESSSION['sumcost'];

			
			 ?>
			 <?php
		            while ($row = mysqli_fetch_assoc($query)) {	
		            ?>
                                        <tbody>
                                            <tr>
                                               <td><?php echo $row['date'];  ?></td>
												<td><?php echo $row['day'];  ?></td>
												<td><?php echo $row['good_type']; ?></td>
												<td><?php echo $row['goods_no'];  ?></td>
                        
												<td><?php echo $row['cost'];  ?></td>
												<td><p><?php echo $row['remark'];  ?></p></td>
												<!-- <td><?php echo "<p> .$sum . </p>";; ?> </td> -->
                                            </tr>
                                           
                                        </tbody>
                                        <?php
				}

?>
                                    </table>
                                    
                                </div>
                            </div>
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
        <div class="footer coded">
            <div class="copyright">
                <p>Copyright © 2019</p>
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
     <!-- Sweetalert -->
     <script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>

     <!-- All init script -->
     <script src="js/plugins-init/sweetalert-init.js"></script>

</body>


</html>