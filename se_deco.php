<?php 

//on démarre une session ou la récupére si elle est déjà démarré
session_start(); 

//on inclut le fichiers inc.functions.php
require_once 'inc.functions.php'; //"_once" permet juste de vérifier qu'il n'a pas déjà été inclue pour ne pas l'inclure 2 fois

//et on appel la fonction deconnect qui va permettre de déconnecter l'utilisateur...
deconnect();

?>