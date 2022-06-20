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

<?php
    $statutNewArray = newArray($bdd, $user);

    echo "<table class='table'>
            <div class='rowTitre'>
                <th class='tabTitre'>Marque</th>
                <th class='tabTitre'>Nom</th>
                <th class='tabTitre'>Immatriculation</th>
                <th class='tabTitre'>Couleur</th>
                <th class='tabTitre'>Modifier</th>
                <th class='tabTitre'>Supprimer</th>
            </div>";
    foreach($statutNewArray as $user){
        echo "<tr>
                <td class='colItem'>".$user['nom_marque']."</td>
                <td class='colItem'>".$user['nom_modele']."</td>
                <td class='colItem'>".$user['immat']."</td>
                <td class='colItem'>".$user['couleur']."</td>
                <td><button class='buttonArray'><a href ='./voitureForm.php?ID=$user[modele_id]'>Modifier</a></button></td>
                <td><button class='buttonArray'><a href ='./voitureForm.php?ID=$user[modele_id]'>Supprimer</a></button></td>
            </tr>";
    }
   echo  "</table>";
?>