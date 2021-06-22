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
<title>3D Animation from Talking Heads&reg;</title>
<meta name="description" content="Engage your website visitors with a custom 3d animated video. Professional 3D Characters, Props, and Sets.">
<meta name="keywords" content="3d animation, animation, iClone, custom animation">
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
    <source src="https://www.websitetalkingheads.com/ivideo/videos/vp_bg_v5.mp4" type="video/mp4">
    <!-- InstanceEndEditable --> </video>
  <div class="container-fluid h-100">
    <div class="d-flex h-100 text-center align-items-center mt-3">
      <div class="video-holder text-white">
        <h1 class="display-4 wow bounceInDown"><!-- InstanceBeginEditable name="h1" -->3D Animation<!-- InstanceEndEditable --></h1>
        <p class="lead mb-0 wow bounceInUp">Results Driven Videos</p>
      </div>
      <?php include("../includes/contact-card.php")?>
    </div>
  </div>
</header>
<section class="pb-5 bg-light">
  <h1 class="text-center pt-1"><!-- InstanceBeginEditable name="examples" -->3D Animation Examples<!-- InstanceEndEditable --></h1>
  <!-- InstanceBeginEditable name="video-portfolio" -->
  <?php $type = "Presentation";$show = 12;$rand = false;$columns = 2; include("../../database/includes/showPortfolio.php");?>
  <!-- InstanceEndEditable --> </section>
<section class="container-fluid bg-light py-2">
  <div class="card wow zoomIn">
    <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase"><!-- InstanceBeginEditable name="h5" -->Custom 3D Animations<!-- InstanceEndEditable --></h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 animate fadeInLeft">
          <h6 class="card-title">Used For</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="lised-for" -->
            <li class="list-group-item">Sales Video</li>
            <li class="list-group-item">Product Demonstration</li>
            <li class="list-group-item">Website Walk-through</li>
            <li class="list-group-item">Educational Video</li>
            <li class="list-group-item">Training Video</li>
            <!-- InstanceEndEditable -->
          </ul>
        </div>
        <div class="col-lg-6 animate fadeInRight">
          <h6 class="card-title">You Get</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="list-get" -->
            <li class="list-group-item">Professional Spokesperson</li>
            <li class="list-group-item">Skilled Editing and  Compositing</li>
            <li class="list-group-item">Motion Graphics</li>
            <li class="list-group-item">Graphics</li>
            <li class="list-group-item">Effects</li>
            <!-- InstanceEndEditable -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="alert alert-info mt-4 animate fadeIn"> <!-- InstanceBeginEditable name="random-content" -->
  <?php
    $style = "Presentation";
    include("file:///D|/Web%20Sites/database/includes/showStyle.php");
    include("../../database/includes/showCard.php"); 
    ?>
  <!-- InstanceEndEditable --> </section>
<?php include("../../includes/footer.php"); ?>
<?php include("../../includes/modal.php"); ?>
</body>
<!-- InstanceEnd --></html>