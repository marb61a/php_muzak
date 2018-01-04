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
					<div class="group">
						<div class="navItem">
							<a href="browse.php" class="navItemLink">Browse</a>
						</div>

						<div class="navItem">
							<a href="yourMusic.php" class="navItemLink">Your Music</a>
						</div>

						<div class="navItem">
							<a href="profile.php" class="navItemLink">Joe Bloggs</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div id="nowPlayingBarContainer">
			<div id="nowPlayingBar">
				<div id="nowPlayingLeft">
					<div class="content">
						<span class="albumLink">
							<img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork">
						</span>
						<div class="trackInfo">
							<span class="trackName">
								<span>Blah blah</span>
							</span>
							<span class="artistName">
								<span>Joe Bloggs</span>
							</span>
						</div>
					</div>
				</div>
				<div id="nowPlayingCenter">
					<div class="content playerControls">
						<div class="buttons">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>