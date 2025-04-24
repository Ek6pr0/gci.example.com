<?php
require "conn_mysqli.php";
$psw = password_hash("4321", PASSWORD_BCRYPT);
echo $psw . '<br>';
$sql = "INSERT INTO datiusers (username, password, email)
VALUES ('Admin', '$psw', 'admin@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();