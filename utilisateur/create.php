<?php
require "./inc/functions.php";
require "../connect/bdd_connect.php";
// pseudo mail mdp
if (isset($_POST)) {
    $errors = array();   

    if (empty($_POST["pseudo"])||(!preg_match('/^[a-zA-Z0-9_]+$/', $_POST["pseudo"]))) {
        $errors["pseudo"] = "Nom d'utilisateur invalide.";
        
       
    }else{
        $req = $bdd->prepare("SELECT id FROM users WHERE pseudo=?");
        $req->execute ([$_POST["pseudo"]]);
        $user = $req->fetch();
        if ($user) {
            $errors["pseudo"] = "Nom d'utilisateur indisponible.";
        }
    }
    if (empty($_POST["mail"])||(!filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL))) {
        $errors["mail"] = "Mail invalide.";
    }
    if (empty($_POST["mdp"])||(!preg_match('/^[a-zA-Z0-9_!\/*$%]+$/', $_POST["mdp"]))) {
        $errors["mdp"] = "Mot de passe invalide.";
    }

   

    if (empty($errors)){               
        $req= $bdd-> prepare("INSERT into users (pseudo, mail, mdp) VALUES (:pseudo,:mail,:mdp)")or die (print_r($bdd->errorInfo()));
        $password = password_hash($_POST["mdp"],PASSWORD_BCRYPT);
        $token = genererChaineAleatoire(64); // ne sert que si on demande une confirmation par mail.        
        $user_id = $bdd-> lastInsertId();
        $req->execute([
            "pseudo"=>$_POST["pseudo"],
            "mail"=>$_POST["mail"], 
            "mdp"=>$password]);        
        echo "<div style = 'background-color : limegreen; font-family: sans-serif; color: white; padding:1%'><p>Compte créé.</p></div>";
        
        // mail($_POST["mail"], "Confirmation de votre compte","Afin de valider votre connexion, cliquez sur ce lien"." <br><br>"."http://localhost/base_crud_forum_v0/utilisateur/confirm.php?id=$user_id&token=$token");
        // header("location : ../templating/formConnexion.php");
        die();
    }   else{
        show_errors($errors);
        echo "<br><a href = '../templating/formInscription.php' style = 'color:navy; border:1px solid navy; padding:4px'>Retour</a>";        
        die();
    }

}?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html> -->
