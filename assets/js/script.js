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

$(document).on("change", "select.playlist", function(){
	var select = $(this);
	var playlistId = select.val();
	var songId = select.prev(".songId").val();

	$.post("includes/handlers/ajax/addToPlaylist.php", {
		playlistId: playlistId,
		songId: songId
	})
	.done(function(error){
		if(error != ""){
			alert(error);
			return;
		}

		hideOptionsMenu();
		select.val("");
	})
});

function updateEmail(emailClass){
	var emailValue = $("." + emailClass).val();

	$.post("includes/handlers/ajax/updateEmail.php", { 
		email: emailValue, 
		username: userLoggedIn
	})
}

function updatePassword(oldPasswordClass, newPasswordClass1, newPasswordClass2){
	var oldPassword = $("." + oldPasswordClass).val();
	var newPassword1 = $("." + newPasswordClass1).val();
	var newPassword2 = $("." + newPasswordClass2).val();

	$.post("includes/handlers/ajax/updatePassword.php", {
		oldPassword: oldPassword,
		newPassword1: newPassword1,
		newPassword2: newPassword2, 
		username: userLoggedIn
	})
		.done(function(response){
			$("." + oldPasswordClass).nextAll(".message").text(response);
		})
}

function logout(){
	$.post("includes/handlers/ajax/logout.php", function(){
		location.reload();
	})
}

function openPage(url){
	if(timer != null){
		clearTimeout(timer);
	}

	if(url.indexOf("?") == -1){
		url = url + "?";
	}
	
}