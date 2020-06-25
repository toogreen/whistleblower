<?php
include("inc/connect_db.php");

$sql = "SELECT blow_id, company, comment, position FROM blow ORDER BY blow_id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["blow_id"]. "<br>Company: " . $row["company"]. "<br>Comment: " . $row["comment"]. "<br>Position: " . $row["position"] . "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>