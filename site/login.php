<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>
    <body id="login">
        <div id="container">
            <h1 id="lp"><?php echo "Login Page" ?></h1>
            <form action="modules/checklogin.php" method="post">
                <label for="user">user:</label>
                <input type="text" name="user" id="user" required>
                <label for="psw">password:</label>
                <input type="password" name="psw" id="psw" required>
                <?php
                if(isset($_GET['error'])){
                    echo "<div id ='errorbox'>";
                    echo "<p>Wrong password or username, retry.</p>";
                    echo "</div>";
                }
                ?>
                <input id="pulsante" type="submit" value="Submit">
            </form> 
            <a href="register.php"><input id="register" type="button" value="Register"></a>
        </div>
        
    </body>
</html>