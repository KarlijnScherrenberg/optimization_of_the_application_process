<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The sollicitation Experience - Valtech</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>

<?php
//Get data
$expertise = $_GET["expertise"];
$ervaring = $_GET["ervaring"];
$werktijden = $_GET["werktijden"];
$competentie = $_GET["competentie"];
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white static-top">
    <div class="container">
        <a class="navbar-brand" href="../index.html"><img style="height: 30px" width="auto" src="../img/valtech-logo-black.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <img style="height: 20px" width="auto" src="../img/menu_stripes.png">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img style="height: 20px" width="auto" src="../img/search_icon.png"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img style="height: 20px" width="auto" src="../img/globe_icon.png"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img style="height: 20px" width="auto" src="../img/NL_icon.png"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img style="height: 20px" width="auto" src="../img/menu_stripes.png"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header vacature -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1><?php echo $expertise; ?> Functie</h1>
        <p class="lead">Afdeling <?php echo $expertise; ?></p>
      </div>
    </div>
  </div>
</header>


<!-- Page Content -->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
          <!-- Intro vacature -->
          <div class="col-lg-7">
              <h2>Functie beschrijving</h2>
              <p>Valtech doet gave dingen. Als digitaal bureau helpen we sterke merken als American Airlines, Audi, Bayer, Heineken, Philips, Shimano en Volkswagen met het bedenken en ontwikkelen van innovatieve businessconcepten. We helpen ’s werelds mooiste en uitdagendste organisaties met strategie, consulting, service design, technische implementatie en digitale marketing. We regisseren online ervaringen en nemen deze op in bestaande ecosystemen om ze vanuit daar steeds beter, mooier, efficiënter en effectiever te maken. Zo maken we opdrachtgevers én de eindgebruiker blij. En ook niet onbelangrijk: onszelf. Met 2000+ collega’s doen we iedere dag wat we het gaafst vinden: online ervaringen maken. </p>
          </div>

          <!-- In het kort -->
          <div class="col-lg-3 offset-lg-1">
              <h2>In het kort</h2>
              <ul class="pb-3 mt-3">
                <li>Nederland</li>
                <li><?php echo $werktijden?></li>
                <li><?php echo $ervaring?></li>
                <li>Afdeling <?php echo $expertise; ?></li>
              </ul>

              <a href="sollicitatie_stap1.html" class="button_primair ml-2">Solliciteer</a>
          </div>
      </div>

        <!-- Content vacature -->
        <div class="col-lg-7">
            <h2 class="mt-5">Wat verwachten we van jou?</h2>
            <ul>
              <li class="mt-3">Je hebt kennis van geïntegreerde online campagnes over de paid, owned en earned kanalen</li>
              <li class="mt-3">Je bent minimaal 32 uur per week beschikbaar en je bent flexibel ten aanzien van je werklocatie. Zo kan het dus voorkomen dat je af en toe bij de klant zelf op kantoor werkt </li>
              <li class="mt-3">Je beschikt over sterke overtuigingskracht en kennis van de corporate wereld </li>
            </ul>

            <h2 class="mt-5">Wat kun je van ons verwachten?</h2>
            <ul>
              <li class="mt-3">Ben jij flexibel? Dan zijn wij het ook! We stimuleren een gezonde prive/werk balans, dus thuiswerken behoort zeker tot de mogelijkheden</li>
              <li class="mt-3">Genoeg ruimte om jezelf zowel vakinhoudelijk als persoonlijk verder te ontwikkelen met behulp van onze eigen interne Academy en een uitgebreid on boarding programma. Ook krijg je je eigen mentor die jou hierin persoonlijk begeleidt.</li>
              <li class="mt-3">Een open en energieke bedrijfscultuur  met memorable VrijMiBo’s, ski- en city trips en een hoop andere (sportieve) activiteiten die o.a. worden georganiseerd door onze personeelsvereniging</li>
            </ul>
        </div>

        <!-- Block wat bieden wij jou -->
        <div class="mt-5 pt-4">
            <h1>Wat bieden wij jou</h1>
            <div class="row text-center mt-5 col-lg-8">
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_wat_bieden_wij-01.png">
                    </div>
                    <p class="mt-4 pt-2">Breed klanten pakket</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_wat_bieden_wij-02.png">
                    </div>
                    <p class="mt-4 pt-2">Gezelligheid</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_wat_bieden_wij-03.png">
                    </div>
                    <p class="mt-4 pt-2">Ontwikkel mogelijkheden</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_wat_bieden_wij-04.png">
                    </div>
                    <p class="mt-4 pt-2">Aantrekkelijk salaris</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_wat_bieden_wij-05.png">
                    </div>
                    <p class="mt-4 pt-2">Flexibiliteit</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_wat_bieden_wij-06.png">
                    </div>
                    <p class="mt-4 pt-2">Uitdaging</p>
                </div>
            </div>
        </div>

        <!-- Block ons sollicitatieproces -->
        <div class="mt-5 col-lg-8">
            <h1>Ons sollicitatieproces</h1>
            <div class="row text-center mt-5">
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_sollicitatie-06.png">
                    </div>
                    <p class="mt-4 pt-2">1. Solliciteren</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_sollicitatie-01.png">
                    </div>
                    <p class="mt-4 pt-2">2. Contact</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_sollicitatie-02.png">
                    </div>
                    <p class="mt-4 pt-2">3. Kennismakings gesprek</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_sollicitatie-03.png">
                    </div>
                    <p class="mt-4 pt-2">4. Vervolg gesprek</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_sollicitatie-04.png">
                    </div>
                    <p class="mt-4 pt-2">5. Aanbod</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="mt-4 col-sm-6 offset-sm-3 col-8 offset-2">
                        <img class="img-fluid" src="../img/icons_sollicitatie-05.png">
                    </div>
                    <p class="mt-4 pt-2">6. Starten</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Footer contact -->
<footer class="footer mt-5">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-6 offset-lg-3 text-center">
        <h2>Interesse of vragen?<br>
          Neem gerust contact op </h2>
        <a href="https://www.valtech.com/nl-nl/over-ons/contact-us/" target="_blank" class="button_primair_white">Contact</a>
      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.slim.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
