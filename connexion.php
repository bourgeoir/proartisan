<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proartisan";

try {
    // Création d'une nouvelle instance de PDO
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Définir le mode de gestion des erreurs
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optionnel : echo "Connexion réussie !";

} catch (PDOException $e) {
    // Affichage de l'erreur en cas d'échec de connexion
    echo "Erreur : " . $e->getMessage();
    // Terminer le script si la connexion échoue
    die();
}

?>
