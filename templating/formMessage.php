<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messsage</title>
</head>
<body>

<?php include 'header.php'; ?>
<div class="nvMsg">

    

    <div class="formNvMsg">

    <h2>NOUVEAU TOPIC</h2><br>

        <form action="../message/create.php" method="post">
             Sujet : <br><input type="text" name="sujet" id="sujet"><br>
             Votre message : <br><textarea type="text" name="message" id="message"></textarea><br>
             <input id="btnOK" type="submit" value="OK">

        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>