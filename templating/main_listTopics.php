<?php 
require "../connect/bdd_connect.php";

try{	    
    $requete=$bdd->prepare('SELECT * FROM sujets ') or die (print_r($bdd->errorInfo()));
    $requete->execute();
    $assocTab=$requete->fetchAll(PDO::FETCH_ASSOC);    
    // echo json_encode($assocTab);     
    
    foreach ($assocTab as $key => $data) {
        $id = $data['id'];
        $sujet=$data['sujet_titre'];
        $date=$data['date'];
        echo "<a href =#><ul style = ' margin: 0; padding:0; display:grid; grid-template-columns: 10% 1fr 25% 10%; grid-template-rows : 55px; list-style-type:none;'>
                         <li style ='padding:0; background-color : grey; grid-column: 2/3; text-align : center; vertical-align : center; line-height: 55px; border-top: 1px solid black'>$sujet</li>
                         <li style ='padding:0; background-color : grey; grid-column: 3/4; text-align : center; vertical-align : center; line-height: 55px; border-top: 1px solid black'>$date<li></ul></a>";    
    }

}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}
