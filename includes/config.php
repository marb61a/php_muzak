<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Dublin");
	
	$servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $con = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$con->host_info.")";

	//$con = mysqli_connect("localhost", "root", "MyDBNov2017", "phpmuzak");

	if(mysqli_connect_errno()){
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>

    
    
    
    