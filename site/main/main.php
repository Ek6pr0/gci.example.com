<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ciao</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/script.js"></script>
    </head>
    <body>
        <div class="pagina">
            <div class="menuAlto">
                <div class="Buttons">
                    <div class="AboutB">
                        <a href=""></a>
                    </div>
                </div>
            </div>
            <h1>Benvenuto nella mia pagina web.</h1>
            <p>Logged as: <?php echo $_SESSION['username'] ?></p>
        </div>
        <div>
            <a href="../modules/checklogout.php">Logout</a>
        </div>
    </body>
    
</html>