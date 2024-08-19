<?php
session_start(); // Démarrer la session
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <section class="contact" id="contact">
        <div class="contactform">
            <a href="#" class="logom">
                <img src="images2/logo_removebg_31.png" alt="Logo" class="imgl" width="150px">
            </a>

            <!-- formulaire d'inscription -->
            <form method="post" action="traitement.php">
                <h1><label for="">S'inscrire</label></h1>
                <!-- Affichage des erreurs -->
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="error"><?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></div>
                <?php endif; ?>
                
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="success"><?php echo htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?></div>
                <?php endif; ?>

                <div class="inputboite">
                    <div class="inputboite1">
                        <label for="">Informations personnelles <span>*</span></label>
                        <div class="inputboit1">
                            <input type="text" name="prenom" placeholder="Prénoms" required pattern="[A-Za-zÀ-ÖØ-ÿ\s-]{2,}" title="Veuillez entrer un prénom valide (lettres uniquement, 2 caractères minimum)">
                            <input type="text" name="nom" placeholder="Nom de Famille" required pattern="[A-Za-zÀ-ÖØ-ÿ\s-]{2,}" title="Veuillez entrer un nom de famille valide (lettres uniquement, 2 caractères minimum)">
                        </div>

                        <br>
                        <label for="matrimoniale">Situation matrimoniale <span>*</span></label>
                        <div class="inputboit1">
                            <select id="matrimoniale" name="matrimoniale" required>
                                <option value="celibataire">Célibataire</option>
                                <option value="marie">Marié(e)</option>
                            </select>
                        </div>
                        <br>
                        <label for="sexe">Sexe <span>*</span></label>
                        <div class="inputboit2">
                            <label for="sexe_homme">Homme<input type="radio" id="sexe_homme" name="sexe" value="Homme" checked></label>
                            
                            <label for="sexe_femme">Femme<input type="radio" id="sexe_femme" name="sexe" value="Femme"></label>
                            
                        </div>
                        <br>
                        <label for="date_naissance">Date de Naissance <span>*</span></label>
                        <div class="inputboit1">
                            <input type="date" id="date_naissance" name="date_naissance" required>
                            <input type="text" name="pays_residence" placeholder="Pays de Résidence" required pattern="[A-Za-zÀ-ÖØ-ÿ\s-]{2,}" title="Veuillez entrer un pays valide (lettres uniquement, 2 caractères minimum)">
                        </div>
                        <br>
                    </div>
                    <br>
                    <label for="">Localisation <span>*</span></label>
                    <div class="inputboit2">
                        <input type="text" name="ville" placeholder="Ville" required pattern="[A-Za-zÀ-ÖØ-ÿ\s-]{2,}" title="Veuillez entrer une ville valide (lettres uniquement, 2 caractères minimum)">
                        <input type="text" name="commune" placeholder="Commune" required pattern="[A-Za-zÀ-ÖØ-ÿ\s-]{2,}" title="Veuillez entrer une commune valide (lettres uniquement, 2 caractères minimum)">
                        <input type="text" name="quartier" placeholder="Quartier" required pattern="[A-Za-zÀ-ÖØ-ÿ\s-]{2,}" title="Veuillez entrer un quartier valide (lettres uniquement, 2 caractères minimum)">
                    </div>
                    <br>
                    <label for="telephone">Paramètres de connexion <span>*</span></label>
                    <div class="inputboit1">
                        <input type="tel" id="telephone" name="telephone" placeholder="Numéro de téléphone" class="telephone" required pattern="\+?\d{10,15}" title="Veuillez entrer un numéro de téléphone valide (10 à 15 chiffres)">
                    </div>

                    <!-- role -->
                    <label for="role">Choisissez un rôle <span>*</span></label>
                    <select id="role" name="role" required>
                        <option value="client">Client</option>
                        <option value="artisan">Artisan</option>
                    </select>
                    <br>

                    <br>
                    <div class="inputboit1">
                        <input type="password" name="password" placeholder="Nouveau mot de passe" required minlength="8" title="Le mot de passe doit comporter au moins 8 caractères">
                        <input type="password" name="confirm_password" placeholder="Confirmation" required minlength="8" title="La confirmation du mot de passe doit comporter au moins 8 caractères">
                    </div>
                    <div class="cree">
                        <a href="#" class="annuler">Annuler</a>
                        <button type="submit" name="ok" class="enregistrer">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </section> 
</body>
</html>
