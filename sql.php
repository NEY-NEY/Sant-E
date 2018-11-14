<?php

$serveur = "localhost";
$bdd = "EFREI";
$utilisateur = "root";
$mdp = "";

try
  {
  $bdd = new PDO('mysql:host = $serveur; dbname = $bdd; charset = utf8', $utilisateur, $mdp);
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

?>