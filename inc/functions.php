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

function showMess($dateMess, $utilisateur_pseudo, $contenu){
    echo "<ul style = 'margin: 0; padding:0; display:grid; grid-template-columns: 10% 15% 1fr 10%; grid-template-rows : 55px auto; list-style-type:none;'>
<li style ='padding:0; background-color : grey; grid-column: 3/4; grid-row: 1/2; text-align : center; vertical-align : center; line-height: 55px; border-top: 1px solid black; border-right: 1px solid black'>$dateMess</li>
<li style ='padding:0; background-color : grey; grid-column: 2/3; grid-row: 1/3; text-align : center; vertical-align : center; line-height: 55px; border-right: 1px solid black; border-top: 1px solid black; border-left: 1px solid black'>$utilisateur_pseudo</li>
<li style ='padding:8px; background-color : beige; grid-column: 3/4; grid_row: 2/3; text-align : left; border-top: 1px solid black; border-right: 1px solid black'>$contenu</li></ul>";
}

