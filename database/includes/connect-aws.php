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

if (!mysqli_real_connect($con,$servername, $username, $password,$dbname))
{
  die("Connect Error: " . mysqli_connect_error());
}
echo "<br>Database connected<br>";
?>