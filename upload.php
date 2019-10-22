<?php
	$target_path = "uploads/";
	$target_path = $target_path.basename($_FILES['file1']['name']);
	if(move_uploaded_file($_FILES['file1']['tmp_name'],$target_path))
	{
		echo"The file ".basename($_FILES['file1']['name'])."has been uploaded";
	}
	else
	{	
		echo"error";
	}
?>