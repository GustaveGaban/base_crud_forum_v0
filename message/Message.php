<?php

require_once __DIR__.'/../utilisateur/Utilisateur.php';
require_once __DIR__.'/../forum/Forum.php';

class Message
{

    private $contenu;
    private $forum;
    private $auteur;
    private $date;

    /**
     * @param $contenu
     * @param $forum
     * @param $auteur
     * @param $date
     */
    public function __construct($contenu, $forum, $auteur, $date)
    {
        $this->contenu = $contenu;
        $this->forum = $forum;
        $this->auteur = $auteur;
        $this->date = $date;
    }

    public function __toString(): string
    {
        return $this->contenu.' - '.$this->auteur->getPseudo().' - '.$this->date;
    }


}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Message</title>
</head>
<body>
    <form action="" method="post">
        <h2>Nouveau Sujet</h2>
        <label for="sujet">Sujet : </label>
        <input type="texte" name="sujet" id="sujet"><br>

        <label for="message">Votre message : </label>
        <textarea name="nvMessage" id="nvMessage" cols="30" rows="5" placeholder="Ecrivez ici votre message"></textarea><br>

        <input type="submit" value="Envoyer">
    
    </form>
</body>
</html>