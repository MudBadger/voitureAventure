<?php 

    include '../model/connexion.php';

    function newSession($bdd, $array){
        $user['pseudo'] = strip_tags($array['pseudo']);
        $user['mdp'] = strip_tags($array['mdp']);
        $retour = setNewSession($bdd, $user);
        return $retour;
    }

?>