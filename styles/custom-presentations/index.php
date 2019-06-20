<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video Presentations from Live-Spokesperson&reg;</title>
	<meta name="title" content="Online Video from Live-Spokesperson.com">
	<meta name="description" content="Do you need a Sales Video, Product Demonstration, Website Walk-through, and Training Video? Engage your website visitors with a custom video presentation.  ">
	<meta name="keywords" content="Video Presentation,Web Video,Web Video Production,Custom Videos,Kickstarter Video,Powerpoint Alternative,Custom Video,Custom Video Presentation">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="30 days">
	<meta name="author" content="TalkingHeads.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("../../includes/head.php"); ?>
</head>

<body>
	<?php include("../../includes/nav.php"); ?>
	<section class="container-fluid bg-light">
		<h1 class="text-center">Custom Video Presentations</h1>
		<div class="container">
			<div class="row pb-4">
				<div class="col-lg-4">
					<div class="card">
						<h5 class="card-header text-center text-uppercase">Use Them For</h5>
						<div class="card-body">
							<ul class="h5">
								<li>Sales Video</li>
								<li>Product Demonstration</li>
								<li>Website Walk-through</li>
								<li>Educational Video</li>
								<li>Training Video</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card text-center">
						<h5 class="card-header">RESULTS <span class="text-primary">DRIVEN</span></h5>
						<div class="card-body" id="price">
							<div class="card-title h3 orange mb-0">30 Second</div>
							<div class="text-center h4 font-weight-bold mb-0">Video Presentation</div>
							<div class="small text-primary">Starting at Just</div>
							<h6 class="mb-0"><span class="price orange">$799</span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card text-center">
						<h5 class="card-header text-uppercase">awards</h5>
						<div class="card-body">
							<div class="row align-items-center">
								<div class="align-items-center">
									<img src="http://www.websitetalkingheads.com/images/video-production-seal.png" alt="Best in Video Production" class="img-fluid" title="Best in Video Production" id="seal"/>
								</div>
								<div class="align-items-center">
									<img src="https://websitetalkingheads.com/images/video-production-banner.png" alt="Best Web Video Production" class="img-fluid center" title="Best Web Video Production" id="banner"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pb-5 bg-primary">
		<h1 class="text-center pt-1">Video Presentation Examples</h1>
		<div class="container-fluid bg-grey">
			<?php 
    $type = "Presentation";
    $show = "12";
	$rand = false;
	$columns = 3;
    include("../../includes/showDemo.php"); 
    ?>
		</div>
	</section>
	<section class="alert alert-info mt-4">
		<div class="container">
			<h3 class="text-center">Why Should You Have <span class="thin blue">Video</span>?</h3>
			<div class="row align-items-center">
				<div class="col-md-6">
					<p class="text-lg-fluid">You want to compete with the "Big Boys" but don't want to pay "Big Studio" rates. We focus on video presentations that improve your bottom line without breaking your bank. Rather than spending tens or even hundreds of thousands on a "viral video", we recommend creating videos that work for you 24/7. By utilizing a professional spokesperson and supporting your message with text and graphics, you are capitalizing on rich media to influence your potential customers.</p>
				</div>
				<div class="col-md-6">
					<?php 
    $video = "Jeds Lemonade";
    $bgColor = "#757575";
	$alt = "Product Demo Video";
    include("../../includes/showVideo.php"); 
    ?>

				</div>
			</div>
		</div>
	</section>
	<section class="alert alert-info">
		<div class="container">
			<h3 class="text-center">Custom Video Presentations</h3>
			<div class="row align-items-center">
				<div class="col-md-6">
					<?php 
    $video = "Talking Heads Video Demonstration";
    $bgColor = "#91A4BF";
	$alt = "Talking Heads Video Demonstration";
    include("../../includes/showVideo.php"); 
    ?>

				</div>
				<div class="col-md-6">
					<p class="text-lg-fluid">We use images, video, sound, text and a professional video spokesperson. We can create a <em>Custom Video Presentation</em> that is a Product Demonstration, a Website Walk-through, Informational, Training or Sales Video. We put it all together and provide you a Full HD 1920X1080 video in MP4 format suitable to upload to YouTube, Vimeo, Facebook.Twitter, Instagram, Dailymotion, Vevo, Metacafe, Flickr, whatever video service you like.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="alert alert-info mt-4">
		<div class="container">
			<h3 class="text-center">Spokesperson <span class="thin blue">Video</span>?</h3>
			<div class="row align-items-center">
				<div class="col-md-6">
					<p class="text-lg-fluid">The most of us are by now aware of the power of video on the Internet. Enterprising companies have used that power to affect people on an unprecedented scale. A <strong>spokesperson video</strong> is almost like face-to-face contact with potential clients. This marketing method is doubly effective than supplying staid, plain text and fixed visuals. Visitors find it more enjoyable and helps them comprehend information more easily.</p>
				</div>
				<div class="col-md-6">
					<?php 
    $video = "Video Background";
    $bgColor = "#757575";
	$alt = "Video Spokespeople";
    include("../../includes/showVideo.php"); 
    ?>

				</div>
			</div>
		</div>
	</section>
	<?php include("../../includes/modal.php");?>

	<?php include("../../includes/footer.php"); ?>
</body>
</html>