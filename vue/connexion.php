<?php
    include '../controller/function/connexion.php';

    if(persoIsset($_POST)){
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            $statutNewSession = newSession($bdd, $_POST);
            echo $statutNewSession;
        } else {
            echo "<span class='alerte'> Veuillez remplir tout les champs.</span>";
        }

    }

?>

<form method="POST" action="">
    <div class="inscriForm">
        <h1 class="grosTitre">Connexion :</h1>
        <input class="formInput" type="text" name="pseudo" placeholder="Pseudonyme">
        <input class="formInput" type="password" name="mdp" placeholder="Mot de passe">
        <button class="formInput" type="submit">Connexion</button>
    </div>
</form>