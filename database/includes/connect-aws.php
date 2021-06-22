<?php
error_reporting( 2 );
//session_start();
$servername = "vdb1a.pair.com";
$username = "working_54_r";
$password = "CuNau25q";
$dbname = "working_videos";
// Create connection
$con = mysqli_init();
if (!$con){
die("mysqli_init failed");
}

if (!mysqli_real_connect($con,$servername, $username, $password,$dbname))
{
  die("Connect Error: " . mysqli_connect_error());
}
//echo "<br>Database connected<br>";
?>