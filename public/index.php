<?php
session_start();
include '../controller/config/database.php';
include '../controller/config/function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['user'])){
        echo "<header>
                <nav class='navBar'>
                    <div class='titre'>
                        <img src='../public/assets/images/voitureAventureLogo.png'>
                    </div>
                    <div class='linkButton'>
                        <button class='navButton'><a class='navLink' href='../public/index.php?page=accueil'>Accueil</a></button>
                        <button class='navButton'><a class='navLink' href='../public/index.php?page=voitureFormulaire'>Ajouter véhicule</a></button>
                        <button class='navButton'><a class='navLink' href='../public/index.php?page=marqueFormulaire'>Ajouter marque</a></button>
                        <button class='navButton'><a class='navLink' href='../public/index.php?page=recherche'>Recherche</a></button>
                        <button class='navButton'><a class='navLink' href='../public/index.php?page=deconnexion'>Déconnexion</a></button>
                    </div>
                </nav>
            </header>";
    }
    
    if(!isset($_SESSION['user'])){
        echo "<header>
                <nav class='navBar'>
                    <div class='titre'>
                        <img src='../public/assets/images/voitureAventureLogo.png'>
                    </div>                   
                    <div class='linkButton'>
                            <button class='navButton'><a class='navLink' href='../public/index.php?page=accueil'>Accueil</a></button>
                            <button class='navButton'><a class='navLink' href='../public/index.php?page=inscription'>Inscription</a></button>
                            <button class='navButton'><a class='navLink' href='../public/index.php?page=connexion'>Connexion</a></button>
                    </div>
                </nav>
            </header>"; 
    }

    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'deconnexion':
            include ('../vue/deconnexion.php');
            break;

            case 'inscription':
            include ('../vue/inscription.php');
            break;

            case 'connexion':
            include ('../vue/connexion.php');
            break;

            case 'accueil':
            include ('../vue/accueil.php');
            break;

            case 'voitureFormulaire' :
            include ('../vue/voitureForm.php');
            break;

            case 'marqueFormulaire' :
            include ('../vue/marqueForm.php');
            break;
            
            case 'recherche' :
            include ('../vue/recherche.php');
            break;

            default :
            include ('../vue/accueil.php');
            break;
            }
    } else {
        include ('../vue/accueil.php');
    }


    ?>
</body>
</html>