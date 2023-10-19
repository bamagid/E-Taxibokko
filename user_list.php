<?php
session_start();
if (isset($_SESSION['user'])) {
    // Je stocke les données utilisateur dans une session appelé 'user'
    $user = $_SESSION['user'];
    echo "Bienvenue à e-taxiboko, " . $user['prenom'] . " " . $user['nom'] . "!<br>";
    // J'affiche la liste des utilisateurs inscrit sur la platforme  sous forme de table
    require_once 'config.php';
    $query = $bdd->query('SELECT nom, prenom, telephone, date FROM taxiboko');
    echo "<p>La liste des personnes inscrites sur la plateforme est la suivante:</p><br>";
    echo "<table>";
    echo "<tr>";
    echo "<th>PRENOM</th>";
    echo "<th>NOM</th>";
    echo "<th>TELEPHONE</th>";
    echo "<th>DATE D'INSCRIPTION</th>";
    echo "</tr>";
    foreach ($query as $value) {
        echo "<tr>";
        echo "<td>" . $value['prenom'] . "</td>";
        echo "<td>" . $value['nom'] . "</td>";
        echo "<td>" . $value['telephone'] . "</td>";
        echo "<td>" . $value['date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Vous n'êtes pas connecté. Veuillez vous connecter pour voir la liste des utilisateurs.";
}
?>
