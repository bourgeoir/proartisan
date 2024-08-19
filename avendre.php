<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Nos experts/yao.css">
    <link rel="stylesheet" href="profiledel'artisan.css">
    <title>Œuvre de Menuiserie</title>
    <!-- Inclusion du CSS de Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Inclusion de Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Inclusion du CSS pour les styles personnalisés -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .product-info {
            max-width: 500px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .product-info h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .product-info p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .product-info p strong {
            font-weight: bold;
        }
        .buy-button {
            display: block;
            width: 200px;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px 0;
            text-align: center;
            text-decoration: none;
        }
        .buy-button:hover {
            background-color: #0056b3;
        }
        .reseaux {
            margin-top: 20px;
        }
        .reseaux h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .reseaux p {
            margin: 10px 0;
        }
        .icone {
            display: flex;
            gap: 15px;
        }
        .icone a {
            color: #007BFF;
            font-size: 24px;
            text-decoration: none;
        }
        .swiper-container {
            width: 100%;
            height: 400px;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }
        .swiper-button-next, .swiper-button-prev {
            color: #007BFF;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            cursor: pointer;
        }
        .swiper-button-next {
            right: 10px;
        }
        .swiper-button-prev {
            left: 10px;
        }
        .map-container {
            margin-top: 20px;
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 100%; /* Assure que le conteneur ne dépasse pas la largeur disponible */
        }
        #map {
            width: 100%;
            height: 300px;
            border-radius: 8px;
            box-sizing: border-box; /* Assure que le padding et les bordures sont inclus dans la largeur totale */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-info">
            <h1>Sculpture Artisanale</h1>
            <p><strong>Description du Produit :</strong> Cette sculpture artisanale est réalisée à la main avec une attention méticuleuse aux détails. Elle apporte une touche d'art et de sophistication à tout espace intérieur.</p>
            <p><strong>Prix :</strong> 450 000 FCFA</p>
            <p><strong>Options de Personnalisation :</strong> Matériau (bois, pierre, métal), Dimensions sur mesure, Finition (patinée, polie)</p>
            <p><strong>Disponibilité :</strong> En stock</p>
            <p><strong>Avis et Évaluations des Clients :</strong> 
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-alt checked"></span> 
                4.8 étoiles sur 5
            </p>
            <p><strong>Spécifications Techniques :</strong> Dimensions, Matériau (bois de rose, marbre), Poids</p>
            <p><strong>Instructions d'Utilisation :</strong> Nettoyer avec un chiffon doux, éviter l'exposition directe au soleil</p>
            <p><strong>Options de Livraison :</strong> Livraison sous 7-10 jours, frais de livraison gratuits</p>
            <p><strong>Politique de Retour :</strong> Retour sous 30 jours</p>
            <a href="payement.php" class="buy-button">Acheter</a>
            
            <div class="reseaux">
                <h2>Contacter l'artisan :</h2>
                <p>Pour toute demande ou information, n'hésitez pas à me contacter.</p>
                <div class="icone">
                    <a href="tel:+1234567890" onclick="alert('Appel téléphonique');" aria-label="Appel téléphonique"><i class="fas fa-phone"></i></a>
                    <a href="https://wa.me/1234567890" onclick="alert('Message WhatsApp');" aria-label="Message WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="sms:+1234567890" onclick="alert('Message SMS');" aria-label="Message SMS"><i class="fas fa-sms"></i></a>
                </div>
            </div>
        </div>
        
        

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images4/sculp7.jpg" alt="Image du produit 3"></div>
                <!-- Ajoute plus d'images ici si nécessaire -->
            </div>
            
            <!-- Ajouter les boutons de navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
    </div>

    <div class="related-products">
        <section class="image-section">
            <h1>mes oeuvres</h1>
            <div class="image-container">
                <div class="image-wrapper" id="imageWrapper">
                    <!-- Les images seront insérées ici par JavaScript -->
                </div>
            </div>
        </section>
    
        <script>
            const imageUrls = [
                'https://via.placeholder.com/150?text=Image+1',
                'https://via.placeholder.com/150?text=Image+2',
                'https://via.placeholder.com/150?text=Image+3',
                'https://via.placeholder.com/150?text=Image+4',
                'https://via.placeholder.com/150?text=Image+5',
                'https://via.placeholder.com/150?text=Image+6',
                'https://via.placeholder.com/150?text=Image+7',
                'https://via.placeholder.com/150?text=Image+8',
                'https://via.placeholder.com/150?text=Image+9',
                'https://via.placeholder.com/150?text=Image+10',
                'https://via.placeholder.com/150?text=Image+11',
                'https://via.placeholder.com/150?text=Image+12',
                // Ajoute autant d'images que tu veux ici
            ];
    
            function populateImages() {
                const imageWrapper = document.getElementById('imageWrapper');
                imageWrapper.innerHTML = ''; // Clear existing images
    
                imageUrls.forEach(url => {
                    const img = document.createElement('img');
                    img.src = url;
                    imageWrapper.appendChild(img);
                });
    
                // Duplicate the image list for infinite scrolling effect
                imageWrapper.innerHTML += imageWrapper.innerHTML;
            }
    
            function startSlideshow() {
                const imageWrapper = document.getElementById('imageWrapper');
                const imageCount = imageUrls.length;
                const imageWidth = document.querySelector('.image-wrapper img').offsetWidth;
                const totalWidth = imageWidth * imageCount;
    
                let position = 0;
    
                setInterval(() => {
                    position -= imageWidth;
                    if (Math.abs(position) >= totalWidth) {
                        position = 0;
                    }
                    imageWrapper.style.transform = `translateX(${position}px)`;
                }, 2000); // Change image every 2 seconds
            }
    
            // Initialize
            populateImages();
            startSlideshow();
        </script>
    </div>

    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Localisation de l'Artisan</title>
        <!-- Inclusion du CSS de Leaflet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            .map-container {
                margin-top: 20px;
                text-align: center;
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .show-location-button {
                padding: 10px 20px;
                font-size: 16px;
                color: #fff;
                background-color: #007BFF;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-bottom: 10px;
            }
            .show-location-button:hover {
                background-color: #0056b3;
            }
            #map {
                width: 100%;
                height: 300px; /* Ajuste la hauteur selon tes besoins */
                border-radius: 8px;
            }
        </style>
   
        <div class="map-container">
            <h2>Localisation de l'Artisan</h2>
            <button id="show-location" class="show-location-button">Voir la localisation</button>
            <div id="map"></div>
        </div>
    
        <!-- Inclusion des scripts de Leaflet -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Initialisation de la carte avec Leaflet
                var map = L.map('map').setView([48.8584, 2.2945], 13); // Coordonnées de Paris pour l'exemple
    
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);
    
                var artisanLocation = [48.8584, 2.2945]; // Coordonnées de l'artisan (exemple)
    
                var marker = L.marker(artisanLocation).addTo(map)
                    .bindPopup('Je suis ici!')
                    .openPopup();
    
                // Fonction pour centrer la carte sur la localisation de l'artisan
                function showArtisanLocation() {
                    map.setView(artisanLocation, 13); // Centrer la carte sur l'artisan
                    marker.openPopup(); // Ouvrir le popup du marqueur
                }
    
                // Ajouter un événement au bouton
                document.getElementById('show-location').addEventListener('click', showArtisanLocation);
            });
        </script>
    </body>
    </html>
    
