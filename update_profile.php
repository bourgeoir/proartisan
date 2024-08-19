<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proartisan";

session_start();
$user_id = $_SESSION['user_id'];

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $commune = $_POST['commune'];
    $quartier = $_POST['quartier'];
    $telephone = $_POST['telephone'];

    $stmt = $bdd->prepare("UPDATE utilisateur SET nom = ?, prenom = ?, ville = ?, commune = ?, quartier = ?, telephone = ? WHERE id_utilisateur = ?");
    $stmt->execute([$nom, $prenom, $ville, $commune, $quartier, $telephone, $user_id]);

    $role_stmt = $bdd->prepare("SELECT role FROM utilisateur WHERE id_utilisateur = ?");
    $role_stmt->execute([$user_id]);
    $role = $role_stmt->fetchColumn();

    if ($role === 'client') {
        $stmt = $bdd->prepare("UPDATE client SET nom = ?, prenom = ?, telephone = ?, ville = ?, commune = ?, quartier = ? WHERE id_utilisateur = ?");
        $stmt->execute([$nom, $prenom, $telephone, $ville, $commune, $quartier, $user_id]);
    } elseif ($role === 'artisan') {
        $experience = $_POST['experience'];
        $stmt = $bdd->prepare("UPDATE artisan SET nom = ?, prenom = ?, telephone = ?, ville = ?, commune = ?, quartier = ?, experience = ? WHERE id_utilisateur = ?");
        $stmt->execute([$nom, $prenom, $telephone, $ville, $commune, $quartier, $experience, $user_id]);
    }

    header("Location: profile.php?success=Mise à jour réussie !");
    exit();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}
?>
