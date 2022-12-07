<?php  
session_start();
require 'inc.functions.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Kenia&family=Zen+Dots&display=swap');
</style>
    
</head>
<body>
    <div class="conteneurAccueil">

        <div class="logo">

            <img id="logo"src="../images/Logo_forum.jpg" alt="Logo du forum">

        </div>

        <div class="titre">
            
            <h1>BLABLA_POST</h1><br>

        </div>

        <div class="nav">
            <!-- si la fonction isConnected est true (on aurait pu marqué == true mais c'est raccourci) -->
						<?php if (isConnected()) { //alors on affiche les boutons suivant : ?>
            <a href="se-deco.php" class="button primary">Se déconnecter</a><br>
            <!-- sinon on affiche un bouton pour se connecter -->
						<?php }else { ?>
            <a href="formInscription.php" type="button">Inscription</a>
            <a href="formConnexion.php" type="button">Connexion</a><br>
            
            <?php } ?>

        </div>
            
        <div class="rechercher"> 
                <input type="text" name="search" id="rechercher" placeholder="🔍">
                <input type="submit" value="Ok">
        </div>

    </div>
</body>
</html>