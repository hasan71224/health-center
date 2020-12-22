<?php include_once('../db/db_setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Make Post!</title>
    <script src="../ckeditor/ckeditor.js"></script>
</head>
<body>
	<div class="container">
	<h1>Make a new post</h1>
	<?php
	 if(isset($_SESSION['success'])){
		echo "<font color='green'><b>".$_SESSION['success']."</b></font>";
		//session_destroy();
	}elseif(isset($_SESSION['fail'])){
		echo "<font color='red'><b>".$_SESSION['fail']."</b></font>";
		//session_destroy();
	}
	 ?>
	<hr>
	<form method="post" action="submit_post.php" enctype="multipart/form-data"><br>
	<label>Enter Post Title</label><br>
	<input type="text" class="form-control" name="title"><br>
	<label>Enter A Short Description</label><br>
	<input type="text" class="form-control" name="s_desc"><br>
	<label>Enter Post Data</label><br>
	<textarea class="form-control" id="editor1" name="post_data" rows="20" cols="60"></textarea><br>
	<label>Enter Post Tag</label><br>
	<input type="text" class="form-control" name="tags"><br>
	<label>Enter Post Category</label><br>
	<input type="text" class="form-control" name="category"><br>
	<label>Enter An image to upload</label><br>
	<input type="file" name="image"><br><br>
	<input type="submit" class="btn btn-primary btn-lg" value="submit_post">
	</form>
	
	</div>
	<script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
    	CKEDITOR.replace( 'editor1' );
    </script>
	</body>
</html>