<?php
 require_once("conn.php");
session_start();
  if (isset($_POST["upload"])) {
  	$date = $_POST['date'];
  	$day = $_POST['day'];
    $type = $_POST['amount'];
  	$goods_no = $_POST['goods_no'];
  	$cost = $_POST['cost'];
  	$remark = $_POST['remark'];
  	$client_id = $_POST['client_id'];

  	$query = "INSERT INTO `client_records`(`date`,`day`,`goods_no`,`good_type`,`cost`,`remark`,client_id) VALUES('$date','$day','$goods_no','$type','$cost','$remark','$client_id')";

  	if (mysqli_query($conn,$query)) {
		// echo  "<script> alert(' New entry sucessful.') </script>";
		  
		   $client_id;

			 	$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery2 = mysqli_query($conn,"SELECT SUM(amount) AS Totalamount FROM deposite WHERE client_id = $client_id");
			$number=mysqli_fetch_array($newquery2);
  			$depositamount = $number['Totalamount'];
  			$_SESSSION['depositamount'] = $depositamount;

        $query5 = "UPDATE `client` SET amount = $depositamount WHERE client_id = $client_id";

        if (mysqli_query($conn,$query5)) {

   // echo "<script> alert('You have sucessfully updated') </script> ";
    
   } 


  			// exit($depositamount);

  			 	$severname = "localhost";
$username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$newquery2 = mysqli_query($conn,"SELECT SUM(cost) AS Totalcost FROM client_records WHERE client_id = $client_id");
  			$number=mysqli_fetch_array($newquery2);
  			$sumcost = $number['Totalcost'];
  			$_SESSSION['sumcost'] = $sumcost;

  			// exit($_SESSSION['sumcost']);

  			$sum = $_SESSSION['depositamount'] - $_SESSSION['sumcost'];
  			// echo "<p> Amount remainig is".$sum ." </p>";
  			$_SESSSION['sum'] = $sum;
  			$final = $_SESSSION['sum'];
  			// exit($final);

  			
  			$client_id = $_POST['client_id'];

  			$query2 = "UPDATE `client` SET balance = $final WHERE client_id = $client_id";

  			if (mysqli_query($conn,$query2)) {

	 	echo "<script> alert('sucessfully') </script> ";
    $sql = "SELECT * FROM `client` where client_id = $client_id ";
                        $query = mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($query);
                        $id = $row['id'];
                        // exit($id);
                        //header("location:custprofile.php?id=$id");
                        echo "<script> window.location.assign('custprofile.php?id=$id') </script>";
	 	
	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 

	 }  
	 else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);

	}
  ?>
  	 