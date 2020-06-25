<?php
include(".connect_db.php");


$sql = "INSERT INTO blow (company, comment, position) VALUES ('$company', '$comment', '$position')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");
exit();
?>