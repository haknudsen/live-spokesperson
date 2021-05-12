<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Talking Heads Spotlight</title>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<style type="text/css">
    #spotlight, body{background-color: transparent;}
    #spotlight-player{border: 2px #000000 solid}
</style>
</head>

<body>
<div id="spotlight">
  <video id="spotlight-player" width="100%" height="100%" autoplay loop muted>
    <p>Your browser does not support the video tag. Please Visit <a href="https://www.websitetalkingheads.com/support/" title="Please Visit Support">https://www.websitetalkingheads.com/support/</a> </p>
  </video>
  <div id="bigPlayBtn">
  </div>
  <div id="controls">
    <div id="btn-restart" class="player-btn btn-restart" title="replay" accesskey="R">
    </div>
    <div id="btn-play-toggle" class="player-btn btn-play" title="play" accesskey="P">
    </div>
    <div id="btn-stop" class="player-btn btn-stop" title="stop" accesskey="X">
    </div>
    <input type="range" id="volume-bar" title="volume" min="0" max="1" step="0.1" value="1">
    <div id="btn-mute" class="player-btn btn-unmute" title="mute">
    </div>
    <div id="time" class="time" title="time">
      0:00/0:00
    </div>
    <div class="progress" id="progress-bar" title="duration">
      <div id="progress" class="progress-bar progress-bar-striped" title="current time">
      </div>
    </div>
    <div id="btn-fullscreen" class="player-btn btn-fullscreen-enter" title="toggle full screen" accesskey="T">
    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<script src="js/spotlight.js"></script>
<script>
		$( document ).ready( function () {
					createSpotlight( "<?=$_GET[ "video" ]?>", "<?=$_GET[ "autostart" ]?>", "<?=$_GET[ "controls" ]?>", "<?=$_GET[ "logo" ]?>", "<?=$_GET[ "color" ]?>", "<?=$_GET[ "size" ]?>" );
				});
    </script>
<!--<script src="js/talking-heads-spotlight.js"></script> 
<script>
		$( document ).ready( function () {
					createTalkingHead( "<?=$_GET[ "video" ]?>", "<?=$_GET[ "autostart" ]?>", "<?=$_GET[ "controls" ]?>", "<?=$_GET[ "logo" ]?>", "<?=$_GET[ "color" ]?>" );
				});
</script>-->
</body>
</html>