<?php

if(isset($_POST['edit'])) {
        $user_id = (int)$_GET['id'];
        $username = escape($_POST['username']);
        $password = hashed($_POST['password']);
        $email = escape($_POST['email']);
        
        $query = $conn->prepare("UPDATE admins2 SET username=:username , password=:password , email=:email WHERE user_id=:user_id");
        $query->bindParam(":username",$username,PDO::PARAM_STR);
        $query->bindParam(":password",$password,PDO::PARAM_STR);
        $query->bindParam(":email",$email,PDO::PARAM_STR);
        $query->bindParam(":user_id",$user_id,PDO::PARAM_INT);
        $update = $query->execute();
        
        if ($update == TRUE) {
            $_SESSION['message'] = "admin information has been updated";
            header("location: index.php");
        }
    }
    require 'templates/update_admin.php';