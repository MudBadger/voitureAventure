<?php
include '../model/marqueForm.php';
//fonction ajouter une nouvelle marque
function newMarque($bdd, $array){
    $user['nom'] = strip_tags($array['nom']);
    $user['nom'] = ucfirst($user['nom']);
    $retour = setNewMarque($bdd, $user);
    return $retour;
}
?>