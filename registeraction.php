<?php 
require_once("conn.php");
session_start();

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $name = mysqli_real_escape_string($conn,$name);
    $phone = mysqli_real_escape_string($conn,$phone);
    $address = mysqli_real_escape_string($conn,$address);
    $email = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);

    // $new_pass = crypt($password,'test');
    				

    $put = "INSERT INTO `Admin_tbl`(`name`,`phone`,`address`,`email`,`password`) VALUES('$name','$phone','$address','$email','$password')";

    if (mysqli_query($conn,$put)) {
		$_SESSION ['Sucesses'] = "<script> alert('You have sucessfully created a client page') </script> ";
	 	header("location:login.php");
	}
	else {
	 	echo "Error:" .$put ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);
}
?>