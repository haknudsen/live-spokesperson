<?php
/*variables available
$video-video video
$alt- alt tag contents
#bgColor-background color
 */
require( "connect-demo.php" );
if(!$bgColor){$bgColor = "#7298B2";}
if(!$btnColor){$btnColor = "#00A3FF";}
if(!$alt){$alt = $video;}
echo '<div class="poster" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="'. $video .'">';
echo PHP_EOL;
echo '	<div class="poster-button" style="background:'.$btnColor.'"></div>';
echo PHP_EOL;
echo '	<img src="https://www.websitetalkingheads.com/ivideo/videos/'. $video .'.jpg" class="img-fluid video" alt="'. $alt .'">';
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;

?>