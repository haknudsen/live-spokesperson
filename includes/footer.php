<footer class="p-2 text-white bg-dark">
	<div class="row">
		<div class="col-sm-3">
			<h2 class="text-center small"><a href="http://talkingheads.com/affiliate/">Powered by Talking Heads<sup class="smaller"><i class="fal fa-registered"></i></sup></a></h2>
			<div class="quotes">
				<p id="changeQuote" class="text-center small"></p>
			</div>
		</div>
		<div class="col-sm-3">
			<h2 class="text-center small">Why Video?</h2>
			<h3 class="text-center small italics"><a class="black" href="tel://801-748-2281" title="Let's Talk!" >"It's <span class="thin">Time</span> We Talk..."</a></h3>
		</div>
		<div class="col-sm-3">
			<h3 class="text-center small"><i class="fa fa-phone"></i> <br/>
            <span><a class="white" href="tel://801-748-2281" title="Give us a call." >801-748-2281</a></span></h3>
		</div>
		<div class="col-sm-3">
			<h3 class="text-center small"><i class="fa fa-envelope-o"></i><br/>
            <a href="mailto:info@websitetalkingheads.com">info@websitetalkingheads.com</a>
		</div>
		</div>
		<div class="text-center small line-1">Talking Heads<sup class="smaller"><i class="fal fa-registered"></i></sup> <span id="year"><?php echo date("Y")?></span>. All rights reserved.</div>
		<ol class="breadcrumb">
    <?php 

        $configLocation = (ltrim($homePath,'"')) . 'config.php';
    	include $configLocation;

        $crumbs = explode("/",$_SERVER["REQUEST_URI"]);

        $linkPath = $homePath;

        $crumbCounter = 0;
        foreach($crumbs as $crumb){
        	if ($crumbCounter <= $crumbCut) {
        		//do nothing, skip over the extended file root so the crumbs only show from 'Guides'
        	} else {
	            $word = str_replace(".php","",$crumb);
	            echo '<li><a href=' . $linkPath . $word . '.php" >' . $word . '</a></li>';
	            $linkPath = $linkPath . $word . '/';
            } 
            //Increment the crumbCounter,
            $crumbCounter++;
        }
    ?>
  <li class="guidemap"><a href=<?php echo $homePath . 'guides/map.php"' ?>>map</a></li>
</ol>
</footer>