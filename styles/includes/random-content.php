<?php
$yourStartingPath = "../../articles";
$iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($yourStartingPath), 
            RecursiveIteratorIterator::SELF_FIRST);

    $i=0;
foreach($iterator as $file) {
    if($file->isDir()) {
        $link = strtoupper($file->getRealpath());
        settype($link, "string");
        $folder = strtolower(str_replace("/USR/HOME/WORKING/PUBLIC_HTML/LIVE-SPOKESPERSON/ARTICLES/", "",$link));
        $url = "../../articles/" . $folder;
        $linkName[$i] = $folder;
        $i++;
    }
}
$result = array_unique($linkName);
$array = array_filter($result, function($value){
   if (strstr($value, '/') !== false)
   {
      return false;
   }
   return true;
});
shuffle($array);

$table = $style . "_content";
$sql = "SELECT * FROM " . $table . " ORDER BY RAND() LIMIT 3";
$contentResult = $conn->query( $sql );
if ( $contentResult->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}
$z = 0;
while ( $row = $contentResult->fetch_assoc() ) {
    $mediaHeading[ $z ] = $row[ "title" ];
    $mediaContent[ $z ] = $row[ "content" ];
    $z++;
}
$sql = "SELECT * FROM videos WHERE ". $style ." =true ORDER BY RAND() LIMIT 3";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    echo '<div class="card-deck">';
    $x = 0;
    while ( $row = $result->fetch_assoc() ) {
        switch ($x){
            case 0:
                $bounce = "bounceInLeft";
                
                break;
            case 1:
                $bounce = "bounceInUp";
                break;
            case 2:
                $bounce = "bounceInRight";
                break;
            default:
                $bounce = "bounceInUp";
                
        }
        $description = $row[ "description" ];
        $video = $row[ "Name" ];
        echo '
    <div class="card wow '.$bounce.'">
      <div class="card-header bg-gradient-mine text-white">' . $mediaHeading[ $x ] . '</div>
          <div class="card-img-top">
              <a href="#">
                <div class="poster" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="' . $video . '">
                    <img src="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg" class="img-fluid video" alt="' . $mediaContent[$x] . '" >
                    <i class="fas fa-play smallPlayBtn"></i>
                </div>
              </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">' . $video . '</h5>
            <div class="card-text">' . $mediaContent[ $x ] . '</div>
          </div>
          <div class="card-footer bg-gradient-mine"> <small class="float-right"><a class="text-white" href="http://www.live-spokesperson.com/articles/'.$array[$x] .'" title="Animation">'. ucwords(str_replace("-"," ", $array[$x])) .'</a></small> </div>

        </div>';
        echo PHP_EOL;
        if ( $x == 2 ) {
            break;
        } else {
            $x = $x + 1;
        }
    }
} else {
    echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo '<div class="c"></div>';

?>