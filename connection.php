<?php
$hostname = "localhost:3307";
$username = "root";
$password = ""; // Ensure this is correct; if your root user has no password, leave it as an empty string.
$database = "e-com";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Sorry, we failed to connect: " . mysqli_connect_error());
}
