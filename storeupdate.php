 <?php
 require_once("conn.php");
 session_start();

    $noSold = $_POST['noSold'];
    $unitsellPrice =$_POST['unitsellPrice'];
    $totsellPrice = $_POST['totsellPrice'];
    $SellerName = $_POST['sellername'];
    $buyerName = $_POST['buyerName'];
    $date = $_POST['date'];
    $streId = $_POST['streId'];
    $unitcostprice = $_POST['unitcostprice'];

    $_SESSION['store_Id'] = $streId;
  $store_Id = $_SESSION['store_Id'];

    


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
	 	//window.location.assign("editstore.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);

	 // exit($store_Id);
	 $store_Id;

    $severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
      
			$newquery2 = mysqli_query($conn,"SELECT SUM(quantity) AS Totalquantity FROM quantitytbl WHERE strId = $store_Id");
			$number=mysqli_fetch_array($newquery2);

			$sumquantity = $number['Totalquantity'];
  			$_SESSSION['sumquantity'] = $sumquantity;



  			$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery4 = mysqli_query($conn,"SELECT SUM(noExist) AS TotalExist FROM store WHERE store_id = $store_Id");
  			$number=mysqli_fetch_array($newquery4);
  			$sumExist = $number['TotalExist'];
  			$_SESSSION['sumExist'] = $sumExist;

              $Totalinstore = $_SESSSION['sumquantity'] + $_SESSSION['sumExist'];
             
              $_SESSSION['Totalinstore'] = $Totalinstore;
              

  			$res = "UPDATE  `store` SET totalinstore = $Totalinstore WHERE store_id = $store_Id";

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
			$newquery5 = mysqli_query($conn,"SELECT SUM(noBagSold) AS Totalbag FROM store_profile WHERE strid = $store_Id");
  			$number=mysqli_fetch_array($newquery5);
  			$sumbag = $number['Totalbag'];
  			$_SESSSION['sumbag'] = $sumbag;

  			$available = $_SESSSION['Totalinstore'] - $_SESSSION['sumbag'];
  			$_SESSSION['available'] = $available;

  			$res2 = "UPDATE  `store` SET available = $available WHERE store_Id = $store_Id";

  			if (mysqli_query($conn,$res2)) {
		 echo  "<script> alert(' The Transaction was sucessful .') </script>";
		  $sql = "SELECT * FROM `store` where store_Id = $store_Id ";
                        $query = mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($query);
                        $id = $row['id'];
                        // exit($id);
                        echo "<script> window.location.assign('editstore.php?id=$id') </script>";
                      
		 
		 
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);
	
?>