<?php
$servername = "localhost";
$dbname = "tylere_energy"
$username = "tylere_tyler";
$password = "TylerEden52!";

// Create connection
$conn = new mysqli($servername, $dbname, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>