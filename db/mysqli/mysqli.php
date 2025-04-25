<?php
require "conn_mysqli.php";

$sql = "SELECT id, username, password, email, DRegistered FROM datiusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Username: " . $row["username"]. " " . $row["password"]. " " . $row["email"]. " " . $row['DRegistered'] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>