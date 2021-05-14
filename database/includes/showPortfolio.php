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
    array_push( $keyword, "Custom Video", "Video Presentation", "Web Marketing Video", "Web Video Production", "Spokesperson Video" );
    break;
  case "Demo":
    $sql .= " 	WHERE demo=true";
    array_push( $keyword, "Custom Video", "Video Presentation", "Example Video", "Demo Video" );
    break;
  case "product":
    $sql .= " 	WHERE product=true";
    array_push( $keyword, "Product Demo", "Video Demonstration", "Product Demo Video", "Demo Video" );
    break;
  case "Typography":
    $sql .= " 	WHERE Typography=true";
    array_push( $keyword, "Kinetic Typography", "Typography Animation", "Motion Typography", "Typography Video", "Motion Design", "Cool Typography", "Best Typography", "Typography Motion Graphics" );
    break;
  default:
    array_push( $keyword, "Web Video", "Online Video", "Website Video" );

}
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

if ( $rand === true ) {
  $sql .= " ORDER BY RAND()";
} else {
  $sql .= " ORDER BY Rifftrax";
}
if ( $show > 0 ) {
  $sql .= " LIMIT " . $show;
}
//echo ($sql . "<br>");
require_once( "connect-aws.php" );
$result = $con->query( $sql );
if ( $result->num_rows > 0 ) {
  echo PHP_EOL;
  echo '<div class="portfolio" style="grid-template-columns: ' . $span . '">
	';
  while ( $row = $result->fetch_assoc() ) {
    $altNum = array_rand( $keyword, 1 );
    $alt = $altNum[ $keyword ];
    $name = $row[ "Name" ];
    $description = $row[ "description" ];
    if ( strlen( $name ) > 18 ) {
      $lastSpace = strrpos( $name, ' ' );
      $shortName = trim( substr( $name, 0, $lastSpace ) );
    } else {
      $shortName = $name;
    }
    echo '<div class="item" alt="' . $keyword[ $altNum ] . " Example" . '" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="' . $name . '">
			<img src="https://www.websitetalkingheads.com/ivideo/videos/640/' . $name . '.jpg" class="img-fluid" alt="' . $keyword[ $altNum ] . " Example" . '">
			<i class="fas fa-play smallPlayBtn"></i>
			<div class="info">
				<div class="info-title">' . $shortName . '</div>
				<p>' . $description . '</p>
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
