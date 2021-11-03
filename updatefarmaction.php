<?php

session_start();
	require_once("conn.php");

	if (isset($_POST['upload'])) {
        $farmno = $_POST['farmNo'];
        $size = $_POST['size'];
        $fishno = $_POST['fishNo'];
        $breed = $_POST['breed'];
        $feedsource = $_POST['feedSource'];
        $fishsource = $_POST['fishSource'];
		$date = $_POST['date'];
		$day_of_week = $_POST['day'];
		$week_no = $_POST['weekNo'];
		$mortality = $_POST['mortality'];
		$drug = $_POST['drug'];
		$feed = $_POST['feedCuns'];
        $cost = $_POST['cost'];
        $year = $_POST['year'];
        $month = $_POST['month'];
		$remarks = $_POST['text'];

        $farmno = mysqli_real_escape_string($conn,$farmno);
        $size = mysqli_real_escape_string($conn,$size);
        $fishno = mysqli_real_escape_string($conn,$fishno);
        $breed = mysqli_real_escape_string($conn,$breed);
        $feedsource = mysqli_real_escape_string($conn,$feedsource);
        $fishsource = mysqli_real_escape_string($conn,$fishsource);
		$date = mysqli_real_escape_string($conn,$date);
		$day_of_week = mysqli_real_escape_string($conn,$day_of_week);
		$week_no = mysqli_real_escape_string($conn,$week_no);
		$mortality = mysqli_real_escape_string($conn,$mortality);
		$drug = mysqli_real_escape_string($conn,$drug);
		$feed = mysqli_real_escape_string($conn,$feed);
        $cost = mysqli_real_escape_string($conn,$cost);
        $year = mysqli_real_escape_string($conn,$year);
        $month = mysqli_real_escape_string($conn,$month);
		$remarks = mysqli_real_escape_string($conn,$remarks);
    }
    // echo $farmno;
    // echo $size;
    // echo $fishno;
    // echo $breed;

    $query = "INSERT INTO `farmrecord`(`farmno`,`fish No`,`size`,`dayOfWeek`,`week_no`,`SourceOfFeed`,`breed`,`date`,`mortality`,`sourceOfFish`,`drugs`,`feed`,`cost`,`remarks`,`month`,`year`) VALUES('$farmno','$fishno','$size','$day_of_week','$week_no','$feedsource','$breed','$date','$mortality','$fishsource','$drug','$feed','$cost','$remarks','$year','$month')";

	if (mysqli_query($conn,$query)) {
		$_SESSION ['Sucessessmsg'] = "<script> alert('sucessfull') </script> ";
	 	header("location:updatefarm.php");
	}
	else {
	 	echo "Error:" .$query ."<br>" .mysqli_error($conn); 
	 }

	 mysqli_close($conn);
?>