<?php
    $host = 'localhost';
    $user = 'root';
    $mdp = '';
    $char = 'utf-8';
    $dbname = 'mvc';

    try{
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';char='.$char,$user,$mdp);
    }
    catch(PDOException $e){
        echo 'erreur:'.$e->getMessage();
        die();
    }
?>  