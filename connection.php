<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ems_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}
?>
