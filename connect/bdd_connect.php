<?php
	// Param�tres de connexion � la base de donn�es
	try
	{	
		$bdd=new PDO('mysql:host=localhost;dbname=forum_users','root','');
	}catch(Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
?>