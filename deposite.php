 <?php
 require_once("conn.php");
session_start();

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
  			$final = $_SESSSION['sum'];
  			// exit($_SESSSION['sum']);

  			
  			$client_id = $_POST['client_id'];

  			$query2 = "UPDATE `client` SET balance = $final WHERE client_id = $client_id";

  			if (mysqli_query($conn,$query2)) {

	 	//echo "<script> alert('You have sucessfully updated') </script> ";
	 	// header("location:../NewAdmin/testimony.php");
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);

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

        $query5 = "UPDATE `client` SET amount = $depositamount WHERE client_id = $client_id";

        if (mysqli_query($conn,$query5)) {

    //echo "<script> alert('You have sucessfully updated') </script> ";
    
   } 


		$query = "UPDATE `client` SET `amount` = '$depositamount' WHERE client_id = $client_id";
	// exit($id);

		

  			

	if (mysqli_query($conn,$query)) {
		$sql = "SELECT * FROM `client` where client_id = $client_id ";
                        $query = mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($query);
                        $id = $row['id'];
                        // exit($id);
                        //header("location:custprofile.php?id=$id");
		 echo  "<script> alert(' You have sucessful deposited.') </script>";
		 
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);



	}
	;
	// header("location: customer-record.php");

	 echo "<script> window.location.assign('custprofile.php?id=$id') </script>";
	 }
	 ?>