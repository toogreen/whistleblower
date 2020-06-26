<?php
$servername = "localhost";
$username = "name";
$password = "pass";
$dbname = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$table = "blow";
$id = "blow_id";
$field1 = "company";
$field2 = "comment";
$field3 = "position";
