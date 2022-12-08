


<?php
require '../inc/functions.php';
//creation SUJET + message + DATE + BOUTON sUbmit

session_start();
$id=""; 

try
{	

	$bdd=new PDO('mysql:host=localhost;dbname=forum_users','root','');
	// Mettez un nom de base erron� pour voir appara�tre le message d'erreur 
}
catch(Exception $e)
{
	// On lance une fonction PHP qui permet de conna�tre l'erreur renvoy�e lors de la connection � la base
	die('<strong>Erreur détectée !!! </strong>' . $e->getMessage());
}

    //CREATION SUJET DANS LA BDD

$reqSujet="";

    if (isset($_POST)) {
        $errorsSujet = array(); 

        if (empty($_POST["sujet"])) {
            $errorsSujet["sujet"] = " Remplir le Sujet";
           

            
        } 
        if (empty($_POST["message"])) {
            $errorsSujet["message"] = " Remplir le message";
        }
        if(empty($errorsSujet)){
         

    $reqSujet= $bdd-> prepare("INSERT into sujets (sujet_titre, date) VALUES (:sujet_titre,:date)")or die (print_r($bdd->errorInfo()));
    $titreSujet=$_POST['sujet'];
    $dateSujet=date('d/m/Y H:i:s');

    $reqSujet->execute([
        "sujet_titre"=>$titreSujet,
        "date"=>$dateSujet]);

    echo 'Votre sujet est '.$titreSujet.'<br>';
    echo 'La date du sujet est '.$dateSujet.'<br>';


    
    //CREATION MESSAGE DANS LA BDD


    $reqMsg= $bdd-> prepare("INSERT into messages (contenu, date) VALUES (:contenu,:date)")or die (print_r($bdd->errorInfo()));
    $contenuMsg=$_POST['message'];
    $dateMsg=date('d/m/Y H:i:s');
    

    $reqMsg->execute([
        "contenu"=>$contenuMsg,
        "date"=>$dateMsg]);

        echo 'Votre message est '.$contenuMsg.'<br>';
        echo 'La date du message est '.$dateMsg.'<br>';

    } else show_errors($errorsSujet);
}
?>
