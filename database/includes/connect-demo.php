<?php
error_reporting( 2 );
//session_start();
$servername = "video-database.cjwiiuezl537.us-west-1.rds.amazonaws.com";
$username = "admin";
$password = "gRVwE8bM5pFy+dBJ";
$dbname = "video-database";
// Create connection
$con = mysqli_init();
if (!$con){
die("mysqli_init failed");
}

if (!mysqli_real_connect($con,$servername, $username, $password))
{
  die("Connect Error: " . mysqli_connect_error());
}

// Some queries...
printf("Client version: %d\n", mysqli_get_client_version());
echo "<br>Database connected<br>";
?>