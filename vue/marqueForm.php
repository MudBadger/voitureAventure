<?php
include '../controller/function/marqueForm.php';

if(persoIsset($_POST)){
    if(!empty($_POST['nom'])){
        $statutNewMarque = newMarque($bdd, $_POST);
        echo $statutNewMarque;

    } else {
        echo "<span class='alerte'>Veuillez saisir une marque.</span>";
    }
}
?>



<form method="POST" action="">
    <div class="inscriForm">
        <h1 class="grosTitre">Nouvelle marque :</h1>
        <input class="formInput" type="text" name="nom" placeholder="Nouvelle marque">
        <button class="formInput" type="submit">Ajouter</button>
    </div>
</form>

