<?php
session_start();
require_once("conn.php");


	
	$farmno = $_POST['farm'];
	

	$query = "INSERT INTO `farmdata`(`farmno`) VALUES ('$farmno') ";

	if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg_admin'] = "<script> alert('You have sucessfully uploaded your Events') </script> ";
	 	header("location:createfarm.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);


?>