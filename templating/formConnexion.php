<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kenia&family=Zen+Dots&display=swap');
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <form class="formConnex" action="" method="post">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id=""><br>

        <label for="mdp">Mot de Passe</label>
    <!-- Type à modifier en password ! -->
        <input type="text" name="mdp" id="mdp"><br>

        <input type="submit" value="OK">

    </form>

    <?php include 'footer.php'; ?>

</body>
</html>

<!-- <div class="nav">
            // si la fonction isConnected est true (on aurait pu marqué == true mais c'est raccourci) 
                        <?php if (isConnected()) { //alors on affiche les boutons suivant : ?>
            <a href="se-deco.php" class="button primary">Se déconnecter</a><br>
            
            // sinon on affiche un bouton pour se connecter 
                        <?php }else { ?>
            <a href="formInscription.php" type="button">Inscription</a>
            <a href="formConnexion.php" type="button">Connexion</a><br>

            <?php } ?> -->