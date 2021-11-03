<?php
// session_start();
require_once("conn.php");


	
	$name = $_POST['name'];
	$phoneno = $_POST['phone'];
	$address = $_POST['address'];
	$date = $_POST['date'];
	$password = $_POST['pass'];
	$email = $_POST['email'];
	$farm = $_POST['farm'];
	
	
	$pasword = crypt($password, 'test');

	$query = "INSERT INTO `admin_tbl`(`name`,`phone`,`address`,`date`,`password`,`email`,`assignfrmno`) VALUES ('$name','$phoneno','$address','$date','$pasword','$email','$farm') ";

	if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg_admin'] = "<script> alert(' sucessfull') </script> ";
	 	header("location:createadmin.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);


?>