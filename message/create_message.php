<?php
require '../connect/bdd_connect.php';
require '../inc/functions.php';
session_start();

if (!empty($_POST["message"])) {
    $reqMess = $bdd->prepare("INSERT into messages (contenu, dateMess, utilisateur_pseudo, sujet_id) VALUES (:contenu,:dateMess,:utilisateur_pseudo, :sujet_id)") or die(print_r($bdd->errorInfo()));
    $contenu = $_POST['message'];    
    $dateMess = date('d/m/Y H:i:s');
    $utilisateur_pseudo = $_SESSION["pseudo"];
    $sujet_id=$_GET["id"];  
    
    $reqMess->execute([
        "contenu" => htmlspecialchars($contenu),
        "dateMess" => $dateMess,
        "utilisateur_pseudo" => $utilisateur_pseudo,
        "sujet_id"=> $sujet_id
        ]);   
}

//VUE//
$sujet_id = $_GET["id"];
$requete=$bdd->prepare("SELECT * FROM messages WHERE sujet_id = $sujet_id") or die (print_r($bdd->errorInfo()));
$requete->execute();
$messages=$requete->fetchAll(PDO::FETCH_ASSOC); 
       
foreach ($messages as $message => $contenu) {         
    showMess($contenu['dateMess'], $contenu['utilisateur_pseudo'], $contenu['contenu']); // envoie chaque mess dans le html
}

echo "<a href='../templating/main_listTopics.php'><button style='background-color: blue; color: white; height: 40px; width: 80px;'>Retour topics</button></a>";
    
include("../templating/formMessage.php");
