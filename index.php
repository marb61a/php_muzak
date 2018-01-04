<?php
	include("includes/config.php");

	if(isset($_Session['userLoggedIn'])){
		$userLoggedIn = $_SESSION['userLoggedIn'];
	} else {
		header("Location: register.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHPMuzak</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div id="mainContainer">
		<div id="topContainer">
			<div id="navbarContainer">
				<nav class="navBar">
					<a href="index.php" class="logo">
						<img src="assets/images/icons/logo.png">
					</a>
					<div class="group">
						<div class="navItem">
							<a href="search.php" class="navItemLink">
								Search
								<img src="assets/images/icons/search.png" class="icon" alt="Search">
							</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</body>
</html>