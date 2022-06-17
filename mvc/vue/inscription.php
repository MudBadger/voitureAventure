<?php 
    include '../controller/function/inscription.php';

    // conditions  + echo erreur de champs:
    if(persoIsset($_POST)){
        if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['emailVerif']) && !empty($_POST['mdp']) && !empty($_POST['mdpVerif'])){
           if($_POST['email'] != $_POST['emailVerif']){
            echo "<span class='alerte'>Email invalide. Veuillez resaisir votre email.</span>";
           } else if($_POST['mdp'] != $_POST['mdpVerif']){
            echo "<span class='alerte'>Mot de passe invalide. Veuillez resaisir votre mot de passe.</span>";
           } else {
            $statutNewUser = newUser($bdd, $_POST);
            echo $statutNewUser;
           }
        }
    }

?>

 <form method="POST" action="">
    <div class="inscriForm">
        <h1 class="grosTitre">Inscription :</h1>
        <input class="formInput" type="text" name="pseudo" placeholder="Pseudonyme">
        <input class="formInput" type="email" name="email" placeholder="Email">
        <input class="formInput" type="email" name="emailVerif" placeholder="Vérifiez votre email">
        <input class="formInput" type="password" name="mdp" placeholder="Mot de passe">
        <input class="formInput" type="password" name="mdpVerif" placeholder="Vérifiez votre mot de passe">
        <button class="formInput" type="submit">Envoyer</button>
    </div>
 </form>