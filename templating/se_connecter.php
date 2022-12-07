<?php
session_start();
require 'inc.functions.php'; 
require 'db.php';
$_retours = [];
if(count($_POST) && array_key_exists('pseudo', $_POST)){
    $name = $_POST['pseudo'];
    if(!empty($name)){
        //~ On teste si le nom est bien une chaîne de caractère
        if(is_string($name)){
            array_push($_retours);
        }else{
            array_push($_retours, 'Votre nom n\'est pas une chaine de caractère !');
        }
    }else{
        array_push($_retours, 'Votre nom n\'a pas été renseigné !');
    }
}else{
    array_push($_retours,);
}

            //~ Pour raccourcir la notation, on crée une autre variable

        if(count($_POST) && array_key_exists('mdp', $_POST)){
            $motdepasse = $_POST['mdp'];
            if(!empty($motdepasse)){
                //~ On teste si la promo est bien une chaîne de caractère
                if(is_string($motdepasse)){
                    //~ On prépare le message final en supprimant les balises HTML
                    array_push($_retours);
                }else{
                    array_push($_retours, 'Votre mdp n\'est pas une chaine de caractère !');
                }
            }else{
                array_push($_retours, 'Votre mdp n\'a pas été renseigné !');
            }
        }else{
            array_push($_retours);
        }

//~ On fusionne et affiche les messages de notre tableau en une seule chaine de caractères.
echo implode("<br>", $_retours);

if(!empty($motdepasse) && (!empty($name))){
    echo "<br>";
    echo'<a href="../index.php" > Index </a>';
}
$pseudobdd="";
$requete=$bdd->prepare('SELECT * FROM users WHERE pseudo=?') or die (print_r($bdd->errorInfo()));
	/*  PREPARATION DE LA REQUETE
		$bdd est un objet correspondant � notre connexion � la BDD
		$requete est un objet contenant la r�ponse de la BDD � la requ�te
		SELECT : R�colter des informations dans la base
		* : toutes les donn�es contenues dans la table (si on ne veut que le nom et le pseudo, mettre "nom, pseudo")
		FROM utilisateurs : dans la table "utilisateurs"
		or die (print_r(->$bdd->errorInfo())) ? Code ex�cut� s'il y a une erreur pour afficher un message correspondant � l'erreur
		2 syntaxes sont possibles pour repr�senter les variables : dans cet exemple, on utilise le marqueur "?"
	*/
	$requete->execute(array($_POST['pseudo']));
	/*  ENVOI DE LA REQUETE
		Les param�tres sont inclus dans un tableau associatif (array) qui dans ce cas ne contient qu'un param�tre :
		le "nom" rentr� par l'utilisateur transmis via un formulaire
	*/
	
	while ($data=$requete->fetch())
	/*  TRAITEMENT DE LA REQUETE
		$requete n'est pas directement exploitable
		On utilise la m�thode "fetch" de l'extension PDO afin de s�lectionner ce qui nous int�resse dans $requete (http://php.net/manual/fr/pdostatement.fetch.php)
		On va ainsi �tudier ligne par ligne (via la boucle while) les diff�rents r�sultats renvoy�s par la BDD
		Dans notre cas, il n'y en a qu'un mais il peut y avoir plusieurs �l�ments s�lectionn�s dans une base par une requ�te
		Par exemple, si on s�lectionne tous les membres qui ont 20 ans.
		$data est un array contenant les diff�rents champs correspondant � chaque utilisateur correspondant au nom rentr� par l'utilisateur
	*/	
	{
		// on r�cup�re alors les diff�rentes caract�ristiques de l'utilisateur (ou rien du tout si l'utilisateur n'est pas dans la base)
        $pseudobdd=$data['pseudo'];
		$motdepassebdd=$data['mdp'];	
	}
	if ($pseudobdd=="")
	{		
		/* Si la variable $id est vide, cela signifie que le nom donn� par l'utilisateur n'est pas contenu dans la base
		On affiche alors le message d'erreur correspondant */
		echo 'Cette personne n\'est pas enregistr�e dans la base.';
	}
	else
	{
		// Sinon, on affiche les diff�rents r�sultats
		echo 'Cette personne est enregistrée dans la base.<br>';
		echo 'Son pseudo est '.$pseudobdd.'.<br>';
		echo 'Son mot de passe est '.$motdepassebdd.'.<br>';
	}
	/* L'instruction closeCursor() lib�re la connexion du serveur en mettant un terme � la requ�te 
	permettant ainsi � d'autres requ�tes SQL d'�tre ex�cut�es.
	Cette instruction doit donc toujours �tre pr�sente � la fin de chaque requ�te.
	*/
	$requete->closeCursor();
	?>	