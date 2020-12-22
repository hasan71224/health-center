<?php 
	ob_start();
	session_start();

	if(isset($_SESSION ['user'])){
		 echo "<h1> Welcome : ". $_SESSION['user']. "</h1>";
		
	}
	else{
		header('location:login.php');
	}

 ?>

<a href="login.php"> Logout</a>


 