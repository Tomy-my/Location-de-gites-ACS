<?php

$host = "localhost";
$dbname = "gite";
$admin = "root";
$pass = "";

try{

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8", $admin, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die(print_r("erreur bdd:" .$e->getMessage()));
}