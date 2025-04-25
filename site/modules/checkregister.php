<?php
    require "../../db/mysqli/conn_mysqli.php";

    session_start();
    if(!empty($_POST)) {
        if(isset($_POST['Ruser']) && isset($_POST['Rpsw']) && isset($_POST['email'])) {
            try { 

                // Variabili
                $user = $_POST['Ruser'];
                $email = $_POST['email'];
                $psw = password_hash($_POST['Rpsw'], PASSWORD_BCRYPT); #Criptazione password

                $sql = $conn->prepare("INSERT INTO datiusers (username, password, email) VALUES (?, ?, ?)");
                $sql->bind_param('sss', $user, $psw, $email);
                // Execute
                $sql->execute();
                echo "Registrazione completata.";
                header("Location: ../login.php");
            } 
            catch (Exception $e) {
                $mess = $e->getMessage();
                header("Location: ../register.php?error=$mess");
            }
        } 
    }
?>