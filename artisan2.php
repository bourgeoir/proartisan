<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Artisan</title>
    <link rel="stylesheet" href="css/artisan_dashboard.css">
    <style>
        /* Styles de base pour le corps de la page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Styles pour l'en-tête */
        header {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* Styles pour le conteneur principal */
        .container {
            position: fixed;
            display: flex;
            height: 100%;
            margin: 100%;
            margin-top: 20%;
        }

        /* Styles pour la barre latérale */
        .sidebar {
            width: 250px;
            background-color: #007BFF;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        /* Styles pour les liens de la barre latérale */
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        /* Effet de survol pour les liens de la barre latérale */
        .sidebar a:hover {
            background-color: #0056b3;
        }

        /* Styles pour la section de contenu */
        .content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        /* Styles pour les sections */
        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        /* Styles pour la liste des articles */
        .articles-list {
            margin-top: 20px;
        }

        .articles-list ul {
            list-style-type: none;
            padding: 0;
        }

        .articles-list li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
        }

        .article-header {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Styles pour les formulaires */
        form {
            margin-top: 20px;
        }

        form input, form textarea, form button {
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        form button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }

        /* Styles pour la liste des clients */
        .client-list ul {
            list-style-type: none;
            padding: 0;
        }

        .client-list li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
        }

        .client-list .view-profile, .client-list .view-performance {
            display: block;
            margin-top: 5px;
            color: #007BFF;
            text-decoration: none;
        }

        .client-list .view-profile:hover, .client-list .view-performance:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
        <div class="logosec">
            <div class="logo">Entreprise60</div>
            <i class="fas fa-bars menuicn" id="menuicn"></i>
        </div>
        <div class="searchbar">
            <input type="text" placeholder="Recherche">
            <div class="searchbtn">
                <i class="fas fa-search srchicn"></i>
            </div>
        </div>
        <div class="message">
            <div class="circle"></div>
            <i class="fas fa-bell icn"></i>
            <div class="dp">
                <img src="https://via.placeholder.com/40" class="dpicn" alt="Profile Picture">
            </div>
        </div>
  
</header>

<div class="container">
    <!-- Barre latérale avec les liens de navigation -->
    <div class="sidebar">
        <a href="#" id="show-articles">Articles Publiés</a>
        <a href="#" id="post-article">Publier un Article</a>
        <a href="#" id="client-list">Liste des Clients</a>
        <a href="/espaceartisan/tesxt.html" id="reports-analysis">Rapports et Analyse</a>
        <a href="#" id="site-settings">Paramètres du Site</a>
        <a href="/espaceartisan/inerface artisan.html" id="home">Retour à l'Accueil</a>
    </div>

    <!-- Section de contenu -->
    <div class="content">
        <!-- Section Articles Publiés -->
        <div id="articles-section" class="section active">
            <div class="articles-list">
                <ul>
                    <div class="main">
            
                        <div class="report-container">
                            <div class="report-header">
                                <h1 class="recent-Articles">Articles récents</h1>
                                <button class="view">Voir tout</button>
                            </div>
            
                            <div class="report-body">
                                <div class="report-topic-heading">
                                    <h3 class="t-op">Article</h3>
                                    <h3 class="t-op">Affichage</h3>
                                    <h3 class="t-op">Commentaires</h3>
                                    <h3 class="t-op">Statut</h3>
                                </div>
            
                                <div class="items">
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 73</h3>
                                        <h3 class="t-op-nextlvl">2.9k</h3>
                                        <h3 class="t-op-nextlvl">210</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 72</h3>
                                        <h3 class="t-op-nextlvl">1.5k</h3>
                                        <h3 class="t-op-nextlvl">360</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 71</h3>
                                        <h3 class="t-op-nextlvl">1.1k</h3>
                                        <h3 class="t-op-nextlvl">150</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 70</h3>
                                        <h3 class="t-op-nextlvl">1.2k</h3>
                                        <h3 class="t-op-nextlvl">420</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 69</h3>
                                        <h3 class="t-op-nextlvl">2.6k</h3>
                                        <h3 class="t-op-nextlvl">190</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 68</h3>
                                        <h3 class="t-op-nextlvl">1.9k</h3>
                                        <h3 class="t-op-nextlvl">390</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 67</h3>
                                        <h3 class="t-op-nextlvl">1.2k</h3>
                                        <h3 class="t-op-nextlvl">580</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 66</h3>
                                        <h3 class="t-op-nextlvl">3.6k</h3>
                                        <h3 class="t-op-nextlvl">160</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                    <div class="item1">
                                        <h3 class="t-op-nextlvl">Article 65</h3>
                                        <h3 class="t-op-nextlvl">1.3k</h3>
                                        <h3 class="t-op-nextlvl">220</h3>
                                        <h3 class="t-op-nextlvl label-tag">Publié</h3>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ajoutez plus d'articles ici -->
                </ul>
            </div>
        </div>

        <!-- Section Publier un Article -->
        <div id="post-article-section" class="section">
            <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Publier un Article - Artisan</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        padding: 0;
                    }
                    .article-publish-section {
                        max-width: 800px;
                        margin: 50px auto;
                        background: #fff;
                        padding: 20px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }
                    h1 {
                        text-align: center;
                        color: #333;
                    }
                    .form-group {
                        margin-bottom: 15px;
                    }
                    .form-group label {
                        display: block;
                        font-weight: bold;
                        margin-bottom: 5px;
                    }
                    .form-group input[type="text"],
                    .form-group input[type="date"],
                    .form-group input[type="url"],
                    .form-group input[type="file"],
                    .form-group textarea {
                        width: 100%;
                        padding: 10px;
                        box-sizing: border-box;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                    }
                    .submit-button {
                        display: block;
                        width: 100%;
                        padding: 15px;
                        background-color: #28a745;
                        color: white;
                        border: none;
                        border-radius: 4px;
                        font-size: 16px;
                        cursor: pointer;
                        text-align: center;
                    }
                    .submit-button:hover {
                        background-color: #218838;
                    }
                </style>
            </head>
            <body>
                <section class="article-publish-section">
                    <h1>Publier un Article</h1>
                    <form id="articleForm" onsubmit="handleSubmit(event)">
                        <div class="form-group">
                            <label for="title">Titre de l'article :</label>
                            <input type="text" id="title" name="title" required>
                        </div>
            
                        <div class="form-group">
                            <label for="introduction">Introduction :</label>
                            <textarea id="introduction" name="introduction" rows="3" required></textarea>
                        </div>
            
                        <div class="form-group">
                            <label for="content">Contenu de l'article :</label>
                            <textarea id="content" name="content" rows="10" required></textarea>
                        </div>
            
                        <div class="form-group">
                            <label for="featuredImage">Image en vedette :</label>
                            <input type="file" id="featuredImage" name="featuredImage" accept="image/*" required>
                        </div>
            
                        <div class="form-group">
                            <label for="galleryImages">Galerie d'images :</label>
                            <input type="file" id="galleryImages" name="galleryImages" accept="image/*" multiple>
                        </div>
            
                        <div class="form-group">
                            <label for="category">Catégorie :</label>
                            <input type="text" id="category" name="category" required>
                        </div>
            
                        <div class="form-group">
                            <label for="tags">Tags/Mots-clés :</label>
                            <input type="text" id="tags" name="tags" required>
                        </div>
            
                        <div class="form-group">
                            <label for="author">Auteur :</label>
                            <input type="text" id="author" name="author" required>
                        </div>
            
                        <div class="form-group">
                            <label for="publicationDate">Date de publication :</label>
                            <input type="date" id="publicationDate" name="publicationDate" required>
                        </div>
            
                        <div class="form-group">
                            <label for="location">Lieu de l'événement (si applicable) :</label>
                            <input type="text" id="location" name="location">
                        </div>
            
                        <div class="form-group">
                            <label for="contactInfo">Informations de contact :</label>
                            <input type="text" id="contactInfo" name="contactInfo" required>
                        </div>
            
                        <div class="form-group">
                            <label for="ctaLink">Lien d'appel à l'action :</label>
                            <input type="url" id="ctaLink" name="ctaLink">
                        </div>
            
                        <div class="form-group">
                            <label for="productDetails">Prix et spécifications (si applicable) :</label>
                            <textarea id="productDetails" name="productDetails" rows="3"></textarea>
                        </div>
            
                        <div class="form-group">
                            <label for="videoLink">Lien vers une vidéo (optionnel) :</label>
                            <input type="url" id="videoLink" name="videoLink">
                        </div>
            
                        <div class="form-group">
                            <label for="additionalLinks">Liens supplémentaires :</label>
                            <input type="url" id="additionalLinks" name="additionalLinks">
                        </div>
            
                        <button type="submit" class="submit-button">Publier l'article</button>
                    </form>
                </section>
            
                <script>
                    function handleSubmit(event) {
                        event.preventDefault();
                        alert('Article publié avec succès !');
                    }
                </script>
            </body>
            </html>
            
        </div>

        <!-- Section Liste des Clients -->
        <div id="client-list-section" class="section">
            <h1>Liste des Clients</h1>
            <div class="client-list">
                <ul>
                   
 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .client-list {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .client-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .client-item:last-child {
            border-bottom: none;
        }

        .client-item h3 {
            margin: 0;
        }

        .client-item button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            margin-left: 10px;
        }

        .client-item button:hover {
            background-color: #45a049;
        }

        .section-content {
            display: none;
            margin-top: 20px;
        }

        .section-content.active {
            display: block;
        }

        .chart-container {
            position: relative;
            height: 400px;
            margin-bottom: 30px;
        }

        .profil-info {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .profil-info img {
            max-width: 150px;
            border-radius: 8px;
            margin-right: 20px;
        }

        .profil-info p {
            margin: 0;
        }
    </style>

    <div class="container">

        <div class="client-list">
            <div class="client-item">
                <h3>Client 1</h3>
                <div>
                    <button onclick="showSection('profil', 'client1')">Profil</button>
                    <button onclick="showSection('performance', 'client1')">Performance</button>
                </div>
            </div>
            <div class="client-item">
                <h3>Client 2</h3>
                <div>
                    <button onclick="showSection('profil', 'client2')">Profil</button>
                    <button onclick="showSection('performance', 'client2')">Performance</button>
                </div>
            </div>
        </div>

        <div id="client1-profil" class="section-content">
            <h2>Profil du Client 1</h2>
            <div class="profil-info">
                <img src="client1-photo.jpg" alt="Photo du Client 1">
                <div>
                    <p><strong>Nom :</strong> Client 1</p>
                    <p><strong>Email :</strong> client1@example.com</p>
                    <p><strong>Téléphone :</strong> 0123456789</p>
                    <p><strong>Adresse :</strong> 123 Rue Exemple, Ville</p>
                    <p><strong>Description :</strong> Client 1 est intéressé par les services artisanaux de haute qualité.</p>
                </div>
            </div>
        </div>
        <div id="client1-performance" class="section-content">
            <h2>Performance du Client 1</h2>
            <div class="chart-container">
                <canvas id="chartClient1"></canvas>
            </div>
        </div>

        <div id="client2-profil" class="section-content">
            <h2>Profil du Client 2</h2>
            <div class="profil-info">
                <img src="client2-photo.jpg" alt="Photo du Client 2">
                <div>
                    <p><strong>Nom :</strong> Client 2</p>
                    <p><strong>Email :</strong> client2@example.com</p>
                    <p><strong>Téléphone :</strong> 0987654321</p>
                    <p><strong>Adresse :</strong> 456 Avenue Exemple, Ville</p>
                    <p><strong>Description :</strong> Client 2 est un habitué des services artisanaux et recherche des offres spécifiques.</p>
                </div>
            </div>
        </div>
        <div id="client2-performance" class="section-content">
            <h2>Performance du Client 2</h2>
            <div class="chart-container">
                <canvas id="chartClient2"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function showSection(sectionType, clientId) {
            // Masquer toutes les sections
            document.querySelectorAll('.section-content').forEach(section => {
                section.classList.remove('active');
            });

            // Afficher la section demandée
            document.getElementById(clientId + '-' + sectionType).classList.add('active');
        }

        // Données de performance pour les graphiques
        const dataClient1 = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Performance Client 1',
                data: [10, 20, 15, 25, 30, 20, 25],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        const dataClient2 = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Performance Client 2',
                data: [15, 25, 20, 30, 35, 25, 30],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        };

        // Fonction pour créer les graphiques
        function createChart(ctx, data) {
            return new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Initialiser les graphiques
        document.addEventListener('DOMContentLoaded', () => {
            const ctxClient1 = document.getElementById('chartClient1').getContext('2d');
            const ctxClient2 = document.getElementById('chartClient2').getContext('2d');

            createChart(ctxClient1, dataClient1);
            createChart(ctxClient2, dataClient2);
        });
    </script>

                    <!-- Ajoutez plus de clients ici -->
                </ul>
            </div>
        </div>

        <!-- Section Rapports et Analyse -->
        <div id="reports-analysis-section" class="section">
          <a href="analyse.php">  <H1>affichage</H1></a>
        </div>
        <!-- Section Paramètres du Site -->
        <div id="site-settings-section" class="section">
            <section id="settings" class="content-section">
               
                <div class="main-container">
                    <form class="settings-form">
                        <h2>Informations Générales</h2>
                        <div class="form-group">
                            <label for="site-name">Nom du site :</label>
                            <input type="text" id="site-name" name="site-name" placeholder="Nom du site">
                        </div>
                        <div class="form-group">
                            <label for="site-slogan">Slogan :</label>
                            <input type="text" id="site-slogan" name="site-slogan" placeholder="Slogan">
                        </div>
                        <div class="form-group">
                            <label for="site-logo">Logo :</label>
                            <input type="file" id="site-logo" name="site-logo">
                        </div>
    
                        <h2>Paramètres de Contact</h2>
                        <div class="form-group">
                            <label for="contact-email">E-mail de contact :</label>
                            <input type="email" id="contact-email" name="contact-email" placeholder="E-mail de contact">
                        </div>
                        <div class="form-group">
                            <label for="contact-phone">Numéro de téléphone :</label>
                            <input type="tel" id="contact-phone" name="contact-phone" placeholder="Numéro de téléphone">
                        </div>
                        <div class="form-group">
                            <label for="contact-address">Adresse physique :</label>
                            <textarea id="contact-address" name="contact-address" placeholder="Adresse physique"></textarea>
                        </div>
    
                        <h2>Paramètres des Réseaux Sociaux</h2>
                        <div class="form-group">
                            <label for="facebook-url">Facebook :</label>
                            <input type="url" id="facebook-url" name="facebook-url" placeholder="Lien Facebook">
                        </div>
                        <div class="form-group">
                            <label for="twitter-url">Twitter :</label>
                            <input type="url" id="twitter-url" name="twitter-url" placeholder="Lien Twitter">
                        </div>
                        <div class="form-group">
                            <label for="instagram-url">Instagram :</label>
                            <input type="url" id="instagram-url" name="instagram-url" placeholder="Lien Instagram">
                        </div>
    
                        <button type="submit">Enregistrer les Modifications</button>
                    </form>
                </div>
            </section>
           
        </div>
    </div>
</div>

<script>
    // Fonction pour afficher la section correspondante
    document.querySelectorAll('.sidebar a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.id.replace('show-', '') + '-section';
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(targetId).classList.add('active');
        });
    });

    // Fonction pour afficher le profil du client
    function showClientProfile(clientName) {
        alert('Affichage du profil pour ' + clientName);
        // Remplacer cette ligne par le code pour afficher les informations du profil
    }

    // Fonction pour afficher les performances du client
    function showClientPerformance(clientName) {
        alert('Affichage des performances pour ' + clientName);
        // Remplacer cette ligne par le code pour afficher les performances
    }

    // Définir le contenu par défaut (articles publiés)
    document.getElementById('articles-section').classList.add('active');
</script>

</body>
</html>





<!-- nouveau -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Administration-Artisan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .chat-button {
            position: fixed;
            left: 20px;
            bottom: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1000;
        }

        .chat-button:hover {
            background-color: #45a049;
        }

        .chat-container {
            position: fixed;
            bottom: 60px; /* au-dessus du bouton de chat */
            left: 20px;
            max-width: 300px;
            width: 100%;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 999;
            display: none;
        }

        .chat-header {
            background-color: #4CAF50;
            padding: 15px;
            color: white;
            text-align: center;
            border-radius: 10px 10px 0 0;
            position: relative;
        }

        .chat-header h2 {
            margin: 0;
        }

        .close-chat {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }

        .chat-messages {
            padding: 10px;
            overflow-y: auto;
            max-height: 300px;
        }

        .message {
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
        }

        .message.administration {
            background-color: #e0e0e0;
            text-align: left;
        }

        .message.artisan {
            background-color: #4CAF50;
            color: white;
            text-align: right;
        }

        .chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .chat-input input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 5px;
        }

        .chat-input button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div id="chatButton" class="chat-button" onclick="toggleChat()">
        Chat
    </div>

    <div id="chatContainer" class="chat-container">
        <div class="chat-header">
            <h2>Chat Administration-Artisan</h2>
            <button class="close-chat" onclick="toggleChat()">X</button>
        </div>
        <div class="chat-messages" id="chatMessages">
            <!-- Messages seront ajoutés ici -->
        </div>
        <div class="chat-input">
            <input type="text" id="messageInput" placeholder="Tapez votre message...">
            <button onclick="sendMessage()">Envoyer</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            const chatMessages = document.getElementById('chatMessages');
            const messageInput = document.getElementById('messageInput');

            const messageText = messageInput.value;
            if (messageText.trim() === '') return;

            // Ajout du message de l'artisan
            const artisanMessage = document.createElement('div');
            artisanMessage.className = 'message artisan';
            artisanMessage.innerHTML = `<strong>Artisan :</strong> ${messageText}`;
            chatMessages.appendChild(artisanMessage);

            // Réinitialiser le champ d'entrée
            messageInput.value = '';

            // Simuler la réponse de l'administration après une petite pause
            setTimeout(() => {
                const administrationMessage = document.createElement('div');
                administrationMessage.className = 'message administration';
                administrationMessage.innerHTML = '<strong>Administration:</strong> Merci pour votre message. Que puis-je faire pour vous ?';
                chatMessages.appendChild(administrationMessage);

                // Faire défiler vers le bas
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }, 1000);

            // Faire défiler vers le bas
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function toggleChat() {
            const chatContainer = document.getElementById('chatContainer');
            if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
                chatContainer.style.display = 'block';
            } else {
                chatContainer.style.display = 'none';
            }
        }
    </script>
</body>
</html>

</body>
</html>
