<?php include "header.php" ?>
<link rel="stylesheet" href="assets/css/list.css">

  <!--Header-->
  <header id="list-header">
    <div id="detail-burgerMenu">


    <!--Burger menu-->
    <div id="list-burgerMenu"  >
        <img src="assets/images/list/burger-menu.png" alt="Burger menu" class="pl-4 pt-4 text-white" onclick="openBurgerMenu()"/>
    </div>
  </div>
    <!--Choix langues de la page-->
    <div id="list-choixLangues" class="pr-3 pt-1">
      <ul>
        <li>FR</li>
        <li>EN</li>
        <li>ES</li>
      </ul>
    </div>

    <!--Logo VISIT BEAUVAIS-->
    <div id="list-logoBeauvais">
      <a href="index.php"><img src="assets/images/list/logo-beauvais.png" alt="logo beauvais blanc"></a>
    </div>

    <!--Texte "Chambres d'hôtes"-->
    <div id="list-chambresHotes" class="pr-5 pt-1">
      <p>CHAMBRES<br/>
        D'HÔTES</p>
    </div>

    <!--Navigation-->
    <div class="row">
      <div id="list-navigation">
        <p id="list-paragrapheNav"><a href="home.php">Accueil</a> > <a href="#">Séjourner</a> > <a href="#">Hôtels</a></p>
      </div>
    </div>

  </header>

  <!--Les filtres-->
  <section id="list-filtre">
    <h1><span class="list-borderBottom">FIL</span>TRE</h1>
    <div class="container">
      <div class="row pt-5">

        <!--filtre CLASSEMENT-->
        <div class="dropdown list-dropDown-space">
         <button class="btn btn-default dropdown-toggle " type="button" id="menu1" data-toggle="dropdown">CLASSEMENT
         <span class="caret"></span></button>
         <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
           <li><button class="btn" onclick="filterSelection('Meilleures notes et avis')">Meilleures notes et avis</button></li>
           <li><button class="btn" onclick="filterSelection('Prix')">Prix</button></li>
           <li><button class="btn" onclick="filterSelection('Services +')">Services +</button></li>
         </ul>
        </div>

        <!--filtre SECTEUR-->
        <div class="dropdown list-dropDown-space">
         <button class="btn btn-default dropdown-toggle" type="button" id="menu2" data-toggle="dropdown">SECTEUR
         <span class="caret"></span></button>
         <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
           <li><button class="btn" onclick="filterSelection('Centre ville')">Argentine</button></li>
           <li><button class="btn" onclick="filterSelection('Saint Jean')">Saint-Jean</button></li>
           <li><button class="btn" onclick="filterSelection('Saint Lucien')">Soie-Vauban</button></li>
         </ul>
        </div>

        <!--filtre COMMUNE-->
        <div class="dropdown list-dropDown-space">
         <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">COMMUNE
         <span class="caret"></span></button>
         <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
           <li><button class="btn" onclick="filterSelection('Notre-Dame-du-Thil')">Notre-Dame-du-Thil</button></li>
           <li><button class="btn" onclick="filterSelection('Marissel')">Marissel</button></li>
           <li><button class="btn" onclick="filterSelection('Voisinlieu')">Voisinlieu</button></li>
           <li><button class="btn" onclick="filterSelection('Saint-Just-des-Marais')">Saint-Just-des-Marais</button></li>
         </ul>
        </div>

        <!--filtre LABELS HANDICAP ET HANDICAP-->
        <div class="dropdown list-dropDown-space">
         <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">LABELS HANDICAP ET HANDICAP
         <span class="caret"></span></button>
         <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
           <li><button class="btn" onclick="filterSelection('Tourisme et Handicap')">Tourisme et Handicap</button></li>
           <li><button class="btn" onclick="filterSelection('Destination pour tous')">Destination pour tous</button></li>
         </ul>
        </div>
      </div>

      <!--checkbox Animaux-->
      <div class=" pt-5">
        <div class="custom-control custom-switch" id="list-checkAnimaux">
          <input type="checkbox" class="custom-control-input" id="switch1" name="example">
          <label class="custom-control-label" for="switch1">ANIMAUX</label>
        </div>
      </div>

      <!--bouton RECHERCHE-->
      <div class="row pt-5">
        <div id="list-btnRecherche">
          <button type="button" class="btn text-white">RECHERCHER</button>
        </div>

        <!--logo VISIT BEAUVAIS orange-->
        <div id="list-logoVB-orange">
          <img src="assets/images/list/logo-beauvais-orange.png" alt="logo Beauvais orange">
        </div>
      </div>

      <!--rangée Checkbox LISTE, CARTE, MIXTE et filtre-->
      <div class="row pt-5" id="row-checkbox-filter">

        <!--checkbox LISTE-->
        <div class="custom-control custom-switch mr-4">
          <input type="checkbox" class="custom-control-input" id="switch2" name="example">
          <label class="custom-control-label" for="switch2">LISTE</label>
        </div>

        <!--checkbox CARTE-->
        <div class="custom-control custom-switch mr-4">
          <input type="checkbox" class="custom-control-input" id="switch3" name="example">
          <label class="custom-control-label" for="switch3">CARTE</label>
        </div>

        <!--checkbox MIXTE-->
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="switch4" name="example">
          <label class="custom-control-label" for="switch4">MIXTE</label>
        </div>

        <!--bouton filtre violet-->
        <div id="list-filtreBouton">
          <button><img src="assets/images/list/filtre-button.png" alt="bouton filtre violet"></button>
        </div>
      </div>
    </div>

    <!--grids résultats RECHERCHE-->
    <div class="container">

      <!--1ère rangée et colonne CARTE-->
      <div class="row mt-3" id="list-gridResults">
        <div class="column list-column mr-5 " id="list-gridMap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41508.426041852275!2d2.059051909405002!3d49.44148845409238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7012d2102b553%3A0x33743e4f961c4ef4!2s60000%20Beauvais!5e0!3m2!1sfr!2sfr!4v1592987040312!5m2!1sfr!2sfr" width="379" height="580" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <!--2ème colonne-->
        <div class="column list-column mr-4">
          <div class="row mr-3">
            <div class="list-gridCards">
              <img src="assets/images/list/les-glycines.jpg" alt="Les glycines" width="320" height="235">
              <div id="list-btnSearch1">
                <div class="list-circleReserver"></div>
                <p>Réserver</p>
              </div>
            </div>
          </div>
          <p>LES GLYCINES SAINT-SULPICE</p>
          <div class="row">
            <div class="list-gridCards">
              <img src="assets/images/list/au-coeur-de-beauvais.jpg" alt="Au coeur de beauvais" width="320" height="235">
            </div>
          </div>
          <p>AU COEUR DE BEAUVAIS</p>
        </div>

        <!--3ème colonne-->
        <div class="column list-column">
          <div class="row">
            <div class="list-gridCards">
              <img src="assets/images/list/au-coeur-de-beauvais.jpg" alt="Au coeur de beauvais" width="320" height="235">
            </div>
          </div>
          <p>AU COEUR DE BEAUVAIS</p>
          <div class="row">
            <div class="list-gridCards">
              <img src="assets/images/list/les-glycines.jpg" alt="Les glycines" width="320" height="235">
            </div>
          </div>
          <p>LES GLYCINES SAINT-SULPICE</p>
        </div>
      </div>

      <!--pagination-->
      <div class="row" id="list-firstPagination">
        <div class="pagination list-pagination">
          <a href="#" class="mr-3"></a>
          <a href="#"></a>
        </div>
      </div>

      <!--2ème rangée Checkbox LISTE, CARTE, MIXTE et filtre-->
      <div class="row pt-5" id="row-checkbox-filter2">

        <!--checkbox LISTE-->
        <div class="custom-control custom-switch mr-4">
          <input type="checkbox" class="custom-control-input" id="switch5" name="example">
          <label class="custom-control-label" for="switch5">LISTE</label>
        </div>

        <!--checkbox CARTE-->
        <div class="custom-control custom-switch mr-4">
          <input type="checkbox" class="custom-control-input" id="switch6" name="example">
          <label class="custom-control-label" for="switch6">CARTE</label>
        </div>

        <!--checkbox MIXTE-->
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="switch7" name="example">
          <label class="custom-control-label" for="switch7">MIXTE</label>
        </div>

        <!--bouton filtre violet-->
        <div id="list-filtreBouton">
          <button><img src="assets/images/list/filtre-button.png" alt="bouton filtre violet"></button>
        </div>
      </div>

      <div class="row" id="list-gridResults2">

        <!--1ère colonne-->
        <div class="column list-column mr-5">
          <div class="row mr-4">
            <div class="list-gridCards">
              <img src="assets/images/list/les-glycines.jpg" alt="Les glycines" width="320" height="235">
            </div>
          </div>
          <p>LES GLYCINES SAINT-SULPICE</p>
          <div class="row">
            <div class="list-gridCards">
              <img src="assets/images/list/au-coeur-de-beauvais.jpg" alt="Au coeur de beauvais" width="320" height="235">
            </div>
          </div>
          <p>AU COEUR DE BEAUVAIS</p>
        </div>

        <!--2ème colonne-->
        <div class="column list-column mr-5">
          <div class="row mr-4">
            <div class="list-gridCards">
              <img src="assets/images/list/au-coeur-de-beauvais.jpg" alt="Au coeur de beauvais" width="320" height="235">
            </div>
          </div>
          <p>AU COEUR DE BEAUVAIS</p>
          <div class="row">
            <div class="list-gridCards">
              <img src="assets/images/list/les-glycines.jpg" alt="Les glycines" width="320" height="235">
            </div>
          </div>
          <p>LES GLYCINES SAINT-SULPICE</p>
        </div>

        <!--3ème colonne-->
        <div class="column list-column">
          <div class="row">
            <div class="list-gridCards">
              <img src="assets/images/list/au-coeur-de-beauvais.jpg" alt="Au coeur de beauvais" width="320" height="235">
            </div>
          </div>
          <p>AU COEUR DE BEAUVAIS</p>
          <div class="row">
            <div class="list-gridCards">
              <img src="assets/images/list/les-glycines.jpg" alt="Les glycines" width="320" height="235">
            </div>
          </div>
          <p>LES GLYCINES SAINT-SULPICE</p>
        </div>

        <!--pagination-->
        <div class="row" id="list-secondPagination">
          <div class="pagination list-pagination">
            <a href="#" class="mr-3"></a>
            <a href="#" class="mr-3"></a>
            <a href="#"></a>
          </div>
        </div>

        <!--3ème rangée Checkbox LISTE, CARTE, MIXTE et filtre-->
        <div class="row pt-5" id="row-checkbox-filter3">

          <!--checkbox LISTE-->
          <div class="custom-control custom-switch mr-4">
            <input type="checkbox" class="custom-control-input" id="switch8" name="example">
            <label class="custom-control-label" for="switch8">LISTE</label>
          </div>

          <!--checkbox CARTE-->
          <div class="custom-control custom-switch mr-4">
            <input type="checkbox" class="custom-control-input" id="switch9" name="example">
            <label class="custom-control-label" for="switch9">CARTE</label>
          </div>

          <!--checkbox MIXTE-->
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="switch10" name="example">
            <label class="custom-control-label" for="switch10">MIXTE</label>
          </div>

          <!--bouton filtre violet-->
          <div id="list-filtreBouton">
            <button><img src="assets/images/list/filtre-button.png" alt="bouton filtre violet"></button>
          </div>
        </div>

        <div class="column list-column" id="list-gridMap2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41508.426041852275!2d2.059051909405002!3d49.44148845409238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7012d2102b553%3A0x33743e4f961c4ef4!2s60000%20Beauvais!5e0!3m2!1sfr!2sfr!4v1592987040312!5m2!1sfr!2sfr" width="850" height="694" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="column list-column" id="list-destinationBeauvais">
          <p>DESTINATION<br/>
          BEAUVAIS</p>
          <div id="list-checkDestination" class="p-4" width="209" height="310">
            <div class="list-checkBoxPurple" width="139" height="39">
              <input type="checkbox" id="ouDormir" name="ouDormir" value="">
              <label for="ouDormir">OU DORMIR</label><br>
            </div>
            <div class="">
              <input type="checkbox" id="ouDormir" name="ouDormir" value="">
              <label for="ouDormir">Hôtels</label><br>
            </div>
            <div class="">
              <input type="checkbox" id="ouDormir" name="ouDormir" value="">
              <label for="ouDormir">Chambres d'hôtes</label><br>
            </div>
            <div class="">
              <input type="checkbox" id="ouDormir" name="ouDormir" value="">
              <label for="ouDormir">Insolites</label><br>
            </div>
            <div class="">
              <input type="checkbox" id="ouDormir" name="ouDormir" value="">
              <label for="ouDormir">Campings</label><br>
            </div>
            <div class="">
              <input type="checkbox" id="ouDormir" name="ouDormir" value="">
              <label for="ouDormir">Gîtes et meublés</label><br>
            </div>
            <div class="list-checkBoxPurple" width="139" height="39">
              <input type="checkbox" id="ouManger" name="ouManger" value="">
              <label for="ouManger">OU MANGER</label><br>
            </div>
            <div class="list-checkBoxPurple" width="139" height="39">
              <input type="checkbox" id="activitesLoisirs" name="activitesLoisirs" value="">
              <label for="activitesLoisirs">ACTIVITÉS ET LOISIRS</label><br>
            </div>
          </div>

        </div>
      </div>


    </div>
  </section>

<?php include 'footer.php' ?>
