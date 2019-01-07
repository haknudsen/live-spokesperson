<link href="https://vjs.zencdn.net/7.2.4/video-js.css" rel="stylesheet">
<link href="../css/video.css" rel="stylesheet">
<section class="container d-flex justify-content-center">
	<video id="talking-heads-video" class="video-js" controls preload="auto" width="640" height="360" poster="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.jpg" data-setup="{}">
		<source src="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.mp4" type='video/mp4'>
		<source src="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.webm" type='video/webm'>
		<p class="vjs-no-js">
			To view this video please enable JavaScript, and consider upgrading to a web browser that
			<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
		</p>
	</video>
</section>
<div class="d-flex justify-content-center pt-1">
	<button class="btn btn-primary" id="change">Change</button>
</div>
<script src="https://vjs.zencdn.net/7.2.4/video.js"></script>
<script>
	$( "#change" ).click( function () {
		var video = $( "#talking-heads-video" );
		video.src = "https://www.websitetalkingheads.com/ivideo/videos/Collaboration vs Survey.mp4";
		video.load();
	} )
</script>