<?php 
	
	session_start();
	require_once("conn.php");

		$farmno = $_POST['farmno'];
		$fish_type = $_POST['fish_type'];
		$no_fish = $_POST['no_fish'];
		// $mortality = $_POST['mortality'];
		$cleint_name = $_POST['cleint_name'];
		$cost = $_POST['cost'];
		$data = $_POST['data'];
		$remark = $_POST['remark'];


		$farmno = mysqli_real_escape_string($conn,$farmno);
		$fish_type = mysqli_real_escape_string($conn,$fish_type);
		$no_fish = mysqli_real_escape_string($conn,$no_fish);
		// $mortality = mysqli_real_escape_string($conn,$mortality);
		$cleint_name = mysqli_real_escape_string($conn,$cleint_name);
		$cost = mysqli_real_escape_string($conn,$cost);
		$data = mysqli_real_escape_string($conn,$data);
		$remark = mysqli_real_escape_string($conn,$remark);


	$query = "INSERT INTO `hatchtable`(`farmno`,`fish_type`,`no_fish`,`mortality`,`cleint_name`,`cost`,`date`,`remark`) VALUES('$farmno','$fish_type','$no_fish','$mortality','$cleint_name','$cost','$data','$remark')";

	if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg'] = "<script> alert('You have sucessfully uploaded your Events') </script> ";
	 	header("location:hatching.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);

 ?>