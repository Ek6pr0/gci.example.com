<?php
    require "../../db/mysqli/conn_mysqli.php";

    session_start();
    if(!empty($_POST)) {
        if(isset($_POST['user']) && isset($_POST['psw'])) {
            $sql = $conn->prepare("SELECT * FROM datiusers WHERE username=?");
            $sql->bind_param('s',$_POST['user']);
            $sql->execute();
            $result = $sql->get_result();
            $user = $result->fetch_object();
            if(password_verify($_POST['psw'],$user->password)) {
                $_SESSION['user_id']=$user->id;
                $_SESSION['username']=$user->username;
                header("Location: ../main/main.php");
            } else {
                header("Location: ../login.php?error");
            }
        } 
    }
?>