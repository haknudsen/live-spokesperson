<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Video Examples | Live-Spokesperson.com</title>
	<meta name="title" content="Online Video from Live-Spokesperson.com">
	<meta name="description" content="Examples of the many diferent styles of our website videos">
	<meta name="keywords" content="Video Spokesperson,Website Spokesperson,Online Marketing Video Production,Hire A Spokesperson,Website Video Spokesperson,Video Spokesperson Software,Your Video Spokesperson,Live Spokesperson">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="30 days">
	<meta name="author" content="TalkingHeads.com">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://vjs.zencdn.net/7.2.4/video-js.css" rel="stylesheet">
	<link href="css/video.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet" type="text/css">
	<title>iSpokespeople&reg;</title>
</head>

<body>
	<?php include("includes/header.php"); ?>
	<section class="jumbotron">
		<h1>Examples</h1>
	</section>
	<section class="pt-5 pb-5 bg-primary">
		<div class="container-fluid bg-light">
			<?php 
    $type = "Presentation";
    $show = "6";
	$rand = true;
	$columns = 3;
    include("includes/showDemo.php"); 
    ?>
		</div>
	</section>
	<div id="mainModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="videoModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
				


				</div>
				<div class="container d-flex justify-content-center">
					<video id="talking-heads-video" class="video-js" controls preload="auto" width="800" height="432" poster="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.jpg" data-setup="{}">
						<source src="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.mp4" type='video/mp4'>
						<source src="https://www.websitetalkingheads.com/ivideo/videos/Animated Alien Video.webm" type='video/webm'>
						<p class="vjs-no-js">
							To view this video please enable JavaScript, and consider upgrading to a web browser that
							<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
						</p>
					</video>
				</div>
				<div class="d-none" id="form">
					<?php include("includes/contact.php"); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="contact">Contact Us</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>

	<!-- content container -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://vjs.zencdn.net/7.2.4/video.js"></script>
	<script>
		$( document ).ready( function () {
			var video = $( "#talking-heads-video_html5_api" )[ 0 ];
			var srcBase = "https://www.websitetalkingheads.com/ivideo/videos/";
			var name;
			$( ".video" ).click( function () {
				name = $( this ).attr( "data-video" );
				srcVideo = srcBase + name + ".mp4";
				srcPoster = srcBase + name + ".jpg";
				$( '#videoModalLabel' ).text( name + ' - ' + $( this ).attr( "alt" ) );
				video.pause();
				video.src = srcVideo;
				video.poster = srcPoster;
				video.play();
			} );
			$( '#contact' ).click( function () {
				video[ video.paused ? 'play' : 'pause' ]();
				var outside = $( '.modal-content' ).innerWidth();
				var width = outside/2;
				if(width<440){width = 440}
				$( '#form' ).outerWidth( width );
				$( '#form' ).toggleClass( 'd-block' );
				var left = ( outside - $( '#form' ).outerWidth() ) / 2;
				$( '#form' ).css( 'left', left );
			} );
			$('#contactClose').click(function(){
				$( '#form' ).toggleClass( 'd-block' );
			})
			$( '#mainModal' ).on( 'hidden.bs.modal', function ( e ) {
				video.pause();
			} );
			$( '#mainModal' ).on( 'shown.bs.modal', function ( e ) {
				$( '#form' ).removeClass( 'd-block' );
				video.play();
				console.log( name );
			} );
		} );
	</script>
</body>
</html>