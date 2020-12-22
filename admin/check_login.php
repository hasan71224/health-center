<?php
ob_start();
session_start();

if(!isset($_POST['email'])){
	header('location:index.php');
}

if(!isset($_POST['pass'])){
	header('location:index.php');
}

$db_host = "localhost";
$db_user = "root";
$db_pass =  "";

	if($conn = mysqli_connect($db_host,$db_user,$db_pass)){
		if($db_sel = mysqli_select_db($conn, "healthcenter")){
			// echo "succefully selected to database";
		}
		else{
			$_SESSION['error'] = "Unable to selected to database";
		}
	}
	else{
		$_SESSION['error'] = "Unable to connect to database";
	}


	$query = "SELECT * FROM user WHERE email = '".$_POST['email']."'";
	if($sql = mysqli_query ($conn, $query)){
		$value = mysqli_fetch_assoc($sql);
		$pass = $value['pass'];
		$user = $value['user'];

		$user_pass = md5($_POST['pass']);
		if($user_pass==$pass){
			$_SESSION['user'] = $user;
			header('location:new_post.php');
		}
		else{
			$_SESSION['error'] = "Wrong Password";
		}
	}
	else{
		$_SESSION['error'] = "No such user exist";
	}
if(isset($_SESSION['error'])){
	header('location:index.php');
}

?>
<br>
<a href="index.php"> Logout</a>