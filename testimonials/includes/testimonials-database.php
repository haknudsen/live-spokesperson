<?php
error_reporting( 2 );
//session_start();
$servername = "vdb1a.pair.com:3306";
$username = "working_57_r";
$password = "QF66JkBA";
$dbname = "working_testimonials";
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
$sql = "SELECT * FROM testimonials ORDER BY rank";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    echo PHP_EOL;
    while ( $row = $result->fetch_assoc() ) {
        $quote = $row[ "quote" ];
        $person = $row[ "person" ];
        $company = $row[ "company" ];
		
        echo( '<div class="testimonial">' );
        echo PHP_EOL;
        echo( '<p class="quote">' . $quote . '</p>' );
        echo PHP_EOL;
        echo( '<div class="person">' . $person . '-<span class="company">'. $company . '</span></div>' );
        echo PHP_EOL;
        echo( '   </div>' );
        echo PHP_EOL;
    }
} else {
    echo "0 results";
}
echo PHP_EOL;
?>