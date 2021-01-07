<?php include "header.php" ?>
<!--<link rel="stylesheet" href="assets/css/text.css">-->

<!--SECTION NAVBAR -->
<div id="detail-burgerMenu">
  <nav class="navbar navbar-light bg-white d-flex align-items-start justify-content-between">
    <img src="assets/images/detail/burger-menu.png" alt="Burger menu" class="detail-burgerMenuIcon" onclick="openBurgerMenu()"/>
    <div class="detail-navMobile">
      <!-- logo Mobile -->
      <a href="index.php"><img src="assets/images/detail/logo.png" class="detail-logoMobile" alt="Logo"></a>
      <h1 class="text-uppercase text-h1">Aeroport Paris-Beauvais</h1>
    </div>
    <a href="index.php"><img src="assets/images/detail/logo.png"  class="detail-logoDesktop" alt="Logo"></a>
  </nav>
</div>


<!-- SECTION BANNER -->
  <header class="text-header">

    <div class="text-imgBanner">
      <img class="text-imgBgBanner" src="assets/images/text/page_paris_beauvais.jpg" alt="image avion"/>
      <div class="container-fluid text-containerBanner">
        <div class="row">
          <div class="col-lg-6">
            <p>Situé sur la commune de Tillé, à 2km au Nord de Beauvais et à environ 70km de Paris.</p>
            <p>Avec plus de 60 destinations</p>
            <input class="text-buttonDecouvrir text-uppercase py-2" type="button" value="Découvrir">
          </div>
          <div class="col-lg-6 text-iconSocialMedia">
            <a href="#"><img src="assets/images/text/icon-facebook.png" alt="icone facebook"/></a>
            <a href="#"><img src="assets/images/text/icon-google-+.png" alt="icone google"/></a>
            <a href="#"><img src="assets/images/text/icon-twitter.png" alt="icone twitter"/></a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-breadcrumbs">
      <a href="index.php"><h3 class="text-uppercase text-fontOrange"><span class="font-weight-bold">A</span>ccueil ></h3></a>
      <a href="#"><h3 class="text-uppercase text-fontOrange"><span class="font-weight-bold">A</span>éroport de Paris Beauvais ></h3></a>
      <a href="#"><h3 class="text-uppercase text-fontBlack"><span class="font-weight-bold">P</span>aris Beauvais</h3></a>
    </div>

  </header>

<!-- SECTION SERVICE -->
  <section class="text-sectionServices">

    <div class="text-titleServices">
      <h2 class="text-uppercase"><span class="text-fontPurple">Les services <br></span><span class="text-fontWhite text-mobileFontPurple">de l'aéroport</span></h2>
      <img class="text-iconRestau" src="assets/images/text/text-iconRestauServices.png" alt="icone restaurant"/>
    </div>

    <div class="container-fluid text-imgServices">
      <div class="row">
        <div class="col-lg-6 p-0">
          <img src="assets/images/text/services-sandwich.jpg" alt="image comptoir sandwich"/>
        </div>
        <div class="col-lg-6 p-0">
          <img src="assets/images/text/services-vin.jpg" alt="image magasin vin"/>
        </div>
      </div>
    </div>

    <div class="text-encadreText">
      <p>Un aéroport est une mini ville et ce n'est pas l'Aéroport de Paris-Beauvais qui vous montrera l'inverse. Chacun de ses deux terminaux vous proposera des boutiques, des restaurants, des snacks de quoi acheter des souvenirs ou combler votre faim.</p>
    </div>

    <div class="text-infoWifiAtm">
      <div class="text-wifi">
        <img class="text-servicesWifiIcon" src="assets/images/text/text-iconWifi.png" alt="icon wifi"/>
        <p>Vous n'avez pas envie de vous balader en attendant votre avion, profitez alors de ses nombreux sièges ainsi que du Wifi gratuit et illimité !</p>
      </div>
      <div class="text-atm">
        <img class="text-servicesWifiIcon" src="assets/images/text/text-iconAtm.png" alt="icon atm"/>
        <p>Votre destination est l'Angleterre, la Hongrie ou la Pologne, vous n'avez pas eu le temps de changer votre monnaie, pas de panique le distributeur automatique au terminal 2 convertira votre monnaie dans la devise étrangère souhaitée.</p>
      </div>
    </div>

    <div class="text-etInfo">
      <div class="text-symboleEt">
        <img src="assets/images/text/text-iconEt.png" alt="icone Et"/>
      </div>
      <div class="text-infoText">
        <p>Pleins d'autres services seront à votre disposition !</p>
      </div>
    </div>

  </section>

<!-- SECTION TRANSPORT -->
  <section class="text-transport">

    <div class="text-titleTransport">
      <img class="text-iconTransport" src="assets/images/text/text-iconTransport.png" alt="icone transport"/>
      <h2 class="text-uppercase font-weight-bold"><span class="text-fontPurple">Comment s'y rendre<br></span><span class="text-fontWhite">/ se déplacer ?</span></h2>
    </div>

<div class="row m-0">
  <div class="col-lg-6">
    <img class="text-chevronGauche" src="assets/images/text/text-chevronGauche.png" alt="chevron gauche"/>
    <div class="text-navette">
      <h3 class="text-titleNavette text-fontPurple font-weight-bold">En navette</h3>
      <img src="assets/images/text/text-navette.jpg" alt="image navette"/>
      <p class="text-pNavette">De nombreuses navettes relient le centre de Paris (porte de Maillot - Parking Pershing) à l'aéroport en 1h15.<br><br>Vous pouvez réserver votre trajet en ligne</p>
    </div>
  </div>

  <div class="text-carousselPoint">
    <img src="assets/images/text/text-carousselPointActive.png" alt="icone caroussel slider"/>
    <img src="assets/images/text/text-carousselPoint.png" alt="icone caroussel slider"/>
    <img src="assets/images/text/text-carousselPoint.png" alt="icone caroussel slider"/>
    <img src="assets/images/text/text-carousselPoint.png" alt="icone caroussel slider"/>
    <img src="assets/images/text/text-carousselPoint.png" alt="icone caroussel slider"/>
    <img src="assets/images/text/text-carousselPoint.png" alt="icone caroussel slider"/>
  </div>

  <div class="col-lg-6">
    <img class="text-chevronDroit" src="assets/images/text/text-chevronDroit.png" alt="chevron droit"/>
    <div class="text-bus">
      <h3 class="text-titleBus text-fontPurple font-weight-bold">En bus</h3>
      <img src="assets/images/text/text-bus.jpg" alt="image bus"/>
      <p class="text-pBus">La ligne numéro 06 vous emmène directement au centre-ville de Beauvais où vous pourrez profitez de ses monuments historiques, de ses bars, restaurants et de ses nombreuses boutiques.</p>
    </div>
  </div>
</div>

  </section>

<!-- SECTION COMPAGNIES -->
  <section class="text-compagnies">

    <div class="text-titleCompagnies">
      <h2 class="text-uppercase font-weight-bold text-fontPurple">Les compagnies<br>aériennes</h2>
      <img class="text-iconAvion" src="assets/images/text/text-iconAvion.png" alt="icone avion"/>
    </div>

    <div class="text-logoCompagnies">
      <a href="#"><img src="assets/images/text/text-logoRayanair.jpg" alt="logo Rayanair"/></a>
      <a href="#"><img src="assets/images/text/text-logoBlueair.png" alt="logo Blue air"/></a>
      <a href="#"><img src="assets/images/text/text-logoMoldova.png" alt="logo Air Moldova"/></a>
      <a href="#"><img src="assets/images/text/text-logoLauda.png" alt="logo Laudamotion"/></a>
    </div>

    <div class="text-logoCompagnies text-mobileLogoCompagnies">
      <a href="#"><img src="assets/images/text/text-logoVolotea.png" alt="logo Volotea"/></a>
      <a href="#"><img src="assets/images/text/text-logoSkyup.png" alt="logo SkyUp Airlines"/></a>
      <a href="#"><img src="assets/images/text/text-logoWizz.png" alt="logo Wizz"/></a>

    </div>

  </section>
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

<?php include "footer.php" ?>
