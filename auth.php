<?php
session_start();  // Démarrer la session pour accéder aux variables de session

// Fonction pour vérifier l'authentification et le rôle de l'utilisateur
function checkAuth($role) {
    // Vérifie si l'utilisateur est connecté
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');  // Rediriger vers la page de connexion si non connecté
        exit();
    }

    // Vérifie si l'utilisateur a le bon rôle
    if ($_SESSION['role'] != $role) {
        header('Location: unauthorized.php');  // Rediriger vers une page d'erreur si le rôle ne correspond pas
        exit();
    }
}
?>
