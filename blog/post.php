<?php include_once(__DIR__ . '/../db/db_setup.php');

	$val = $_GET['id'];
	$data =  get_data_by_key('id',$val, 'blog');

	//print_r($data);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('blog_head.php'); ?>
</head>
<body>
	<div class="container">
	<h1><?php echo $data[0]['title']; ?></h1>
	<p><?php echo  $data[0]['auth']; ?></p>
	<hr>
	<img src="<?php echo $data[0]['image']; ?>" class="img" width="480px"; >
	<p><?php echo  $data[0]['s_desc']; ?></p>
	<p><?php echo  $data[0]['description']; ?></p>
	
	</div>


	<?php include_once('blog_head.php'); ?>
</body>
</html>