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
$keyword = array();
if ( !$show ) {
	$show = 99;
}
$sql = "SELECT * FROM videos";
switch ( $type ) {
	case "Whiteboard":
		$sql .= " 	WHERE whiteboard=true";
		array_push( $keyword, "Whiteboard", "Whiteboard Animation", "Whiteboard Explainer", "Explainer", "Drawing", "Sketch" );
		break;
	case "Animation":
		$sql .= " 	WHERE animation=true";
		array_push( $keyword, "Animation", "Animated Video", "Animated Explainer" );
		break;
	case "Presentation":
		$sql .= " 	WHERE presentation=true";
		array_push( $keyword, "Custom Video","Video Presentation","Web Marketing Video","Web Video Production","Spokesperson Presentation Video" );
		break;
	case "Demo":
		$sql .= " 	WHERE demo=true";
		array_push( $keyword, "Custom Video","Video Presentation","Example Video","Demo Video" );
		break;
	case "product":
		$sql .= " 	WHERE product=true";
		array_push( $keyword, "Product Demo","Video Demonstration","Product Demo Video","Demo Video" );
		break;
	case "Typography":
		$sql .= " 	WHERE Typography=true";
		array_push( $keyword, "Kinetic Typography", "Typography Animation", "Motion Typography", "Typography Video", "Motion Design", "Cool Typography", "Best Typography", "Typography Motion Graphics" );
		break;
	default:
		array_push( $keyword, "Web Video", "Online Video", "Website Video" );

}

if ( $rand === true ) {
	$sql .= " ORDER BY RAND()";
}else{
	$sql .= " ORDER BY rank";
}
if ( $show > 0 ) {
	$sql .= " LIMIT " . $show;
}
//echo($sql);
$result = $conn->query( $sql );
switch ( $columns ) {
	case 1:
		$span = 12;
		break;
	case 2:
		$span = 6;
		break;
	case 3:
		$span = 4;
		break;
	case 4:
		$span = 3;
		break;
	default:
		$span = 4;
}
if ( $result->num_rows > 0 ) {
	echo PHP_EOL;
	echo '<div class="portfolio">
	';
	while ( $row = $result->fetch_assoc() ) {
		$altNum = array_rand( $keyword, 1 );
		$alt = $altNum[ $keyword ];
		$name = $row[ "Name" ];
		$description = $row[ "description" ];
		echo '<div class="item" alt="' . $keyword[ $altNum ] . " Example" . '" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="' . $name . '">
			<img src="https://www.websitetalkingheads.com/ivideo/videos/' . $name . '.jpg" class="img-fluid" alt="' . $keyword[ $altNum ] . " Example" . '">
			<div class="caption">
				<div class="caption-title">' . $name . '</div>
				<p>' . $description .'</p>
			</div>
		</div>';
		echo PHP_EOL;
	}
} else {
	echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;

?>