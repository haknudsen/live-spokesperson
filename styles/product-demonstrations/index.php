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
<title>Product Demonstration Videos from Talking Heads&reg;</title>
<meta name="description" content="Demo videos reveal how your product works, what it can do, and how consumers assemble it. With a new product it is important to show it to potential customers">
<meta name="keywords" content="Product Video, Product Demo, Demo Video, Overhead Unboxing, Product Launch Video,Product Demonstration">
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
    <source src="https://www.websitetalkingheads.com/ivideo/videos/Product Demo Examples.mp4" type="video/mp4">
    <!-- InstanceEndEditable --> </video>
  <div class="container-fluid h-100">
    <div class="d-flex h-100 text-center align-items-center mt-3">
      <div class="video-holder text-white">
        <h1 class="display-4 wow bounceInDown"><!-- InstanceBeginEditable name="h1" -->Product Demonstrations<!-- InstanceEndEditable --></h1>
        <p class="lead mb-0 wow bounceInUp">Results Driven Videos</p>
      </div>
      <?php include("../includes/contact-card.php")?>
    </div>
  </div>
</header>
<section class="pb-5 bg-light">
  <h1 class="text-center pt-1"><!-- InstanceBeginEditable name="examples" -->Product Demo Examples<!-- InstanceEndEditable --></h1>
  <!-- InstanceBeginEditable name="video-portfolio" -->
  <?php $type = "product";$show = 12;$rand = false;$columns = 2; include("../../database/includes/showPortfolio.php");?>
  <!-- InstanceEndEditable --> </section>
<section class="container-fluid bg-light py-2">
  <div class="card wow zoomIn">
    <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase"><!-- InstanceBeginEditable name="h5" -->Product Demonstration Videos<!-- InstanceEndEditable --></h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 animate fadeInLeft">
          <h6 class="card-title">Used For</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="lised-for" -->
            <li class="list-group-item">Lower Bounce Rate</li>
            <li class="list-group-item">Super Popular and Engaging Style</li>
            <li class="list-group-item">Give Viewer a Birds Eye View</li>
            <li class="list-group-item">Let's Them Know What to Expect</li>
            <li class="list-group-item">Boosts Retention</li>
            <li class="list-group-item">Call to Action to Increase Sales</li>
            <li class="list-group-item">Choose From Different Table Top Textures</li>
            <li class="list-group-item">Male or Female Hands</li>
            <li class="list-group-item">Sell More Products!!!!!</li>
            <li class="list-group-item">Affordable</li>
            <!-- InstanceEndEditable -->
          </ul>
        </div>
        <div class="col-lg-6 animate fadeInRight">
          <h6 class="card-title">You Get</h6>
          <ul class="list-group">
            <!-- InstanceBeginEditable name="list-get" -->
            <li class="list-group-item">Boost Sales with a Spokesperson</li>
            <li class="list-group-item">Explain Complicated or Hard to Understand Features</li>
            <li class="list-group-item">Increase Conversion Rates with Demonstration</li>
            <li class="list-group-item">Raise Visitor Engagement with In Dept Demonstration</li>
            <li class="list-group-item">Add Music for Even More Pizazz!</li>
            <li class="list-group-item">Sell the Heck out of your Products!!!</li>
            <!-- InstanceEndEditable -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="alert alert-info mt-4 animate fadeIn"> <!-- InstanceBeginEditable name="random-content" -->
  <?php
    $style = "product";
    include("../../database/includes/showStyle.php");
    include("../../database/includes/showCard.php"); 
    ?>
  <!-- InstanceEndEditable --> </section>
<?php include("../../includes/footer.php"); ?>
<?php include("../../includes/modal.php"); ?>
</body>
<!-- InstanceEnd --></html>