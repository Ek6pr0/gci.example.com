<?php
session_start();
if(isset($_SESSION["user_id"])){
    header("Location: site/main/main.php");
} else {
    header("Location: site/login.php");
}
?>