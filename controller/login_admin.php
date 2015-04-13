<?php

if(isset($_POST['login'])) {
        $username = escape($_POST['username']);
        $password = hashed($_POST['password']);
        
        $query = $conn->prepare("SELECT * FROM admins2 WHERE username=:username AND password=:password");
        $query->bindParam(":username",$username,PDO::PARAM_STR);
        $query->bindParam(":password",$password,PDO::PARAM_STR);
        $query->execute();
        $query->fetch();
        $user = $query->rowCount();
        if ($user == 1) {
            $_SESSION['login'] = $user['id'].str_shuffle('ahjkhj').hashed($user['email']);
            echo $user['username'];
            header("location: index.php");
        }
    }
    
    require 'templates/login.php';
    exit();