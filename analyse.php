<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapports et Analyses de l'Artisan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            display: flex;
            height: calc(100vh - 120px); /* Ajuster la hauteur en fonction de l'en-tête et du pied de page */
            margin: 20px auto;
        }

        .sidebar {
            width: 250px;
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100%;
            overflow-y: auto;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #45a049;
        }

        .content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .chart-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .chart-box {
            width: 45%;
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .actions {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .actions i {
            margin-left: 10px;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        canvas {
            width: 100% !important;
            height: auto !important;
        }
    </style>
</head>

<body>
    <header>
        <h1>Rapports et Analyses de l'Artisan</h1>
    </header>

    <div class="container">
        <!-- Barre latérale avec les liens de navigation -->
        <div class="sidebar">
            <a href="#" id="show-sales">Ventes Mensuelles</a>
            <a href="#" id="show-profit">Rentabilité</a>
            <a href="#" id="show-clients">Clients Fidèles vs Nouveaux Clients</a>
            <a href="#" id="show-inventory">Gestion des Stocks</a>
            <a href="#" id="show-services">Performance des Services</a>
            <a href="#" id="show-projects">Suivi des Projets</a>
        </div>

        <!-- Section de contenu -->
        <div class="content">
            <!-- Section Ventes Mensuelles -->
            <div id="sales-section" class="section">
                <h2>Ventes Mensuelles</h2>
                <div class="chart-box">
                    <div class="actions">
                        <i class="fas fa-edit" title="Éditer" onclick="editChart('salesChart')"></i>
                        <i class="fas fa-trash" title="Supprimer" onclick="deleteChart('salesChart')"></i>
                        <i class="fas fa-eye" title="Voir les détails" onclick="viewDetails('salesChart')"></i>
                    </div>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>

            <!-- Section Rentabilité -->
            <div id="profit-section" class="section">
                <h2>Rentabilité</h2>
                <div class="chart-box">
                    <div class="actions">
                        <i class="fas fa-edit" title="Éditer" onclick="editChart('profitChart')"></i>
                        <i class="fas fa-trash" title="Supprimer" onclick="deleteChart('profitChart')"></i>
                        <i class="fas fa-eye" title="Voir les détails" onclick="viewDetails('profitChart')"></i>
                    </div>
                    <canvas id="profitChart"></canvas>
                </div>
            </div>

            <!-- Section Clients Fidèles vs Nouveaux Clients -->
            <div id="clients-section" class="section">
                <h2>Clients Fidèles vs Nouveaux Clients</h2>
                <div class="chart-box">
                    <div class="actions">
                        <i class="fas fa-edit" title="Éditer" onclick="editChart('clientsChart')"></i>
                        <i class="fas fa-trash" title="Supprimer" onclick="deleteChart('clientsChart')"></i>
                        <i class="fas fa-eye" title="Voir les détails" onclick="viewDetails('clientsChart')"></i>
                    </div>
                    <canvas id="clientsChart"></canvas>
                </div>
            </div>

            <!-- Section Gestion des Stocks -->
            <div id="inventory-section" class="section">
                <h2>Gestion des Stocks</h2>
                <div class="chart-box">
                    <div class="actions">
                        <i class="fas fa-edit" title="Éditer" onclick="editChart('inventoryChart')"></i>
                        <i class="fas fa-trash" title="Supprimer" onclick="deleteChart('inventoryChart')"></i>
                        <i class="fas fa-eye" title="Voir les détails" onclick="viewDetails('inventoryChart')"></i>
                    </div>
                    <canvas id="inventoryChart"></canvas>
                </div>
            </div>

            <!-- Section Performance des Services -->
            <div id="services-section" class="section">
                <h2>Performance des Services</h2>
                <div class="chart-box">
                    <div class="actions">
                        <i class="fas fa-edit" title="Éditer" onclick="editChart('servicesChart')"></i>
                        <i class="fas fa-trash" title="Supprimer" onclick="deleteChart('servicesChart')"></i>
                        <i class="fas fa-eye" title="Voir les détails" onclick="viewDetails('servicesChart')"></i>
                    </div>
                    <canvas id="servicesChart"></canvas>
                </div>
            </div>

            <!-- Section Suivi des Projets -->
            <div id="projects-section" class="section">
                <h2>Suivi des Projets</h2>
                <div class="chart-box">
                    <div class="actions">
                        <i class="fas fa-edit" title="Éditer" onclick="editChart('projectsChart')"></i>
                        <i class="fas fa-trash" title="Supprimer" onclick="deleteChart('projectsChart')"></i>
                        <i class="fas fa-eye" title="Voir les détails" onclick="viewDetails('projectsChart')"></i>
                    </div>
                    <canvas id="projectsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Rapports et Analyses de l'Artisan</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Fonction pour afficher la section correspondante
        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const targetId = this.id.replace('show-', '') + '-section';
                document.querySelectorAll('.section').forEach(section => {
                    section.classList.remove('active');
                });
                document.getElementById(targetId).classList.add('active');
            });
        });

        // Fonctions pour les actions des icônes
        function editChart(chartId) {
            alert('Édition du graphique : ' + chartId);
        }

        function deleteChart(chartId) {
            const confirmation = confirm('Êtes-vous sûr de vouloir supprimer ce graphique ?');
            if (confirmation) {
                alert('Graphique ' + chartId + ' supprimé.');
            }
        }

        function viewDetails(chartId) {
            alert('Affichage des détails pour : ' + chartId);
        }

        // Initialiser les graphiques
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Ventes Mensuelles',
                    data: [1200, 1900, 3000, 5000, 2000, 3000, 4000, 2500, 3000, 3500, 3000, 4500],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false,
                }]
            }
        });

        const profitCtx = document.getElementById('profitChart').getContext('2d');
        const profitChart = new Chart(profitCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Rentabilité',
                    data: [1200, 1500, 1700, 2500, 1300, 2300, 3400, 2400, 2500, 3300, 2800, 4200],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            }
        });

        const clientsCtx = document.getElementById('clientsChart').getContext('2d');
        const clientsChart = new Chart(clientsCtx, {
            type: 'doughnut',
            data: {
                labels: ['Fidèles', 'Nouveaux'],
                datasets: [{
                    label: 'Clients',
                    data: [60, 40],
                    backgroundColor: ['rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            }
        });

        const inventoryCtx = document.getElementById('inventoryChart').getContext('2d');
        const inventoryChart = new Chart(inventoryCtx, {
            type: 'pie',
            data: {
                labels: ['Disponible', 'En Rupture'],
                datasets: [{
                    label: 'Stock',
                    data: [80, 20],
                    backgroundColor: ['rgba(153, 102, 255, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(153, 102, 255, 1)', 'rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            }
        });

        const servicesCtx = document.getElementById('servicesChart').getContext('2d');
        const servicesChart = new Chart(servicesCtx, {
            type: 'radar',
            data: {
                labels: ['Service 1', 'Service 2', 'Service 3', 'Service 4', 'Service 5'],
                datasets: [{
                    label: 'Performance des Services',
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }]
            }
        });

        const projectsCtx = document.getElementById('projectsChart').getContext('2d');
        const projectsChart = new Chart(projectsCtx, {
            type: 'polarArea',
            data: {
                labels: ['Projet 1', 'Projet 2', 'Projet 3', 'Projet 4'],
                datasets: [{
                    label: 'Suivi des Projets',
                    data: [11, 16, 7, 3],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            }
        });
    </script>
</body>

</html>
