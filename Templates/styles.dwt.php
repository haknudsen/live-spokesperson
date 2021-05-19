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
<!-- TemplateBeginEditable name="doctitle" -->
<title>Custom Presentations from Talking Heads&reg;</title>
<meta name="description" content="Do you need a Sales Video, Product Demonstration, Website Walk-through, and Training Video? Engage your website visitors with a custom video presentation.">
<meta name="keywords" content="Video Presentation,Web Video,Web Video Production,Custom Videos,Kickstarter Video,Powerpoint Alternative,Custom Video,Custom Video Presentation">
<!-- TemplateEndEditable -->
<?php include("../includes/head.php"); ?>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<?php include("../includes/nav.php"); ?>
<header class="header-video">
  <div class="overlay">
  </div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"> <!-- TemplateBeginEditable name="video-header" -->
    <source src="https://www.websitetalkingheads.com/ivideo/videos/vp_bg_v5.mp4" type="video/mp4">
    <!-- TemplateEndEditable --> </video>
  <div class="container-fluid h-100">
    <div class="d-flex h-100 text-center align-items-center mt-3">
      <div class="video-holder text-white">
        <h1 class="display-4 wow bounceInDown"><!-- TemplateBeginEditable name="h1" -->Custom Custom Presentations<!-- TemplateEndEditable --></h1>
        <p class="lead mb-0 wow bounceInUp">Results Driven Videos</p>
      </div>
      <?php include("../styles/includes/contact-card.php")?>
    </div>
  </div>
</header>
<section class="pb-5 bg-light">
  <h1 class="text-center pt-1"><!-- TemplateBeginEditable name="examples" -->Video Presentations Examples<!-- TemplateEndEditable --></h1>
  <!-- TemplateBeginEditable name="video-portfolio" -->
  <?php $type = "Presentation";$show = 12;$rand = false;$columns = 2; include("../database/includes/showPortfolio.php");?>
  <!-- TemplateEndEditable --> </section>
<section class="container-fluid bg-light py-2">
  <div class="card wow zoomIn">
    <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase"><!-- TemplateBeginEditable name="h5" -->Custom Video Presentations<!-- TemplateEndEditable --></h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 animate fadeInLeft">
          <h6 class="card-title">Used For</h6>
          <ul class="list-group">
            <!-- TemplateBeginEditable name="lised-for" -->
            <li class="list-group-item">Sales Video</li>
            <li class="list-group-item">Product Demonstration</li>
            <li class="list-group-item">Website Walk-through</li>
            <li class="list-group-item">Educational Video</li>
            <li class="list-group-item">Training Video</li>
            <!-- TemplateEndEditable -->
          </ul>
        </div>
        <div class="col-lg-6 animate fadeInRight">
          <h6 class="card-title">You Get</h6>
          <ul class="list-group">
            <!-- TemplateBeginEditable name="list-get" -->
            <li class="list-group-item">Professional Spokesperson</li>
            <li class="list-group-item">Skilled Editing and  Compositing</li>
            <li class="list-group-item">Motion Graphics</li>
            <li class="list-group-item">Graphics</li>
            <li class="list-group-item">Effects</li>
            <!-- TemplateEndEditable -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="alert alert-info mt-4 animate fadeIn"> <!-- TemplateBeginEditable name="random-content" -->
  <?php
    $style = "Presentation";
    include("../../database/includes/showStyle.php");
    include("../../database/includes/showCard.php"); 
    ?>
  <!-- TemplateEndEditable --> </section>
<?php include("../includes/footer.php"); ?>
<?php include("../includes/modal.php"); ?>
</body>
</html>