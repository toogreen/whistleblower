<?php
include("connect_db.php");

$id=($_GET["id"]);

$sql = "DELETE FROM $table WHERE blow_id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");
exit();
?>