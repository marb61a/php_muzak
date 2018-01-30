<?php
	$songQuery = mysqli_query($con, "SELECT id FROM songs ORDER BY RAND() LIMIT 10");

	$resultArray = array();

	while ($row = mysqli_fetch_array($songQuery)) {
		array_push($resultArray, $row['id']);
	}

	$jsonArray = json_encode($resultArray);
?>

<script>
	$(document).ready(function(){
		var newPlaylist = <?php echo $jsonArray; ?>;
		audioElement = new Audio();

	});
</script>

<div id="nowPlayingBarContainer">
	<div id="nowPlayingBar">
		<div class="content">
			<span class="albumLink">
				<img role="link" tabindex="0" src="" class="albumArtwork">
			</span>
			<div class="trackInfo">
				<span class="trackName">
					<span role="link" tabindex="0"></span>
				</span>
				<span>
					
				</span>
			</div>
		</div>
	</div>
</div>
