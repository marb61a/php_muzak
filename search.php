<?php
	include("includes/includedFiles.php");

	if(isset($_GET['term'])){
		$term = urldecode($_GET['term']);
	} else {
		$term = "";
	}
?>

<div class="searchContainer">
	<h4>Search for an artist, album or song</h4>

	<input type="text" class="searchInput" value="<?php echo $term; ?>" placeholder="Start typing..." 
		onfocus="this.value = this.value">
</div>

<script>
	$(".searchInput").focus();

	$(".searchInput").keyup(function(){
		clearTimeout(timer);

		timer = setTimeout(function() {
			var val = $(".searchInput").val();
			openPage("search.php?term=" + val);
		}, 2000);
	})
</script>

<?php if($term == "") exit(); ?>

<div class="tracklistContainer borderBottom">
	<h2>SONGS</h2>
	<ul class="tracklist">
		<?php
			$songsQuery = mysqli_query($con, "SELECT id FROM songs WHERE title LIKE '$term%' LIMIT 10");

			if(mysqli_num_rows($songsQuery) == 0){
				echo "<span class='noResults'>No songs found matching " . $term . "</span>";
			}

			$songIdArray = array();

			$i = 1;
			while($row = mysqli_fetch_array($songsQuery)){
				if(i > 15){
					break;
				}

				array_push($songIdArray, $row['id']);

				$albumSong = new Song($con, $row['id']);
				$albumArtist = $albumSong->getArtist();

				echo "<li class='tracklistRow'>
					<div>
					</div>
				<li>";
			}
		?>
	</ul>
</div>