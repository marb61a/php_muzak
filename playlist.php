<?php
	include("includes/includedFiles.php"); 

	if(isset($_GET['id'])){
		$playlistId = $_GET['id'];
	} else {
		header("Location: index.php");
	}

	$playlist = new Playlist($con, $playlistId);
	$owner = new User($con, $playlist->getOwner());
?>

<div class="entityInfo">
	<div class="leftSection">
		<div class="playlistImage"
			<img src="assets/images/icons/playlist.png">
		</div>
	</div>
	<div class="rightSection">
		<h2><?php echo $playlist->getName(); ?></h2>
		<p>By <?php echo $playlist->getOwner(); ?></p>
		<p><?php echo $playlist->getNumberOfSongs(); ?> songs</p>
		<button class="button" onclick="deletePlaylist('<?php echo $playlistId; ?>')">
			DELETE PLAYLIST
		</button>
	</div>
</div>

<div class="tracklistContainer">
	<ul class="tracklist">
		<?php

		?>
	</ul>
</div>