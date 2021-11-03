<?php  
$severname = "localhost";
// $username = "yimalbur_owner";
$username = "root";
// $password = "smJ0bJ41kHab59PpfjKq";
$password = "";

$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);

if (!$conn) {
	die("connection failed" . mysqli_connect_error());
}
?>