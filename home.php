
<!--<link rel="stylesheet" href="assets/css/home.css">-->


  <!--Menu-Burger-->

  <div id="detail-burgerMenu" class="position-absolute home-burgerMenu">
    <nav class="navbar d-flex align-items-start justify-content-between">
      <img src="assets/images/detail/burger-menu.png" alt="Burger menu" class="detail-burgerMenuIcon" onclick="openBurgerMenu()"/>
    </nav>
  </div>

  <div class="home-megaWrapper">
  <!--Carou-Head-->
  <div id="carouselExampleIndicators1" class="carousel slide home-carouselHeader " data-ride="carousel">

    <ol class="carousel-indicators home-carouselIndicators">
      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active ind-active"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="1" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="2" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="3" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="4" class="ind-inactive"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="5" class="ind-inactive"></li>
    </ol>
    <div class="carousel-inner w-100">

      <div class="carousel-item position-relative active">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide1">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide2">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide3">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide4">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide5">
      </div>
      <div class="carousel-item position-relative">
        <img src="assets/images/home/slider-1.png" class="d-block w-100" alt="slide6">
      </div>
    </div>

  </div>

  <!--Logo-Head-->
  <div class="home-logoBan position-absolute">
    <a href="index.php"><img src="assets/images/home/Logo-beauvais.png"></a>
  </div>
  <!--Dropdown-Langage-->
  <div class="home-langagePicker position-absolute">
    FR
  </div>

  <!--Mini-Slider-Head-->
  <div id="carouselExampleControls" class="carousel slide home-miniSliderImg" data-ride="carousel">
    <div class="carousel-inner home-innerCarouselMiniSlider">
      <div class="carousel-item active">
        <img class="" src="assets/images/home/minislider.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="" src="assets/images/home/minislider.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="" src="assets/images/home/minislider.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev home-miniSliderControlPrev" href="#carouselExampleControls" role="button" data-slide="prev">
      <img class="" aria-hidden="true" src="assets/images/home/fleche-gauche-minislider.png" alt="fleche gauche">
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next home-miniSliderControlNext" href="#carouselExampleControls" role="button" data-slide="next">
      <img class="" aria-hidden="true" src="assets/images/home/fleche-droite-minislider.png" alt="fleche droite">
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--Box-Covid-->
  <div class="container-fluid home-containerCovid d-flex justify-content-center flex-column text-white">
    <div class="home-textCovid">ATTENTION COVID - 19  -> Retrouvez la listes des hotels et restaurants ouvert ici</div>
  </div>




  <!--Container-Agenda-->
  <div class="container-fluid home-containerAgenda position-relative">

  <!--Titre-Agenda-->
    <div class="container">
      <div class="row">
        <div class="col-8 ">
          <h2 class="home-titreAgenda">L'AGENDA DE BEAUVAIS</h2>
        </div>
      </div>
    </div>

  <!--Links-Agenda-->
    <div class="container home-catAgenda">
      <div class="row">
        <div class="col-3">
          <a href="#"class="home-listeAgenda">PROCHAINEMENT</a>
        </div>
        <div class="col-3">
          <a href="#"class="home-listeAgenda">LES SEMAINES A VENIR</a>
        </div>
        <div class="col-3">
          <a href="#"class="home-listeAgenda">LES MOIS A VENIR</a>
        </div>
        <div class="col-3">
          <a href="#"class="home-listeAgenda">CALENDRIER</a>
        </div>
      </div>
    </div>

  <!--Image-Agenda-->
    <div class="container home-containerAgendaPhoto">
      <div class="row">
        <div class="col-6">
          <img class="" src="assets/images/home/Marche-artisanal.png" alt="Image Agenda">
        </div>
      </div>
    </div>

  <!--Carousel-Agenda-->
    <div id="carouselExampleControls2" class="carousel slide home-agendaSlider position-absolute" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="" src="assets/images/home/LA-MALADRERIE-A-LA-LANTERNE.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="" src="assets/images/home/LA-MALADRERIE-A-LA-LANTERNE.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="" src="assets/images/home/LA-MALADRERIE-A-LA-LANTERNE.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev home-agendaSliderControlPrev" href="#carouselExampleControls2" role="button" data-slide="prev">
        <img class="carousel-control-next-icon home-carouselControlIconAgenda" aria-hidden="true" src="assets/images/home/fleche-gauche.png" alt="fleche gauche">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next home-agendaSliderControlnext" href="#carouselExampleControls2" role="button" data-slide="next">
        <img class="carousel-control-next-icon home-carouselControlIconAgenda" aria-hidden="true" src="assets/images/home/fleche-droite.png" alt="fleche droite">
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div>


  <!--Container-Visit-->
  <div class="home-containerVisite position-relative">

  <!--Categories-Visit-->
      <div class="container home-containerTitreVisite position-absolute">
        <div class="row home-visiteRow1">
          <div class="col-4">
            <img class="home-imgTitle1" src="assets/images/home/cathédrale-de-beauvais.png" alt="Logo titre cathédrale beauvais">
          </div>
          <div class="col-4 text-white home-txtTitle">
            Horaires de visites, évènements,<br>
            tout savoir sur la cathédrale
          </div>
          <div class="col-4 d-flex justify-content-end">
            <a href="text.php">
            <img class="home-imgTitle2" src="assets/images/home/Paris-Beauvais.png" alt="Logo titre Paris Beauvais">
            </a>
          </div>
        </div>
      </div>

  <!--Pseudo-Carousel-Visit-->
      <div class="container-fluid poistion-relative home-containerSlider" >
        <div class="row">
          <div class="col-3">
            <img class="home-imgSlider1" src="assets/images/home/enfant.png" alt="First slide">
          </div>
          <div class="col-6">
            <img class="home-imgSlider2" src="assets/images/home/pluie.png" alt="Second Slide">
          </div>
          <div class="col-3">
            <img class="home-imgSlider3" src="assets/images/home/2heures.png" alt="Third slide">
          </div>
        </div>
      </div>

  </div>

  <!--pseudo-Indicator-Activités-->
  <div class="home-wrapperLogoServices">
    <div class="container home-containerLogoServices">
      <div class="row">
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/shopping-bag.png" alt="Logo shopping">
        </div>
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/logo-enfant.png" alt="Logo enfant">
        </div>
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/umbrella.png" alt="Logo umbrella">
        </div>
        <div class="col-3">
          <img class="home-logoServices" src="assets/images/home/logo-clock.png" alt="Logo clock">
        </div>
      </div>
    </div>
  </div>


  <!--Pseudo-Acordeon-Forfait-->
  <img class="home-acordeonForfait" src="assets/images/home/part-forfait.png" alt="Pseudo acordeon">


  <!--Share-->
  <div class="home-containerShare">
    <div class="container">
      <div class="row">
        <div class="col-8 home-txtShare text-white">
          Partagez vos plus beaux clichés avec    <span class="home-htVisitBeauvais">#visitbeauvais</span>
        </div>
        <div class="col-4">
          <img class="" src="assets/images/home/logo-rs.png" alt="Logo reseaux">
        </div>
      </div>
    </div>
  </div>


  <!--Social-Wall-->
  <div class="home-containerSocialWallInsta d-flex justify-content-center">

    <img class="home-imgSocialWall" src="assets/images/home/social-wall.png" alt="Pseudo Social Wall">

  </div>

</div class="home-megaWrapper">



  <!--Version-Mobile-->
<div class="home-megaWrapperMobile">

  <div class="home-mobileContainerHeader">
    <img class="w-100" src="assets/images/home/mobile/image-header-mobile.png" alt="Image header">
  </div>

  <div class="home-mobileContainerCovid text-white">
    <p>INFO COVID - 19</p>
  </div>

  <div class="home-mobileContainerAgenda position-relative">

    <p class="home-mobileTextAgenda1">L'agenda de Beauvais</p>
    <p class="home-mobileTextAgenda2">Les évenements a ne pas rater sur Beauvais</p>
      <div class="d-flex justify-content-center">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/tenture-web.png" alt="image tenture">
      </div>
    <p class="home-mobileAgendaDateMois">21 <span class="home-mobileAgendaDateMois">MAI</span> 2020 - 29 <span class="home-mobileAgendaDateMois">MAI</span> 2020</p>
    <p class="home-mobileAgendaSousTitre">LA TENTURE DE L'HISTOIRE<br>FABULEUSE DES GAULES</p>

        <div class="d-flex justify-content-center">
          <img class="home-mobileAgendaFlecheNext" src="assets/images/home/mobile/Fleche-gauche.png" alt="fleche gauche">
          <img class="home-mobileAgendaFlechePrev" src="assets/images/home/mobile/fleche-droite.png" alt="fleche droite">
        </div>

        <div class="d-flex justify-content-end">
          <img class="home-mobileAgendaBouton" src="assets/images/home/mobile/tout-lagenda.png" alt="bouton tout l'agenda">
        </div>

  </div>

      <div class="home-mobileContainerActivites">
        <div class="container home-mobileActiviteLogoRows">
          <div class="row">
            <div class="col-6">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/cathedrale.png" alt="logo cathédrale"><br>
              <p>Catédrale de Beauvais</p>
            </div>
            <div class="col-6">
              <a href="text.php" class="">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/aeroport.png" alt="logo aeroport"><br>
              </a>
              <p>Aéroport Paris - Beauvais</p>
            </div>
          </div>
        </div>
        <div class="container home-mobileActiviteLogoRows">
          <div class="row">
            <div class="col-6">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/shopping-logo.png" alt="logo shopping"><br>
              <p>Shopping</p>
            </div>
            <div class="col-6">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/enfant-logo.png" alt="logo enfant"><br>
              <p>LES ENFANTS SONT EN VACANCE</p>
            </div>
          </div>
        </div>
        <div class="container home-mobileActiviteLogoRows">
          <div class="row">
            <div class="col-6">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/umbrella-logo.png" alt="logo umbrella"><br>
              <p>IL PLEUT</p>
            </div>
            <div class="col-6">
              <img class="home-mobileLogoActivites" src="assets/images/home/mobile/clock-logo.png" alt="logo clock"><br>
              <p>J'AI 2 HEURES</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid home-mobileContainerForfaits1">
        <p class="text-white home-mobileTextForfaits">NOS FORFAITS GROUPES</p>
      </div>

      <div class="container-fluid home-mobileContainerForfaits2">
        <p class="text-white home-mobileTextForfaits">NOS IDEES WEEK-END</p>
      </div>

      <div class="d-flex justify-content-center home-mobileHotelImg1">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/massage.png" alt="image chambre 1">
      </div>
      <div class="d-flex justify-content-center">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/prix-chambre1.png" alt="Prix chambre 1">
      </div>

      <div class="d-flex justify-content-center home-mobileHotelImg2">
        <img class="home-mobileImgAgenda" src="assets/images/home/mobile/hotel-room.png" alt="image chambre 2">
      </div>
      <div class="d-flex justify-content-center">
        <img class="home-mobileImgAgenda home-mobileAgendaMarginB" src="assets/images/home/mobile/prix-chambre2.png" alt="Prix chambre 2">
      </div>

      <div class="home-mobileContainerPreFooter">

        <div class="d-flex text-white home-mobileTxtPreFooter">
          <p>Partagez vos plus beaux clichés avec <span class="home-mobileHTPreFooter">#visitbeauvais</span></p>
        </div>


        <div class="d-flex">
          <img class="home-mobileLogoPreFooter" src="assets/images/home/mobile/logo-rs.png" alt="logo reseaux">
        </div>

      </div>
</div>
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
