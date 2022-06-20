<?php
//requete pour ajouter une nouvelle marque
    function setNewMarque($bdd, $user){
        $str = 'INSERT INTO marque (nom) VALUES (:nom)';
        $query = $bdd -> prepare($str);
        $query -> bindValue(':nom', $user['nom'], PDO::PARAM_STR);
        if($query -> execute()){
            return "<span class='verification'>Nouvelle marque enregistrée.</span>";
        } else {
            return "<span class='alerte'>Veuillez saisir une marque à nouveau.</span>";
        }
    }
?>