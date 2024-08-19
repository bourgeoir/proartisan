<?php
// Inclusion du fichier d'authentification
include('auth.php');

// Vérifie que l'utilisateur est authentifié et qu'il est un client
checkAuth('client');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client_dashbaord.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="/Categorie/Categorie.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Mon Site Artisanal</title>
   
</head>
<body>
    <div class="header">
        <img src="images4/logo_removebg_31.png" width="100px" alt="">
        <div class="header-item" id="home">Accueil</div>
        <div class="header-item" id="categories">Catégories</div>
        <div class="header-item" id="profile">Compte</div>
        <div class="header-item" id="cart">Panier</div>
        <div class="header-item" id="search-artisan">Rechercher un Artisan</div>
       
    
    </div>
    <div class="content" id="home-content">
        <div class="blog-post">
            <div class="blog-title">Bienvenue sur notre site artisanal</div>
            <div class="blog-content">
                Découvrez les meilleures créations de nos artisans locaux. Nous proposons une variété de produits faits à la main, chacun avec une histoire unique.
            
            </div>
        </div>
        
        <div class="blog-post">
            <div class="blog-title">Dernières Nouvelles</div>
            <div id="home" class="section">
                        <!-- Nouveau carrousel de petites images -->
                      
                                <marquee behavior="alternate" direction="">
                                    <a href="categorie.php">
                                        <img src="images4/n (1).jpeg" alt="Small Image 1">
                                        <img src="images4/n (2).jpeg" alt="Small Image 1">
                                        <img src="images4/n (3).jpeg" alt="Small Image 1">
                                        <img src="images4/n (4).jpeg" alt="Small Image 1">
                                        <img src="images4/n (5).jpeg" alt="Small Image 1">
                                        <img src="images4/n (6).jpeg" alt="Small Image 1">
                                        <img src="images4/n (7).jpeg" alt="Small Image 1">
                                        <img src="images4/n (8).jpeg" alt="Small Image 1">
                                        <img src="images4/n (9).jpeg" alt="Small Image 1">
                                        <img src="images4/n (10).jpeg" alt="Small Image 1">
                                        <img src="images4/n (11).jpeg" alt="Small Image 1">

                                    </a>
                                </marquee>  
                          <!-- Carrousel d'images -->
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images4/WhatsApp Image 2024-08-01 at 21.02.38.jpeg" alt="Image 1" class="carousel-img">
                        </div>
                        <div class="carousel-item">
                            <img src="images4/WhatsApp Image 2024-08-01 at 21.02.39.jpeg" alt="Image 2" class="carousel-img">
                        </div>
                        <div class="carousel-item">
                            <img src="images4/WhatsApp Image 2024-08-01 at 21.02.40.jpeg" alt="Image 3" class="carousel-img">
                        </div>
                        <div class="carousel-item">
                            <img src="images4/image_plusieurs_artisans.jpeg" alt="Image 4" class="carousel-img">
                        </div>
                    </div>
                </div>
                    </div>
                
                
                        <script>
                            function showImages(category) {
                                // Masquer tous les conteneurs d'images
                                var containers = document.querySelectorAll('.image-container');
                                containers.forEach(function(container) {
                                    container.style.display = 'none';
                                });
                    
                                // Afficher le conteneur d'images correspondant à la catégorie sélectionnée
                                var selectedContainer = document.getElementById(category);
                                if (selectedContainer) {
                                    selectedContainer.style.display = 'block';
                                }
                            }
                        </script>
                    

    
                </div>
                  <!-- Carrousel d'images -->
                  <section class="section">
                    
                    <h1>Catégorie</h1>
                    <div class="image-container">
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Boucher" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Boucher</h5>
                                <p class="card-text">Découvrez l'art de la boucherie avec des produits de qualité, préparés par des experts qui allient savoir-faire traditionnel et techniques modernes pour offrir des viandes savoureuses et parfaitement découpées.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Boulanger" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Boulanger</h5>
                                <p class="card-text">Explorez le monde de la boulangerie avec des pains et pâtisseries artisanaux, élaborés avec passion et des ingrédients de qualité pour un goût authentique et un croustillant incomparable.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Chocolatier-confiseur" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Chocolatier-confiseur</h5>
                                <p class="card-text">Savourez des créations chocolatées et confiseries faites main, réalisées avec des techniques artisanales et des ingrédients raffinés pour un plaisir gustatif exquis.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Artisan glacier" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Artisan glacier</h5>
                                <p class="card-text">Découvrez des glaces artisanales créées avec des recettes traditionnelles et des ingrédients frais pour une expérience rafraîchissante et gourmande.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Tourier" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Tourier</h5>
                                <p class="card-text">Dégustez des pâtisseries tourières artisanales, préparées avec soin pour offrir une texture légère et des saveurs authentiques qui raviront vos papilles.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Poissonnier" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Poissonnier</h5>
                                <p class="card-text">Explorez une gamme de poissons et fruits de mer frais, sélectionnés avec soin pour leur qualité et leur fraîcheur, préparés par des experts du domaine.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Pâtissier" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Pâtissier</h5>
                                <p class="card-text">Découvrez une variété de pâtisseries raffinées, réalisées avec des techniques traditionnelles pour offrir des douceurs élégantes et délicieuses.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Cordonnier" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Cordonnier</h5>
                                <p class="card-text">Accédez à des services de réparation et d'entretien de chaussures, assurés par des artisans qualifiés qui allient expertise et soin du détail.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Ébéniste" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Ébéniste</h5>
                                <p class="card-text">Découvrez des meubles en bois uniques, fabriqués sur mesure avec des techniques artisanales pour créer des pièces élégantes et fonctionnelles.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Ferronnier d'art" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Ferronnier d'art</h5>
                                <p class="card-text">Admirez des créations en métal forgé, réalisées avec un savoir-faire exceptionnel pour créer des œuvres d'art fonctionnelles et esthétiques.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Fleuriste" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Fleuriste</h5>
                                <p class="card-text">Profitez de compositions florales uniques, créées avec des fleurs fraîches et des arrangements artistiques pour toutes les occasions.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Sculpteur" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Sculpteur</h5>
                                <p class="card-text">Explorez des sculptures artistiques réalisées avec passion et maîtrise, offrant des œuvres uniques qui capturent l'essence de l'art et de la créativité.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Graveur" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Graveur</h5>
                                <p class="card-text">Découvrez des gravures personnalisées sur divers supports, réalisées avec précision et un souci du détail pour créer des pièces uniques.</p>
                                <a href="categorie.php" class="btn btn-primary">Voir plus</a>                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Vitrailliste (maître verrier)" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Vitrailliste (maître verrier)</h5>
                                <p class="card-text">Admirez des vitraux colorés et élaborés, réalisés avec un savoir-faire traditionnel pour créer des œuvres d'art en verre qui illuminent vos espaces.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Peintre-fileur-décorateur" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Peintre-fileur-décorateur</h5>
                                <p class="card-text">Découvrez des peintures décoratives et des finitions sur mesure, réalisées avec expertise pour embellir vos intérieurs avec élégance et créativité.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Plombier" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Plombier</h5>
                                <p class="card-text">Accédez à des services de plomberie professionnels, assurés par des experts qualifiés pour des installations et réparations fiables et efficaces.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Peintre en bâtiment" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Peintre en bâtiment</h5>
                                <p class="card-text">Découvrez des services de peinture en bâtiment, offrant des finitions impeccables pour transformer et rafraîchir vos espaces intérieurs et extérieurs.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Maître Tailleur ou Tailleur" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Maître Tailleur ou Tailleur</h5>
                                <p class="card-text">Profitez de services de couture sur mesure, réalisés par des tailleurs experts pour créer des vêtements élégants parfaitement adaptés à votre silhouette.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Maréchal-ferrant" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Maréchal-ferrant</h5>
                                <p class="card-text">Découvrez des services de ferrage de chevaux, assurés par des experts pour garantir le confort et la performance de vos animaux.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                        <div class="category-card">
                            <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Taxidermiste" class="category-img">
                            <div class="category-card-body">
                                <h5 class="card-title">Taxidermiste</h5>
                                <p class="card-text">Admirez des œuvres de taxidermie réalisées avec précision, offrant des pièces conservées pour les amateurs d'animaux naturalisés.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                     
                    </div>
                    <div id="home" class="section">
                        <!-- Nouveau carrousel de petites images -->
                      <H1>produit a vendre</H1>
                                <marquee behavior="alternate" direction=""><img src="images4/n (1).jpeg" alt="Small Image 1">
                                    <a href="avendre.php"><img src="images4/n (2).jpeg" alt="Small Image 1">
                                        <img src="images4/sculp1.jpg" alt="Small Image 1">
                                        <img src="images4/sculp2.jpg" alt="Small Image 1">
                                        <img src="images4/sculp3.jpg" alt="Small Image 1">
                                        <img src="images4/sculp4.jpg" alt="Small Image 1">
                                        <img src="images4/sculp5.jpg" alt="Small Image 1">
                                        <img src="images4/sculp6.jpg" alt="Small Image 1">
                                        <img src="images4/sculp7.jpg" alt="Small Image 1">
                                    </a>
                                        
                                </marquee>  
                          <!-- Carrousel d'images -->
                </section>      
                <section class="info-section">
                    <div class="info-container">
                        <div class="info-card">
                            <h2 class="info-title">Nos Services</h2>
                            <p class="info-description">Découvrez la gamme complète de nos services et comment nous pouvons vous aider à réaliser vos projets.</p>
                            <a href="#" class="info-link">En savoir plus</a>
                        </div>
                        <div class="info-card">
                            <h2 class="info-title">À Propos de Nous</h2>
                            <p class="info-description">Apprenez-en davantage sur notre histoire, notre équipe et notre mission pour offrir des services de qualité.</p>
                            <a href="#" class="info-link">Lire notre histoire</a>
                        </div>
                        <div class="info-card">
                            <h2 class="info-title">Contactez-Nous</h2>
                            <p class="info-description">Nous sommes là pour répondre à toutes vos questions. N'hésitez pas à nous contacter pour toute demande ou information.</p>
                            <a href="#" class="info-link">Nous contacter</a>
                        </div>
                    </div>
                </section>
            </div>
        
           
           
           <style>
    .info-section {
padding: 40px 20px;
background-color: #f8f9fa;
text-align: center;
}

.info-container {
display: flex;
flex-wrap: wrap;
justify-content: center;
gap: 20px;
}

.info-card {
background-color: #ffffff;
border: 1px solid #e0e0e0;
border-radius: 8px;
padding: 20px;
width: 300px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.info-card:hover {
box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
transform: translateY(-5px);
}

.info-title {
font-size: 1.5em;
margin-bottom: 10px;
color: #333333;
}

.info-description {
font-size: 1em;
margin-bottom: 20px;
color: #666666;
}

.info-link {
font-size: 1em;
color: #007bff;
text-decoration: none;
font-weight: bold;
}

.info-link:hover {
text-decoration: underline;
}

             </style>                
        
            
        </div>
        
    </div>

    
    <div class="content" id="categories-content">
        <section class="section">
            <h1>Catégorie</h1>
            <div class="image-container">
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Boucher" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Boucher</h5>
                        <p class="card-text">Découvrez l'art de la boucherie avec des produits de qualité, préparés par des experts qui allient savoir-faire traditionnel et techniques modernes pour offrir des viandes savoureuses et parfaitement découpées.</p>
                        <a href="categorie.php" class="btn btn-primary">Voir plus</a>                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Boulanger" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Boulanger</h5>
                        <p class="card-text">Explorez le monde de la boulangerie avec des pains et pâtisseries artisanaux, élaborés avec passion et des ingrédients de qualité pour un goût authentique et un croustillant incomparable.</p>
                        <a href="categorie.php" class="btn btn-primary">Voir plus</a>                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Chocolatier-confiseur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Chocolatier-confiseur</h5>
                        <p class="card-text">Savourez des créations chocolatées et confiseries faites main, réalisées avec des techniques artisanales et des ingrédients raffinés pour un plaisir gustatif exquis.</p>
                        <a href="categorie.php" class="btn btn-primary">Voir plus</a>                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Artisan glacier" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Artisan glacier</h5>
                        <p class="card-text">Découvrez des glaces artisanales créées avec des recettes traditionnelles et des ingrédients frais pour une expérience rafraîchissante et gourmande.</p>
                        <a href="categorie.php" class="btn btn-primary">Voir plus</a>                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Tourier" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Tourier</h5>
                        <p class="card-text">Dégustez des pâtisseries tourières artisanales, préparées avec soin pour offrir une texture légère et des saveurs authentiques qui raviront vos papilles.</p>
                        <a href="categorie.php" class="btn btn-primary">Voir plus</a>                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Poissonnier" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Poissonnier</h5>
                        <p class="card-text">Explorez une gamme de poissons et fruits de mer frais, sélectionnés avec soin pour leur qualité et leur fraîcheur, préparés par des experts du domaine.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Pâtissier" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Pâtissier</h5>
                        <p class="card-text">Découvrez une variété de pâtisseries raffinées, réalisées avec des techniques traditionnelles pour offrir des douceurs élégantes et délicieuses.</p>
                        <a href="categorie.php" class="btn btn-primary">Voir plus</a>                    </div>
                </div>
                <div class="category-card">
                    <img src="/images4/whats_app_image_20240629_at_15373111.jpeg" alt="Cordonnier" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Cordonnier</h5>
                        <p class="card-text">Accédez à des services de réparation et d'entretien de chaussures, assurés par des artisans qualifiés qui allient expertise et soin du détail.</p>
                        <a href="categorie.php" class="btn btn-primary">Voir plus</a>                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Ébéniste" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Ébéniste</h5>
                        <p class="card-text">Découvrez des meubles en bois uniques, fabriqués sur mesure avec des techniques artisanales pour créer des pièces élégantes et fonctionnelles.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Ferronnier d'art" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Ferronnier d'art</h5>
                        <p class="card-text">Admirez des créations en métal forgé, réalisées avec un savoir-faire exceptionnel pour créer des œuvres d'art fonctionnelles et esthétiques.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Fleuriste" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Fleuriste</h5>
                        <p class="card-text">Profitez de compositions florales uniques, créées avec des fleurs fraîches et des arrangements artistiques pour toutes les occasions.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Sculpteur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Sculpteur</h5>
                        <p class="card-text">Explorez des sculptures artistiques réalisées avec passion et maîtrise, offrant des œuvres uniques qui capturent l'essence de l'art et de la créativité.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Graveur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Graveur</h5>
                        <p class="card-text">Découvrez des gravures personnalisées sur divers supports, réalisées avec précision et un souci du détail pour créer des pièces uniques.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Vitrailliste (maître verrier)" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Vitrailliste (maître verrier)</h5>
                        <p class="card-text">Admirez des vitraux colorés et élaborés, réalisés avec un savoir-faire traditionnel pour créer des œuvres d'art en verre qui illuminent vos espaces.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Peintre-fileur-décorateur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Peintre-fileur-décorateur</h5>
                        <p class="card-text">Découvrez des peintures décoratives et des finitions sur mesure, réalisées avec expertise pour embellir vos intérieurs avec élégance et créativité.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Plombier" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Plombier</h5>
                        <p class="card-text">Accédez à des services de plomberie professionnels, assurés par des experts qualifiés pour des installations et réparations fiables et efficaces.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Peintre en bâtiment" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Peintre en bâtiment</h5>
                        <p class="card-text">Découvrez des services de peinture en bâtiment, offrant des finitions impeccables pour transformer et rafraîchir vos espaces intérieurs et extérieurs.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Maître Tailleur ou Tailleur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Maître Tailleur ou Tailleur</h5>
                        <p class="card-text">Profitez de services de couture sur mesure, réalisés par des tailleurs experts pour créer des vêtements élégants parfaitement adaptés à votre silhouette.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Peintre en décors" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Peintre en décors</h5>
                        <p class="card-text">Découvrez des décors peints à la main, créés avec soin pour ajouter des éléments artistiques et personnalisés à vos espaces.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Carreleur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Carreleur</h5>
                        <p class="card-text">Obtenez des services de carrelage professionnels, assurant une pose précise et esthétique pour tous vos projets de revêtement de sol et mural.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Chauffagiste" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Chauffagiste</h5>
                        <p class="card-text">Accédez à des solutions de chauffage performantes, assurées par des experts pour optimiser le confort thermique de votre intérieur.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Couvreur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Couvreur</h5>
                        <p class="card-text">Profitez de services de couverture de toiture fiables, réalisés par des professionnels pour assurer l'étanchéité et la durabilité de votre toit.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Maçon" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Maçon</h5>
                        <p class="card-text">Découvrez des services de maçonnerie de haute qualité, pour tous vos projets de construction et de rénovation, avec une attention particulière aux détails.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Tapissier d'ameublement" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Tapissier d'ameublement</h5>
                        <p class="card-text">Redonnez vie à vos meubles avec des services de tapisserie, offrant des rénovations élégantes et personnalisées pour un confort et un style renouvelés.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Coiffeur" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Coiffeur</h5>
                        <p class="card-text">Bénéficiez de coupes et coiffures personnalisées, réalisées par des experts en coiffure pour révéler votre style unique avec soin et professionnalisme.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Maréchal-ferrant" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Maréchal-ferrant</h5>
                        <p class="card-text">Découvrez des services de ferrage de chevaux, assurés par des experts pour garantir le confort et la performance de vos animaux.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Taxidermiste" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Taxidermiste</h5>
                        <p class="card-text">Admirez des œuvres de taxidermie réalisées avec précision, offrant des pièces conservées pour les amateurs d'animaux naturalisés.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Esthéticienne" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Esthéticienne</h5>
                        <p class="card-text">Profitez de soins de beauté professionnels, réalisés par des esthéticiennes qualifiées pour une peau éclatante et un bien-être total.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Fleuriste" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Fleuriste</h5>
                        <p class="card-text">Profitez de compositions florales uniques, créées avec des fleurs fraîches et des arrangements artistiques pour toutes les occasions.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Tailleur de pierre" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Tailleur de pierre</h5>
                        <p class="card-text">Découvrez des sculptures et ouvrages en pierre réalisés par des tailleurs de pierre experts, offrant des créations robustes et artistiques.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="images4/whats_app_image_20240629_at_15373111.jpeg" alt="Gemmologue" class="category-img">
                    <div class="category-card-body">
                        <h5 class="card-title">Gemmologue</h5>
                        <p class="card-text">Explorez des services d'expertise en gemmologie, incluant l'évaluation et la certification des pierres précieuses pour les amateurs et les collectionneurs.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="category-section">
            <h1>Catégories</h1>
            <div class="category-container">
                <a href="#" class="category-card">
                    <i class="fas fa-hamburger category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Alimentation</h5>
                        <p class="card-text">Découvrez nos produits alimentaires.</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <i class="fas fa-drumstick-bite category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Boucher</h5>
                        <p class="card-text">Découvrez nos bouchers spécialisés dans les produits de viande.</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <i class="fas fa-bread-slice category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Boulanger</h5>
                        <p class="card-text">Découvrez nos boulangers et leurs créations artisanales.</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <i class="fas fa-fish category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Poissonnier</h5>
                        <p class="card-text">Découvrez nos poissonniers offrant des produits frais et de qualité.</p>
                    </div>
                </a>
            </div>
        </section>
    
        <section class="category-section">
            <h1>Toutes les catégories</h1>
            <div class="category-container">
                <a href="#" class="category-card">
                    <i class="fas fa-utensils category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Alimentation</h5>
                        <p class="card-text">Découvrez nos métiers de l'alimentation.</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <i class="fas fa-hammer category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Fabrication</h5>
                        <p class="card-text">Découvrez nos métiers de fabrication, incluant des artisans et des fabricants.</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <i class="fas fa-building category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Bâtiment</h5>
                        <p class="card-text">Découvrez nos métiers du bâtiment, allant des maçons aux couvreurs.</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <i class="fas fa-concierge-bell category-icon"></i>
                    <div class="category-card-body">
                        <h5 class="card-title">Services</h5>
                        <p class="card-text">Découvrez nos métiers de service, incluant des coiffeurs et des esthéticiennes.</p>
                    </div>
                </a>
            </div>
        </section>
    </div>
    

    <div class="content" id="profile-content">
        <section class="profile-section">
            <h1>Profil</h1>
            <div class="profile-container">
                <!-- Photo de profil -->
                <div class="profile-photo">
                    <img src="https://via.placeholder.com/150" alt="Photo de profil" id="profileImg">
                    <button class="btn" onclick="document.getElementById('fileInput').click()">Changer la photo de profil</button>
                    <input type="file" id="fileInput" style="display: none;" onchange="changeProfilePhoto(event)">
                </div>
                <!-- Informations personnelles -->
                <div class="profile-info">
                    <p><strong>Nom:</strong> <span id="nom">Nom</span></p>
                    <p><strong>Prénom:</strong> <span id="prenom">Prénom</span></p>
                    <p><strong>Email:</strong> <span id="email">email@example.com</span></p>
                    <p><strong>Numéro de téléphone:</strong> <span id="numero">123-456-7890</span></p>
                    <p><strong>Localisation:</strong> <span id="localisation"></span></p>
                </div>
                <!-- Options du compte -->
                <div class="account-options">
                    <ul>
                    <li><a href="client/Mes commandes.php"><i class="fas fa-box"></i> Mes commandes/Mes Rendez-vous</a></li>
                                <li><a href="client/mot de passe oublier.php"><i class="fas fa-key"></i> Modifier le mot de passe</a></li>
                                <li><a href="client/modifierinfo.php"><i class="fas fa-user-edit"></i> Modifier mes informations</a></li>
                                <li><a href="client/Conditions générales.php"><i class="fas fa-file-contract"></i> Conditions générales</a></li>
                                <li><a href="client/Politique de retour.php"><i class="fas fa-undo"></i> Politique de retour</a></li>
                                <li><a href="client/support.php"><i class="fas fa-headset"></i> Support</a></li>
                                <li><a href="index.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                                 
                    </ul>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById('logout').addEventListener('click', function(event) {
                            event.preventDefault(); // Empêche la redirection par défaut
                            // Action pour déconnexion ici
                            // Exemple: appel API pour déconnexion, redirection, etc.
                            alert('Vous êtes maintenant déconnecté.');
                            // window.location.href = '/login.html'; // Rediriger vers la page de connexion
                        });
                    });
                    </script>
                    
            </div>
        </section>



        <!-- Contenu de la section Profil -->
      
    </div>

    <div class="content" id="cart-content">
        <section class="cart-section">
            <h1>Votre Panier</h1>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Nom</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemple de ligne de commande -->
                    <tr>
                        <td><img src="images4/images (1).jpeg" alt="Produit"></td>
                        <td>Produit 1</td>
                        <td>2</td>
                        <td>20€</td>
                        <td>40€</td>
                        <td><button class="btn btn-danger">Supprimer</button></td>
                    </tr>
                    <tr>
                        <td><img src="images4/images (2).jpeg" alt="Produit"></td>
                        <td>Produit 2</td>
                        <td>1</td>
                        <td>15€</td>
                        <td>15€</td>
                        <td><button class="btn btn-danger">Supprimer</button></td>
                    </tr>
                    <!-- Ajouter d'autres lignes de commande ici -->
                </tbody>
            </table>
            <div class="cart-buttons">
                <a href="proclient.php"><button class="btn">Continuer vos achats</button></a>
                <a href="/Abonnement/formPayement.php"> <button class="btn">Passer à la caisse</button></a>
            </div>
        </section>


        <!-- Contenu de la section Panier -->
        
    </div>
    <div class="content" id="search-artisan-content">
        <!-- Contenu de la section Rechercher un Artisan -->
        <h2>Rechercher un Artisan</h2>
        <p>Utilisez ce formulaire pour rechercher un artisan spécifique dans notre base de données.</p>
        <!-- Ajoutez un formulaire ou autre contenu pertinent ici -->
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            header {
                background-color: #003366;
                color: #fff;
                padding: 1em;
                text-align: center;
            }
            nav h1 img {
                max-width: 100px;
            }
            nav ul {
                list-style-type: none;
                padding: 0;
            }
            nav ul li {
                display: inline;
                margin-right: 15px;
            }
            nav ul li a {
                color: #fff;
                text-decoration: none;
            }
            form {
                margin: 20px;
            }
            form label, form select, form input {
                margin-right: 10px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
            }
            table th, table td {
                border: 1px solid #ddd;
                padding: 8px;
            }
            table th {
                background-color: #003366;
                color: #fff;
            }
            .footer {
                background-color: #003366;
                color: #fff;
                padding: 1em;
                text-align: center;
            }
            .reseaux span {
                display: block;
                margin-bottom: 10px;
            }
            .icone a {
                color: #fff;
                margin: 0 10px;
                text-decoration: none;
            }
            .icone i {
                font-size: 24px;
            }
            /* Couleurs */
:root {
    --primary-color: #007bff;
    --secondary-color: #0056b3;
    --accent-color: #ff6f61;
    --background-color: #f4f4f4;
    --text-color: #333333;
    --border-color: #dddddd;
}

/* Styles de base pour le site */
body {
    font-family: 'Open Sans', sans-serif;
    margin: 0;
    padding: 0;
    background-color: var(--background-color);
    color: var(--text-color);
}

.header {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: var(--primary-color);
    padding: 15px 20px;
    border-bottom: 2px solid var(--secondary-color);
}

.header-item {
    cursor: pointer;
    padding: 10px;
    color: white;
    font-family: 'Roboto', sans-serif;
    transition: background-color 0.3s, color 0.3s;
    font-size: 16px; /* Taille de texte des éléments de l'en-tête */
}

.header-item:hover {
    background-color: var(--secondary-color);
    color: #e0e0e0;
}

.content {
    padding: 20px;
    background-color: #fff;
    margin: 20px auto;
    max-width: 1200px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.blog-post {
    margin-bottom: 20px;
}

.blog-title {
    font-size: 28px; /* Taille du titre principal */
    margin-bottom: 10px;
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
}

.blog-content {
    font-size: 18px; /* Taille du texte du corps */
}

.small-image-carousel img {
    width: 100px;
    height: auto;
    margin-right: 10px;
    border-radius: 4px;
}

.category-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
}

.category-img {
    width: 100%;
    height: auto;
    border-radius: 4px;
}

.btn, .btn-primary {
    background-color: var(--primary-color);
    color: white;
    padding: 12px 20px;
    text-align: center;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    font-size: 16px; /* Taille du texte des boutons */
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: var(--secondary-color);
}

.scrolling-wrapper {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
}

.scrolling-wrapper img {
    display: inline-block;
    border-radius: 4px;
}

        </style>
        <form>
            <label for="pays">Pays :</label>
            <select id="pays" name="pays" onchange="updateVilles()">
                <option value="">Sélectionnez un pays</option>
                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                <option value="Mali">Mali</option>
                <option value="Ghana">Ghana</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Niger">Niger</option>
            </select>
    
            <label for="ville">Ville :</label>
            <select id="ville" name="ville" onchange="updateTable()">
                <option value="">Sélectionnez une ville</option>
            </select>
    
            <label for="activite">Activité :</label>
            <select id="activite" name="activite" onchange="updateTable()">
                <option value="">Toutes les activités</option>
                <option value="Artisanat d’art et de décoration">Artisanat d’art et de décoration</option>
                <option value="Mécanique">Mécanique</option>
                <option value="Couture">Couture</option>
                <option value="Agroalimentaire, alimentation, restauration">Agroalimentaire, alimentation, restauration</option>
                <option value="Maçonnerie">Maçonnerie</option>
                <option value="Transport">Transport</option>
                <option value="Menuiserie/Charpenterie">Menuiserie/Charpenterie</option>
                <option value="Spécialiste en froid">Spécialiste en froid</option>
                <option value="Boucherie">Boucherie</option>
                <option value="Bijouterie">Bijouterie</option>
                <option value="Vitrerie">Vitrerie</option>
                <option value="Coiffure">Coiffure</option>
                <option value="Vente de marchandises">Vente de marchandises</option>
                <option value="Electronique (réparateur TV, portable, etc)">Electronique (réparateur TV, portable, etc)</option>
                <option value="Tapisserie">Tapisserie</option>
                <option value="Audiovisuel et communication">Audiovisuel et communication</option>
                <option value="Hygiène et soins corporels">Hygiène et soins corporels</option>
                <option value="Briqueterie">Briqueterie</option>
            </select>
    
            <label for="recherche">Recherche par nom :</label>
            <input type="text" id="recherche" name="recherche" onkeyup="updateTable()" placeholder="Rechercher un artisan">
        </form>
    
        <table>
            <thead>
                <tr>
                    <th>Nom de l'artisan</th>
                    <th>Activité</th>
                    <th>Image</th>
                    <th>Demande de service</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Les lignes seront ajoutées ici dynamiquement -->
            </tbody>
        </table>
    
        <section class="footer">
            <div class="reseaux">
                <span>Connectez-vous sur nos réseaux sociaux :</span>
            </div>
            <div class="icone">
                <a href="https://www.facebook.com/profile.php?id=61563751701528&mibextid=ZbWKwL" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="me-4 text-reset">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.youtube.com/watch?v=YjCqZ8mlJiU&feature=shared" class="me-4 text-reset">
                    <i class="fab fa-youtube"></i>
                </a>
                
            </div>
        </section>
    
        <script>
            const artisansParVille = {
                "Côte d'Ivoire": {
                    Abidjan: [
                        {nom: "Artisan 1", activite: "Artisanat d’art et de décoration", image: "image1.jpg", demande: "Service de décoration intérieure"},
                        {nom: "Artisan 2", activite: "Mécanique", image: "image2.jpg", demande: "Réparation de véhicules"},
                        {nom: "Artisan 3", activite: "Couture", image: "image3.jpg", demande: "Création de vêtements"},
                        {nom: "Artisan 4", activite: "Agroalimentaire, alimentation, restauration", image: "image4.jpg", demande: "Traiteur"},
                        {nom: "Artisan 5", activite: "Maçonnerie", image: "image5.jpg", demande: "Construction et rénovation"},
                        {nom: "Artisan 6", activite: "Transport", image: "image6.jpg", demande: "Services de transport"},
                        {nom: "Artisan 7", activite: "Menuiserie/Charpenterie", image: "image7.jpg", demande: "Mobilier en bois"}
                    ],
                    Anyama: [
                        {nom: "Artisan 8", activite: "Spécialiste en froid", image: "image8.jpg", demande: "Installation de climatiseurs"},
                        {nom: "Artisan 9", activite: "Boucherie", image: "image9.jpg", demande: "Viande fraîche"},
                        {nom: "Artisan 10", activite: "Bijouterie", image: "image10.jpg", demande: "Création et réparation de bijoux"}
                    ],
                    
                    Bingerville: [
                        {nom: "Artisan 16", activite: "Maçonnerie", image: "image16.jpg", demande: "Construction et rénovation"},
                        {nom: "Artisan 17", activite: "Transport", image: "image17.jpg", demande: "Services de transport"},
                        {nom: "Artisan 18", activite: "Menuiserie/Charpenterie", image: "image18.jpg", demande: "Mobilier en bois"},
                        {nom: "Artisan 19", activite: "Coiffure", image: "image19.jpg", demande: "Services de coiffure"},
                        {nom: "Artisan 20", activite: "Vente de marchandises", image: "image20.jpg", demande: "Boutique d'articles divers"}
                    ],
                    Cocody: [
                        {nom: "Artisan 21", activite: "Electronique (réparateur TV, portable, etc)", image: "image21.jpg", demande: "Réparation d'appareils électroniques"},
                        {nom: "Artisan 22", activite: "Tapisserie", image: "image22.jpg", demande: "Rénovation de meubles"}
                    ],
                    Koumassi: [
                        {nom: "Artisan 23", activite: "Audiovisuel et communication", image: "image23.jpg", demande: "Production vidéo"},
                        {nom: "Artisan 24", activite: "Spécialiste en froid", image: "image24.jpg", demande: "Installation de systèmes de réfrigération"}
                    ],
                    Marcory: [
                        {nom: "Artisan 25", activite: "Boucherie", image: "image25.jpg", demande: "Viande fraîche"},
                        {nom: "Artisan 26", activite: "Bijouterie", image: "image26.jpg", demande: "Création et réparation de bijoux"},
                        {nom: "Artisan 27", activite: "Hygiène et soins corporels", image: "image27.jpg", demande: "Soins et beauté"}
                    ],
                    Plateau: [
                        {nom: "Artisan 28", activite: "Briqueterie", image: "image28.jpg", demande: "Fabrication de briques"},
                        {nom: "Artisan 29", activite: "Vitrerie", image: "image29.jpg", demande: "Réparation de vitrages"}
                    ],
                    "Port Bouet": [
                        {nom: "Artisan 30", activite: "Menuiserie/Charpenterie", image: "image30.jpg", demande: "Mobilier en bois"},
                        {nom: "Artisan 31", activite: "Coiffure", image: "image31.jpg", demande: "Services de coiffure"}
                    ],
                    Treichville: [
                        {nom: "Artisan 32", activite: "Vente de marchandises", image: "image32.jpg", demande: "Boutique d'articles divers"},
                        {nom: "Artisan 33", activite: "Electronique (réparateur TV, portable, etc)", image: "image33.jpg", demande: "Réparation d'appareils électroniques"}
                    ],
                    Yopougon: [
                        {nom: "Artisan 34", activite: "Hygiène et soins corporels", image: "image34.jpg", demande: "Soins et beauté"},
                        {nom: "Artisan 35", activite: "Briqueterie", image: "image35.jpg", demande: "Fabrication de briques"}
                    ],
                    Attécoubé: [
                        {nom: "Artisan 11", activite: "Vitrerie", image: "image11.jpg", demande: "Réparation de vitrages"},
                        {nom: "Artisan 12", activite: "Artisanat d’art et de décoration", image: "image12.jpg", demande: "Décoration intérieure"},
                        {nom: "Artisan 13", activite: "Mécanique", image: "image13.jpg", demande: "Réparation de véhicules"}
                    ],
                    Abobo: [
                        {nom: "Artisan 14", activite: "Couture", image: "image14.jpg", demande: "Création de vêtements"},
                        {nom: "Artisan 15", activite: "Agroalimentaire, alimentation, restauration", image: "image15.jpg", demande: "Traiteur"}
                    ]
                },
                Mali: {
                    Bamako: [
                        {nom: "Artisan 16", activite: "Maçonnerie", image: "image16.jpg", demande: "Construction et rénovation"},
                        {nom: "Artisan 17", activite: "Transport", image: "image17.jpg", demande: "Services de transport"}
                    ]
                },
                Ghana: {
                    Accra: [
                        {nom: "Artisan 18", activite: "Menuiserie/Charpenterie", image: "image18.jpg", demande: "Mobilier en bois"},
                        {nom: "Artisan 19", activite: "Spécialiste en froid", image: "image19.jpg", demande: "Installation de climatiseurs"}
                    ]
                },
                Burkina : {
                    Ouagadougou: [
                        {nom: "Artisan 20", activite: "Boucherie", image: "image20.jpg", demande: "Viande fraîche"},
                        {nom: "Artisan 21", activite: "Bijouterie", image: "image21.jpg", demande: "Création et réparation de bijoux"}
                    ]
                },
                Niger: {
                    Niamey: [
                        {nom: "Artisan 22", activite: "Vitrerie", image: "image22.jpg", demande: "Réparation de vitrages"},
                        {nom: "Artisan 23", activite: "Artisanat d’art et de décoration", image: "image23.jpg", demande: "Décoration intérieure"}
                    ]
                }
            };
    
            function updateVilles() {
                const pays = document.getElementById('pays').value;
                const villesSelect = document.getElementById('ville');
                villesSelect.innerHTML = '<option value="">Sélectionnez une ville</option>';
    
                if (pays) {
                    const villes = Object.keys(artisansParVille[pays] || {});
                    villes.forEach(ville => {
                        const option = document.createElement('option');
                        option.value = ville;
                        option.textContent = ville;
                        villesSelect.appendChild(option);
                    });
                }
            }
    
            function updateTable() {
                const pays = document.getElementById('pays').value;
                const ville = document.getElementById('ville').value;
                const activite = document.getElementById('activite').value;
                const recherche = document.getElementById('recherche').value.toLowerCase();
                const tableBody = document.getElementById('table-body');
                tableBody.innerHTML = '';
    
                if (pays && ville) {
                    const artisans = artisansParVille[pays][ville] || [];
                    artisans.forEach(artisan => {
                        if (activite === '' || artisan.activite === activite) {
                            if (artisan.nom.toLowerCase().includes(recherche)) {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                    <td>${artisan.nom}</td>
                                    <td>${artisan.activite}</td>
                                    <td><img src="${artisan.image}" alt="${artisan.nom}" style="width:100px;"></td>
                                    <td>${artisan.demande}</td>
                                    <td>
        <a href="https://wa.me/?text=Je%20souhaite%20commander%20le%20service%20de%20${encodeURIComponent(artisan.nom)}" onclick="showAlert('WhatsApp', '${artisan.nom}')" target="_blank">WhatsApp</a> |
        <a href="tel:+1234567890" onclick="showAlert('Téléphone', '${artisan.nom}')">Téléphone</a> |
        <a href="sms:+1234567890" onclick="showAlert('SMS', '${artisan.nom}')">SMS</a>
    </td>
    
            
                                `;
                                tableBody.appendChild(row);
                            }
                        }
                    });
                }
            }
    
            function showAlert(type, nom) {
        alert(`Conseils de sécurité :\n\n1 - Ne pas envoyer de paiements sans avoir vérifié le produit.\n2 - Ne pas envoyer d'argent par des moyens de transfert d'argent, par virement bancaire ou par n'importe quels autres moyens.\n3 - Donner rendez-vous au vendeur dans un lieu public à une heure de passage
      
        ${type} pour ${nom}`);
    }
    
            function handleLinkClick(url) {
                alert(`Vous allez être redirigé vers ${url}`);
                window.location.href = url;
            }
    
            document.querySelectorAll('a[href^="tel:"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    handleLinkClick(this.href);
                });
            });
    
            document.querySelectorAll('a[href^="sms:"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    handleLinkClick(this.href);
                });
            });
    
            document.querySelectorAll('a[href^="https://wa.me/"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    handleLinkClick(this.href);
                });
            });
           
    
        </script>
    </div>

    <script>
        // Fonction pour afficher le contenu correspondant lorsque l'on clique sur un élément de la barre de navigation
        function showContent(contentId) {
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.style.display = 'none';
            });

            document.getElementById(contentId).style.display = 'block';
        }

        // Écouteurs d'événements pour chaque élément de la barre de navigation
        document.getElementById('home').addEventListener('click', function() {
            showContent('home-content');
        });

        document.getElementById('categories').addEventListener('click', function() {
            showContent('categories-content');
        });

        document.getElementById('profile').addEventListener('click', function() {
            showContent('profile-content');
        });

        document.getElementById('cart').addEventListener('click', function() {
            showContent('cart-content');
        });

        document.getElementById('search-artisan').addEventListener('click', function() {
            showContent('search-artisan-content');
        });

        // Initialiser l'affichage de la section par défaut (Accueil)
        showContent('home-content');
    </script>

    <script>
        
function showImages(category) {
    // Masquer tous les conteneurs d'images
    var containers = document.querySelectorAll('.image-container');
    containers.forEach(function(container) {
        container.style.display = 'none';
    });

    // Afficher le conteneur d'images correspondant à la catégorie sélectionnée
    var selectedContainer = document.getElementById(category);
    if (selectedContainer) {
        selectedContainer.style.display = 'block';
    }
}


        document.querySelectorAll('.header-item').forEach(item => {
            item.addEventListener('click', function() {
                // Masquer toutes les sections de contenu
                document.querySelectorAll('.content').forEach(content => {
                    content.style.display = 'none';
                });

                // Afficher la section de contenu correspondante
                const contentId = this.id + '-content';
                document.getElementById(contentId).style.display = 'block';
            });
        });

        document.getElementById('Recherche').addEventListener('click', function() {
        var searchSection = document.getElementById('search-section');
        if (searchSection.style.display === 'none' || searchSection.style.display === '') {
            searchSection.style.display = 'block';
        } else {
            searchSection.style.display = 'none';
        }
    });
    </script>
    <style>
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #back-to-top:hover {
            background-color: darkblue;
        }
    </style>
   
    <!-- Bouton pour remonter en haut de la page -->
    <button id="back-to-top" onclick="scrollToTop()">Haut de page</button>

    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("back-to-top").style.display = "block";
            } else {
                document.getElementById("back-to-top").style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0; // Pour Safari
            document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
        }
    </script>
</body>
</html>
