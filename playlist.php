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
			$songIdArray = $playlist->getSongIds();

			$i = 1;
			foreach($songIdArray as $songId){
				$playlistSong = new Song($con, $songId);
				$songArtist = $playlistSong->getArtist();

				echo " ";
			}
		?>

		<script>
			var tempSongIds = '<?php echo json_encode($songIdArray); ?>';
			tempPlaylist = JSON.parse(tempSongIds);
		</script>
	</ul>
</div>

<nav class="optionsMenu">
	<input type="hidden" name="songId">
	<?php 
		echo Playlist::getPlaylistsDropdown($con, $userLoggedIn->getUsername()); 
	?>
	<div class="item" onclick="removeFromPlaylist(this, '<?php echo $playlistId; ?>')">
		Remove from Playlist
	</div>
</nav>