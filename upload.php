<?php
include_once('connect.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			// image folder loc
			$address="photos/" . $_FILES["image"]["name"];	
			$save=mysql_query("INSERT INTO photos (address) VALUES ('$address')");// inserting ti the photo tables
			header("location: index.php");
			exit();					
	}
?>
