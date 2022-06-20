<?php

function setNewSession($bdd, $user){
    $select_pseudo = $bdd -> prepare("SELECT * FROM user where pseudo = :pseudo");
    $select_pseudo -> bindValue(':pseudo', $user['pseudo'], PDO::PARAM_STR);
    $select_pseudo -> execute();
    if($select_pseudo->rowCount() == 1) {
        $userBdd = $select_pseudo->fetch(PDO::FETCH_ASSOC);

        // a mettre dans le controller
        if(password_verify($user['mdp'], $userBdd['mdp'])){
            $_SESSION['user'] = $userBdd;
            unset($_SESSION['user']['mdp']);
            return "<span class='verification'>Connexion Réussie!</span>";
        } else {
            return "<span class='alerte'>Mot de passe invalide. Veuillez resaisir votre mot de passe.</span>";
        }
    } else {
        return "<span class='alerte'>Pseudo invalide. Veuillez resaisir votre pseudo.</span>";
    }
}


?>

