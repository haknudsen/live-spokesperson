<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
	<title>Our Blogs</title>
	<meta name="description" content="Demos for our Video Spokespeople.  At Website Talking Heads® we pride ourselves on our high quality, successful spokespeople.">
	<meta name="keywords" content="Spokespeople, Video Spokesperson, Virtual Spokesperson, Website Spokesperson, Web Spokesperson, Spokesmodel, Walk On Actor,Virtual Actor, Person on Website, Online Spokesperson.">
	<?php include("../includes/head.php"); ?>
</head>

<body>
	<?php include("../includes/nav.php"); ?>
	<section class="alert alert-info p-3">
		<h2 class="text-center">Our Blogs</h2>
		<div class="card-deck">
			<div class="card card-default">
				<div class="card-header">
					<h2 class="card-title">Marketing Blog: <span id="title-marketing"</h2>
				</div><img id="img-marketing" src="http://bestwhiteboardvideo.com/wp-content/uploads/wp_image_duplicator_uploads/Live Spokespeople.jpg" class="card-img-top" alt="Marketing Blog"/>
				<div class="card-body blog">
					<p id="excerpt-marketing" class="text-info"></p>
				</div>
			</div>
			<div class="card card-default">
				<div class="card-header">
					<h2 class="card-title">Whiteboard Video Blog: <span id="title-whiteboard"</h2>
				</div><img id="img-whiteboard" src="http://www.live-spokesperson.com/images/Whiteboard%20Blog%20Banner.jpg" class="card-img-top" alt="Whiteboard Sketch Examples"/>
				<div class="card-body blog">
					<p id="excerpt-whiteboard" class="text-info"></p>
				</div>
			</div>
	</section>

	<?php include("../includes/footer.php"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="../js/blog-marketing.js"></script>
	<script src="../js/blog-whiteboard.js"></script>
</body>

</html>