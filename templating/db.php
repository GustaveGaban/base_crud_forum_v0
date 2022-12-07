<?php
// Pour que la BDD soit relié à php (pour la connexion notamment)// (nom db,login,mdp)
//$pdo = new PDO ('mysql:dbname=forum_users;host=localhost','root','');
//$pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   // Renvoie une erreur si il y a un pb, par défaut ne dis rien
//$pdo -> setAttribute (PDO::ATTR_DEFAUT_FETCH_MODE, PDO::FETCH_OBJ);
//<?php
	// Param�tres de connexion � la base de donn�es
// On d�clare la variable $id. Celle-ci nous servira si la recherche dans la BDD est infructueuse.
$id=""; // pas nécessaire en faite ici

// CONNEXION A LA BASE MySQL //
/* 
	La structure try ... catch permet de r�aliser les actions suivantes :
	PHP essaie d'ex�cuter les instructions pr�sentes � l'int�rieur du bloc "try"
	En cas d'erreur, les instructions du bloc "catch" sont ex�cut�es.
	Dans ce cas, un message d'erreur est affich�.
*/
try
{	
	/* 
		PDO est une extension "orient�e objet". Il faut donc v�rifier que l'extension PDO est bien activ�e sur votre version de PHP (cf cours)
		On travaille en local : localhost
		La BDD s'appelle "exemple_diag_php_dbb"
		Le login par d�faut est "root"
		Il n'y a pas de mot de passe
		On cr�e un objet $bdd
	*/
	$bdd=new PDO('mysql:host=localhost;dbname=forum_users','root','');
	// Mettez un nom de base erron� pour voir appara�tre le message d'erreur 
}
catch(Exception $e)
{
	// On lance une fonction PHP qui permet de conna�tre l'erreur renvoy�e lors de la connection � la base
	die('<strong>Erreur détectée !!! </strong>' . $e->getMessage());
}

?>