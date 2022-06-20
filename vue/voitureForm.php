<?php
include '../controller/function/voitureForm.php';

if(persoIsset($_POST)){
    if(!empty($_POST['nom_modele']) && !empty($_POST['immat']) && !empty($_POST['couleur']) && !empty($_POST['ID_marque'])){
        $statutNewModele = newModele($bdd, $_POST);
        echo $statutNewModele;
    } else {
        echo "<span class='alerte'> Veuillez remplir tout les champs.</span>";
    }
}

?>

<form method="POST" action="">
    <div class="inscriForm">
        <h1 class="grosTitre">Voiture :</h1>
        <input class="formInput" type="text" name="nom_modele" placeholder="Nom">
        <input class="formInput" type="text" name="immat" placeholder="Immatriculation">
        <input class="formInput" type="text" name="couleur" placeholder="Coloris">
        <select class="formInput" name="ID_marque" id="">
            <?php
                $statutNewMarque = newMarque($bdd, $_POST);
            echo $statutNewMarque;
            ?>
        </select>
        <button class="formInput" type="submit">Envoyer</button>
    </div>
</form>