<?php
session_start();
require_once'config.php';
if (isset($_POST['connect']) && !empty($_POST['email']) && !empty($_POST['password'])) {
   $email=htmlspecialchars($_POST['email']);
   $pass=htmlspecialchars($_POST['password']);
   $query = $bdd->prepare("SELECT * FROM taxiboko WHERE email = '$email' AND password = '$pass'");
   $query->execute();
   if ($query->rowCount()==1) {
    $tab=$query->fetch();
    foreach($tab as$tabl){
     $nom=$tab['nom'];
     echo "\n Bravo la connexion a reussi bienvenue a e-taxiboko $nom ! ";
     break;
    }
   }else{
    echo"\n Desolé les identifiants que vous avez entrer sont incorrects ";
   }

}