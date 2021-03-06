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
if ( !isset($show) ) {
  $show = 3;
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
    $sql .= " 	WHERE presentation=true";
    array_push( $keyword, "Web Video", "Online Video", "Website Video" );
}
shuffle( $keyword );
if ( $rand !== true ) {
  $sql .= " ORDER BY RAND()";
} else {
  $sql .= " ORDER BY rank";
}
if ( $show > 0 ) {
  $sql .= " LIMIT " . $show;
}
//echo ($sql . "<br>");
require_once( "connect-aws.php" );
$result = $con->query( $sql );
if ( $result->num_rows > 0 ) {
  echo PHP_EOL;
    $i=0;
  while ( $row = $result->fetch_assoc() ) {
    $description = $row[ "description" ];
    $name = $row[ "Name" ];
    echo '
    <div class="embed-responsive embed-responsive-16by9">
        	<iframe class="embed-responsive-item" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.websitetalkingheads.com/ivideo/ivideo-player.php?video=' . $name . '&autostart=no&controls=true"></iframe>
      </div>';
    echo PHP_EOL;
      $i++;
  }
} else {
  echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;

?>
