<?php
session_start();
if(isset($_POST['submit'])){
 if(isset($_POST['username']) and !empty($_POST['username'])){
    if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
      if(isset($_POST['password']) and !empty($_POST['password'])){

        require "config_bdd.php";

        $password =sha1($_POST['password']);
        
        $db = new configBdd ("localhost", "root", "", "gite");
        $getdata = $db->bddPDO->prepare("SELECT email FROM login WHERE email=? and password = ?");
        $getdata->execute(array($_POST['username'], $password));

        $rows = $getdata->rowCount();

        if($rows==true){
            $_SESSION['admin']=$_POST['username'];
            header("Location:dashboard.php");

        }else{
            $erreur ="Username ou mot de passe inconue";
        }

        }else{
            $erreur = "Veuillez saisir votre mot de passe";
        }

        }else{
            $erreur = "Veuillez saisir une adresse mail valide";
        }    

        }else{
         $erreur = "Veuillez saisir un nom d'utilisateur valide";
}
}