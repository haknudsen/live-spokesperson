<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Your Product Demonstration Video</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Searching for a new way to bring life to your website and attract more interest from those who visit it? Get an professional spokesperson from Live-Spokesperson.">
<meta name="Keywords" content="Video Solutions,Product Videos, Video Examples, Animated Video Production, Online Videos, Great Explainer Video, Importance Of Video Marketing, Video Experts, Custom Video Production Services, Web Video Production, New Animated Video, Website Videos, Web Video Services, Web Videos, Video Production Companies, Internet Video, Homepage Web Video, Web Video Production Strategy, Web Video Production, Web Video Production Company Instructional Video">
<?php include("../../includes/head.php"); ?>
</head>
<?php
    $page = $_GET[ 'page' ];
switch ( $page ) {
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
    <h1 class="text-capitalize text-secondary">Get your video</h1>
    <p class="text-primary">Three Choices</p>
    <div class="card-deck choices">
        <div class="card">
            <div class="card-header bg-gradient-success">free</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">3 Shots</li>
                    <li class="list-group-item">Logo, Tagline, URL</li>
                    <li class="list-group-item">Quality HD Video</li>
                    <li class="list-group-item">Includes Watermark</li>
                </ul>
                <a href="/styles/product-demonstrations/free.php?page=<?=$page?>" title="Buy Now">
                <h6 class="card-subtitle strip">FREE</h6>
                <img class="card-img-bottom" src="/styles/product-demonstrations/images/Backpack Jack Demo.jpg" alt="Free Product Video"></a> </div>
        </div>
        <div class="card">
            <div class="card-header bg-gradient-mine">Overhead Unboxing</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Up top 9 Shots</li>
                    <li class="list-group-item">Birds Eye View</li>
                    <li class="list-group-item">Quality HD Video</li>
                    <li class="list-group-item">No Watermark</li>
                    <li class="list-group-item">Male or Female Hands</li>
                </ul>
                <a href="/styles/product-demonstrations/overhead-unboxing.php?page=<?=$page?>" title="Buy Now">
                <h6 class="card-subtitle strip">$699</h6>
                <img class="card-img-bottom" src="/styles/product-demonstrations/images/Overhead-Product-Demo-Video.jpg" alt="Overhead Unboxing"></a> </div>
            </div>
        <div class="card">
            <div class="card-header bg-gradient-orange">GOLD</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">6 Shots</li>
                    <li class="list-group-item">Logo, Tagline, URL</li>
                    <li class="list-group-item">Quality HD Video</li>
                    <li class="list-group-item">Choose Background</li>
                    <li class="list-group-item">No Watermark</li>
                </ul>
                <a href="/styles/product-demonstrations/gold.php?page=<?=$page?>" title="Buy GOLD Product Demo Video">
                <h6 class="card-subtitle strip">$599</h6>
                <img class="card-img-bottom" src="/styles/product-demonstrations/images/Step Tire.jpg" alt="Step Tire Product Demo Video"></a>
            </div>
        </div>
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
