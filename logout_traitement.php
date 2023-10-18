<?php
session_start();
require_once'config.php';
if (isset($_POST['logout']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['email2']) && !empty($_POST['password2'])) {
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $tel=htmlspecialchars($_POST['telephone']);
    $mail=htmlspecialchars($_POST['email2']);
    $pswd=htmlspecialchars($_POST['password2']);
    // $mpd=hash('sha1',$pswd);
    $insert= $bdd->prepare('INSERT INTO taxiboko (nom,prenom,telephone,email,password) VALUES (:nom,:prenom,:telephone,:email,:password)');
    $insert->execute(array(
    'nom'=>$nom,
    'prenom'=>$prenom,
    'telephone'=>$tel,
    'email'=>$mail,
    'password'=>$pswd));
       
}
