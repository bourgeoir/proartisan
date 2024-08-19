<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proartisan";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telephone = $_POST["telephone"];
    $password = $_POST["password"];

    if ($telephone != "" && $password != "") {
        $stmt = $bdd->prepare("SELECT id_utilisateur, password, role FROM utilisateur WHERE telephone = :telephone");
        $stmt->bindParam(':telephone', $telephone);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id_utilisateur'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == 'artisan') {
                header("Location: /proartisan/artisan_dashboard.php");
            } else {
                header("Location: /proartisan/client_dashboard.php");
            }
            exit();
        } else {
            header("Location: login.php?error=Num%C3%A9ro%20de%20t%C3%A9l%C3%A9phone%20ou%20mot%20de%20passe%20incorrect.");
            exit();
        }
    }
}
?>

<section class="contact" id="contact">
    <div class="contactform">
        <a href="#" class="logom">
            <img src="images2/logo_removebg_31.png" alt="Logo" class="imgl" width="150px">
        </a>
        <h3>Connectez-vous</h3>

        <?php if (isset($_GET['error']) && !empty($_GET['error'])): ?>
            <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="inputboite">
                <label for="telephone">Numéro <span>*</span></label>
                <input type="tel" id="telephone" name="telephone" placeholder="Numéro" required 
                       pattern="\+?\d{10,15}" title="Veuillez entrer un numéro de téléphone valide (10 à 15 chiffres)">
            </div>
            <div class="inputboite">
                <label for="password">Mot de passe <span>*</span></label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required 
                       minlength="8" title="Le mot de passe doit comporter au moins 8 caractères">
            </div>
            <div class="inputboite">
                <button type="submit" class="connexion" name="login">Connexion</button>
            </div>
        </form>
        <div class="cree">
            <a href="inscrip.php">Créer un compte</a>
            <a href="mot_de_passe.php">Mot de passe oublié</a>
        </div>
    </div>
</section>
</body>
</html>
