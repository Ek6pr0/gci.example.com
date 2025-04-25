<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>

    <body id="register-body">
        <div id="container2">
            <h1 id="rp">Register Page</h1>
            <form action="modules/checkregister.php" method="POST">
                <label for="Ruser">username:</label>
                <input type="text" name="Ruser" id="Ruser" required>
                <label for="Rpsw">password:</label>
                <input type="password" name="Rpsw" id="Rpsw" passwordrulerequired>
                <label for="email">email:</label>
                <input type="email" name="email" id="email"><br>
                <?php
                if(isset($_GET['error'])){
                    $mess = $_GET['error'];
                    echo "<div id ='errorbox'>";
                    echo $mess;
                    echo "</div>";
                }
                ?>
                <input type="checkbox" name="ToS" id="ToS" required>
                <label id="Tos-Text" for="ToS">accept our <div id="ToS-Div"><a href="https://www.ar.admin.ch/en/gct">ToS</a></div> to continue</label> <br><br>
                <input id="pulsante" type="submit" value="Submit">
            </form>
        </div>
        <div id="loginPage">
            <a href="login.php">
                <input type="button" id="loginbutton" value="LOGIN">
            </a>
        </div>
    </body>
</html>