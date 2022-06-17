<?php
include '../model/inscription.php';

//création fonction inscription, manipulation des donées entrées avant enregistrmenet en BDD : strip_tags, password_hash, etc... préparation des données.
function newUser($bdd, $array){
$user['pseudo'] = strip_tags($array['pseudo']);
$user['email'] = strip_tags($array['email']);
$user['mdp'] = password_hash($array['mdp'], PASSWORD_BCRYPT);
$retour = setNewUser($bdd, $user);
return $retour;
}

//check les doublons d'email

function checkNewUser($bdd, $array){
    $user["email"] = strip_tags($array["email"]);

    $return = check_email($bdd, $user);
    return $return;
}
?>






