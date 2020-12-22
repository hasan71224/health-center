<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

	<title>User Login</title>

<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: url(../images/hospital1.jpg) no-repeat;
		background-size: cover;
	}
	.container{
		width: 340px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: black;
		background-color: #00000094;

	}
	.container h1{
		float: left;
		font-size: 40px;
		font-weight: 600;
		border-bottom: 6px solid #00c4ff;
		margin-bottom: 50px;
		padding: 13px 0;
		color: white;
	}
	label{
		
		font-size: 20px;
    	font-weight: 600;
    	margin-left: 5px;
    	color: white;
		
	}
	input{
		
		font-size: 23px;
	    margin-left: 5px;
	    font-weight: 600;
	    margin-bottom: 10px;
	}
	.btn{
		width: 100%;
	    border: 2px solid blue;
    	background-color: blue;
	    color: white;
	    font-weight: 600;
	    padding: 5px;
	    font-size: 18px;
	    cursor: pointer;
	    margin: 12px 0;
	}

</style>

</head>
<body>
	<div class="container">
		<h1>User Login Here</h1>
		<br>
		<form action="check_login.php" method="post">
			<label>Enter Your Email Id.</label> <br>
			<input type="email" name="email"> <br>
			<label> Enter Your Password</label> <br>
			<input type="password" name="pass"> <br><br>
			<input type="submit" value="Login"  class="btn">
		</form>
	</div>
	
	<?php 
		if(isset($_SESSION['error'])){
			echo "<p><font color = 'red'>".$_SESSION['error']."</font></p>";
			session_destroy();
		}else{
			
		}
	 ?>
</body>
</html>
