<?php

if(isset($_POST['register'])) {
    $username = escape($_POST['username']);
    $password = hashed($_POST['password']);
    $email = escape($_POST['email']);
    
    $query = $conn->prepare("INSERT INTO admins2 (username,password,email) VALUES (:username,:password,:email)");
    $query->bindParam(":username",$username,PDO::PARAM_STR);
    $query->bindParam(":password",$password,PDO::PARAM_STR);
    $query->bindParam(":email",$email,PDO::PARAM_STR);
    $insert = $query->execute();
    
    if ($insert == TRUE) {
        $_SESSION['message'] = "username has been added sucessfully";
        header("location: index.php");
    }
}
require 'templates/add_user.php';