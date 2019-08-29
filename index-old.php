<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Live Spokesperson Home</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta content="Searching for a new way to bring life to your website and attract more interest from those who visit it? Get an professional spokesperson from Live-Spokesperson.">
<?php include("includes/head.php"); ?>
</head>

<body>
<?php include("includes/nav.php"); ?>
<section class="container-fluid" style="min-height: 500px">
  <div class="container my-3">
    <div class="row">
      <div class="col-sm-6 col-lg-4"> 
        <!-- Card Flip -->
        <div class="card-flip">
          <div class="flip">
            <div class="front even"> 
              <!-- front content -->
              <div class="card">
                <div class="card-header bg-gradient-light">
                  <h4 class="card-title">Video Presentations</h4>
                </div>
                <div class="card-body">
                  <p class="card-text">Great for: Sales Videos, Product Demonstrations, Website Walk-throughs, Training Videos</p>
                  <p class="card-text">Includes Spokesperson, Professional Editing, Motion Graphics, Lots of Images and Effects, Music...</p>
                </div>
                <div class="card-footer bg-gradient-mine"> <a href="styles/animation/" title="Animation">Animated Videos</a> </div>
              </div>
            </div>
            <div class="back even"> 
              <!-- back content -->
              <div class="card">
                <div class="card-header bg-gradient-light">
                  <h4 class="card-title">30 Second</h4>
                  <h6 class="card-subtitle text-muted">Video Presentation</h6>
                </div>
                <div class="card-block"> </div>
                <div class="card-body">
                  <div class="pricing">
                    <h6><span class="div text-dark">Starting at Just</span><br>
                      <span class="price text-primary">$799</span></h6>
                  </div>
                </div>
                <div class="card-footer bg-gradient-mine"> <a href="styles/animation/" title="Animation">Animated Videos</a> </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card Flip --> 
      </div>
    </div>
  </div>
</section>
<?php include("includes/footer.php"); ?>
$(function() {
	$('.even').matchHeight(
    {byRow:false});
});
</body>
</html>