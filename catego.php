<?php

 $id = $_GET['id'];

   		$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
 
  $result = "SELECT * FROM `farmdata` where id = $id";
  $query = mysqli_query($conn,$result);
   $row=mysqli_fetch_array($query);
   $_SESSION['farmno'] = $row['farmno'];
   $farmno = $_SESSION['farmno'];
   $_SESSION['id'] = $row['id'];
   $id = $_SESSION['id'];
  ?>