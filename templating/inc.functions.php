<?php  
// le fichier commence par "inc" simplement parce qu'il permet d'inclure des éléments qui ne seront pas affichés

//fonction permettant de connecter l'utilisateur en passant par la session
function setConnected($loginPostForm, $passwordPostForm) {
	//si la variable  session existe et est non nul
	if (isset($_SESSION)) {
		//on stocke dans les variables de sessions login et mdp les valeurs des variables en paramètre login et mot de passe 
		//(qui seront celles renseignés par l'utilisateur dans le form envoyé avec la méthode POST d'où le nom des variables)
		$_SESSION['loginPostForm'] = htmlspecialchars(trim($loginPostForm)); //on enlève les espaces avec trim et on interprête pas les balises html s'il y en a avec htmkspecialchars
		$_SESSION['passwordPostForm'] = htmlspecialchars($passwordPostForm);
	}
}

//fonction permettant de vérifier si un utilisateur a une session active, s'il est connecté donc
function isConnected() { 
	//si une session est déclarer et non nul et si les variables de sessions login et mdp sont déclaré et non nul également
	if (isset($_SESSION) && isset($_SESSION['loginPostForm']) && isset($_SESSION['passwordPostForm'])) {
		//on retourne vrai
		return true;
	}else {
		//sinon on retourne faux
		return false;
	}
}

//fonction permettant de déconnecter l'utilisateur
function deconnect() {
	//on detruit la session donc toutes les données associées à cette session
	session_destroy();
	//on détruit la variable globale session 
	unset($_SESSION);
	//on redirige l'utilisateur vers l'index au bout de 3 secondes (le temps de lire mais pas obligé 
	//de mettre autant ou alors on gère ca en js) le temps d'afficher
	header('refresh:3;url=index.php');
	//entre deux on on appel la vue de déconnection qui préviens l'utilisateur qu'il a été déconnecté et qu'il est redirigé
	require 'forms/formDeconnectPage.php';
	//et on ajoute exit pour que le serveur ne continue pas à travailler pour rien après la redirection
	exit();

	//autre proposition de code :
		/*
		* session_destroy();
		* unset($_SESSION);
		* header('Location: index.php');
		* exit;
		*/
}

?>