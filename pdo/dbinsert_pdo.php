<?php
require "conn_pdo.php";

$sql = "INSERT INTO datiusers (username, password, email)
VALUES ('John', '1234', 'john@example.com')";
$conn->exec($sql);
echo "New record created successfully";