<?php
require_once("conn.php");



if (!$_SESSION['username']) {
die(header("location: login.php"));
}else{
}
		
		$username = $_SESSION['username'];
		$rank = $_SESSION['rank'];
		$sql = "SELECT * FROM admin where username='$username'";
		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$_SESSION['rank'] = $row['rank']; 
		$rank = $_SESSION['rank'];
		// exit($rank );


		
?>