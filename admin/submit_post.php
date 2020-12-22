
<?php 
include_once('../db/db_setup.php');
	//print_r($_FILES['image']);
	$image_file = $_FILES['image'];
	$format=array('jpeg','jpg','png','gif');
	$temp = explode('/', $image_file['type']);

	foreach ($format as $ext) {
		if($ext == $temp[1]){
			$new_image = $image_file['name'];
		}
	}

	if($new_image){
		$target = '../images/' .$new_image;
		if(move_uploaded_file($image_file['tmp_name'],$target)){
			$image = '../images/' .$new_image;
			echo "successfully uploaded";
		}else{
			$_SESSION['fail'][] = "Unable to Upload image";
			
		}
		}else{
			$_SESSION['fail'][] = "Please Upload An image File";
			
		}
	//print_r($temp);

$conn = mysqli_connect("localhost","root","","healthcenter");

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$s_desc = mysqli_real_escape_string($conn, $_POST['s_desc']);
	$post_data = mysqli_real_escape_string($conn, $_POST['post_data']);
	$tags = mysqli_real_escape_string($conn, $_POST['tags']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	
	$date = date('d-m-Y');
	$auth = "md hasan";
	$status = 1;

if(!isset($_SESSION['fail'])){
	$query = "INSERT INTO `blog`(`title`, `date`, `auth`, `s_desc`, `description`, `tags`, `category`, `status`, `image`) VALUES ('".$title."', '".$date."', '".$auth."', '".$s_desc."', '".$post_data."', '".$tags."', '".$category."', '".$status."', '".$image."')";

	if(mysqli_query($conn, $query)){
		$_SESSION['success'][] = "post successfully added";
		header('location:new_post.php');
	}else{
		$_SESSION['fail'][] = "post failed";
		header('location:new_post.php');
	}
}else{
	header('location:new_post.php');
}
	
	
 ?>
