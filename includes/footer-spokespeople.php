		</div>
</div>
<footer class="p-2 text-white bg-dark">
	<div class="row">
		<div class="col-sm-4">
			<h2 class="text-center small"><a href="http://talkingheads.com/affiliate/">Powered by Talking Heads<sup class="smaller"><i class="fal fa-registered"></i></sup></a></h2>
			<div class="quotes">
				<p id="changeQuote" class="text-center small"></p>
			</div>
		</div>
		<div class="col-sm-4">
			<h2 class="text-center small">Why Video?</h2>
			<h3 class="text-center small italics"><a class="black" href="tel://801-748-2281" title="Let's Talk!" >"It's <span class="thin">Time</span> We Talk..."</a></h3>
			<h3 class="text-center small"><i class="fa fa-phone"></i> <br/>
            <span><a class="white" href="tel://801-748-2281" title="Give us a call." >801-748-2281</a></span></h3>
		</div>
		<div class="col-sm-4">
			<h3 class="text-center small">Navigation</h3>
    <?php 
		$crumbs = explode("/",$_SERVER["REQUEST_URI"]);
		$crumbs = array_filter($crumbs);
		array_unshift($crumbs,"home");
		$linkBase = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
		$linkBase = $linkBase . "://";
		$linkPath = $linkBase . $_SERVER['HTTP_HOST'];
		$word = "";
		$crumbCounter = 0;
    ?>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent">
			
    <?php 	
        foreach($crumbs as $crumb){
	            $word = $crumb;
			if($crumbCounter === 0){
	            echo '<li class="breadcrumb-item"><a href="' . $linkPath . '" >Home</a></li>';
	        $linkPath = $linkPath . '/';
			}else{
	        $linkPath = $linkPath . $word . '/';
	            echo '<li class="breadcrumb-item"><a href="' . $linkPath .'" >' . $word . '</a></li>';
			}
            $crumbCounter++;
        }
    ?>
			</ol>
		</nav>
		</div>
		</div>
		<div class="text-center small line-1">Talking Heads<sup class="smaller"><i class="fal fa-registered"></i></sup> <span id="year"><?php echo date("Y")?></span>. All rights reserved.</div>

</footer>