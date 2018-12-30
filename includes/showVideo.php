<?php
/*variables available
$video-video video
$alt- alt tag contents
#bgColor-background color
 */
require( "connect-demo.php" );
if(!$alt){$alt = $video;}
if(!$bgColor){$bgColor = "#50647F";}
if(!$btnColor){$btnColor = "#3D9CEB";}
	echo PHP_EOL;
	echo '<div style="background:'.$bgColor.';padding:1px">';
		echo '<div class="poster" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="' . $video . '">';
		echo PHP_EOL;
		echo '<div class="poster-button" style="background:'. $btnColor .'"></div>';
		echo PHP_EOL;
		echo '<img src="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg" class="img-fluid video" alt="' . $alt . '" >';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;

?>