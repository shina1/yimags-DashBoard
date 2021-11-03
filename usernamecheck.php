<?php
require_once("conn.php");



if (!$_SESSION['email']) {
die(header("location: login.php"));
}else{
}
		
		$mail = $_SESSION['email'];
		$name = $_SESSION['name'];
		$sql = "SELECT * FROM `admin_tbl` where email='$mail'";
		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$_SESSION['rank']=$row['rank'];
		$_SESSION['assignfrmno'] = $row['assignfrmno'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['email'] = $row['email'];



		
		// exit($rank );


		
?>