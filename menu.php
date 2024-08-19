<?php
session_start();
?>
<nav>
    <ul>
        
        <!-- redirige acceuil vers la page d'acceuil du site web proartisan -->

        <li><a href="index.php">Accueil</a></li>
        <?php if (isset($_SESSION['role'])): ?>
            <?php if ($_SESSION['role'] == 'artisan'): ?>
                <li><a href="artisan_dashboard.php">Tableau de Bord Artisan</a></li>
            <?php elseif ($_SESSION['role'] == 'client'): ?>
                <li><a href="client_dashboard.php">Tableau de Bord Client</a></li>
            <?php endif; ?>
            <li><a href="logout.php">Déconnexion</a></li>
        <?php else: ?>
            <li><a href="login.php">Connexion</a></li>
            <li><a href="inscrip.php">Inscription</a></li>
        <?php endif; ?>
    </ul>
</nav>
