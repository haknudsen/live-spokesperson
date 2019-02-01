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

require( "connect-demo.php" );
$sql = "SELECT * FROM cards ORDER BY RAND() LIMIT 1";

//echo($sql);
$result = $conn->query( $sql );
//echo ('<br>Result<br>' . $result);
if ( $result->num_rows > 0 ) {
	while ( $row = $result->fetch_assoc() ) {
		$name = $row[ "name" ];
		$alt = $row[ "alt" ];
		$content = $row[ "content" ];
		$bgColor = "#19477F";
		$btnColor = "#19477F";
		echo '<section class="container-fluid mb-3">';
		echo PHP_EOL;
		echo '<div class="my-card">';
		echo PHP_EOL;
		echo '<div class="my-card-header">';
		echo PHP_EOL;
		echo '<h2 class="text-center">' . $name . '</h2>';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
		echo '<div class="my-card-body">';
		echo PHP_EOL;
		echo '<div class="fifty float-left pr-2">';
		include("showInline.php"); 
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
		echo '<div class="content">';
		echo PHP_EOL;
		echo $content;
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
		echo '</section>';
		echo PHP_EOL;
	}
} else {
	echo "<br>0 results";
}

?>