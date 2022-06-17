<?php
//requête mysql : select/insert, etc. bindValue, execute, etc... faire une fonctione pour lier donnée entrées par l'user pour la BDD.
    function setNewUser($bdd, $user){
        $str = 'INSERT INTO user (pseudo, email, mdp) VALUES (:pseudo, :email, :mdp)';
        $query = $bdd -> prepare($str);
        $query -> bindValue(':pseudo', $user['pseudo'], PDO::PARAM_STR);
        $query -> bindValue(':email', $user['email'], PDO::PARAM_STR);
        $query -> bindValue(':mdp', $user['mdp'], PDO::PARAM_STR);        
        if($query->execute()){
            return "<span class='alerte'>Inscription reussie!</span>";
        }else{
            return "<span class='alerte'>Veuillez saisir vos informations à nouveau.</span>";
        }
    }

// check les doublons d'email 

function check_email($bdd, $user){
    $select_email = $bdd->prepare("SELECT * FROM `user` WHERE email =:email");
    $select_email->bindValue(":email", $user["email"], PDO::PARAM_STR);
    $select_email->execute();

    if($select_email->rowCount() > 0){
        return "<span class='alerte'>Email déjà existant.</span>";
    }
}
                
?>
    