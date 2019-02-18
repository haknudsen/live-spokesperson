<?php
/*variables available
 $rand- Randomize list
 $columns- number of columns
 $type-  type of videos
 $keyword = alt tag for images
 $show-number to show
 Video types
 Whiteboard
 Animation
 Presentation
 Typography
 Demo
 */

require( "../includes/connect-demo.php" );
$sql = "SELECT * FROM websites ORDER BY rank";

//echo($sql);
$result = $conn->query( $sql );
echo '<div class="row">';
if ( $result->num_rows > 0 ) {
	while ( $row = $result->fetch_assoc() ) {
		$name = $row[ "name" ];
		$url = $row[ "url" ];
		$content = $row[ "content" ];
		echo '<div class="col-lg-4 website">';
		echo PHP_EOL;
		echo '<a href="'. $url.'" target="_blank">';
		echo PHP_EOL;
		echo '<img src="https://www.websitetalkingheads.com/website-spokesperson/examples/'.$name.'.jpg" class="img img-fluid">';
		echo PHP_EOL;
		echo '</a>';
		echo PHP_EOL;
		echo '<a href="'. $url.'" target="_blank">';
		echo PHP_EOL;
		echo '<h3 class="text-center">' . $name . '</h3>';
		echo PHP_EOL;
		echo '</a>';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
	}
		echo '</div>';
} else {
	echo "<br>0 results";
}

?>