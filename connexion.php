<?php
session_start();
require_once 'config.php';
//Verifier que les champs du formuliares ne sont pas vide et que l'utilisateur a cliquer sur le bouton avec le nom 'connect'
if (isset($_POST['connect']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    //Faire une requete preparée et l'executer
    $query = $bdd->prepare("SELECT nom, prenom, telephone FROM taxiboko WHERE email = :email AND password = :password");
    $query->execute(array('email' => $email, 'password' => $pass));
    //Verifier si la requete a renvoyer une ligne pour confirmer que l'utilisateur existe dans la BDD
    if ($query->rowCount() == 1) {
        $user = $query->fetch();
        // Stocker les données utilisateur dans une session "user"
        $_SESSION['user'] = $user; 
        //rediriger l'utilisateur connecter dans la page 'user_list.php'
        header("Location:user_list.php");
        exit();
    } else {
        echo "Désolé, les identifiants que vous avez entrés sont incorrects.";
    }
}
?>
