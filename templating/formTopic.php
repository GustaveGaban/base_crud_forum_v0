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


    <h2>NOUVEAU SUJET DE DISCUSSION</h2>

    <form action="../topics/create_topic.php" method="post">
        Sujet : <input type="text" name="sujet" id="sujet" placeholder="sujet"><br>
        Votre message : <input type="text" name="message" id="message" placeholder="message"><br>
        <input type="submit" value="OK">

    </form>

<?php include 'footer.php'; ?>

</body>
</html>