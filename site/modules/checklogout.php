<?php
session_start();
session_destroy();
echo "Logout effettuato";
?>
<a href="../main/main.php">Login</a>