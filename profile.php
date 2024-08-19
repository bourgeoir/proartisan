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

    $stmt = $bdd->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    $role_stmt = $bdd->prepare("SELECT role FROM utilisateur WHERE id_utilisateur = ?");
    $role_stmt->execute([$user_id]);
    $role = $role_stmt->fetchColumn();

    if ($role === 'client') {
        $stmt = $bdd->prepare("SELECT * FROM client WHERE id_utilisateur = ?");
        $stmt->execute([$user_id]);
        $profile = $stmt->fetch();
    } elseif ($role === 'artisan') {
        $stmt = $bdd->prepare("SELECT * FROM artisan WHERE id_utilisateur = ?");
        $stmt->execute([$user_id]);
        $profile = $stmt->fetch();
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>

<h1>Profil de <?php echo htmlspecialchars($user['nom']); ?></h1>
<p>Nom: <?php echo htmlspecialchars($user['nom']); ?></p>
<p>Prénom: <?php echo htmlspecialchars($user['prenom']); ?></p>
<p>Ville: <?php echo htmlspecialchars($user['ville']); ?></p>
<p>Commune: <?php echo htmlspecialchars($user['commune']); ?></p>
<p>Quartier: <?php echo htmlspecialchars($user['quartier']); ?></p>
<p>Téléphone: <?php echo htmlspecialchars($user['telephone']); ?></p>

<?php if ($role === 'artisan'): ?>
    <p>Expérience: <?php echo htmlspecialchars($profile['experience']); ?></p>
<?php endif; ?>

</body>
</html>
