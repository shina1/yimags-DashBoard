<?php 
	
	session_start();
	require_once("conn.php");

	if (isset($_POST['upload'])) {
		$client = $_POST['client'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		// $amount = $_POST['amount'];
		$date = $_POST['date'];

		$client = mysqli_real_escape_string($conn,$client);
		$phone = mysqli_real_escape_string($conn,$phone);
		$address = mysqli_real_escape_string($conn,$address);
		// $amount = mysqli_real_escape_string($conn,$amount);
		$date = mysqli_real_escape_string($conn,$date);
		
	$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$Ono=0;
			$ot= date("h:i:sa");
			$td= date("Y-m-d");
			$res2 = mysqli_query($conn,"SELECT * FROM client WHERE `date`='$td'");
			$chc=mysqli_num_rows($res2);
			$chcc = $chc + 1;
			$Ono=date("Y").date("m").date("d").$chcc;
	}

	$query = "INSERT INTO `client`(`client`,`client_id`,`date`,`phone`,`address`) VALUES('$client',$Ono,'$date','$phone','$address')";

	if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg'] = "<script> alert('You have sucessfully created a client page') </script> ";
	 	header("location:createcustomer.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);

 ?>