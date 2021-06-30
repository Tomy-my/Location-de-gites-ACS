<?php
    include "config_bdd.php";

    $db = new configBdd ("localhost", "root", "", "gite");
    
    if (isset($_POST['ajouter']))
    {
        crud::addGite(addslashes(htmlspecialchars($_POST["titre"])), addslashes(htmlspecialchars($_POST["description"])), addslashes(htmlspecialchars($_POST["couchage"])), addslashes(htmlspecialchars($_POST["wifi"])), addslashes(htmlspecialchars($_POST["tv"])), addslashes(htmlspecialchars($_POST["cuisine"])), addslashes(htmlspecialchars($_POST["linge"])), htmlspecialchars($_POST["animaux"]), htmlspecialchars($_FILES["image_file"]["name"]), htmlspecialchars($_FILES["image_file2"]["name"]), htmlspecialchars($_FILES["image_file3"]["name"]));
    }

    if(isset($_GET['delete']))
    {
    	crud::deleteGite(htmlspecialchars($_GET['id']));
    }

    if (isset($_POST['edit']))
    {
        crud::addGite(addslashes(htmlspecialchars($_POST["titre"])), addslashes(htmlspecialchars($_POST["description"])), addslashes(htmlspecialchars($_POST["couchage"])), addslashes(htmlspecialchars($_POST["wifi"])), addslashes(htmlspecialchars($_POST["tv"])), addslashes(htmlspecialchars($_POST["cuisine"])), addslashes(htmlspecialchars($_POST["linge"])), htmlspecialchars($_POST["animaux"]), htmlspecialchars($_FILES["image_file"]["name"]), htmlspecialchars($_FILES["image_file2"]["name"]), htmlspecialchars($_FILES["image_file3"]["name"]));
    }

    if (isset($_POST['btn_send']))
    {
        demandeRsv::addGite(addslashes(htmlspecialchars($_POST["name"])), addslashes(htmlspecialchars($_POST["email"])), addslashes(htmlspecialchars($_POST["formule"])), addslashes(htmlspecialchars($_POST["periode"])), addslashes(htmlspecialchars($_POST["ask"])));
    }