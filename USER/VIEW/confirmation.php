<?php
if(isset($_POST) && isset($_FILES)){
	if(session_status() != 2){
		session_start();
	}

	$_SESSION['form_data'] = $_POST;
}else{
	header('location: index.php');
}
?>