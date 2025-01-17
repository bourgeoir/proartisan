<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="tailwindcss-colors.css">
    <link rel="stylesheet" href="Payement.css">
    <title>Payment Page</title>
</head>

<body>

    <!-- start: Payment -->
    <section class="payment-section">
        <div class="container">
            <div class="payment-wrapper">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><i class="ri-flashlight-fill"></i></div>
                        <div class="payment-header-title">Récapitulatif de la commande</div>
                        <p class="payment-header-description">Votre commande sera traitée dans les plus brefs délais et vous recevrez une notification dès son expédition. Pour toute question ou demande de modification, notre service client est à votre disposition.</p>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type">Pro</div>
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-name">Abonnement mensuel</div>
                                    <div class="payment-plan-info-price">3 500 fcfa par mois</div>
                                </div>
                                <a href="#" class="payment-plan-change">Changement</a>
                            </div>
                            <div class="payment-summary">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Frais supplémentaires</div>
                                    <div class="payment-summary-price">500 fcfa</div>
                                </div>
                               
                                <div class="payment-summary-divider"></div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-name">Total</div>
                                    <div class="payment-summary-price">3 500 fcfa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- div moyens de paiements -->

                <div class="payment-right">
                    <form action="" class="payment-form">
                        <h1 class="payment-title">Détails de paiement</h1>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="method-1" checked>
                            <label for="method-1" class="payment-method-item">
                                <img src="Abon_images/orange.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-4">
                            <label for="method-4" class="payment-method-item">
                                <img src="Abon_images/wave.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-3">
                            <label for="method-3" class="payment-method-item">
                                <img src="Abon_images/mtn.jpg" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-2">
                            <label for="method-2" class="payment-method-item">
                                <img src="Abon_images/moov.png" alt="">
                            </label>
                        </div>

                        <!-- div formulaire -->
                        <div class="payment-form-group">
                            <input type="email" placeholder=" " class="payment-form-control" id="email">
                            <label for="email" class="payment-form-label payment-form-label-required">ODOH2107962024</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="card-number">
                            <label for="card-number" class="payment-form-label payment-form-label-required">Numéro de prélèvement</label>
                        </div>
                        <div class="payment-form-group-flex">
                            <div class="payment-form-group">
                                <input type="date" placeholder=" " class="payment-form-control" id="expiry-date">
                                <label for="expiry-date" class="payment-form-label payment-form-label-required">Date de paiement</label>
                            </div>
                            <!-- <div class="payment-form-group">
                                <input type="text" placeholder=" " class="payment-form-control" id="cvv">
                                <label for="cvv" class="payment-form-label payment-form-label-required">CVV</label>
                            </div> -->
                        </div>
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i><a href="payement.php">Payer</a></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Payment -->

</body>

</html>