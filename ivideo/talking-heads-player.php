<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Talking Heads Video</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!--CSS-->
	<meta content="Searching for a new way to bring life to your website and attract more interest from those who visit it? Get an professional spokesperson from Live-Spokesperson.">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-6jHF7Z3XI3fF4XZixAuSu0gGKrXwoX/w3uFPxC56OtjChio7wtTGJWRW53Nhx6Ev" crossorigin="anonymous">
	<link href="http://www.live-spokesperson.com/css/bootstrap.css" rel="stylesheet" type="text/css">
	<!--Java Script-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
	<div id="player-holder">
		<video id="talking-head-player" preload width="100%">
			<source src="movie.mp4" type="video/mp4">
			<p>Your browser does not support the video tag. Please Visit <a href="https://www.websitetalkingheads.com/support/" title="Please Visit Support">https://www.websitetalkingheads.com/support/</a>
			</p>
		</video>
		<div id="bigPlayBtn"></div>
		<div id='controls'>
			<div id='btn-restart' class='btn-restart' title='replay' accesskey="R"></div>
			<div id='btn-play-toggle' class="btn-play" title='play' accesskey="P" onclick='playPauseVideo();'></div>
			<div id='btn-stop' class="btn-stop" title='stop' accesskey="X" onclick='stopVideo();'></div>
			<div id='btn-volume' class='btn-volume-mute' title='mute' onclick='muteVolume();'></div>
			<input type='range' id='volume-bar' title="volume" min='0' max='1' step='0.1' value='1'>
			<progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
			<div id='btn-fullscreen' class='btn-fullscreen-enter' title='toggle full screen' accesskey="T" onclick='toggleFullScreen();'></div>
		</div>
	</div>
	<script src="talking-heads-player.js"></script>
	<script>
		$( document ).ready( function () {
			$( "#talking-head-player" ).createTalkingHead( "Social Media" );
		} );
	</script>
</body>
</html>