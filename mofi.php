<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays et Villes</title>
    <link rel="stylesheet" href="/Nos experts/choix.css">
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
    </style>
</head>
<body>
    <header>
        <nav>
            <h1><img src="/myapp/images/logo_removebg_31.png" alt=""></h1>
            <ul>
                <li><a href="#">Centre d'assistance</a></li>
                <!-- Lien supprimé : <li><a href="#">Commandez au numéro 05 86 29 21 27</a></li> -->
            </ul>
        </nav>
    </header>

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
            <a href="#" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="#" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="me-4 text-reset">
                <i class="fab fa-github"></i>
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
</body>
</html>
