<?php
//include("connect_db.php");


$servername = "localhost";
$username = "toogreen";
$password = "toosad";
$dbname = "blower";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}






$sql = "INSERT INTO blow (company, comment, position) VALUES ('company', 'comment', 'position')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");
exit();
?>