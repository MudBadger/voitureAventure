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
        <h1>Enregistrer une nouvelle marque :</h1>
        <input type="text" name="nom" placeholder="Nouvelle marque">
        <button type="submit">Ajouter</button>
</form>