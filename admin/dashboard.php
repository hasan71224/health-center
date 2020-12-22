<?php include_once(__DIR__ . '/../db/db_setup.php');
$data = get_all_data_from_table('blog');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>login here!</title></head>
<body>
	<div class="container">
	<h1>BLOG DASHBOARD</h1>
	<hr>

	<table class="table table-striped">
  		<tr>
  			<th> Index </th>
  			<th> Title </th>
  			<th> Option </th>
  		</tr>
	

	<?php 
		for ($i=0; $i<count($data) ; $i++) { 
			$num = $i+1;
			echo "<tr>";
			echo "<td>" .$num. "</td>";
			echo "<td>" .$data[$i]['title']. "</td>";
			echo "<td> Edit </td>";
			echo "<tr>";
		}
	 ?>
	 </table>
</div>
	</body>
</html>