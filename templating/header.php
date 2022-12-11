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
         <!-- <div class="nav">  -->
           
 <?php
        //    require('../inc/functions.php') ?>
        <!--    <div class="nav">
        //     <?php
        //    if (isConnected()) { 
        //         echo '<a href="../accueil.php" class="button primary">Se déconnecter</a><br>';
        //     }
        //                 else { 
        //    echo '<a href="formInscription.php" type="button">Inscription</a>';
        //    echo '<a href="formConnexion.php" type="button">Connexion</a><br>';
        //              }
?>  
            </div> -->

          <div class="nav">
             <a href="formInscription.php" type="button">Inscription</a>
             <a href="formConnexion.php" type="button">Connexion</a>
             <a href="../accueil.php" type="button">Déconnexion</a> 
        </div> 

        <div class="profil">
                <?php
                echo 'Coucou $photo + $name';
                ?>
             </div>
            
        <div class="rechercher"> 
                <input type="text" name="search" id="rechercher" placeholder="🔍">
                <input id="btnOK" type="submit" value="Ok">
        </div>

    </div>
</body>
</html>