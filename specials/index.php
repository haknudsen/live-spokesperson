<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Talking Heads&#8482; Specials</title>
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
<meta name="description" content="for as little as $199, add a website spokesperson greet visitors to your website.  an online presenter can increase traffic and conversion rates on your website.  we use html5 to create dynamic streaming video and make it easy to add it your existing website.">
<meta name="robots" content="index, follow">
<!-- (robot commands: all, none, index, no index, follow, no follow) -->
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="global">
<meta name="rating" content="general">
<meta name="content-language" content="english">
<meta name="keywords" content="featured actor special,weekly spokesperson special,online spokesperson, video spokesperson, website talking heads, website actor">
<meta name="description" content="Talking Heads® Featured Actor Specials. Order One 30 Second  for $199 or Order One 60 Second for $299.  30 Second=41-90 Words, 60 Second=91-180 Words">
<?php include("../includes/head.php"); ?>
</head>
<?php
$url = 'https://www.websitetalkingheads.com/featuredactor/featuredactor.xml';
$xml = simplexml_load_file( $url );
$male = $xml->male;
$female = $xml->female;
$newdateBase = $xml->newdate;
$newdate = "THESE OFFERS EXPIRE Friday, " . $newdateBase;
?>

<body class="landing-light">
<?php include("../includes/nav.php"); ?>
<section class="page-header text-center mt-3">
    <h1>Featured Actor Specials</h1>
    <div class="row">
        <div class="col-lg-8 col-xl-8 offset-xl-1">
            <h4 id="SpecialTop">
                <?=$newdate?>
            </h4>
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.websitetalkingheads.com/ivideo/talking-heads-player.php?video=<?=$male?>&autostart=mute&controls=true&actor=true&color=193441"></iframe>
                    </div>
                    <div class="special" id="male">
                        <?=$male?>
                    </div>
                </div>
                <div class="col-lg-2 align-self-center specials-no">
                    <div>NO HIDDEN FEES</div>
                    <div>NO ANNUAL FEES</div>
                    <div>NO HOSTING FEES</div>
                    <div class="text-primary"><strong>This is it!</strong></div>
                </div>
                <div class="col-lg-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.websitetalkingheads.com/ivideo/talking-heads-player.php?video=<?=$female?>&autostart=mute&controls=true&actor=true&color=193441"></iframe>
                    </div>
                    <div class="special" id="female">
                        <?=$female?>
                    </div>
                </div>
            </div>
            <div class="alert alert-info">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="special">Special #1</div>
                            <div class="special-subheader">Buy One, Get One <strong>FREE!</strong></div>
                            <img class="img img-fluid wow bounceInLeft" src="https://www.websitetalkingheads.com/images/buy1-get1.png" id="buy1-get1"/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="special-holder">
                            <img src="/images/starburst.png" class="img img-fluid" alt="Click for SPECIAL OFFER!"/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="special">Special #2</div>
                            <div class="special-subheader">Multiple Video Special</div>
                            <img class="img img-fluid wow bounceInRight" src="https://www.websitetalkingheads.com/images/5x60-sec.png" alt="Video Spokesperson-Five 60 Second videos for $799" id="5x60-sec"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="text-capitalize">Choose only ONE Featured Actor</div>
                <div class="text-danger">All special packages must be shot at same time, for same domain</div>
                <div class="special-subheader">30 Second Video $299</div>
                <div class="special-subheader">60 Second Video $399</div>
                <p align="center" class="largeText"><span class="centeredmedium">30 Second=41-90 Words, 60 Second=91-180 Words</span>
                </p>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="order-holder">
                <div class="ecwid ecwid-SingleProduct-v2 ecwid-SingleProduct-v2-bordered ecwid-SingleProduct-v2-centered ecwid-Product ecwid-Product-152969916" itemscope itemtype="http://schema.org/Product" data-single-product-id="152969916">
                    <div itemprop="image"></div>
                    <div class="ecwid-title" itemprop="name" content="Featured Actor Special"></div>
                    <div itemtype="http://schema.org/Offer" itemscope itemprop="offers">
                        <div class="ecwid-productBrowser-price ecwid-price" itemprop="price" content="299" data-spw-price-location="button">
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
</section>
<section class="alert alert-info text-center mt-3 wow fadeInUpBig">
    <h2 class="wow flash">Call
        <a href="tel://801-748-2281" title="Give us a call.">
            801-748-2281
        </a>
        for more information</h2>
</section>
<?php include("../includes/footer.php"); ?>
<?php include("../spokespeople/includes/modal.php"); ?>
</body>
</html>