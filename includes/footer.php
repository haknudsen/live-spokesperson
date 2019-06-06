<footer class="p-2 bg-dark">
    <div class="row">
        <div class="col-sm-5">
            <div class="text-center small text-light"><a href="http://talkingheads.com/affiliate/">Powered by Talking Heads<sup class="smaller"><i class="far fa-registered"></i></sup></a>
            </div>
            <div class="quotes">
                <p id="changeQuote" class="text-center small text-info"></p>
            </div>
        </div>
        <div class="col-sm-2 small">
            <div class="text-center text-light">Why Video?</div>
            <div class="text-center italics"><a href="tel://801-748-2281" title="Let's Talk!">"It's <span class="thin">Time</span> We Talk..."</a>
            </div>
            <div class="text-center"><i class="fa fa-phone text-light"></i> <br/>
                <span><a href="tel://801-748-2281" title="Give us a call." >801-748-2281</a></span>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="text-center small text-light">Navigation</div>
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
                <ol class="breadcrumb bg-transparent justify-content-center">

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
            <div class="text-info text-center"><a href="http://www.live-spokesperson.com/sitemap.html" title="Sitemap">Sitemap</a>
            </div>
        </div>
    </div>
    <div class="notification"><i class="fal fa-copyright"></i>
        <span id="year">
            <?php echo date("Y")?>
        </span> Talking Heads. All rights reserved.</div>

</footer>
<!--Java Script-->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="http://www.live-spokesperson.com/js/compressed.js" async></script>
<script src="http://www.live-spokesperson.com/js/wow.min_.js"></script>
<script>
    new WOW().init();
    var $scrollNav = $( 'nav.navbar' );
    $( window ).scroll( function () {
        if ( $( this ).scrollTop() > 180 ) {
            $scrollNav.addClass( 'bg-gradient-light' );
            $scrollNav.removeClass( 'bg-gradient-dark' );
            $scrollNav.removeClass( 'navbar-dark' );
            $scrollNav.addClass( 'navbar-light' );
        } else {
            $scrollNav.removeClass( 'bg-gradient-light' );
            $scrollNav.addClass( 'bg-gradient-dark' );
            $scrollNav.removeClass( 'navbar-light' );
            $scrollNav.addClass( 'navbar-dark' );
        }
    } )
</script>