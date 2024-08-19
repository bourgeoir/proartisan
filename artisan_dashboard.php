
<?php
require 'animate/animation1.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Artisan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #0044cc;
            color: white;
        }
        .logosec {
            display: flex;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            margin-right: 10px;
        }
        .menuicn {
            font-size: 24px;
        }
        .searchbar {
            display: flex;
            align-items: center;
        }
        .searchbar input {
            padding: 5px;
            border: none;
            border-radius: 4px;
        }
        .searchbtn {
            background-color: #0033aa;
            padding: 5px;
            border-radius: 4px;
            margin-left: 5px;
        }
        .searchbtn i {
            color: white;
        }
        .message {
            display: flex;
            align-items: center;
        }
        .circle {
            width: 10px;
            height: 10px;
            background-color: red;
            border-radius: 50%;
            margin-right: 5px;
        }
        .icn, .dpicn {
            font-size: 24px;
            margin-left: 10px;
        }
        .dpicn {
            border-radius: 50%;
        }
        .container {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .sidebar h2 {
            margin-top: 0;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            margin: 5px 0;
            text-decoration: none;
            color: #333;
            border-radius: 4px;
        }
        .sidebar a.active {
            background-color: #ddd;
        }
        .sidebar a:hover {
            background-color: #ddd;
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
        }
        .hidden {
            display: none;
        }
        .section {
            margin-bottom: 20px;
        }
        .box-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .box {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 4px;
            text-align: center;
            flex: 1;
            margin-right: 10px;
        }
        .box:last-child {
            margin-right: 0;
        }
        .box .text {
            margin-bottom: 10px;
        }
        .topic-heading {
            margin: 0;
            font-size: 24px;
        }
        .topic {
            margin: 0;
            font-size: 16px;
        }
        .report-container {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 4px;
        }
        .report-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .report-header .view {
            background-color: #0044cc;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .report-body {
            margin-top: 20px;
        }
        .report-topic-heading {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
        }
        .items .item1 {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .label-tag {
            color: green;
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
        <div class="sidebar">
            <h2>Tableau de Bord</h2>
            <a href="artisan2.php" id="dashboard-btn" class="active">Plus</a>
            <a href="#" id="profile-btn">Profil</a>
            <a href="#" id="orders-btn">Commandes</a>
            <a href="#" id="services-btn">Services</a>
            <a href="#" id="calendar-btn">Calendrier</a>
            <a href="#" id="reports-btn">Rapports</a>
            <a href="#" id="support-btn">Support</a>
            <a href="#" id="payments-btn">Paiements</a>
        </div>

        <div class="content">
            <div class="section default-dashboard">
                <h1>Tableau de Bord</h1>
                <div class="box-container">
                    <div class="box">
                        <div class="text">
                            <h2 class="topic-heading">60.5k</h2>
                            <p class="topic">Vues de l’article</p>
                        </div>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h2 class="topic-heading">150</h2>
                            <p class="topic">J'aime</p>
                        </div>
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h2 class="topic-heading">320</h2>
                            <p class="topic">Nouveaux Clients</p>
                        </div>
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h2 class="topic-heading">70</h2>
                            <p class="topic">Articles Partagés</p>
                        </div>
                        <i class="fas fa-share"></i>
                    </div>
                </div>
                <div class="report-container">
                    <div class="report-header">
                        <h2 class="recent-Articles">Commandes Récentes</h2>
                        <button class="view">Voir Tout</button>
                    </div>
                    <div class="report-body">
                        <div class="report-topic-heading">
                            <h3 class="t-op">Nom</h3>
                            <h3 class="t-op">Client</h3>
                            <h3 class="t-op">État</h3>
                            <h3 class="t-op">Date</h3>
                        </div>
                        <div class="items">
                            <div class="item1">
                                <h3>Article 1</h3>
                                <h3>Client 1</h3>
                                <h3 class="label-tag">Livré</h3>
                                <h3>01-01-2023</h3>
                            </div>
                            <div class="item1">
                                <h3>Article 2</h3>
                                <h3>Client 2</h3>
                                <h3 class="label-tag">En cours</h3>
                                <h3>02-01-2023</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sections supplémentaires -->
            <div class="section profile hidden">
                <!DOCTYPE html>
                <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Profil Artisan</title>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 0;
                            background-color: #f4f4f4;
                        }
                        .profile-container {
                            width: 80%;
                            margin: 20px auto;
                            padding: 20px;
                            background: #fff;
                            border-radius: 8px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                        }
                        h1 {
                            color: #333;
                            margin-bottom: 20px;
                        }
                        .profile-header {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            margin-bottom: 20px;
                        }
                        .profile-header img {
                            border-radius: 50%;
                            width: 150px;
                            height: 150px;
                            object-fit: cover;
                            border: 2px solid #ddd;
                        }
                        .profile-header button {
                            margin-top: 10px;
                            padding: 10px 20px;
                            background-color: #007bff;
                            color: #fff;
                            border: none;
                            border-radius: 4px;
                            cursor: pointer;
                        }
                        .profile-header button:hover {
                            background-color: #0056b3;
                        }
                        .profile-details {
                            width: 100%;
                            max-width: 600px;
                            margin-bottom: 20px;
                        }
                        .profile-details p {
                            margin: 5px 0;
                        }
                        .profile-details strong {
                            display: inline-block;
                            width: 200px;
                        }
                        .navigation-links {
                            width: 100%;
                            max-width: 600px;
                        }
                        .navigation-links ul {
                            list-style-type: none;
                            padding: 0;
                            margin: 0;
                        }
                        .navigation-links ul li {
                            margin-bottom: 10px;
                        }
                        .navigation-links ul li a {
                            text-decoration: none;
                            color: #007bff;
                            display: flex;
                            align-items: center;
                            font-size: 16px;
                        }
                        .navigation-links ul li a i {
                            margin-right: 10px;
                            font-size: 18px;
                            color: #007bff;
                        }
                        .navigation-links ul li a:hover {
                            text-decoration: underline;
                        }
                    </style>
                </head>
                <body>
                    <div class="profile-container">
                        <h1>Profil Artisan</h1>
                
                        <div class="profile-header">
                            <img src="https://via.placeholder.com/150" alt="Photo de profil" id="profileImg">
                            <button onclick="document.getElementById('fileInput').click()">Changer ma photo de profil</button>
                            <input type="file" id="fileInput" style="display: none;" onchange="changeProfilePhoto(event)">
                        </div>
                
                        <div class="profile-details">
                            <p><strong>Nom:</strong> <span id="nom">Kambire</span></p>
                            <p><strong>Prénom:</strong> <span id="prenom">Emile</span></p>
                            <p><strong>Email:</strong> <span id="email">kambireemile4@gmail.com</span></p>
                            <p><strong>Numéro de téléphone:</strong> <span id="numero">05 86 29 21 27</span></p>
                            <p><strong>Localisation:</strong> <span id="localisation">Cocody</span></p>
                        </div>
                
                        <div class="navigation-links">
                            <ul>
                                <li><a href="espaceartisan/commande.php"><i class="fas fa-box"></i> Mes commandes/Mes Rendez-vous</a></li>
                                <li><a href="espaceartisan/mot de passe oublier.php"><i class="fas fa-key"></i> Modifier le mot de passe</a></li>
                                <li><a href="espaceartisan/modifier mes info.php"><i class="fas fa-user-edit"></i> Modifier mes informations</a></li>
                                <li><a href="espaceartisan/Conditions_Générales.php"><i class="fas fa-file-contract"></i> Conditions générales</a></li>
                                <li><a href="espaceartisan/Politique de Retour.php"><i class="fas fa-undo"></i> Politique de retour</a></li>
                                <li><a href="espaceartisan/echange.php"><i class="fas fa-cogs"></i> Demander un Service</a></li>
                                <li><a href="espaceartisan/support.php"><i class="fas fa-headset"></i> Support</a></li>
                                <li><a href="espaceartisan/Performance.php"><i class="fas fa-chart-line"></i> Performance</a></li>
                                <li><a href="index.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                
                    <script>
                        function changeProfilePhoto(event) {
                            var file = event.target.files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    document.getElementById('profileImg').src = e.target.result;
                                };
                                reader.readAsDataURL(file);
                            }
                        }
                    </script>
                </body>
                </html>
                
               
            
                <!-- Contenu du profil ici -->
            </div>
            <div class="section orders hidden">
             








    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .orders-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .orders-table th, .orders-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .orders-table th {
            background-color: #007bff;
            color: #fff;
        }
        .order-actions {
            display: flex;
            gap: 10px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>


    <div class="container">

        <!-- Tableau des Commandes -->
        <table class="orders-table">
            <thead>
                <tr>
                    <th>Nom de l'Article</th>
                    <th>Client</th>
                    <th>État</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Article 1</td>
                    <td>Client 1</td>
                    <td>En cours</td>
                    <td>01-01-2024</td>
                    <td class="order-actions">
                        <button class="btn" onclick="viewOrderDetails()">Voir Détails</button>
                        <button class="btn" onclick="updateOrderStatus()">Mettre à Jour</button>
                    </td>
                </tr>
                <tr>
                    <td>Article 2</td>
                    <td>Client 2</td>
                    <td>Livré</td>
                    <td>02-01-2024</td>
                    <td class="order-actions">
                        <button class="btn" onclick="viewOrderDetails()">Voir Détails</button>
                        <button class="btn" onclick="updateOrderStatus()">Mettre à Jour</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Détails de la Commande -->
        <div id="order-details" style="display:none;">
            <h2>Détails de la Commande</h2>
            <p><strong>Nom de l'Article:</strong> <span id="orderItemName">Article 1</span></p>
            <p><strong>Description:</strong> <span id="orderDescription">Description de l'article</span></p>
            <p><strong>Quantité:</strong> <span id="orderQuantity">1</span></p>
            <p><strong>Prix:</strong> <span id="orderPrice">$100</span></p>
            <p><strong>Client:</strong> <span id="orderClient">Client 1</span></p>
            <p><strong>Statut:</strong> <span id="orderStatus">En cours</span></p>
            <p><strong>Date de Commande:</strong> <span id="orderDate">01-01-2024</span></p>
            <button class="btn" onclick="closeOrderDetails()">Fermer</button>
        </div>
    </div>

    <script>
        function viewOrderDetails() {
            document.getElementById('order-details').style.display = 'block';
        }

        function updateOrderStatus() {
            alert("Mettre à jour le statut de la commande");
        }

        function closeOrderDetails() {
            document.getElementById('order-details').style.display = 'none';
        }
    </script>        
                <!-- Contenu des commandes ici -->
            </div>
            <div class="section services hidden">
                
               

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .service-list {
            margin-bottom: 20px;
        }
        .service-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .service-item:last-child {
            border-bottom: none;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
    </style>


    <div class="container">
        
        
        <div class="service-list">
            <h2>Liste des Services</h2>
            <!-- Exemple de services -->
            <div class="service-item">
                <h3>Service 1</h3>
                <p>Description du service 1.</p>
                <button class="btn" onclick="editService('1')">Modifier</button>
                <button class="btn" onclick="deleteService('1')">Supprimer</button>
            </div>
            <div class="service-item">
                <h3>Service 2</h3>
                <p>Description du service 2.</p>
                <button class="btn" onclick="editService('2')">Modifier</button>
                <button class="btn" onclick="deleteService('2')">Supprimer</button>
            </div>
        </div>
        
        <div class="form-group">
            <h2>Ajouter un Nouveau Service</h2>
            <form id="addServiceForm">
                <div class="form-group">
                    <label for="serviceName">Nom du Service:</label>
                    <input type="text" id="serviceName" required>
                </div>
                <div class="form-group">
                    <label for="serviceDescription">Description:</label>
                    <textarea id="serviceDescription" required></textarea>
                </div>
                <button type="submit" class="btn">Ajouter le Service</button>
            </form>
        </div>
    </div>

    <script>
        function editService(serviceId) {
            alert("Modifier le service avec ID: " + serviceId);
            // Implémentez la logique pour modifier le service
        }

        function deleteService(serviceId) {
            if (confirm("Êtes-vous sûr de vouloir supprimer ce service ?")) {
                alert("Service avec ID: " + serviceId + " supprimé.");
                // Implémentez la logique pour supprimer le service
            }
        }

        document.getElementById('addServiceForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('serviceName').value;
            const description = document.getElementById('serviceDescription').value;

            // Ajoutez la logique pour ajouter le service ici

            alert("Service ajouté: " + name);
            document.getElementById('addServiceForm').reset();
        });
    </script>



                <!-- Contenu des services ici -->
            </div>
            <div class="section calendar hidden">
 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .calendar-view {
            margin-bottom: 20px;
            background: #eaeaea;
            padding: 10px;
            border-radius: 4px;
        }
        .calendar-controls {
            margin-bottom: 20px;
        }
        .calendar-controls button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        .calendar-controls button:hover {
            background-color: #0056b3;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
    </style>

    <div class="container">
        <div class="calendar-view">
            <h2>Vue du Calendrier</h2>
            
            <!-- Vue du calendrier, à remplacer par un composant ou une bibliothèque de calendrier -->
            <div id="calendarDisplay">Affichage du calendrier ici...</div>
        </div>

        <div class="calendar-controls">
            <button onclick="showAddAppointmentForm()">Ajouter un Rendez-vous</button>
            <button onclick="showEditAppointmentForm()">Modifier un Rendez-vous</button>
            <button onclick="showDeleteAppointmentForm()">Supprimer un Rendez-vous</button>
        </div>

        <!-- Formulaire pour ajouter un rendez-vous -->
        <div id="addAppointmentForm" class="form-group" style="display:none;">
            <h2>Ajouter un Rendez-vous</h2>
            <form>
                <div class="form-group">
                    <label for="appointmentTitle">Titre:</label>
                    <input type="text" id="appointmentTitle" required>
                </div>
                <div class="form-group">
                    <label for="appointmentDate">Date:</label>
                    <input type="date" id="appointmentDate" required>
                </div>
                <div class="form-group">
                    <label for="appointmentTime">Heure:</label>
                    <input type="time" id="appointmentTime" required>
                </div>
                <div class="form-group">
                    <label for="appointmentDescription">Description:</label>
                    <textarea id="appointmentDescription"></textarea>
                </div>
                <button type="submit" class="btn">Ajouter</button>
            </form>
        </div>

        <!-- Formulaire pour modifier un rendez-vous -->
        <div id="editAppointmentForm" class="form-group" style="display:none;">
            <h2>Modifier un Rendez-vous</h2>
            <form>
                <div class="form-group">
                    <label for="editAppointmentTitle">Titre:</label>
                    <input type="text" id="editAppointmentTitle" required>
                </div>
                <div class="form-group">
                    <label for="editAppointmentDate">Date:</label>
                    <input type="date" id="editAppointmentDate" required>
                </div>
                <div class="form-group">
                    <label for="editAppointmentTime">Heure:</label>
                    <input type="time" id="editAppointmentTime" required>
                </div>
                <div class="form-group">
                    <label for="editAppointmentDescription">Description:</label>
                    <textarea id="editAppointmentDescription"></textarea>
                </div>
                <button type="submit" class="btn">Modifier</button>
            </form>
        </div>

        <!-- Formulaire pour supprimer un rendez-vous -->
        <div id="deleteAppointmentForm" class="form-group" style="display:none;">
            <h2>Supprimer un Rendez-vous</h2>
            <form>
                <div class="form-group">
                    <label for="deleteAppointmentId">ID du Rendez-vous:</label>
                    <input type="text" id="deleteAppointmentId" required>
                </div>
                <button type="submit" class="btn">Supprimer</button>
            </form>
        </div>
    </div>

    <script>
        function showAddAppointmentForm() {
            document.getElementById('addAppointmentForm').style.display = 'block';
            document.getElementById('editAppointmentForm').style.display = 'none';
            document.getElementById('deleteAppointmentForm').style.display = 'none';
        }

        function showEditAppointmentForm() {
            document.getElementById('addAppointmentForm').style.display = 'none';
            document.getElementById('editAppointmentForm').style.display = 'block';
            document.getElementById('deleteAppointmentForm').style.display = 'none';
        }

        function showDeleteAppointmentForm() {
            document.getElementById('addAppointmentForm').style.display = 'none';
            document.getElementById('editAppointmentForm').style.display = 'none';
            document.getElementById('deleteAppointmentForm').style.display = 'block';
        }

        // Ajoutez les fonctions pour gérer les formulaires ici
        // Par exemple: ajouter un rendez-vous, modifier un rendez-vous, supprimer un rendez-vous
    </script>


                <!-- Contenu du calendrier ici -->
            </div>
            <div class="section reports hidden">
            









    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .report-section {
            margin-bottom: 20px;
        }
        .report-section h2 {
            margin-bottom: 10px;
            color: #007bff;
        }
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .report-table th, .report-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .report-table th {
            background-color: #007bff;
            color: white;
        }
        .chart-container {
            margin: 20px 0;
        }
        .btn-group {
            margin-bottom: 20px;
        }
        .btn-group button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-group button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
      

        <div class="btn-group">
            <button onclick="showSalesReport()">Afficher le Rapport de Ventes</button>
            <button onclick="showPerformanceReport()">Afficher le Rapport de Performance</button>
            <button onclick="showClientFeedback()">Afficher les Retours Clients</button>
        </div>

        <!-- Rapport de Ventes -->
        <div id="salesReport" class="report-section" style="display:none;">
            <h2>Rapport de Ventes</h2>
            <div class="chart-container">
                <div id="salesChart">Graphique des ventes ici...</div>
            </div>
            <table class="report-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Article</th>
                        <th>Quantité</th>
                        <th>Montant</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01-08-2024</td>
                        <td>Article 1</td>
                        <td>10</td>
                        <td>100 €</td>
                    </tr>
                    <tr>
                        <td>02-08-2024</td>
                        <td>Article 2</td>
                        <td>5</td>
                        <td>50 €</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Rapport de Performance -->
        <div id="performanceReport" class="report-section" style="display:none;">
            <h2>Rapport de Performance</h2>
            <div class="chart-container">
                <div id="performanceChart">Graphique de performance ici...</div>
            </div>
            <table class="report-table">
                <thead>
                    <tr>
                        <th>Métrique</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vues de l’article</td>
                        <td>60.5k</td>
                    </tr>
                    <tr>
                        <td>J'aime</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>Nouveaux Clients</td>
                        <td>320</td>
                    </tr>
                    <tr>
                        <td>Articles Partagés</td>
                        <td>70</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Retours Clients -->
        <div id="clientFeedback" class="report-section" style="display:none;">
            <h2>Retours Clients</h2>
            <table class="report-table">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Article</th>
                        <th>Évaluation</th>
                        <th>Commentaire</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Client 1</td>
                        <td>Article 1</td>
                        <td>★★★★☆</td>
                        <td>Très satisfait du produit.</td>
                    </tr>
                    <tr>
                        <td>Client 2</td>
                        <td>Article 2</td>
                        <td>★★☆☆☆</td>
                        <td>Qualité à améliorer.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function showSalesReport() {
            document.getElementById('salesReport').style.display = 'block';
            document.getElementById('performanceReport').style.display = 'none';
            document.getElementById('clientFeedback').style.display = 'none';
        }

        function showPerformanceReport() {
            document.getElementById('salesReport').style.display = 'none';
            document.getElementById('performanceReport').style.display = 'block';
            document.getElementById('clientFeedback').style.display = 'none';
        }

        function showClientFeedback() {
            document.getElementById('salesReport').style.display = 'none';
            document.getElementById('performanceReport').style.display = 'none';
            document.getElementById('clientFeedback').style.display = 'block';
        }

        // Vous pouvez ajouter des fonctions pour générer des graphiques ici
    </script>


                <!-- Contenu des rapports ici -->
            </div>
            <div class="section support hidden">
            
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .support-section {
            margin-bottom: 20px;
        }
        .support-section h2 {
            margin-bottom: 10px;
            color: #007bff;
        }
        .support-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .support-table th, .support-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .support-table th {
            background-color: #007bff;
            color: white;
        }
        .btn-group {
            margin-bottom: 20px;
        }
        .btn-group button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-group button:hover {
            background-color: #0056b3;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="text"], .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
    </style>

    <div class="container">
     
        <!-- Gestion des Réclamations -->
        <div class="support-section">
            <h2>Réclamations</h2>
            <div class="btn-group">
                <button onclick="showComplaints()">Afficher les Réclamations</button>
                <button onclick="handleComplaint()">Gérer les Réclamations</button>
            </div>
            <div id="complaintsList">
                <table class="support-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Article</th>
                            <th>État</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Client 1</td>
                            <td>Article 1</td>
                            <td>En attente</td>
                            <td>01-08-2024</td>
                            <td><button onclick="resolveComplaint(1)">Résoudre</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Client 2</td>
                            <td>Article 2</td>
                            <td>En cours</td>
                            <td>02-08-2024</td>
                            <td><button onclick="resolveComplaint(2)">Résoudre</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Gestion des Retours -->
        <div class="support-section">
            <h2>Retours</h2>
            <div class="btn-group">
                <button onclick="showReturns()">Afficher les Retours</button>
                <button onclick="handleReturn()">Gérer les Retours</button>
            </div>
            <div id="returnsList">
                <table class="support-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Article</th>
                            <th>État</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Client 1</td>
                            <td>Article 1</td>
                            <td>Reçu</td>
                            <td>01-08-2024</td>
                            <td><button onclick="processReturn(1)">Traiter</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Client 2</td>
                            <td>Article 2</td>
                            <td>En cours</td>
                            <td>02-08-2024</td>
                            <td><button onclick="processReturn(2)">Traiter</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formulaire de Contact pour Support -->
        <div class="support-section">
            <h2>Formulaire de Contact</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="contactName">Nom:</label>
                    <input type="text" id="contactName" placeholder="Votre nom">
                </div>
                <div class="form-group">
                    <label for="contactEmail">Email:</label>
                    <input type="text" id="contactEmail" placeholder="Votre email">
                </div>
                <div class="form-group">
                    <label for="contactMessage">Message:</label>
                    <textarea id="contactMessage" placeholder="Votre message"></textarea>
                </div>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
    </div>

    <script>
        function showComplaints() {
            document.getElementById('complaintsList').style.display = 'block';
            document.getElementById('returnsList').style.display = 'none';
        }

        function handleComplaint() {
            alert("Gérer les réclamations");
        }

        function resolveComplaint(id) {
            alert("Réclamation ID " + id + " résolue");
        }

        function showReturns() {
            document.getElementById('complaintsList').style.display = 'none';
            document.getElementById('returnsList').style.display = 'block';
        }

        function handleReturn() {
            alert("Gérer les retours");
        }

        function processReturn(id) {
            alert("Retour ID " + id + " traité");
        }
        
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert("Message envoyé");
        });
    </script>

                <!-- Contenu du support ici -->
            </div>
            <div class="section payments hidden">
                <h1>Paiements</h1>
               
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .payments-section {
            margin-bottom: 40px;
        }
        .payments-section h2 {
            margin-bottom: 20px;
            color: #007bff;
        }
        .btn-group {
            margin-bottom: 20px;
        }
        .btn-group button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s;
        }
        .btn-group button:hover {
            background-color: #0056b3;
        }
        .payments-table {
            width: 100%;
            border-collapse: collapse;
        }
        .payments-table th, .payments-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .payments-table th {
            background-color: #007bff;
            color: white;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="text"], .form-group input[type="number"], .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
        .hidden {
            display: none;
        }
    </style>

    <div class="container">
        <!-- Suivi des Paiements Reçus -->
        <div class="payments-section">
            <h2>Suivi des Paiements Reçus</h2>
            <div class="btn-group">
                <button onclick="showPaymentTracking()">Afficher les Paiements</button>
                <button onclick="exportPayments()">Exporter les Données</button>
            </div>
            <div id="paymentTrackingList" class="hidden">
                <table class="payments-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Client 1</td>
                            <td>100 €</td>
                            <td>01-08-2024</td>
                            <td>Confirmé</td>
                            <td><button onclick="issueRefund(1)">Rembourser</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Client 2</td>
                            <td>150 €</td>
                            <td>02-08-2024</td>
                            <td>En attente</td>
                            <td><button onclick="issueRefund(2)">Rembourser</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Gestion des Remboursements -->
        <div class="payments-section">
            <h2>Gestion des Remboursements</h2>
            <div class="form-group">
                <label for="refundId">ID de la Commande:</label>
                <input type="number" id="refundId" placeholder="Entrez l'ID de la commande">
            </div>
            <div class="form-group">
                <label for="refundAmount">Montant à Rembourser:</label>
                <input type="text" id="refundAmount" placeholder="Entrez le montant">
            </div>
            <div class="form-group">
                <label for="refundReason">Raison du Remboursement:</label>
                <textarea id="refundReason" placeholder="Décrivez la raison du remboursement"></textarea>
            </div>
            <button class="btn" onclick="processRefund()">Traiter le Remboursement</button>
        </div>

        <!-- Intégration avec Systèmes de Paiement -->
        <div class="payments-section">
            <h2>Intégration avec les Systèmes de Paiement</h2>
            <div class="form-group">
                <label for="paymentAPI">API de Paiement:</label>
                <input type="text" id="paymentAPI" placeholder="Clé API ou URL de l'API">
            </div>
            <button class="btn" onclick="updatePaymentAPI()">Mettre à Jour l'API</button>
        </div>
    </div>

    <script>
        function showPaymentTracking() {
            document.getElementById('paymentTrackingList').style.display = 'block';
        }

        function exportPayments() {
            alert("Exporter les données des paiements");
        }

        function issueRefund(id) {
            alert("Remboursement de la commande ID " + id);
        }

        function processRefund() {
            alert("Traitement du remboursement");
        }

        function updatePaymentAPI() {
            alert("API de paiement mise à jour");
        }
    </script>
                
                <!-- Contenu des paiements ici -->
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.sidebar a').forEach(el => el.classList.remove('active'));
                document.querySelectorAll('.content .section').forEach(sec => sec.classList.add('hidden'));
                
                this.classList.add('active');
                const sectionId = this.id.replace('-btn', '');
                document.querySelector(`.content .${sectionId}`).classList.remove('hidden');
            });
        });
    </script>

   
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
            overflow-y: hidden;
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

            // Ajout du message de l'administration
            const administrationMessage = document.createElement('div');
            administrationMessage.className = 'message message artisan';
            administrationMessage.innerHTML = `<strong> Artisan :</strong> ${messageText}`;
            chatMessages.appendChild(administrationMessage);

            // Réinitialiser le champ d'entrée
            messageInput.value = '';

            // Simuler la réponse de l'artisan après une petite pause
            setTimeout(() => {
                const artisanMessage = document.createElement('div');
                artisanMessage.className = 'administration';
                artisanMessage.innerHTML = `<strong>Administration:</strong> Merci pour votre message. Que puis-je faire pour vous ?`;
                chatMessages.appendChild(artisanMessage);
            }, 1000);
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
