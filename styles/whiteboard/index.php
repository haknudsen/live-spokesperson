<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="Whiteboard Video, Animation, Explainer Video, Video Scribe, Hand Drawing Video, Chalkboard Video">
	<meta name="description" content="Talking Heads can create a Whiteboard Video, Animation, Explainer Video, Video Scribe, Hand Drawing Video, Chalkboard Video.  Here you watch examples of these kinds of videos.  Whether you can call it a Sketch Video, Chalkboard Video, Hand Drawing Video, Whiteboard Animation, or Animated Explainer Video Talking Heads&#xAE; will make the best video for you.  Contact us for more information.">
	<meta name="robots" content="index, follow">
	<meta name="author" content="WebsiteTalkingHeads.com">
	<title>Whiteboard Animation Videos, Sketch videos, Animated Whiteboard Videos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("../../includes/head.php"); ?>
</head>

<body>
<?php include("../../includes/nav.php"); ?>
<header class="header-video">
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://www.websitetalkingheads.com/ivideo/videos/Whiteboard Show Reel.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3 wow bounceInDown">Whiteboard Videos</h1>
        <p class="lead mb-0 wow bounceInUp">Grab Visitors' Attention</p>
      </div>
    </div>
  </div>
</header>
<section class="container-fluid bg-light py-2">
    <div class="container">
    <div class="card wow bounceInUp">
      <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase">Use Our Whiteboard Videos For</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="h5">
              <li>Sales Video</li>
              <li>Product Demonstration</li>
              <li>Website Walk-through</li>
              <li>Educational Video</li>
              <li>Training Video</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="pricing">
              <div class="card-title h3 text-primary mb-0">30 Second</div>
              <div class="text-center h4 font-weight-bold mb-0">Whiteboard Videos</div>
              <h6><span class="small text-dark">Starting at Just</span><span class="price text-primary wow flash">$1500</span></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pb-5 bg-primary">
  <h1 class="text-center pt-1 wow tada">Whiteboard Examples</h1>
  <div class="container-fluid bg-grey">
    <?php
    $type = "Whiteboard";
    $show = "12";
    $rand = false;
    $columns = 3;
    include( "../../includes/showDemo.php" );
    ?>
  </div>
</section>
<section class="alert alert-info mt-4">
    <?php $style = "whiteboard";include("../includes/random-content.php"); ?>
</section>
<section class="alert alert-info">
  <h2 class="text-uppercase text-center wow zoomIn">follow us</h2>
  <h3 class="text-center">Join us in <strong>Social Media</strong> and Stay Tuned!</h3>
  <?php include("../../includes/social-icons.php"); ?>
</section>
<?php include("../../includes/modal.php");?>
<?php include("../../includes/footer.php"); ?>
</body>

</html>