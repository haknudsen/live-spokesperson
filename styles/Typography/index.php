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
<title>Kinetic Typography from Talking Heads&reg;</title>
<meta name="description" content="Engage your website visitors with a custom video typography.">
<meta name="keywords" content="Kinetic Typography, Typography Animation, Motion Typography, Typography Video, Motion Design">
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
    <source src="https://www.websitetalkingheads.com/ivideo/videos/Minimal Typography.mp4" type="video/mp4">
    <!-- InstanceEndEditable --> </video>
  <div class="container-fluid h-100">
    <div class="d-flex h-100 text-center align-items-center mt-3">
      <div class="video-holder text-white">
        <h1 class="display-4 wow bounceInDown"><!-- InstanceBeginEditable name="h1" -->Kinetic Typography Videos<!-- InstanceEndEditable --></h1>
        <p class="lead mb-0 wow bounceInUp">Results Driven Videos</p>
      </div>
      <?php include("../includes/contact-card.php")?>
    </div>
  </div>
</header>
<section class="pb-5 bg-light">
  <h1 class="text-center pt-1"><!-- InstanceBeginEditable name="examples" -->Kinetic Typography Examples<!-- InstanceEndEditable --></h1>
  <!-- InstanceBeginEditable name="video-portfolio" -->
  <?php $type = "Typography";$show = 12;$rand = false;$columns = 2; include("../../database/includes/showPortfolio.php");?>
  <!-- InstanceEndEditable --> </section>
<section class="container-fluid bg-light py-2">
  <div class="card wow zoomIn">
    <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase"><!-- InstanceBeginEditable name="h5" -->Typography Video<!-- InstanceEndEditable --></h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 animate fadeInLeft">
          <h6 class="card-title">Used For</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="lised-for" --> 
              <li class="list-group-item">Explain Your Product or Service</li>
                <li class="list-group-item">Describe a Process</li>
                <li class="list-group-item">Staff Training</li>
                <li class="list-group-item">Educational Video</li>
            <!-- InstanceEndEditable -->
          </ul>
        </div>
        <div class="col-lg-6 animate fadeInRight">
          <h6 class="card-title">You Get</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="list-get" -->
            <li class="list-group-item">Skilled Editing and  Compositing</li>
            <li class="list-group-item">Motion Typography</li>
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
    $style = "typography";
    include("../../database/includes/showStyle.php");
    include("../../database/includes/showCard.php"); 
    ?>
  <!-- InstanceEndEditable --> </section>
<?php include("../../includes/footer.php"); ?>
<?php include("../../includes/modal.php"); ?>
</body>
<!-- InstanceEnd --></html>