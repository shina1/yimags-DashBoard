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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farm";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname); 
    	
    $query = "INSERT INTO `store_profile`(`noBagSold`,`unitsellPrice`,`totsellprice`,`sellerName`,`buyerName`,`strid`,`date`,`unitcost`,`profit`) VALUES('$noSold','$unitsellPrice','$totsellPrice','$SellerName','$buyerName','$streId','$date','$unitcostprice','$pros')";

    if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg'] = "<script> alert(' sucessfull') </script> ";
	 	header("location:editstore.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);



}
  ?>