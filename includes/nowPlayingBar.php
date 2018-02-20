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
		setTrack(newPlaylist[0], newPlaylist, false);
		updateVolumeProgressBar(audioElement.audio);

		$('#nowPlayingBarContainer').on("mousedown touchstart mousemove touchmove", function(e){
			e.preventDefault();
		});

		$(".playbackBar .progressBar").mousedown(function() {
			mouseDown = true;
		});

		$(".playbackBar .progressBar").mousemove(function(e){
			if(mouseDown == true){
				// Set the time of song, depending on the position of the mouse
				timeFromOffset(e, this);
			}
		});

		$(".playbackBar .progressBar")..mouseup(function(e){
			timeFromOffset(e, this);
		});

		$(document).mouseup(function(){
			mouseDown = false;
		});
	});

	function timeFromOffset(mouse, progressBar){
		var percentage = mouse.offsetX / $(progressBar).width() * 100;
		var seconds = audioElement.audio.duration * (percentage / 100);
		audioElement.setTime(seconds);
	};
	
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
