<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Pro_Artisan</title>

  <?php
  require 'animation2.php';

  ?>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
          <a class="navbar-brand " href="index.php"> Pro<span>Artisan</span> </a>
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Emplacement
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                tel : +225 0000000000
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                enreprise60@gmail.com
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/profile.php?id=61563751701528&mibextid=ZbWKwL">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/watch?v=YjCqZ8mlJiU&feature=shared">
              <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand navbar_brand_mobile" href="index.php"> Pro<span>Artisan</span> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">ACCEUIL<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">SERVICES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> A PROPOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="portfolio.php">CATEGORIES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">CONTACTEZ-NOUS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php" target="_blank">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                      CONNECTEZ-VOUS
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mofi.php">Recherchez un artisan</a>
                </li>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="detail-box">
                <h1>
                  Pro_Artisan <br />
                  Valorisation de l'artisanat local<br />
                  Le savoir-faire
                </h1>
                <div class="btn-box">
                  <a href="categorie.php" class="btn1">
                    En savoir plus
                  </a>
                  <a href="contact.php" class="btn2">
                    Contactez-nous
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="detail-box">
                <h1>
                  L'artisanat <br />
                  les savoir-faire traditionnels <br />
                  Notre métier
                </h1>
                <div class="btn-box">
                  <a href="categorie.php" class="btn1">
                    En savoir plus
                  </a>
                  <a href="contact.php" class="btn2">
                    Contactez-nous
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="detail-box">
                <h1>
                  Notre mission <br />
                  préserver ces compétences<br />
                  uniques.
                </h1>
                <div class="btn-box">
                  <a href="categorie.php" class="btn1">
                    En savoir plus
                  </a>
                  <a href="contact.php" class="btn2">
                    Contactez-nous
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Précédente</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Suivant</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Bienvenue chez <span>Pro_Artisan</span></h2>
            </div>
            <p>
              Nous sommes ravis de vous accueillir sur notre plateforme dédiée à la promotion
              des artisans et à la facilitation de la relation entre ceux qui recherchent
              des services spécialisés et les artisans qualifiés.
            </p>
            <a href="categorie.php">
              En savoir plus
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <!-- place a la vidéo -->
            </div>
        <div class="video">
            <video src="VID.mp4" controls
                aria-autocomplete="none"></video>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- portfolio section -->

  <section class="portfolio_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Notre domaine d'activité
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="filter_box">
          <nav class="owl-filter-bar">
            <a href="#" class="item active" data-owl-filter="*">Tous</a>
            <a href="#" class="item" data-owl-filter=".decorative">BOULANGER</a>
            <a href="#" class="item" data-owl-filter=".facade">CARRELEUR</a>
            <a href="#" class="item" data-owl-filter=".perforated">FLEURISTE</a>
            <a href="#" class="item" data-owl-filter=".railing">MAÇONNERIE</a>
          </nav>
        </div>
      </div>
    </div>
    <div class="owl-carousel portfolio_carousel">
      <div class="item decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p1.jpg" alt="" />
            <div class="btn_overlay">
              <a href="categorie.php" class="">
                Voir Plus
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item facade">
        <div class="box">
          <div class="img-box">
            <img src="images/p2.jpg" alt="" />
            <div class="btn_overlay">
              <a href="categorie.php" class="">
                Voir Plus
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item perforated decorative">
        <div class="box">
          <div class="img-box">
            <img src="images/p3.jpg" alt="" />
            <div class="btn_overlay">
              <a href="categorie.php" class="">
                Voir Plus
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item railing">
        <div class="box">
          <div class="img-box">
            <img src="images/p1.jpg" alt="" />
            <div class="btn_overlay">
              <a href="categorie.php" class="">
                Voir Plus
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end portfolio section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>Nos <span>Services</span></h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s1.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Soudure à domicile
              </h5>
              <p>
                Solution idéale pour ceux qui recherchent une intervention rapide,
                efficace et adaptée à vos besoins.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Soudure de Porte
              </h5>
              <p>
                Service essentiel pour maintenir et améliorer les portes métalliques de votre propriété.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s3.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Porte Métallique
              </h5>
              <p>
                Portes industrielles ou des portes sécurisées, permettant de garantir la robustesse de votre domicile.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/icons8-services.gif" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Mécanique Générale
              </h5>
              <p>
                S'assuré que les véhicules et les machines fonctionnent correctement et en toute sécurité.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/icons8-scooter.gif" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Soudage de vélo
              </h5>
              <p>
                Réparations et modifications de haute qualité, adaptées à vos besoins et à vos attentes.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/icons8-car.gif" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Mécanique Auto
              </h5>
              <p>
                S'assurer que votre véhicule reste en parfait état de fonctionnement est notre priorité.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="service.php">
          En savoir plus
        </a>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- contact section -->
  <section class="contact_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Entrer en <span>contact</span></h2>
      </div>
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="form_container">
            <form action="">
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Votre nom" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" placeholder="Numéro de téléphone" />
                </div>
                <div class="form-group col-lg-6">
                  <select name="" id="" class="form-control wide">
                    <option value="">Votre Sujet</option>
                    <option value="">Problème avec mon compte </option>
                    <option value="">Détaille sur un produit</option>
                    <option value="">Joindre un artisan</option>
                    <option value="">Suivre ma commande</option>
                    <option value="">Autres... </option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Votre ville" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Commune/quartier" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="message-box form-control" placeholder="Message" />
                </div>
              </div>
              <div class="btn_box">
                <button>
                  ENVOYER
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          AVIS CLIENTS
        </h2>
      </div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div id="customCarousel2" class="carousel slide" data-ride="carousel">
            <div class="row">
              <div class="col-md-11">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="box">
                      <div class="client_id">
                        <div class="img-box">
                          <img src="images/alasco.jpg" alt="" />
                        </div>
                        <h5>
                          Alice Martine
                        </h5>
                      </div>
                      <div class="detail-box">
                        <p>
                          "J'ai fait appel à Pro_Artisan pour la réparation de mon portail métallique, et je suis très
                          satisfaite du résultat. L'artisan a été professionnel, rapide et le portail est comme neuf.
                          Merci pour ce service de qualité !"
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="client_id">
                        <div class="img-box">
                          <img src="images/pierre bernard.jpg" alt="" />
                        </div>
                        <h5>
                          Pierre Bernard
                        </h5>
                      </div>
                      <div class="detail-box">
                        <p>
                          "ProArtisan m'a aidé à trouver un excellent mécanicien pour l'entretien de ma voiture. Le
                          service a été rapide et efficace, et ma voiture fonctionne parfaitement. Un grand merci à
                          l'équipe !"
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="client_id">
                        <div class="img-box">
                          <img src="images/alice.jpg" alt="" />
                        </div>
                        <h5>
                          Sophie Dubois
                        </h5>
                      </div>
                      <div class="detail-box">
                        <p>
                          "J'avais besoin d'une soudure sur une ancienne chaise en métal que je tiens beaucoup à cœur.
                          L'artisan de Pro_Artisan a fait un travail remarquable et la chaise est comme neuve. Je suis
                          vraiment impressionnée par leur savoir-faire."
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <ol class="carousel-indicators">
                  <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#customCarousel2" data-slide-to="1"></li>
                  <li data-target="#customCarousel2" data-slide-to="2"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding2">
      <div class="container">
        <div class="info_logo">
          <a class="navbar-brand" href="index.php"> Pro<span>artisan</span> </a>
        </div>
        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Lien utile
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.php">ACCEUIL <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="about.php">A PROPOS </a>
                  </li>
                  <li class="">
                    <a class="" href="service.php">SERVICES </a>
                  </li>
                  <li class="">
                    <a class="" href="portfolio.php"> CATEGORIES </a>
                  </li>
                  <li class="">
                    <a class="" href="contact.php"> CONTACTS </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Soudage
              </h5>
              <p>
                Solution idéale pour ceux qui recherchent une intervention rapide,
                efficace et adaptée à vos besoins.
              </p>
            </div>
            <div class="col-md-3 mx-auto  ">
              <h5>
                Reseaux sociaux
              </h5>
              <div class="social_box">
                <a href="https://www.facebook.com/profile.php?id=61563751701528&mibextid=ZbWKwL">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
                <a href="https://www.youtube.com/watch?v=YjCqZ8mlJiU&feature=shared">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <h5>
                Notre centre de soudure
              </h5>
              <p>
                Nous proposons une gamme complète de services de soudure, allant de la soudure TIG et MIG à la soudure à l'arc et à la soudure par points.
              </p>
            </div>
          </div>
        </div>
        <div class="info_bottom">
          <div class="row">
            <div class="col-lg-9">
              <div class="info_contact ">
                <div class="row">
                  <div class="col-md-3">
                    <a href="#" class="link-box">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>
                        Emplacement
                      </span>
                    </a>
                  </div>
                  <div class="col-md-5">
                    <a href="#" class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Tell +225 00000000
                      </span>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="link-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <span>
                        Entreprise60@gmail.com
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info_form ">
                <form action="">
                  <input type="email" placeholder="entreprise60@gmail.com" />
                  <button>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Tous droits réservés
        <a href="index.php">Entreprise60</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>
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
</head>

<body>
  <!-- Contenu de votre page -->

  <!-- Bouton pour remonter en haut de la page -->
  <button id="back-to-top" onclick="scrollToTop()">Haut de page</button>

  <script>
    window.onscroll = function() {
      scrollFunction()
    };

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




  <script type="text/javascript">
    window.addEventListener('scroll', function() {
      const header = document.querySelector('header');
      header.classList.toggle("sticky", window.scrollY > 0);
    });

    function toggleMenu() {
      const tmenuToggle = document.querySelector('.menuToggle');
      const navbar = document.querySelector('.navbar');
      navbar.classList.toggle('active');
      menuToggle.classList.toggle('active');
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>