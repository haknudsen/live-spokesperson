<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Gold Level Demo Video</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Order your Free Demo Video">
<meta name="Keywords" content="Gold Level Demo Video,Video Solutions,Product Videos, Video Examples, Animated Video Production, Online Videos, Great Explainer Video, Importance Of Video Marketing, Video Experts, Custom Video Production Services, Web Video Production, New Animated Video, Website Videos, Web Video Services, Web Videos, Video Production Companies, Internet Video, Homepage Web Video, Web Video Production Strategy, Web Video Production, Web Video Production Company Instructional Video">
<?php include("../../includes/head.php"); ?>
</head>
<?php
switch ( $_GET[ 'page' ] ) {
    case "dark":
        $class = "landing-dark";
        break;
    case "light":
        $class = "landing-light";
        break;
    default:
        $class = "landing-light";
}
?>
<body class="<?=$class?>">
<section class="container">
    <h1 class="text-red font-weight-bold" >Gold Level Demo Video</h1>
    <h2 class="text-red font-weight-bold" >Options</h2>
    <div class="row align-items-center" style="min-height: 300px">
        <div class="col-md-9 text-info small">
            <h3 class="text-capitalize">Gold Level Video includes:</h3>
            <ul class="list-group text-left">
                    <li>6 Shots</li>
                    <li>Logo, Tagline, URL</li>
                    <li>Quality HD Video</li>
                    <li>Choose Background</li>
                    <li>No Watermark</li>
            </ul>
            <h3 class="text-capitalize">You can purchace these Upgrades</h3>
            <dl class="row">
                <dt class="col-sm-3 text-right">Watermark</dt>
                <dd class="col-sm-9 text-left">All free product demos come with a Talking Heads® watermark.  To remove the watermark click on Remove Watermark on the order form.</dd>
                <dt class="col-sm-3 text-right">Spokesperson</dt>
                <dd class="col-sm-9 text-left">If you would like to add a video spokesperson with script click the Add Video Spokesperson on order form</dd>
                <dt class="col-sm-3 text-right">Voice Over</dt>
                <dd class="col-sm-9 text-left">If you would like to add a video spokesperson with script click the Add Professional Voiceover on order form</dd>
                <dt class="col-sm-3 text-right">Additional Shots</dt>
                <dd class="col-sm-9 text-left">If you would like to add additional shots click on individual shots in the order form.</dd>
            </dl>
        </div>
        <div class="col-md-3" style="min-width: 255px">
            <div class="ecwid ecwid-SingleProduct-v2 ecwid-SingleProduct-v2-bordered ecwid-SingleProduct-v2-centered ecwid-Product ecwid-Product-150581084" itemscope itemtype="http://schema.org/Product" data-single-product-id="150581084"><div itemprop="image"></div><div class="ecwid-title" itemprop="name" content="Build Your Own"></div><div itemtype="http://schema.org/Offer" itemscope itemprop="offers"><div class="ecwid-productBrowser-price ecwid-price" itemprop="price" content="599.99" data-spw-price-location="button"><div itemprop="priceCurrency" content="USD"></div></div></div><div customprop="options"></div><div customprop="addtobag"></div></div><script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?18447751&data_platform=singleproduct_v2" charset="utf-8"></script><script type="text/javascript">xProduct()</script>
        </div>
    </div>
</section>
<div class="side-bar" data-toggle="modal" data-target="#contactModalCenter">CONTACT US</div>
<!--Java Script--> 
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<script src="http://www.live-spokesperson.com/js/wow.min_.js"></script> 
<script src="http://www.live-spokesperson.com/js/compressed.js"></script> 
<script>
    new WOW().init();
</script> 
<script>
    $( document ).ready(function() {
  setInterval(function time(){
  var d = new Date();
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#countdown #hour').html(hours);
  jQuery('#countdown #min').html(min);
  jQuery('#countdown #sec').html(sec);
}, 1000); });
    </script>
<?php include("../../includes/modal.php"); ?>
<?php include("../../includes/contact-modal.php"); ?>
</body>
</html>
