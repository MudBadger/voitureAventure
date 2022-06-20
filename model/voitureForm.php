<?php
//ajout nouveau modele de voiture

function setNewModele($bdd, $user){
    $str = 'INSERT INTO modele (nom, immat, couleur, ID_marque) VALUES (:nom, :immat, :couleur, :ID_marque)';
    $query = $bdd -> prepare($str);
    $query -> bindValue(':nom', $user['nom_modele'], PDO::PARAM_STR);
    $query -> bindValue(':immat', $user['immat'], PDO::PARAM_STR);
    $query -> bindValue(':couleur', $user['couleur'], PDO::PARAM_STR);
    $query -> bindValue(':ID_marque', $user['ID_marque'], PDO::PARAM_INT);
    if($query -> execute()){
        return "<span class='alerte'>Nouveau modèle enregistré</span>";
    } else {
        return "<span class='alerte'>Veuillez saisir vos informations à nouveau</span>";
    }
}

//menu déroulant des marques

function setNewMarque($bdd, $index){
    $stg = "SELECT * FROM marque";
    $query = $bdd -> query($stg);
    $array = $query -> fetchAll();

    function marqueArray($array, $index){
        foreach($array as $index) {
            echo "<option value=$index[ID]>$index[nom]</option>";
        }
    }
    $setMarqueArray = marqueArray($array, $index);
    return $setMarqueArray;
}

?>