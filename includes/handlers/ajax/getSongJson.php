<?php
	include ("../../config.php");

	if (isset($_POST['songId'])) {
		$artistId = $_POST['songId'];

		$query = mysqli_query($con, "SELECT * FROM artists WHERE id='$songId'");
		$resultArray = mysqli_fetch_array($query);

		echo json_encode($resultArray);
	}
?>