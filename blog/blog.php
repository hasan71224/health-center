<?php 
  $data = get_all_data_from_table('blog');

 ?>


<h2>Blog updates</h2>
<div class="container">
  <?php 
  for ($i=0; $i<count($data); $i++) { 
     ?>
     <div class="row">
       <div class="col-md-2">
        <img src="<?php echo $data[$i] ['image'] ?>" class="img img-thumbnail img-square">
       </div>
       <div class="col-md-9">
        <h3>" <a href="post.php?id=<?php echo $data[$i]['id']; ?>"> <?php echo $data[$i]['title']; ?>"</a></h3>
         <p>"<?php echo $data[$i]['s_desc']; ?>"</p>
         <address>"<?php echo $data[$i]['auth']; ?>"</address>
       </div>
     </div>
     <hr>
     <?php 
     }
      ?>