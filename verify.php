<?php 
require_once("conn.php");
session_start();




 $email = $_POST['email'];
 $password = $_POST['password'];
 $new_pass = crypt($password,'test');

$ftch = "SELECT * FROM `admin_tbl` WHERE `email`='$email' AND `password`='$new_pass' ";

$result = mysqli_query($conn,$ftch);

$row = mysqli_fetch_array($result);



$_SESSION['name'] = $row["name"];
$_SESSION['address'] = $row['address'];
$_SESSION['email'] = $row['email'];
$_SESSION['phone'] = $row['phone'];

if($row==true){
	
	 header('location:home.php');
	 exit();
	  }else{
          echo"Wrong";
      }
      

 

	 
  

	

 ?>

  


