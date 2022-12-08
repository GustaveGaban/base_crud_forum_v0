<?php
echo 'page delete message';

//connexion a la bdd

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

if(isset($_POST['sujet_id'])){
    $sql = 'DELETE FROM sujet WHERE sujet_id = :sujet_id';
    $query = $bdd->prepare( $sql );
    if ($query == false) {
     print_r($conn->errorInfo());
     die ('Erreur prepare');
    }
    $res = $query->execute( array( ":sujet_id" => $_POST['sujet_id'] ) );
    if ($res == false) {
     print_r($query->errorInfo());
     die ('Erreur execute');
    }
    header('Location:accueil.php');
    exit();
  }


?>