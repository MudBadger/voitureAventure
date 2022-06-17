<?php
    include '../controller/config/database.php';
    session_start();
    session_destroy();
    session_start();
    header('location: ../public/index.php');
?>

