<?php 
	// $host = "localhost";
	// $user = "root";
	// $pass = "";
	// $database = "healthcenter";

	// if (mysqli_connect($host,$user,$pass)) {
	// 	if (mysqli_select_db($database)) {
	// 		echo "database selected successfull";
	// 	}
	// }
	// else{
	// 	echo "database connected failed";
	// }
	
	$db_host = "localhost";
	$db_user = "root";
	$db_pass =  "";
	$database = "healthcenter";

	if($conn = mysqli_connect($db_host,$db_user,$db_pass)){
		if($db_sel = mysqli_select_db($conn, "healthcenter")){
			// echo "succefully selected to database";
		}
		else{
			echo "database selected successfull";
		}
	}
	else{
		echo "database connected failed";
	}

	include_once('db_functions.php');

 ?>