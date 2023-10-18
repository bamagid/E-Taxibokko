<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="form">
     <form action="connexion.php" method="POST" class="form1">
                <h1>Connexion</h1>
                <p class="p1">Votre chauffeur en un clic !</p>
                <button type="submit" class="up">continuer avec Facebook</button><br>
                <hr class="hr1"><p class="p2">ou</p><hr class="hr2">
                <label for="email" class="label">EMAIL: </label><br>
                <input type="email" name="email" autocomplete="off" class="entrer" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}" required> <br>
                <label for="password" class="label">PASSWORD: </label><br>
                <input type="password" name="password" autocomplete="off" class="entrer1" required><br>
                <div class="foot_form">
                    <b><a href="#">Je n'ai pas de compte</a></b>
                    <button type="submit" name="connect" class="down">Se connecter</button>
                </div>
            </form>
            <form action="logout_traitement.php" method="POST" class="form2">
                <h1 class="h1f2">Bienvenue</h1><br>
                <p class="p1f2">Finalisez votre inscription en renseignant les informations <br> manquantes</p>
                <div class="pre_nom">
                   <div class="prenom"> 
                    <label for="prenom" class="lab_pre"> PRENOM:</label><br>
                    <input type="text" placeholder="Nadia" name="prenom" class="entrerp" autocomplete="off" pattern="[a-zA-Zàéùè -]{2,50}" required><br>
                   </div>
                   <div class="nom">
                    <label for="nom">NOM:</label><br>
                    <input type="text" placeholder="Abderahim" name="nom" pattern="[a-zA-Z]{2,30}" autocomplete="off" class="entrern" required><br>
                   </div>
                </div>
                <label for="telephone">TELEPHONE:</label><br>
                <input type="tel" placeholder="75 350 10 30" name="telephone" class="telephone" autocomplete="off" pattern="^7[05768]{1}+[0-9]{7}$" required><br>
                <label for="telephone">EMAIL:</label><br>
                <input type="email" placeholder="example@gmail.com" name="email2" class="entrer" autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}" required><br>
                <label for="telephone">PASSWORD:</label><br>
                <input type="password" name="password2" class="entrer" required><br>
                <div class="gift">
                    <i class="fa-solid fa-gift"></i>
                    <p class="p2f2"><a href="">Ajouter un code promo</a></p><br>
                </div>
                <div class="foot">
                    <button type="submit" name="logout">S'inscrire</button><br>
                </div>
                <!-- <b><a href="index.html">J'ai déja un compte</a></b> -->
            </form>

    </div>
</body>
</html>