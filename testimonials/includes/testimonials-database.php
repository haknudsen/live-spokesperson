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
$i = 0;
if ( $result->num_rows > 0 ) {
	while ( $row = $result->fetch_assoc() ) {
		$quote = $row[ "quote" ];
		$person = $row[ "person" ];
		$company = $row[ "company" ];
		echo PHP_EOL;
		if ( $i > 0 ) {
			echo '<div class="carousel-item text-center p-4">';
		} else {
			echo '<div class="carousel-item active text-center p-4">';
		}
		echo PHP_EOL;
		echo '	<div class="quote"><i class="fas fa-quote-left i-sup"></i>' . $quote . '<i class="fas fa-quote-right i-sup"></i></div>';
		echo PHP_EOL;
		echo '	<div class="subject">';
		echo $person . ' - ' . $company;
		echo '</div>';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
		$i++;
	}
} else {
	echo "0 results";
}
echo PHP_EOL;
echo '</script>';
echo PHP_EOL;
?>