<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
	<title>Our Video Spokespeople</title>
	<meta name="description" content="Demos for our Video Spokespeople.  At Website Talking Heads® we pride ourselves on our high quality, successful spokespeople.">
	<meta name="keywords" content="Spokespeople, Video Spokesperson, Virtual Spokesperson, Website Spokesperson, Web Spokesperson, Spokesmodel, Walk On Actor,Virtual Actor, Person on Website, Online Spokesperson.">
	<?php include("includes/actors-head.php"); ?>
</head>
<?php include("includes/nav.php"); ?>
<section class="jumbotron">
	<h2 class="text-center">Our Spokespeople</h2>
	<div class="text-justify">
		<p>They are called Video Spokesperson, Virtual Spokesperson, Web Spokesperson, Spokes-Model, Walk On Actor, Virtual Actor, Person On Website, Online Spokesperson, Web Presenter, Video Presenter, Website Presenter, Video Web Presenter, Promo Video Presenter, Live Actor, Website Video Actor, Virtual Live Actor, and more...</p>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-5 offset-xl-1">
				<?php $video="Professional Spokespeople";$alt="Some of our Professional Spokespeople"; include("../ivideo/showInline.php"); ?>
			</div>
			<div class="col-xl-5">
				<?php $video="Virtual Spokespeople";$alt="Some of our Professional Virtual Spokespeople"; include("../ivideo/showInline.php"); ?>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid bg-white">
	<div class="container">
	  <div class="card middle">
			<h3 class="card-header bg-gradient-mine text-center text-white">Video <em>Spokespeople</em></h3>
			<img class="card-img-top" src="../images/Professional Virtual Live Actors.jpg" alt="Professional Virtual Live Actors">
			<div class="card-body">
				<h5 class="card-title text-capitalize">There are numerous terms to explain a Website Spokesperson</h5>
				<p class="card-text">You've seen them in the past. They are the people who welcome you to a website. Your video spokesperson, also know as virtual actor or website spokesperson, is a transparent video shown over a website. Instead of reading, which can get dull, these spokesperson typically walk you through whatever you need to know about the page</p>
				<p class="card-text">They are the same as as the presenters you see on Television. They communicate suggestions, news, updates, or attempting to sell. They will keep visitors' attention so they stay longer on your website. Not a simple task considering the brief attention period that many people have! That is why picking the most suitable spokesperson with the job is very important.</p>
			</div>
			<div class="card-footer text-muted bg-gradient-mine text-right"><a href="../spokespeople/" title="Spokespeople"><em>More...</em></a></div>
		</div>
	</div>
</section>
<?php include("includes/footer.php"); ?>
<script src="lightbox/jquery.lightbox.min.js"></script>
<script>
	$( ".actor" ).click( function () {
		"use strict";
		var platform = navigator.platform;
		var name = $( this ).attr( "data-actor" );
		var html = $( "<video id='video1' controls autoplay><source src='http://www.websitetalkingheads.com/videos/" + name +
			".mp4' type='video/mp4'>Your browser does not support the video tag.</video>"
		);
		if ( platform !== "iPhone" ) {
			$.lightbox( html, {
				width: 547,
				height: 367,
				title: $( this ).attr( "title" )
			} );
			return false;
		} else {
			$( ".spokespeople" ).prepend( html );
			$( "#video1" ).get( 0 ).play();
			$( '#video1' ).on( 'ended', function () {
				$( '#video1' ).remove();
			} );
		}
	} );
</script>
</body>

</html>