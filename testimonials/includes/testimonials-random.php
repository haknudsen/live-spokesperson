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
$sql = "SELECT * FROM testimonials ORDER BY rand()";
$result = $conn->query( $sql );
echo '<script>';
echo PHP_EOL;
echo 'var testimonials = [';
$i=0;
if ( $result->num_rows > 0 ) {
	while ( $row = $result->fetch_assoc() ) {
		$quote = $row[ "quote" ];
		$person = $row[ "person" ];
		$company = $row[ "company" ];
        if($i>0){
            echo ',';
        }
		echo PHP_EOL;
		echo '{quote: "' . $quote . '",person: "' . $person . '",company: "' . $company .'"}';
		$i++;
	}
} else {
	echo "0 results";
}
echo PHP_EOL;
echo '];';
echo PHP_EOL;
echo 'console.log(testimonials[1]);';
echo '</script>';
echo PHP_EOL;
?>