<?php
var_dump($_POST);
	var_dump($_FILES);
	$typeFile=$arrayName = array("image/jpeg", "image/png", "image/jpg");
	if(isset($_FILES) && in_array($_FILES['file']['type'], $typeFile)){
		include('./simpan.php');
	} else{
		header("location: " . $_SERVER['HTTP_REFERER']);	
	}
?>