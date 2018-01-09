<?php
	include("includes/includedFiles.php");

	if(isset($_GET['id'])){
		$artistId = $_GET['id'];
	} else {
		header("Location: index.php");
	}

	$artist = new Artist($con, $artistId);
?>

<div class="entityInfo borderBottom">
	<div class="centerSection">
		<div class="artistInfo">
			<h1 class="artistName">
				<?php echo $artist->getName(); ?>
			</h1>
			<div class="headerButtons">
				<button class="button green" onclick="playFirstSong()">
					PLAY
				</button>
			</div>
		</div>
	</div>
</div>

<div class="tracklistContainer borderBottom">
	<h2>SONGS</h2>
	<ul class="tracklist">
		<?php

		?>
	</ul>
</div>