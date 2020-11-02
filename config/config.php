<?php
$servername = "localhost";
$username = "testfinal";
$password = "1";
$dbname="testfinal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>