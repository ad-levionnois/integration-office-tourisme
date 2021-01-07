<?php include 'header.php' ?>
<!--<link rel="stylesheet" href="assets/css/detail.css">-->

<header class="detail">

<!-- Navbar -->
  <div id="detail-burgerMenu">
    <nav class="navbar navbar-light bg-white">
      <!-- BurgerMenu -->
      <img src="assets/images/detail/burger-menu.png" alt="Burger menu" class="detail-burgerMenuIcon" onclick="openBurgerMenu()"/>
      <div class="text-center detail-navMobile">
        <!-- logo Mobile -->
        <a href="index.php"><img src="assets/images/detail/logo.png" class="detail-logoMobile" alt="Logo"></a>
        <h1>CHENAL HÔTEL</h1>
        <p class="detail-titleStar">*<span class="mx-2">*</span>*</p>
        <p class="detail-breadcrumbs text-uppercase"><a href="home.php">Accueil  > </a><a href="#">Séjourner > </a><a href="#">Hôtels > </a><a href="#" class="text-dark">Chenal Hotel</a></p>
      </div>
      <!-- Logo Desktop -->
      <a href="index.php"><img src="assets/images/detail/logo.png" class="detail-logoDesktop" alt="Logo"></a>
    </nav>
  </div>

  <a href="#" class="detail-modalLink">
    <div id="detail-banner"></div>
  </a>

  <div id="detail-bannerModal">
    <span class="detail-bannerModalClose">&times;</span>
      <img src="assets/images/detail/banner-modal.jpg" class="img-fluid detail-modalImg" alt="banner" />
  </div>
</header>

<main class="detail">
  <section class="d-flex justify-content-center">
    <!-- Section Description Desktop -->
    <div id="detail-description" class="container detail-descriptionDesktop detail-boxShadow pb-5">
      <h2 class="text-center">CHENAL HÔTEL</h2>
      <p class="detail-titleStar text-center">*<span class="mx-3">*</span>*</p>
      <p class="px-4">L’Hôtel Le Chenal*** vous reçoit chaleureusement à Beauvais, dans le département de l’Oise.
        Idéalement situé en centre ville de Beauvais, vous disposez d’un arrêt “Navette Aéroport Beauvais-Tillé” à proximité.<br/><br/>
        Notre hôtel est composé de 28 chambres, équipées de TV grand écran LCD avec Canal Satellite, la TNT, RMC Sport,
        BBC, TVE… ainsi qu’un accès wifi offert et d’une réception, room-service 24h/24.<br/><br/>
        Vous disposez de chambres de 1, 2 et 3 personnes ainsi que des chambres familiales. Nos chambres possèdent une
        salle de bains privative avec toilettes et sèche-cheveux intégrés.<br/><br/>
        Profitez d’un petit-déjeuner, buffet continental qui sera servi dans le salon de l’hôtel au rez-de-chaussée de 6h à 10h
        et de plusieurs restaurants : Le Sesame (situé derrière l’Hôtel Chenal) qui vous accueillent dans un cadre chaleureux
        et unique à Beauvais et d’autres restaurants à proximité de l’hôtel.</p>
        <div class="text-center detail-confort pt-3">
          <h4>CONFORT</h4>
          <img src="assets/images/detail/cross-icon.png" onclick="openConfort()" id="detail-confortIconMore" alt="Icone voir plus">
        </div>

        <!-- DROPDOWN CONFORT -->
        <div id="detail-confortMoreDropDown" class="container mt-5">
          <div class="row d-flex justify-content-center">
            <div class="col-8 d-flex justify-content-between mx-5">
              <!-- Wifi icon -->
              <div id="detail-confortMoreWifi" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-wifi.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCircleWifi" >
              </div>
              <!-- hairdryer icon -->
              <div id="detail-confortMoreHairdryer" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-hairdryer.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCircleHairdryer">
              </div>
              <!-- telephone icon -->
              <div id="detail-confortMorePhone" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/tel.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCirclePhone">
              </div>
              <!-- tv icon -->
              <div id="detail-confortMoreTv" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-tel.png" width="40px" alt="Icone voir plus" id="detail-confortMoreCircleTv">
              </div>
              <!-- parabole icon -->
              <div id="detail-confortMoreParabole" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-parabole.png" width="30px" alt="Icone voir plus" id="detail-confortMoreCircleParabole">
              </div>
              <!-- windows icon -->
              <div id="detail-confortMoreWindows" class="detail-confortMoreCircle d-flex justify-content-center align-items-center">
                <img src="assets/images/detail/icon-windows.png" width="30px" alt="Icone voir plus" id="detail-confortMoreCircleWindows">
              </div>
            </div>
          </div>

          <div class="mx-5 pl-5 detail-ConfortMoreHoverDescription">
            <p id="detail-confortMoreDescriptionWifi">Wi-fi</p>
            <p id="detail-confortMoreDescriptionHairdryer">Sèche-cheveux</p>
            <p id="detail-confortMoreDescriptionPhone">Téléphone</p>
            <p id="detail-confortMoreDescriptionTv">Télévision</p>
            <p id="detail-confortMoreDescriptionParabole">Satellite</p>
            <p id="detail-confortMoreDescriptionWindows">Double vitrage</p>
          </div>

        </div>
        <!-- DROPDOWN CONFORT -->
      </div>
      <!-- end Section Description Desktop -->

      <!-- Section Description Mobile -->
        <div class="container detail-descriptionMobile">
          <h2 class="text-center">CHENAL HÔTEL</h2>
          <p class="detail-titleStar text-center mt-1">*<span class="mx-2">*</span>*</p>
          <p class="px-4">L’Hôtel Le Chenal*** vous reçoit chaleureusement à Beauvais, dans le département de l’Oise.<br/><br/>
            Idéalement situé en centre ville de Beauvais, vous disposez d’un arrêt “Navette Aéroport Beauvais-Tillé” à proximité.
            </p>
          <div class="text-center detail-confort pt-3">
            <h4>CONFORT</h4>
            <img src="assets/images/detail/cross-icon-mobile.png" onclick="openConfort()" id="detail-confortIconMore" alt="Icone voir plus">
          </div>
        </div>
        <!-- Section Description Mobile -->
  </section>


  <section class="position-relative">
   <!-- Carousel chambre -->
    <div class="detail-carousel">
      <div class="row">
        <div class="col-lg-11">
          <ol class="carousel-indicators detail-carouselIndicators">
            <li data-target="#detail-carouselIndicators" data-slide-to="0" class="active">1</li>
            <li data-target="#detail-carouselIndicators" data-slide-to="1" class="active">2</li>
            <li data-target="#detail-carouselIndicators" data-slide-to="2" class="active">3</li>
            <li data-target="#detail-carouselIndicators" data-slide-to="2" class="active">4</li>
          </ol>
          <div class="carousel slide detail-carouselSlide" data-ride="carousel" id="detail-carouselIndicators">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="assets/images/detail/chambre1.jpg" class="img-fluid" alt="chambre1">
              </div>
              <div class="carousel-item">
                <img src="assets/images/detail/chambre2.jpg" class="img-fluid" alt="chambre2">
              </div>
              <div class="carousel-item">
                <img src="assets/images/detail/chambre1.jpg" class="img-fluid" alt="chambre1">
              </div>
              <div class="carousel-item">
                <img src="assets/images/detail/chambre2.jpg" class="img-fluid" alt="chambre2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End carousel chambre -->
  <!-- Description carousel Adresse -->
  <div class="d-flex justify-content-end">

    <div class="detail-carouselDescription bg-white position-sticky detail-boxShadow">
        <h4 class="text-center pt-3">CHENAL HÔTEL</h4>
        <p>63 boulevard du Général de Gaulle<br/>
          60000 Beauvais<br/>
          France<br/>
          tel: +33.3.44.06.04.60<br/>
          hotel-chenal-beauvais.fr </p>

      <div class="detail-accecibiltyPartBgOrange position-absolute d-flex justify-content-center align-items-center">
        <!-- icon couple -->
        <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
          <div class="detail-accecibiltyPartIcon">
            <img src="assets/images/detail/adeux.png" alt="">
          </div>
        </div>
        <!-- icon amis -->
        <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
          <div class="detail-accecibiltyPartIcon">
            <img src="assets/images/detail/entreamis.png" alt="">
          </div>
        </div>
        <!-- icon famille -->
        <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
          <div class="detail-accecibiltyPartIcon">
            <img src="assets/images/detail/enfamille.png" alt="">
          </div>
        </div>
        <!-- icon nombreux -->
        <div class="detail-accecibiltyPartRoundPurple mx-3 mt-2 d-flex justify-content-center">
          <div class="detail-accecibiltyPartIcon">
            <img src="assets/images/detail/atous.png" alt="">
          </div>
        </div>

      </div>
    </div>

  </div>
    <!-- Description carousel Adresse -->


    <!-- Tarifs chambre  -->

    <!-- modal chambre carousel -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <!-- modal chambre1 -->
        <div class="modal fade detail-modalChambre1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="detail-modalChambreIndicators1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#detail-modalChambreIndicators1" data-slide-to="0" class="active"></li>
                  <li data-target="#detail-modalChambreIndicators1" data-slide-to="1"></li>
                  <li data-target="#detail-modalChambreIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="chambre2">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="chambre2">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="chambre2">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#detail-modalChambreIndicators1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#detail-modalChambreIndicators1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal chambre1 -->
        <!-- modal chambre2 -->
        <div class="modal fade detail-modalChambre2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="detail-modalChambreIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#detail-modalChambreIndicators2" data-slide-to="0" class="active"></li>
                  <li data-target="#detail-modalChambreIndicators2" data-slide-to="1"></li>
                  <li data-target="#detail-modalChambreIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/detail/chambre1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre1.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#detail-modalChambreIndicators2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#detail-modalChambreIndicators2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal chambre2 -->
        <!-- modal chambre3 -->
        <div class="modal fade detail-modalChambre3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="detail-modalChambreIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#detail-modalChambreIndicators3" data-slide-to="0" class="active"></li>
                  <li data-target="#detail-modalChambreIndicators3" data-slide-to="1"></li>
                  <li data-target="#detail-modalChambreIndicators3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#detail-modalChambreIndicators3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#detail-modalChambreIndicators3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal chambre3 -->
        <!-- modal chambre4 -->
        <div class="modal fade detail-modalChambre4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="detail-modalChambreIndicators4" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#detail-modalChambreIndicators4" data-slide-to="0" class="active"></li>
                  <li data-target="#detail-modalChambreIndicators4" data-slide-to="1"></li>
                  <li data-target="#detail-modalChambreIndicators4" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/detail/chambre2.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#detail-modalChambreIndicators4" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#detail-modalChambreIndicators4" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal chambre4 -->



      </div>
    </div>
  </div>
  <!-- END modal chambre carousel -->

  <!-- Chambre description tarif desktop -->
    <div class="detail-priceDesktop container my-5">
      <div class="row">
        <div class="col-lg-8 detail-boxShadow detail-price text-uppercase">
          <div class="row mt-3">
            <div class="col-lg-8">
              <a href="#"><h3>chambre confort</h3></a>
              <p class="detail-priceDesktopTarif">Tarif à partir de : <span>72 <span>€</span></span></p>
            </div>
            <div class="col-lg-2">
              <a data-toggle="modal" data-target=".detail-modalChambre1"><img src="assets/images/detail/chambreconfort.jpg" alt=""></a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-8">
              <a href="#"><h3>Chambre Supérieur</h3></a>
              <p class="detail-priceDesktopTarif">Tarif à partir de : <span>72 <span>€</span></span></p>
            </div>
            <div class="col-lg-2">
              <a data-toggle="modal" data-target=".detail-modalChambre2"><img src="assets/images/detail/chambre-double.jpg" alt=""></a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-8">
              <a href="#"><h3>Chambre familliale</h3></a>
              <p class="detail-priceDesktopTarif">Tarif à partir de : <span>82 <span>€</span></span></p>
            </div>
            <div class="col-lg-2">
              <a data-toggle="modal" data-target=".detail-modalChambre3"><img src="assets/images/detail/chambrefamilliale.jpg" alt=""></a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-8">
              <a href="#"><h3>Chambre triple</h3></a>
              <p class="detail-priceDesktopTarif">Tarif à partir de : <span>119<span>€</span></span></p>
            </div>
            <div class="col-lg-2">
              <a data-toggle="modal" data-target=".detail-modalChambre4"><img src="assets/images/detail/chambremini1.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--END Chambre description tarif desktop -->
  <!-- Chambre description tarif Mobile -->
    <div class="detail-priceMobile text-uppercase text-center">
      <div class="detail-priceMobileBgOrangeTarif">
          <p>TARIF</p>
      </div>
      <div class="">
        <a data-toggle="modal" data-target=".detail-modalChambre1"><img src="assets/images/detail/chambreconfort-mobile.jpg" class="img-fluid" alt=""></a>
        <a href="#"><h3>chambre confort</h3></a>
        <p class="detail-priceMobileTarif">Tarif à partir de : <span>72 <span>€</span></span></p>
      </div>
      <div class="">
        <a data-toggle="modal" data-target=".detail-modalChambre2"><img src="assets/images/detail/chambredouble-mobile.jpg" class="img-fluid" alt=""></a>
        <a href="#"><h3>Chambre Supérieur</h3></a>
        <p class="detail-priceMobileTarif">Tarif à partir de : <span>72 <span>€</span></span></p>
      </div>
      <div class="">
        <a data-toggle="modal" data-target=".detail-modalChambre3"><img src="assets/images/detail/chambrefamilliale-mobile.jpg" class="img-fluid" alt=""></a>
        <a href="#"><h3>Chambre familliale</h3></a>
        <p class="detail-priceMobileTarif">Tarif à partir de : <span>82 <span>€</span></span></p>
      </div>
      <div class="">
        <a data-toggle="modal" data-target=".detail-modalChambre4"><img src="assets/images/detail/chambremini1-mobile.jpg" class="img-fluid" alt=""></a>
        <a href="#"><h3>Chambre triple</h3></a>
        <p class="detail-priceMobileTarif">Tarif à partir de : <span>119 <span>€</span></span></p>
      </div>
      <div class="detail-priceMobileBgOrangeAdress">
          <p class="mt-2">CHENAL HOTEL</p>
      </div>
      <p class="text-left p-4 detail-CarouselDescription">63 boulevard du Général de Gaulle<br/>
        60000 Beauvais<br/>
        France<br/>
        tel: +33.3.44.06.04.60<br/>
        hotel-chenal-beauvais.fr </p>
    </div>
    <!-- END Chambre description tarif mobile -->
  </section>
  <!-- END Tarifs chambre  -->

  <!-- MAP GOOGLE -->
  <section class="container-fluid detail-map p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.0450728391756!2d2.086639816068699!3d49.42696187934733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7012ca4282d53%3A0x12d0fe60af32d183!2s63%20Boulevard%20du%20G%C3%A9n%C3%A9ral%20de%20Gaulle%2C%2060000%20Beauvais!5e0!3m2!1sfr!2sfr!4v1592574094307!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>
  <!--END  MAP GOOGLE -->

</main>
<footer>
  <!-- footer Desktop -->
  <div class="container-fluid footer-desktop pb-5">
    <div class="row text-white">
      <div class="col-lg-5 px-5 text-center mt-3">
          <img src="assets/images/detail/logo-white.png" width="230px" alt="Logo">
          <div class="row mt-2">
            <div class="offset-2 col-8 d-flex flex-column">
              <p class="text-left footer-BeauvaisDescriptionDesktop">La ville de beauvais situé au coeur de sa régon historique
                la picardie, est célèbre pour sa cathedrale gothique et ses
                illuminations. Notre ville offre de nombreux parcours de
                visite, commerces et sites a visiter.</p>
              </div>
              <div class="button-group mt-2 mx-auto col-lg-7 d-flex flex-column">
                <button type="button" class="text-uppercase px-5 py-3">nos bureaux informations</button>
                <button type="button" class="text-uppercase px-5 py-3 mt-5" >nous contactez</button>
              </div>
            </div>
            <p class="text-left pt-4 footer-network text-uppercase">suivez-nous
              <a href="#"><img src="assets/images/detail/twitter-icon.png" class="ml-4" width="22px" alt=""></a>
              <a href="#"><img src="assets/images/detail/icon-fb.png" class="mx-2" width="22px" alt=""></a>
              <a href="#"><img src="assets/images/detail/icon-instagram.png" width="22px"  alt=""></a>
            </p>
      </div>
      <div class="col-lg-2 d-flex flex-column justify-content-center text-center footer-guide mt-5">
        <h5 class="text-uppercase">Laissez vous guidez</h5>
        <p>Consultez nos brochures
            détaillées pour facilter la
            découverte de notre ville</p>

        <img src="assets/images/detail/couverture-flyers.jpg" width="150px" height="250px" class="mx-auto mt-1">
        <button type="button" class="text-uppercase px-2 py-3 footer-btn-brochure mt-3" name="button">Nos brochures</button>
      </div>

      <div class="offset-1 col-lg-4 d-flex flex-column justify-content-center footer-lign">
        <button type="button" class="text-uppercase px-5 py-3 footer-btn-newletter mt-4 mb-5" name="button">S'inscrire à la newletter</button>
        <img src="assets/images/detail/carte-beauvais-footer.png" width="400px" height="400px" class="mx-auto" alt="">
      </div>

    </div>
  </div>
  <!-- END footer Desktop -->
  <!-- footer MOBILE -->
  <div class="container-fluid footer-mobile py-5 text-white text-center">
     <img src="assets/images/detail/logo-white.png" width="190px" alt="Logo">
     <h5 class="text-uppercase">Laissez vous guidez</h5>
     <img src="assets/images/detail/couverture-flyers.jpg" width="150px" height="250px" class="mx-auto">
     <div class="row">
       <div class="button-group mt-2 col-lg-6 d-flex flex-column mx-auto">
         <button type="button" class="text-uppercase px-2 py-3 my-3" name="button">Nos brochures</button>
         <button type="button" class="text-uppercase px-5 py-3 my-3">Informations</button>
         <button type="button" class="text-uppercase px-5 py-3 my-3" >nous contactez</button>
         <button type="button" class="text-uppercase px-5 py-3 my-3" name="button">S'inscrire à la newletter</button>
       </div>
     </div>
     <p class="pt-4 footer-network text-uppercase">suivez-nous</p>
     <a href="#"><img src="assets/images/detail/icon-instagram.png" class="ml-4" alt="Icone instagram"></a>
     <a href="#"><img src="assets/images/detail/icon-fb.png" class="mx-5" alt="Icone facebook"></a>
     <a href="#"><img src="assets/images/detail/twitter-icon.png" alt="Icone twitter"></a>
    </div>
 <!-- END footer MOBILE -->
</footer>

<?php include 'footer.php' ?>
