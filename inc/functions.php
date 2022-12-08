<?php
 
function debug ($variable){
    echo "<pre>".print_r($variable, true)."</pre>";
}

function show_errors($errors){
    echo "<div style = 'background-color : firebrick; font-family: sans-serif; color: white; padding:1%'><p> Erreurs : </p><ul>";
    foreach ($errors as $error) {
        echo "<li>".$error."</li>";
    }
    echo "</ul></div>";
}

function genererChaineAleatoire($length){
$caracs = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
return substr(str_shuffle(str_repeat($caracs, $length)),0,$length);
}
//Utilisation de la fonction
