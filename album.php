<?php
	include("includes/includedFiles.php"); 

	if(isset($_GET['id'])){
		$albumId = $_GET['id'];
	} else {
		header("Location: index.php");
	}

	$album = new Album($con, $albumId);
	$artist = $album->getArtist();
	$artistId = $artist->getId();
?>

<div class="entityInfo">
	<div class="leftSection">
		<img src="<?php echo $album->getArtworkPath(); ?>">
	</div>

	<div class="rightSection">
		<h2><?php echo $album->getTitle(); ?></h2>
	</div>
</div>

<div class="tracklistContainer">
	<ul class="tracklist">
		<?php

		?>
	</ul>
</div>