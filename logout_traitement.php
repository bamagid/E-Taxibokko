<?php
session_start();
require_once 'config.php';

if (isset($_POST['logout']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['email2']) && !empty($_POST['password2'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $tel = htmlspecialchars($_POST['telephone']);
    $mail = htmlspecialchars($_POST['email2']);
    $pswd =htmlspecialchars($_POST['password2']);
    // Validation des données
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo"l'e-mail n'est pas valide ";
    }elseif(!preg_match("/^[a-zA-Zàéùè -]{2,50}$/", $prenom)) {
        echo"veuillez entrer un prenom valide";
    }elseif (!preg_match("/^[a-zA-Z]{2,30}$/", $nom)) {
        echo"veuillez entrer un nom valide";
    }elseif(!preg_match("/^7[05768]{1}+[0-9]{7}$/",$tel)){
        echo "le numéro de téléphone est invalide";
    }else{
        // Insertion des infos de l'utilisateur dans la base de données
        $insert = $bdd->prepare('INSERT INTO taxiboko (nom, prenom, telephone, email, password) VALUES (:nom, :prenom, :telephone, :email, :password)');
        $insert->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'telephone' => $tel,
            'email' => $mail,
            'password' => $pswd
        ));
            echo "Bravo votre inscription réussie !";

    }
}
?>
