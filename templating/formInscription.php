<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php include 'header.php';?>


    <div class="inscript">

        <form class="formInscript" action="" method="post">

         <h2>INSCRIPTION</h2><br>

            <label for="pseudo">Pseudo : </label><br>
            <input type="text" name="pseudo" id="pseudo"><br>

            <label for="mail">Email : </label><br>
            <input type="mail" name="mail" id="mail"><br>

            <label for="mdp">Mot de Passe : </label><br>
            <!-- Type à modifier en password ! -->
            <input type="text" name="mdp" id="mdp"><br>

            <label for="photo">Avatar</label><br>
            <input type="file" id="photo" name="photo"><br>

            <input id="btnOK" type="submit" value="OK">
        </form>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>