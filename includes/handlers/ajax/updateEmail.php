<?php
	include("../../config.php");

	if(isset($_POST['username'])){
		echo "ERROR: Could not set username";
		exit();
	}	

	if(isset($_POST['email']) && $_POST['email'] != ""){
		$username = $_POST['username'];
		$email = $_POST['email'];
		
	} else {
		echo "You must provide an email";
	}
?>