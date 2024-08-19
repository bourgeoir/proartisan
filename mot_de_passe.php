<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mot de passe oublié</title>
    <link rel="stylesheet" href="mot de passe.css">
</head>
<body>
    <section class="contact" id="contact">
        <div class="contactform">
           <a href="#" class="logom"> <img 
               src="/myapp/images/logo_removebg_31.png"   alt=""
                class="imgl" width="150px">
           </a>
            <h3>après validation, vous recevrez un SMS avec les paramètre de réinitialisation du mot de passe</h3>
            <p></p>
            <div class="inputboite">
               <label for="">Numero de téléphone <span>*</span></label>
                <input type="text" placeholder="Numero" required>
            </div>

            <div class="inputboite">
                <label for="">Nouveau mot de passe<span>*</span></label>
                 <input type="password" placeholder="password" required>
             </div>
             <div class="inputboite">
                <label for="">Confirmation<span>*</span></label>
                 <input type="password" placeholder="password" required>
             </div>
            
            <div class="cree">
            <a href="resetPassword.php">réinitialiser</a>
            <a href="login.php">Annuler</a>
            </div>
        </div>
    </section> 
</body>
</html>