<?php

include "../include/head.php";
session_start();

session_destroy(); // Détruit la session PHP

header('Location: ../index.php'); // Redirige vers la page d'accueil
exit;

?>