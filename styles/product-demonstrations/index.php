<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta content="Website Talking Heads" name="author">
<meta content="Demo videos reveal how your product works, what it can do, and how consumers assemble it. With a new product it is important to show it to potential customers" name="Description">
<?php include("../../includes/head.php"); ?>
</head>

<body>
<?php include("../../includes/nav.php"); ?>
<header class="header-video">
  <div class="overlay">
  </div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://www.websitetalkingheads.com/ivideo/videos/Product Demo Examples.mp4" type="video/mp4">
  </video>
  <div class="container-fluid h-100">
    <div class="d-flex h-100 text-center align-items-center mt-3">
      <div class="video-holder text-white">
        <h1 class="display-4 wow bounceInDown">Custom Product Demonstration Videos</h1>
        <p class="lead mb-0 wow bounceInUp">Results Driven Videos</p>
      </div>
      <?php include("../includes/contact-card.php")?>
    </div>
  </div>
</header>
<section class="pb-5 bg-light">
  <h1 class="text-center pt-1">Product Demonstration Examples</h1>
  <?php $type = "product";$show = 6;$rand = false;$columns = 3; include("../../database/includes/showPortfolio.php");?>
</section>
<section class="alert alert-info mb-3">
  <div class="container-fluid">
    <div class="card-deck">
      <div class="card pop"> <img class="poster card-img-top" data-video="Jeds Lemonade" alt="Product Demo Videos" src="../../images/product demo video.jpg">
        <div class="card-body">
          <h6><a href="#">Make Your Product Sizzle</a></h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Look Like a Million Bucks Without Spending it!</li>
            <li class="list-group-item">Choose from over 5 backgrounds and Styles</li>
            <li class="list-group-item">Eye-Popping Camera Angles Engage Customers</li>
            <li class="list-group-item">Callouts to Sell the Features and Benefits</li>
            <li class="list-group-item">Call To Action to Boost Conversion Rates</li>
            <li class="list-group-item">A Picture is Worth a Thousand Words so Video is worth Millions!!!!</li>
          </ul>
        </div>
        <div class="card-footer">
          <div class="more-link"><a href="#">READ MORE</a> </div>
        </div>
      </div>
      <div class="card pop"> <img class="poster card-img-top" data-video="Overhead-Product-Demo-Video" alt="Overhead Product Unboxing" src="../../images/Overhead Product Demo Video.jpg">
        <div class="card-body">
          <h6><a href="#">Overhead Unboxing</a></h6>
          <ul class="list-group list-group-flush">
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
          </ul>
        </div>
        <div class="card-footer">
          <div class="more-link"><a href="#">READ MORE</a> </div>
        </div>
      </div>
      <div class="card pop"> <img class="poster card-img-top" data-video="Minithrowballs Video" alt="Product Demo with Video Spokesperson" src="../../images/Minithrowballs Video.jpg">
        <div class="card-body">
          <h6><a href="#">Video with Spokesperson</a></h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Boost Sales with a Spokesperson</li>
            <li class="list-group-item">Explain Complicated or Hard to Understand Features</li>
            <li class="list-group-item">Increase Conversion Rates with Demonstration</li>
            <li class="list-group-item">Raise Visitor Engagement with In Dept Demonstration</li>
            <li class="list-group-item">Add Music for Even More Pizazz!</li>
            <li class="list-group-item">Sell the Heck out of your Products!!!</li>
          </ul>
        </div>
        <div class="card-footer">
          <div class="more-link"><a href="../../spokespeople/" title="Our Spokespeople">See Our Spokespeople</a> </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="alert alert-info mt-4">
  <?php $style = "product";include("../includes/random-content.php"); ?>
</section>
<?php include("../../includes/footer.php"); ?>
<?php include("../../includes/modal.php"); ?>
</body>
</html>