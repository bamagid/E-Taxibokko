<?php
session_start();
require_once'config.php';
if (isset($_POST['logout']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['email2']) && !empty($_POST['password2'])) {
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $tel=htmlspecialchars($_POST['telephone']);
    $mail=htmlspecialchars($_POST['email2']);
    $pswd=($_POST['password2']);
    $insert= $bdd->prepare('INSERT INTO taxiboko (nom,prenom,telephone,email,password) VALUES (:nom,:prenom,:telephone,:email,:password)');
    $insert->execute(array(
    'nom'=>$nom,
    'prenom'=>$prenom,
    'telephone'=>$tel,
    'email'=>$mail,
    'password'=>$pswd));
    $verif=$bdd->prepare("SELECT nom,prenom,telephone,email,date FROM taxiboko WHERE email='$mail' AND password ='$pswd' ");
    $verif->execute();
        if($verif->rowCount() !=0){
            $ins=$verif->fetch();
            // foreach ($ins as $cles=>$value) {
               echo"<P> Bravo ". $ins['nom']." ".$ins['prenom']." votre inscription chez e-taxiboko a reussi! </p> <br><br> ";
            // }
            $user=$bdd->prepare('SELECT nom,prenom,telephone,date FROM taxiboko ');
            $user->execute();
            echo "<P>La liste des personnes inscrits sur la plateforme est la suivante:</p><br>";
            echo "<table>";
                echo "<th>";
                echo"<P>  NOM  </p>";
                echo "</th>";
                echo "<th>";
                echo"<P>  PRENOM  </p> ";
                echo "</th>";
                echo "<th";
                echo "<P>   TELEPHONE   </p> ";
                echo "</th>";
                echo "<th>";
                echo "<P>   DATE D'INSCRIPTION    </p>";
                echo "</th>";
             echo "</table>";
            foreach ($user as $value) {
                echo "<table>";
                echo "<td>";
                echo"<P> ". $value['nom']." </p>";
                echo "</td";
                echo "<td>";
                echo"<P> ". $value['prenom']." </p> ";
                echo "</td>";
                echo "<td>";
                echo "<P> ".$value['telephone']." </p> ";
                echo "</td>";
                echo "<td>";
                echo "<P>    ".$value['date']."     </p>";
                echo "</td>";
                echo "</table>";

                
            }
        }else{
           echo "votre inscrition a echouer veuillez reesayer avec de bonnes informations";
        }
    }