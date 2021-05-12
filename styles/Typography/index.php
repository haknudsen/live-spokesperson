<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="Kinetic Typography, Typography Animation, Motion Typography, Typography Video, Motion Design">
<meta name="description" content="Watch Words become more lively in these brilliant kinetic typography videos. Kinetic typography is the animation technique joining text with motion.">
<meta name="robots" content="index, follow">
<meta name="author" content="WebsiteTalkingHeads.com">
<title>Typography Videos|Talking Heads</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("../../includes/head.php"); ?>
</head>

<body>
  <?php include("../../includes/nav.php"); ?>
  <header class="header-video">
    <div class="overlay"></div>
    <video id="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://www.websitetalkingheads.com/ivideo/videos/Minimal Typography.mp4" type="video/mp4">
    </video>
  </header>
  <section class="container-fluid bg-light py-2">
    <div class="container">
      <div class="card wow bounceInUp">
        <h5 class="card-header bg-gradient-mine text-white text-center text-uppercase">Use Our Typography Videos For</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="h5">
                <li>Explain Your Product or Service</li>
                <li>Describe a Process</li>
                <li>Staff Training</li>
                <li>Educational Video</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <div class="pricing">
                <div class="card-title h3 text-primary mb-0">60 Second</div>
                <div class="text-center h4 font-weight-bold mb-0">Typography Videos</div>
                <h6><span class="small text-dark">Starting at Just</span><span class="price text-primary wow flash">$499</span></h6>
              </div>
            </div>
          </div>
          <div class="d-flex text-center">
            <button type="button" class="btn btn-success mx-auto wow zoomIn" style="animation-delay: 4s;" data-toggle="modal" data-target=".buy-now-modal">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pb-5 bg-primary">
    <h1 class="text-center pt-1 wow tada">Typography Examples</h1>
    <div class="container-fluid bg-grey">
      <?php
      $type = "Typography";
      $show = "12";
      $rand = false;
      $columns = 3;
      include( "../../includes/showDemo.php" );
      ?>
    </div>
  </section>
  <section class="alert alert-info mt-4">
    <?php $style = "typography";include("../includes/random-content.php"); ?>
  </section>
  <section class="alert alert-info">
    <h2 class="text-uppercase text-center wow zoomIn">follow us</h2>
    <h3 class="text-center">Join us in <strong>Social Media</strong> and Stay Tuned!</h3>
    <?php include("../../includes/social-icons.php"); ?>
  </section>
  <div class="modal fade buy-now-modal" tabindex="-1" role="dialog" aria-labelledby="BuyNowTypography" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="ecwid ecwid-SingleProduct-v2 ecwid-SingleProduct-v2-bordered ecwid-SingleProduct-v2-centered ecwid-Product ecwid-Product-159514877" itemscope itemtype="http://schema.org/Product" data-single-product-id="159514877">
          <div itemprop="image"></div>
          <div class="ecwid-title" itemprop="name" content="Typography- 60 seconds"></div>
          <div itemtype="http://schema.org/Offer" itemscope itemprop="offers">
            <div class="ecwid-productBrowser-price ecwid-price" itemprop="price" content="499" data-spw-price-location="button">
              <div itemprop="priceCurrency" content="USD"></div>
            </div>
          </div>
          <div customprop="options"></div>
          <div customprop="addtobag"></div>
        </div>
        <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?18447751&data_platform=singleproduct_v2" charset="utf-8"></script><script type="text/javascript">xProduct()</script> 
      </div>
    </div>
  </div>
  <?php include("../../includes/modal.php");?>
  <?php include("../../includes/footer.php"); ?>
  <script>
        $(document).ready(function(){
            var h= $(".overlay").height();
            h= $("#bg-video").height() - h;
            console.log( h );
            $("#bg-video").css("top", h+"px");
        });
    </script>
</body>
</html>