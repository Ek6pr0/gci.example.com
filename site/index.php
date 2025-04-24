<?php
session_start();
if(isset($_SESSION["user_id"])){
    header("Location: main/main.php");
} else {
    header("Location: login.php");
}
?>