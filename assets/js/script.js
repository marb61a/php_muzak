var currentPlaylist = [];
var shufflePlaylist = [];
var tempPlaylist = [];
var audioElement;
var mouseDown = false;
var currentIndex = 0;
var repeat = false;
var shuffle = false;
var userLoggedIn;
var timer;

$(document).click(function(click){
	var target = $(click.target);

	if(!target.hasClass("item") && !target.hasClass("optionsButton")){
		hideOptionsMenu();
	}
});

$(window).scroll(function() {
	hideOptionsMenu();
});