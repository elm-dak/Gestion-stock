<?php
session_start();

$nom_serveur = "localhost";
$nom_base_de_donne = "gestion_stock";
$utilisateur = "root";
$motpass = "";

try {
    $connexion = new PDO("mysql:host=$nom_serveur;dbname=$nom_base_de_donne", $utilisateur, $motpass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $GLOBALS['connexion'] = $connexion;

  //  return $connexion;
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

return $connexion;
?>