<?php 
session_start();
require_once("conn.php");
if(isset($_POST['submit'])){
    $strno = $_POST['storeNo'];
    $brandName = $_POST['brandName'];
    $size = $_POST['size'];
    $quant = $_POST['quantity'];
    $bagCost = $_POST['costBag'];
    $totCost = $_POST['totCost'];
    $DOP = $_POST['DOP'];
    $NoInStr = $_POST['noExist'];
    $stocker = $_POST['stocker'];
   

    $strno = mysqli_real_escape_string($conn,$strno);
    $brandName = mysqli_real_escape_string($conn,$brandName);
    $quant = mysqli_real_escape_string($conn,$quant);
    $bagCost = mysqli_real_escape_string($conn,$bagCost);
    $totCost = mysqli_real_escape_string($conn,$totCost);
    $DOP = mysqli_real_escape_string($conn,$DOP);
    $NoInStr = mysqli_real_escape_string($conn,$NoInStr);
    $stocker = mysqli_real_escape_string($conn,$stocker);

        $username = "yimalbur_owner";
$password = "qaz1234wsX";
$dbname = "yimalbur_dataBase";

$conn = mysqli_connect($severname,$username,$password,$dbname);
			$Ono=0;
			$ot= date("h:i:sa");
			$td= date("Y-m-d");
			$res2 = mysqli_query($conn,"SELECT * FROM store WHERE `date`='$td'");
			$chc=mysqli_num_rows($res2);
			$chcc = $chc + 1;
			$Ono=date("Y").date("m").date("d").$chcc;
       		

        $query = "INSERT INTO `store`(`strNo`,`store_Id`,`productName`,`size`,`quantity`,`costBag`,`totCost`,`date`,`noExist`,`stocker`) VALUES('$strno','$Ono','$brandName','$size','$quant','$bagCost','$totCost','$DOP','$NoInStr','$stocker')";

	if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucesses'] = "<script> alert('sucessfull') </script> ";
	 	header("location:updatestore.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);



}


?>