<?php

$user_id = (int)$_GET['id'];
    
    $query = $conn->prepare("DELETE FROM admins2 WHERE user_id=:user_id");
    $query->bindParam(":user_id",$user_id,PDO::PARAM_INT);
    $delete = $query->execute();
    
    if ($delete == TRUE) {
            $_SESSION['message'] = "admin has been deleted";
            header("location: index.php");
    }