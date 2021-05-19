<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/styles.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="30 days">
<meta name="author" content="TalkingHeads.com">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Animation Videos from Talking Heads&reg;</title>
<meta name="description" content="Talking Heads can create a Whiteboard Video, Animation, Explainer Video, Video Scribe, Hand Drawing Video, Chalkboard Video.  Here you watch examples of these kinds of videos.  Whether you can call it a Sketch Video, Chalkboard Video, Hand Drawing Video, Whiteboard Animation, or Animated Explainer Video Talking Heads&#xAE; will make the best video for you.">
<meta name="keywords" content="Whiteboard Video, Animation, Explainer Video, Video Scribe, Hand Drawing Video, Chalkboard Video">
<!-- InstanceEndEditable -->
<?php include("../../includes/head.php"); ?>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<?php include("../../includes/nav.php"); ?>
<header class="header-video">
  <div class="overlay">
  </div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"> <!-- InstanceBeginEditable name="video-header" -->
    <source src="https://www.websitetalkingheads.com/ivideo/videos/Aliens Animated.mp4" type="video/mp4">
    <!-- InstanceEndEditable --> </video>
  <div class="container-fluid h-100">
    <div class="d-flex h-100 text-center align-items-center mt-3">
      <div class="video-holder text-white">
        <h1 class="display-4 wow bounceInDown"><!-- InstanceBeginEditable name="h1" -->Custom Animation Videos<!-- InstanceEndEditable --></h1>
        <p class="lead mb-0 wow bounceInUp">Results Driven Videos</p>
      </div>
      <?php include("../includes/contact-card.php")?>
    </div>
  </div>
</header>
<section class="pb-5 bg-light">
  <h1 class="text-center pt-1"><!-- InstanceBeginEditable name="examples" -->Animation Examples<!-- InstanceEndEditable --></h1>
  <!-- InstanceBeginEditable name="video-portfolio" -->
  <?php $type = "Animation";$show = 12;$rand = false;$columns = 2; include("../../database/includes/showPortfolio.php");?>
  <!-- InstanceEndEditable --> </section>
<section class="container-fluid bg-light py-2">
  <div class="card wow zoomIn">
    <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase"><!-- InstanceBeginEditable name="h5" -->Custom Animation Videos<!-- InstanceEndEditable --></h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 animate fadeInLeft">
          <h6 class="card-title">Used For</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="lised-for" -->
            <li class="list-group-item">Educational Video</li>
            <li class="list-group-item">Sales Video</li>
            <li class="list-group-item">Website Walk-through</li>
            <li class="list-group-item">Training Video</li>
            <!-- InstanceEndEditable -->
          </ul>
        </div>
        <div class="col-lg-6 animate fadeInRight">
          <h6 class="card-title">You Get</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="list-get" -->
            <li class="list-group-item">Professional Voice Over</li>
            <li class="list-group-item">Skilled Editing and  Compositing</li>
            <li class="list-group-item">Graphics</li>
            <li class="list-group-item">Animation</li>
            <!-- InstanceEndEditable -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="alert alert-info mt-4 animate fadeIn"> <!-- InstanceBeginEditable name="random-content" -->
  <?php
    $style = "animation";
    include("../../database/includes/showStyle.php");
    include("../../database/includes/showCard.php"); 
    ?>
  <!-- InstanceEndEditable --> </section>
<?php include("../../includes/footer.php"); ?>
<?php include("../../includes/modal.php"); ?>
</body>
<!-- InstanceEnd --></html>