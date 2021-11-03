<?php 
	
	session_start();
	require_once("conn.php");

		$client = $_POST['client'];
		$no_fish = $_POST['no_fish'];
		$type_fish = $_POST['type_fish'];
		// $mortality = $_POST['mortality'];
		$seller = $_POST['seller'];
		$cost = $_POST['cost'];
		$date = $_POST['date'];
		$remark = $_POST['remark'];
		$per_fish = $_POST['per_fish'];


		$client = mysqli_real_escape_string($conn,$client);
		$no_fish = mysqli_real_escape_string($conn,$no_fish);
		$type_fish = mysqli_real_escape_string($conn,$type_fish);
		// $mortality = mysqli_real_escape_string($conn,$mortality);
		$seller = mysqli_real_escape_string($conn,$seller);
		$cost = mysqli_real_escape_string($conn,$cost);
		$date = mysqli_real_escape_string($conn,$date);
		$remark = mysqli_real_escape_string($conn,$remark);
		$per_fish = mysqli_real_escape_string($conn,$per_fish);


	$query = "INSERT INTO `reartable`(`client`,`no_fish`,`type_fish`,`seller`,`cost`,`date`,`remark`,`per_fish`) VALUES('$client','$no_fish','$type_fish','$seller','$cost','$date','$remark','$per_fish')";

	if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg'] = "<script> alert('You have sucessfully uploaded your Events') </script> ";
	 	header("location:rearing.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);

 ?>