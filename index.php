<?php

session_start();

require 'includes/database.php';

require 'includes/functions.php';

if(!isset($_SESSION['login'])) {
    
    require 'controller/login_admin.php';
    
}

if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

$action = (isset($_GET['action']) ? $_GET['action'] : null);

if($action == "add") {
    
    require 'controller/add_admin.php';
    
}elseif ($action == "edit") {
    
    require 'controller/edit_admin.php';
    
}elseif ($action == "delete") {
    
    require 'controller/delete_admin.php';
    
}

elseif ($action == "logout") {
    
    require 'controller/logout_admin.php';
    
}

else {
    
    echo '<a href="?action=add">Add new user</a>'."<br>";
    
    echo "<br>".'<a href="?action=logout">log out</a>';
    
    $query = $conn->prepare("SELECT * FROM admins2");
    $query->execute();
    $users = $query->fetchAll();
    require 'templates/show_admins.php';
    
}