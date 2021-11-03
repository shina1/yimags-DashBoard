  <?php
   require_once("conn.php");
 session_start();

if (isset($_POST["update"])) {
	$bagno = $_POST['bagno'];
	$unitsllPrice = $_POST['unitsllPrice'];
	$totsellpri = $_POST['totsellprice'];
	$date = $_POST['date'];
	$store_id = $_POST['store_id'];

	 $_SESSSION['store_id'] = $store_id;
      $store_id = $_SESSSION['store_id'];

      $_SESSSION['unitsllPrice'] = $unitsllPrice;
      $unitsllPrice = $_SESSSION['unitsllPrice'];
    
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

            $unitsllPrice;
            // exit($unitsllPrice);

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
              

  			$res = "UPDATE  `store` SET totalinstore = '$Totalinstore', costBag = '$unitsllPrice' WHERE store_id = $store_id";

  			if (mysqli_query($conn,$res)) {

	 
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
		 $sql = "SELECT * FROM `store` where store_Id = $store_id ";
                        $query = mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($query);
                        $id = $row['id'];
                        // exit($id);
                        echo "<script> window.location.assign('editstore.php?id=$id') </script>";
                        //header("location:editstore.php?id=$id");
		 
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);



    }
}

	

?>