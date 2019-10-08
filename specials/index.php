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

<body class="specials">
<?php include("../includes/nav.php"); ?>
<section class="page-header text-center">
    <div class="row">
        <div class="col-lg-2"> </div>
        <div class="col-lg-8">
            <h1>Talking Heads<sup class="tm-small">&reg;</sup></h1>
            <h2>Featured Actor Specials</h2>
            <h3 id="SpecialTop">
                <?=$newdate?>
            </h3>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-lg-5 video-holder">
                        <iframe class="spokesperson-video" src="https://www.websitetalkingheads.com/specials/male.php?name=<?=$male?>" frameborder="0"  scrolling="No" id="MaleSpokesperson" name="MaleSpokesperson"></iframe>
                        <h3 id="male">
                            <?=$male?>
                        </h3>
                    </div>
                    <div class="col-lg-2">
                        <div class="align-self-center text-center">
                            <div class="specials-no">NO HIDDEN FEES</div>
                            <div class="specials-no">NO ANNUAL FEES</div>
                            <div class="specials-no">NO HOSTING FEES</div>
                            <div class="h4 text-primary">This is it!</div>
                        </div>
                    </div>
                    <div class="col-lg-5 video-holder">
                        <iframe class="spokesperson-video" src="https://www.websitetalkingheads.com/specials/female.php?name=<?=$female?>" frameborder="0"  scrolling="No" id="FemaleSpokesperson" name="FemaleSpokesperson"></iframe>
                        <h3 id="female">
                            <?=$female?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
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
<section class="alert alert-info text-center">
    <div class="container">
        <div class="special-holder"> <img src="/images/starburst.png" class="img img-fluid" alt="Click for SPECIAL OFFER!"/> </div>
        <div class="row">
            <div class="col-sm-4 offset-sm-1">
                <div class="pull-right">
                    <h2>Special #1</h2>
                    <h3>Buy One, Get One <strong>FREE!</strong></h3>
                    <img src="https://www.websitetalkingheads.com/images/buy1-get1.png" id="buy1-get1"/> </div>
            </div>
            <div class="col-sm-5 offset-sm-2">
                <div class="pull-left">
                    <h2>Special #2</h2>
                    <h3>Multiple Video Special</h3>
                    <div align="center"> <img class="img-responsive special-img" src="https://www.websitetalkingheads.com/images/5x60-sec.png" alt="Video Spokesperson-Five 60 Second videos for $799" id="5x60-sec"/> </div>
                </div>
            </div>
        </div>
        <h2 class="text-capitalize">Choose only ONE Featured Actor for either special </span><span class="seventyfivepercent"> </h2>
        <h3>All special packages must be shot at same time, for same domain, using only ONE Featured Actor</h3>
        <h4>30 Second Video $299</h4>
        <h4>60 Second Video $399</h4>
        <p align="center" class="largeText"><span class="centeredmedium">30 Second=41-90 Words, 60 Second=91-180 Words</span> </p>
        <h2>Call <a href="tel://801-748-2281" title="Give us a call.">801-748-2281</a> for more information</h2>
    </div>
</section>
<?php include("../includes/footer.php"); ?>
</body>
</html>