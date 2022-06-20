<?php
include '../model/voitureForm.php';
//fonction pour le nouveau modèle
function newModele($bdd, $array){
    $user['nom_modele'] = strip_tags($array['nom_modele']);
    $user['immat'] = strip_tags($array['immat']);
    $user['couleur'] = strip_tags($array['couleur']);
    $user['ID_marque'] = ($array['ID_marque']);
    $retour = setNewModele($bdd, $user);
    return $retour;
}

//fonction menu déroulant marque
function newMarque($bdd, $array){
    $user['ID_marque'] = ($array['ID_marque']);
    $retour = setNewMarque($bdd, $user);
    return $retour;
}

?>