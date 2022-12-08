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

<div class="connex"> 
    
    <form class="formConnex" action="" method="post">

        <label for="pseudo">Pseudo</label><br>
        <input type="text" name="pseudo" id=""><br>

        <label for="mdp">Mot de Passe</label><br>
    <!-- Type à modifier en password ! -->
        <input type="text" name="mdp" id="mdp"><br>

        <input id="btnOK"type="submit" value="OK">

    </form>
</div>

    <?php include 'footer.php'; ?>

</body>
</html>

