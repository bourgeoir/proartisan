<?php
session_start(); // Démarrer la session

require 'connexion.php';

if (isset($_POST["ok"])) {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $matrimoniale = $_POST["matrimoniale"];
    $sexe = $_POST["sexe"];
    $date_naissance = $_POST["date_naissance"];
    $pays_residence = $_POST["pays_residence"];
    $ville = $_POST["ville"];
    $commune = $_POST["commune"];
    $quartier = $_POST["quartier"];
    $telephone = $_POST["telephone"];
    $role = $_POST["role"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Vérifiez que les mots de passe correspondent
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
        header('Location: inscrip.php');
        exit();
    }

    // Hash du mot de passe pour la sécurité
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Vérifier si le numéro de téléphone existe déjà
        $checkStmt = $bdd->prepare("SELECT COUNT(*) FROM utilisateur WHERE telephone = :telephone");
        $checkStmt->bindParam(':telephone', $telephone);
        $checkStmt->execute();
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            $_SESSION['error'] = "Le numéro de téléphone est déjà utilisé. Veuillez en choisir un autre.";
            header('Location: inscrip.php');
            exit();
        }

        // Préparer la requête SQL pour insérer les données dans la base
        $stmt = $bdd->prepare("INSERT INTO utilisateur (nom, prenom, matrimoniale, sexe, date_naissance, pays_residence, ville, commune, quartier, telephone, role, password) VALUES (:nom, :prenom, :matrimoniale, :sexe, :date_naissance, :pays_residence, :ville, :commune, :quartier, :telephone, :role, :password)");

        // Lier les paramètres
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':matrimoniale', $matrimoniale);
        $stmt->bindParam(':sexe', $sexe);
        $stmt->bindParam(':date_naissance', $date_naissance);
        $stmt->bindParam(':pays_residence', $pays_residence);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':commune', $commune);
        $stmt->bindParam(':quartier', $quartier);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':password', $hashed_password);

        // Exécuter la requête
        $stmt->execute();

        // Rediriger avec un message de succès
        $_SESSION['success'] = "Inscription réussie !";
        header('Location: inscrip.php');
        exit();

    } catch (PDOException $e) {
        $_SESSION['error'] = "Erreur lors de l'insertion des données : " . $e->getMessage();
        header('Location: inscrip.php');
        exit();
    }
}
?>
