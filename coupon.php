<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<title>Live-Spokesperson Coupon</title>
<meta name="description" content="Live-Spokesperson Coupon">
<meta name="keywords" content="Live-Spokesperson Coupon, Spokespeople, Video Spokesperson, Virtual Spokesperson, Website Spokesperson, Web Spokesperson, Spokesmodel, Walk On Actor,Virtual Actor, Person on Website, Online Spokesperson.">
<?php
$url = 'https://www.websitetalkingheads.com/featuredactor/featuredactor.xml';
$xml = simplexml_load_file( $url );
$male = $xml->male;
$female = $xml->female;
$newdateBase = $xml->newdate;
$newdate = "THIS OFFER EXPIRES Friday, " . $newdateBase;
?>
<?php include("includes/head.php"); ?>
</head>
<body>
<?php include("includes/nav.php"); ?>
<section class="page-header text-center">
	<div class="header-group">
		<h1>Buy One Get One Coupon</h1>
		<h2>Choose Either
			<?=$male?>
			or
			<?=$female?>
		</h2>
		<h3>Videos must be shot at same time, for same domain, using only ONE Featured Actor.<br>Fill out the form below to redeem your coupon!</h3>
	</div>
	<div class="row">
		<div class="col-md-3 offset-1 text-center">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="ivideo/talking-heads-player.php?video=<?=$male?>&autostart=mute&controls=true&actor=true"></iframe>
			</div>
			<h3 class="text-info">
				<?=$male?>
			</h3>
		</div>
		<div class="col-md-4 text-center">
			<div class="ecwid ecwid-SingleProduct-v2 ecwid-SingleProduct-v2-bordered ecwid-SingleProduct-v2-centered ecwid-Product ecwid-Product-160891993" itemscope itemtype="http://schema.org/Product" data-single-product-id="160891993">
				<div itemprop="image"></div>
				<div class="ecwid-title" itemprop="name" content="Buy One Get One"></div>
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
		<div class="col-md-3 text-center">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="ivideo/talking-heads-player.php?video=<?=$female?>&autostart=mute&controls=true&actor=true"></iframe>
			</div>
			<h3 class="text-info">
				<?=$female?>
			</h3>
		</div>
	</div>
	<div class="align-content-center"> </div>
</section>
<?php include("includes/footer.php"); ?>
</body>
</html>