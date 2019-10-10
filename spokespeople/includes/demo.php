<?php
error_reporting( 2 );
//session_start();
$servername = "vdb1b.pair.com";
$username = "working_39";
$password = "rUnnER#69";
$dbname = "working_examples";
// Create connection
$conn = mysqli_connect( $servername, $username, $password );
// Check connection
if ( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
    echo( "Connection failed: " . mysqli_connect_error() );
    echo "<br>";
}
$db = mysqli_select_db( $conn, $dbname );

if ( !$db ) {
    die( "Connection failed: " . mysqli_connect_error() );
    echo "<br>";
}
$sql = "SELECT * FROM `spokespeople` WHERE `carousel` = '$carousel' ORDER BY `ordering`";
echo PHP_EOL;
$result = $conn->query( $sql );
$range = $result->num_rows;
if ( $range > 0 ) {
    echo PHP_EOL;
    echo '<div class="d-flex flex-wrap">';
    echo PHP_EOL;
    if ( $range > 0 ) {
        echo PHP_EOL;
        while ( $row = $result->fetch_assoc() ) {
            $name = $row[ "name" ];
            $img = "https://www.websitetalkingheads.com/spokespeople/posters/" . $name . ".jpg";
            echo '<div class="spokesperson-holder poster" alt="' . $name . ' - Video Spokesperson Demonstration" data-toggle="modal" data-target=".modal-spokesperson" data-video="' . $name . '">';
            echo PHP_EOL;
            echo '<img class="spokesperson rounded-circle" src="' . $img . '" id="' . $name . '" alt="' . $name . ' - Introduction" >';
            echo PHP_EOL;
            echo '<div class="btn-spokesperson"></div>';
            echo PHP_EOL;
            echo '<div class="poster-title text-center">' . $name . '</div>';
            echo PHP_EOL;
            echo '</div>';
            echo PHP_EOL;
            echo '<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "VideoObject",
		"name": "' . $name . '",
		"description": "' . $name . ' - Introduction Video Spokesperson",
		"thumbnailUrl": "https://www.websitetalkingheads.com/carimages/' . $name . '.jpg",
		"uploadDate": "2018-11-31T08:00:00+08:00",
		"duration": "PT1M54S",
		"publisher": {
			"@type": "Organization",
			"name": "Website Talking Heads",
			"logo": {
				"@type": "ImageObject",
				"url": "https://www.websitetalkingheads.com/images/Talking_Heads_Banner_Logo.png",
				"width": 247,
				"height": 100
			}
		},
		"contentUrl": "https://www.websitetalkingheads.com/spokespeople/videos/' . $name . '.mp4",
		"embedUrl": "https://www.websitetalkingheads.com/ivideo/videos/' . $name . '",
		"interactionCount": "7018"
	}
</script>
';
        }
        echo PHP_EOL;
        echo '</div>';
        echo PHP_EOL;
    }
} else {
    echo 'no records';
}
?>