<?php
	function get_all_data_from_table($table){
	$data = array();
	$conn = mysqli_connect("localhost","root","","healthcenter");
	$query = "SELECT * FROM `".$table."` order by id desc";
    if($result = mysqli_query($conn, $query)){
        while ($row = mysqli_fetch_assoc($result)) {
          $data[] = $row;
        }
    }else{
      echo "unable to fetch data from database";
    }
    return $data;
	}

	function get_data_by_key($key,$val,$table){
		$data = array();
		$conn = mysqli_connect("localhost","root","","healthcenter");
		$query = "SELECT * FROM `".$table."` WHERE `".$key."`='".$val."' ";
	    if($result = mysqli_query($conn, $query)){
	        while ($row = mysqli_fetch_assoc($result)) {
	          $data[] = $row;
	        }
	    }else{
	      echo "unable to fetch data from database";
	    }
	    return $data;
	}
?>