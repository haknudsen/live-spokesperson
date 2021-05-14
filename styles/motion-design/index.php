<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="30 days">
<meta name="author" content="TalkingHeads.com">
<title>Motion Design Videos from Talking Heads&reg;</title>
<meta name="title" content="Motion Design Videos from Talking Heads">
<meta name="description" content="Do you need a Sales Video, Product Demonstration, Website Walk-through, and Training Video? Engage your website visitors with a custom Motion Design.">
<meta name="keywords" content="Video Presentation,Web Video,Web Video Production,Custom Videos,Kickstarter Video,Powerpoint Alternative,Custom Video,Custom Video Presentation">
<?php include("../../includes/head.php"); ?>
</head>

<body>
<?php include("../../includes/nav.php"); ?>
<header class="header-video">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="top: 50%">
        <source src="https://www.websitetalkingheads.com/ivideo/videos/Motion Design Banner.mp4" type="video/mp4">
    </video>
    <div class="container-fluid h-100">
        <div class="d-flex h-100 text-center align-items-center mt-3">
            <div class="video-holder text-white">
                <h1 class="display-4 wow bounceInDown">Custom Motion Design Videos</h1>
                <p class="lead mb-0 wow bounceInUp">Results Driven Videos</p>
            </div>
            <?php include("../includes/contact-card.php")?>
        </div>
    </div>
</header>
<section class="pb-5 bg-light">
    <h1 class="text-center pt-1">Motion Design Examples</h1>
    <?php $type = "Motion";$show = 6;$rand = false;$columns = 3; include("../../database/includes/showPortfolio.php");?>
</section>
<section class="container-fluid bg-light py-2">
    <div class="card wow zoomIn">
        <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase">Motion Design</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="card-title">Used For</h6>
                    <ul class="list-group">
                        <li class="list-group-item">Sales Video</li>
                        <li class="list-group-item">Product Demonstration</li>
                        <li class="list-group-item">Website Walk-through</li>
                        <li class="list-group-item">Educational Video</li>
                        <li class="list-group-item">Training Video</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h6 class="card-title">You Get</h6>
                    <ul class="list-group">
                        <li class="list-group-item">Professional Spokesperson</li>
                        <li class="list-group-item">Skilled Editing and  Compositing</li>
                        <li class="list-group-item">Motion Graphics</li>
                        <li class="list-group-item">Graphics</li>
                        <li class="list-group-item">Effects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="alert alert-info mt-4">
    <?php $style = "motion";include("../includes/random-content.php"); ?>
</section>
<?php include("../../includes/footer.php"); ?>
<?php include("../../includes/modal.php"); ?>
</body>
</html>