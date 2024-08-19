<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Animation pour les images */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes flash {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.3;
            }
        }

        @keyframes giftPop {
            0% {
                transform: scale(1) rotate(0deg);
                opacity: 0;
            }
            50% {
                transform: scale(1.2) rotate(10deg);
                opacity: 1;
            }
            100% {
                transform: scale(1) rotate(0deg);
                opacity: 1;
            }
        }

        @keyframes zoomEffect {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 rgba(0, 0, 0, 0.3);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 rgba(0, 0, 0, 0.3);
            }
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        .fade-in:nth-child(1) {
            animation-delay: 0.5s;
        }

        .fade-in:nth-child(2) {
            animation-delay: 1s;
        }

        .fade-in:nth-child(3) {
            animation-delay: 1.5s;
        }

        .flash {
            animation: flash 1.5s infinite;
        }

        .gift-pop {
            animation: giftPop 2s ease-out infinite;
        }

        .zoom-animation {
            animation: zoomEffect 2s ease-in-out infinite;
        }

        /* Alignement horizontal des images */
        .image-container {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            padding: 1rem;
            justify-content: center;
        }

        .image-container figure {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            cursor: pointer; /* Indicateur visuel pour le clic */
        }

        .image-container img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .image-container figcaption {
            margin-top: 0.5rem;
            font-weight: bold;
        }

        .phone-number {
            font-size: 0.9rem;
            color: #555;
        }

        /* Styles pour le détail de l'image */
        .image-details {
            display: none; /* Caché par défaut */
            text-align: center;
        }

        .image-details img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .image-details h5, .image-details p {
            margin: 0.5rem 0;
        }
    </style>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade zoom-animation" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nos meilleurs artisans</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="image-container">
                        <figure class="fade-in gift-pop flash" data-image-src="pc2.jpg" data-name="Adama" data-phone="+33 6 12 34 56 78" data-description="Expert en ébénisterie">
                            <img src="pc2.jpg" alt="">
                            <figcaption>Adama</figcaption>
                            <div class="phone-number">+33 6 12 34 56 78</div>
                        </figure>
                        <figure class="fade-in gift-pop flash" data-image-src="pc3.jpg" data-name="Anicet" data-phone="+33 6 87 65 43 21" data-description="Maçon qualifié">
                            <img src="pc3.jpg" alt="">
                            <figcaption>Anicet</figcaption>
                            <div class="phone-number">+33 6 87 65 43 21</div>
                        </figure>
                        <figure class="fade-in gift-pop flash" data-image-src="myapp/images/adama.jpeg" data-name="Abdoulaye" data-phone="+33 6 34 56 78 90" data-description="Plombier professionnel">
                            <img src="myapp/images/adama.jpeg" alt="">
                            <figcaption>Abdoulaye</figcaption>
                            <div class="phone-number">+33 6 34 56 78 90</div>
                        </figure>
                    </div>
                    <div class="image-details">
                        <img id="detailImage" src="" alt="">
                        <h5 id="detailName"></h5>
                        <p id="detailPhone"></p>
                        <p id="detailDescription"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Sauvegarder les changements</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script pour afficher le pop-up après 3 minutes -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Afficher le modal après 3 minutes (180000 ms)
            setTimeout(function () {
                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
                myModal.show();
            }, 10000); // 180000 ms = 3 minutes

            document.querySelectorAll('.image-container figure').forEach(function (figure) {
                figure.addEventListener('click', function () {
                    var imageSrc = this.getAttribute('data-image-src');
                    var name = this.getAttribute('data-name');
                    var phone = this.getAttribute('data-phone');
                    var description = this.getAttribute('data-description');

                    document.getElementById('detailImage').src = imageSrc;
                    document.getElementById('detailName').textContent = name;
                    document.getElementById('detailPhone').textContent = phone;
                    document.getElementById('detailDescription').textContent = description;

                    // Afficher les détails et cacher les vignettes
                    document.querySelector('.image-container').style.display = 'none';
                    document.querySelector('.image-details').style.display = 'block';
                });
            });
        });
    </script>
</body>

</html>
