<?php

define("DB_HOST","localhost");
define("DB_NAME","database");
define("DB_USER","root");
define("DB_PASS","root");

try{
    $conn = new PDO ("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $conn->exec("SET NAMES utf8");
}catch (PDOException $e) {
    die($e->getMessage());
}