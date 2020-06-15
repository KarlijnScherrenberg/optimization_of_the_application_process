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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

</head>

<body>


<?php
$page = $_GET['expertise'];

$expertise = $_POST["expertises"];
$ervaring = $_POST["ervaringniveau"];
$werktijden = $_POST["werktijden"];
$competentie = $_POST["competentie"];

$content = array(
    'cloud_engineer' => array(
        'expertise' => 'Cloud Engineer',
        'url' => 'cloud_engineer'
    ), 'data_analyse' => array(
        'expertise' => 'Data & Analyse',
        'url' => 'data_analyse'
    ), 'design' => array(
        'expertise' => 'Design',
        'url' => 'design'
    ), 'backend_development' => array(
        'expertise' => 'Back-end Development',
        'url' => 'backend_development'
    ), 'frontend_development' => array(
        'expertise' => 'Front-end Development',
        'url' => 'frontend_development'
    ), 'software_development' => array(
        'expertise' => 'Software Development',
        'url' => 'software_development'
    ), 'digital_marketing' => array(
        'expertise' => 'Digital Marketing',
        'url' => 'digital_marketing'
    ), 'finance' => array(
        'expertise' => 'Finance',
        'url' => 'finance'
    ), 'hr_education' => array(
        'expertise' => 'Hr & Education',
        'url' => 'hr_education'
    ), 'recruitment' => array(
        'expertise' => 'Recruitment',
        'url' => 'recruitment'
    ), 'it' => array(
        'expertise' => 'IT',
        'url' => 'it'
    ), 'project_management' => array(
        'expertise' => 'Project Management',
        'url' => 'project_management'
    ), 'strategie' => array(
        'expertise' => 'Strategie',
        'url' => 'strategie'
    ), 'sales_account' => array(
        'expertise' => 'Sales & Account',
        'url' => 'sales_account'
    )
);

$page_content = $content[$expertise];

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

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-11 offset-lg-1">
        <h1 class="text-center">Vacatures</h1>
        <p class="lead">Vind hier je vacature</p>

          <form name="filters_vacature" action="" method="">
              <div class="row">
                  <div class="input-group col-lg-6">
                      <input class="form-control border-right-0" value="Zoek hier">
                      <span class="input-group-append bg-white">
                          <button class="btn border border-left-0" type="button"><i class="icon fa fa-search"></i></button>
                      </span>
                  </div>

                  <div class="col-lg-6">
                      <a href="#" class="filter_button" onclick="toggle_visibility('filters');">Filter je resultaten</a>
                  </div>
              </div>

              <div style="display: none" id="filters">
                  <div class="row">
                      <div class="col-lg-4">
                          <label class="mt-1" for="expertises">Kantoor</label><br>
                          <select name="kantoorOption" class="custom-select">
                              <option value="Nederland">Alle kantoren</option>
                              <option value="Amersfoort">Amersfoort</option>
                              <option value="Utrecht">Amsterdam</option>
                              <option value="Eindhoven">Eindhoven</option>
                              <option value="Eindhoven">Utrecht</option>
                          </select>
                      </div>

                      <div class="col-lg-4">
                          <label class="mt-1" for="expertises">Expertise</label><br>
                          <select name="expertiseOption" class="custom-select">
                              <option value="<?php echo $page_content['expertise']; ?>"><?php echo $page_content['expertise']; ?></option>
                              <option value="Alle">Alle</option>
                              <option value="cloud_engineer">Cloud Engineer</option>
                              <option value="data_analyse">Data & Analyse</option>
                              <option value="design">Design</option>
                              <option value="development">Back-end Development</option>
                              <option value="development">Front-end Development</option>
                              <option value="development">Software Development</option>
                              <option value="digital_marketing">Digital Marketing</option>
                              <option value="finance">Finance</option>
                              <option value="hr_education">Hr & Education</option>
                              <option value="recruitment">Recruitment</option>
                              <option value="it">IT</option>
                              <option value="project_management">Project Management</option>
                              <option value="strategie">Strategie</option>
                              <option value="sales_account">Sales & Account</option>
                          </select>
                      </div>

                      <div class="col-lg-4">
                          <label class="mt-1" for="expertises">Werkervaring</label><br>
                          <select name="werkervaringOption" class="custom-select">
                              <option value="Alle"><?php echo $ervaring;?></option>
                              <option value="Junior 0 - 2 jaar">Junior 0 - 2 jaar</option>
                              <option value="Medior 2 - 5 jaar">Medior 2 - 5 jaar</option>
                              <option value="Senior 5+ jaar">Senior 5+ jaar</option>
                          </select>
                      </div>

                      <div class="col-lg-4">
                          <label class="mt-1" for="expertises">Werktijden</label><br>
                          <select name="werkervaringOption" class="custom-select">
                              <option value="<?php echo $werktijden;?>"><?php echo $werktijden;?></option>
                              <option value="Alle werktijden">Alle werktijden</option>
                              <option value="Fulltime, 40 uur">Fulltime, 40 uur</option>
                              <option value=" Parttime, 36 uur"> Parttime, 36 uur</option>
                          </select>
                      </div>

                      <div class="col-lg-4">
                          <label class="mt-1" for="expertises">Competenties</label><br>
                          <select name="werkervaringOption" class="custom-select">
                              <option value="alle"><?php echo $competentie;?></option>
                              <option value="Klantgericht">Klantgericht</option>
                              <option value="Samenwerkend">Samenwerkend</option>
                              <option value="Zelfredzaam">Zelfredzaam</option>
                              <option value="Analytisch">Analytisch</option>
                              <option value="Resultaatgericht">Resultaatgericht</option>
                              <option value="Creatief">Creatief</option>
                              <option value="Communicatief">Communicatief</option>
                              <option value="Sociaal">Sociaal</option>
                              <option value="Verantwoordelijk">Verantwoordelijk</option>
                          </select>
                      </div>
                  </div>
              </div>
          </form>

          <p class="pt-3">Benieuwd naar vacatures die bij jou passen? Vul de filters in en krijg een relevant overzicht</p>
          <a href="vacature_stap1.php?expertise=<?php echo $page_content['url']; ?>" class="button_primair">Start hier</a>

      </div>
    </div>
  </div>
</header>


<!-- Page Content -->
<div class="container mb-5 pb-5">
  <div class="row">
    <div class="col-lg-11 offset-lg-1">

      <div class="row mt-5">
        <p class="filter_label">Nederland X</p>
        <p class="ml-3 filter_label"><?php echo $page_content['expertise']; ?> X</p>
        <p class="ml-3 filter_label"><?php echo $ervaring; ?> X</p>
        <p class="ml-3 filter_label"><?php echo $werktijden; ?> X</p>
        <p class="ml-3 filter_label"><?php echo $competentie; ?> X</p>
      </div>


      <h1 class="mt-5">Openstaande vacatures</h1>

      <div class="row mb-3">
        <a class="col-lg-8 mt-3" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['expertise']; ?>&ervaring=<?php echo $ervaring?>&werktijden=<?php echo $werktijden?>"><div>
          <p>Nederland</p>
          <h3><?php echo $page_content['expertise']; ?>functie</h3>
          <p>Afdeling <?php echo $page_content['expertise']; ?></p>
          <p><?php echo $werktijden; ?></p>
          <hr>
        </div></a>

        <a class="col-lg-8 mt-3" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['expertise']; ?>&ervaring=<?php echo $ervaring?>&werktijden=<?php echo $werktijden?>"><div>
          <p>Nederland</p>
          <h3><?php echo $page_content['expertise']; ?> functie</h3>
          <p>Afdeling <?php echo $page_content['expertise']; ?></p>
          <p><?php echo $werktijden; ?></p>
          <hr>
        </div></a>

        <a class="col-lg-8 mt-3" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['expertise']; ?>&ervaring=<?php echo $ervaring?>&werktijden=<?php echo $werktijden?>"><div>
          <p>Nederland</p>
          <h3><?php echo $page_content['expertise']; ?> functie</h3>
          <p>Afdeling <?php echo $page_content['expertise']; ?></p>
          <p><?php echo $werktijden; ?></p>
          <hr>
        </div></a>

        <a class="col-lg-8 mt-3" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['expertise']; ?>&ervaring=<?php echo $ervaring?>&werktijden=<?php echo $werktijden?>"><div>
          <p>Nederland</p>
          <h3><?php echo $page_content['expertise']; ?> functie</h3>
          <p>Afdeling <?php echo $page_content['expertise']; ?></p>
          <p><?php echo $werktijden; ?></p>
          <hr>
        </div></a>

        <a class="col-lg-8 mt-3" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['expertise']; ?>&ervaring=<?php echo $ervaring?>&werktijden=<?php echo $werktijden?>"><div>
          <p>Nederland</p>
          <h3><?php echo $page_content['expertise']; ?> functie</h3>
          <p>Afdeling<?php echo $page_content['expertise']; ?></p>
          <p><?php echo $werktijden; ?></p>
          <hr>
        </div></a>
      </div>

      <a href="#" class="button_primair">Alle vacatures</a>

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

<!--  <nav class="navbar fixed-bottom bg-white">-->
<!--    <div class="row mx-auto">-->
<!--      <a href="vacature_stap2.html" class="button_secundair">Terug</a>-->
<!--      <a href="sollicitatie_vacature.html" class="button_primair ml-2">Verder</a>-->
<!--    </div>-->
<!--  </nav>-->

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

<script>
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display === 'none')
            e.style.display = 'block';
        else
            e.style.display = 'none';
    }
</script>


</body>

</html>
