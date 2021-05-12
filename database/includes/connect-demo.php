<?php
error_reporting( 2 );
//session_start();
$servername = "video-database.cjwiiuezl537.us-west-1.rds.amazonaws.com";
$username = "admin";
$password = "gRVwE8bM5pFy+dBJ";
$dbname = "video-database";
// Create connection
$conn = mysqli_connect( $servername, $username, $password );
// Check connection
if ( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
    echo( "Connection failed: " . mysqli_connect_error() );
    echo "<br>";
}else{
    echo "<br>Connected<br>";
}
?>