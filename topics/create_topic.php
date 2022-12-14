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
    

    //récupérer le dernier id de topic créé (54-57), l'assigner au mess puis importer le mess dans la bdd (57 - 69)  
    $requete=$bdd->prepare("SELECT id FROM sujets ORDER BY id DESC LIMIT 1") or die (print_r($bdd->errorInfo()));
    $requete->execute();
    $lastTopicId=$requete->fetch(PDO::FETCH_ASSOC);     
    extract($lastTopicId); // extraction du tableau lastTopicId, on peut désormais appeler l'id qu'il renferme avec la variable $id

    $reqMess = $bdd->prepare("INSERT into messages (contenu, dateMess, utilisateur_pseudo, sujet_id) VALUES (:contenu,:dateMess,:utilisateur_pseudo, :sujet_id)") or die(print_r($bdd->errorInfo()));
    $contenu = $_POST['message'];    
    $dateMess = date('d/m/Y H:i:s');
    $utilisateur_pseudo = $_SESSION["pseudo"];
    $sujet_id= $id;
    
    $reqMess->execute([
        "contenu" => htmlspecialchars($contenu),
        "dateMess" => $dateMess,
        "utilisateur_pseudo" => $utilisateur_pseudo,
        "sujet_id"=> $sujet_id
        ]);   
    
        } else show_errors($errorsSujet);
    } else echo "champ vide";
?>
