<?php
			echo 'hit';
			require( "../includes/connect-demo.php" );
			$sql = "SELECT * FROM website ORDER BY rank;
			$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
	while ( $row = $result->fetch_assoc() ) {
		$name = $row[ 'name' ];
		$url = $row[ 'url' ];
		echo PHP_EOL;
		    echo '<i class="far fa-play-circle thumb-wrapper"></i>';
    echo PHP_EOL;
    echo '<div class="overlay img-circle"></div>';
    echo PHP_EOL;
    echo '<a href="'. $url .'"<img src="https://www.websitetalkingheads.com/carimages/'.$video.'.png" class="img-responsive" alt="'.$video.'-Video Spokesperson"/></a>';
				echo PHP_EOL;
			echo '<h3 class="text-center" title="' . $video . '-Video Spokesperson">' . $video . '</h3>';
			echo PHP_EOL;
			echo '</div>';
			echo PHP_EOL;

			?>