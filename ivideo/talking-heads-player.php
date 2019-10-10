<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Talking Heads Video</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Video Player for our content">
<!--CSS-->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/0a8693018d.js" crossorigin="anonymous"></script>
</head>

<body>
<div id="player-holder">
  <video id="talking-head-player" preload="false" width="100%">
    <p>Your browser does not support the video tag. Please Visit <a href="https://www.websitetalkingheads.com/support/" title="Please Visit Support">https://www.websitetalkingheads.com/support/</a> </p>
  </video>
  <div id="bigPlayBtn"></div>
  <div id="controls">
    <div id="btn-restart" class="player-btn btn-restart" title="replay" accesskey="R"></div>
    <div id="btn-play-toggle" class="player-btn btn-play" title="play" accesskey="P"></div>
    <div id="btn-stop" class="player-btn btn-stop" title="stop" accesskey="X"></div>
    <input type="range" id="volume-bar" title="volume" min="0" max="1" step="0.1" value="1">
    <div id="btn-mute" class="player-btn btn-mute" title="mute"></div>
    <div id="time" class="time" title="time">0:00/0:00</div>
    <div class="progress" id="progress-bar" title="duration">
      <div id="progress" class="progress-bar progress-bar-striped" title="current time"></div>
    </div>
    <div id="btn-fullscreen" class="player-btn btn-fullscreen-enter" title="toggle full screen" accesskey="T"></div>
  </div>
</div>
<!--Java Script--> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<script src="talking-heads-player.js"></script> 
<script>
		$( document ).ready( function () {
					createTalkingHead( "<?=$_GET[ "video" ]?>", "<?=$_GET[ "autostart" ]?>", "<?=$_GET[ "controls" ]?>", "<?=$_GET[ "actor" ]?>" );
				});
	</script>
</body>
</html>