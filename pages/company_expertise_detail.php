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
    $page = $_GET['expertise'];

    $content = array(
        'cloud_engineer' => array(
            'expertise' => 'Cloud Engineer',
            'url' => 'cloud_engineer',
            'medewerker' => 'Cloud Engineer',
            'medewerkers' => 'Cloud Engineers',
            'intro' => 'Binnen Cloud Engineering houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '25'
        ), 'data_analyse' => array(
            'expertise' => 'Data & Analyse',
            'url' => 'data_analyse',
            'medewerker' => 'Data & Analyst',
            'medewerkers' => 'Data & Analysten',
            'intro' => 'Binnen Data & Analyse houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '20'
        ), 'design' => array(
            'expertise' => 'Design',
            'url' => 'design',
            'medewerker' => 'Designer',
            'medewerkers' => 'Designers',
            'intro' => 'Binnen Design houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '30'
        ), 'development' => array(
            'expertise' => 'Development',
            'url' => 'development',
            'medewerker' => 'Front-end UI Developer',
            'medewerkers' => 'Developers',
            'intro' => 'Binnen Development houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'Onze frontenders werken met bekende frameworks zoals Vue.js, Angulair en React om toffe projecten te realiseren. Daarbij werken onze backenders met Sitecore om onze klanten van een goed werkend CMS te voorzien met talloze mogelijkheden.',
            'team' => '45'
        ), 'digital_marketing' => array(
            'expertise' => 'Digital Marketing',
            'url' => 'digital_marketing',
            'medewerker' => 'Digital Marketeer',
            'medewerkers' => 'Digital Marketeers',
            'intro' => 'Binnen Digital Marketing houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '42'
        ), 'finance' => array(
            'expertise' => 'Finance',
            'url' => 'finance',
            'medewerker' => 'Financer',
            'medewerkers' => 'Financers',
            'intro' => 'Binnen Finance houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '15'
        ), 'hr_education' => array(
            'expertise' => 'Hr & Education',
            'url' => 'hr_education',
            'medewerker' => 'Hr & Educationer',
            'medewerkers' => 'Hr & Educationers',
            'intro' => 'Binnen Hr & Education houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '15'
        ), 'recruitment' => array(
            'expertise' => 'Recruitment',
            'url' => 'recruitment',
            'medewerker' => 'Recruiter',
            'medewerkers' => 'Recruiters',
            'intro' => 'Binnen Recruitment houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '8'
        ), 'it' => array(
            'expertise' => 'IT',
            'url' => 'it',
            'medewerker' => 'ITer',
            'medewerkers' => 'ITers',
            'intro' => 'Binnen IT houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '10'
        ), 'project_management' => array(
            'expertise' => 'Project Management',
            'url' => 'project_management',
            'medewerker' => 'Project Manager',
            'medewerkers' => 'Project Managers',
            'intro' => 'Binnen Project Management houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '10'
        ), 'strategie' => array(
            'expertise' => 'Strategie',
            'url' => 'strategie',
            'medewerker' => 'Strateeg',
            'medewerkers' => 'Strategen',
            'intro' => 'Binnen Strategie houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '15'
        ), 'sales_account' => array(
            'expertise' => 'Sales & Account',
            'url' => 'sales_account',
            'medewerker' => 'Sales & Accountent',
            'medewerkers' => 'Sales & Accountents',
            'intro' => 'Binnen Sales & Account houden onze medewerkers zich bezig met het creëren en realiseren van ervaringen om het dagelijkse leven voor de gebruiker gemakkelijker te maken.',
            'wat_wij_doen' => 'ddddddddddd',
            'team' => '9'
        )
    );

    $page_content = $content[$page];

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

    <!-- Page Content -->
    <div class="container margin-bottom">
        <div class="row">

            <!-- Menu topics -->
            <div class="col-lg-2 col-sm-8 mt-lg-4 pt-lg-4 mt-4">
                <a href="#" onclick="toggle_visibility('topics');"><h2 class=" ">Topics<span class="ml-4 dropdown-toggle"></span></h2></a>
                <ul class="navbar-nav" id="topics">
                    <li class="nav-item">
                        <a class="side_link nav-link" href="company_het_bedrijf.html">Het bedrijf</a>
                    </li>
                    <li class="nav-item">
                        <a class="side_link nav-link" href="company_fun_facts.html">Fun facts</a>
                    </li>
                    <li class="nav-item">
                        <a class="side_link nav-link" href="company_cases.html">Cases</a>
                    </li>
                    <li class="nav-item">
                        <a class="side_link nav-link" href="company_dna.html">Ons DNA</a>
                    </li>
                    <li class="nav-item">
                        <a class="active_sub nav-link" href="company_expertise.html">Expertises</a>
                    </li>
                </ul>
            </div>

            <!-- Content Expertise -->
            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 ml-lg-2 col-12">
                          <h1 class="mt-5"><?php echo $page_content['expertise']; ?></h1>

                          <p class="mt-3"><?php echo $page_content['intro']; ?></p>

                            <!-- Blok team & quote -->
                            <div class="row">
                                <div class="mt-3 col-lg-5 col-md-10 col-sm-12">
                                    <div class="col-lg-6 offset-lg-3">
                                        <img class="img-fluid" src="../img/icon_group.png">
                                    </div>
                                    <p class="mt-1 pt-2 col-lg-8 text-center offset-lg-2">We werken samen binnen een team van <?php echo $page_content['team']; ?> man</p>
                                </div>
                                <div class="mt-3 offset-lg-1 col-lg-5">
                                    <p><i>“Top team om mee samen te werken. Naast hard door werken is altijd genoeg ruimte voor gezelligheid”</i></p>
                                    <p>- Rick</p>
                                </div>
                            </div>

                            <!-- Day in a life of -->
                            <div class="row mt-5">
                                <div class="mt-3 col-lg-5 col-md-10 col-sm-12">
                                    <h3>A day in the life of a <?php echo $page_content['medewerker']; ?></h3>
                                    <p class="mt-3 pb-3">This time we introduce Peter, <?php echo $page_content['medewerker']; ?>. He will take us through a day in the life of a <?php echo $page_content['medewerker']; ?>.</p>
                                    <a href="https://www.valtech.com/nl-nl/actueel/a-day-in-the-life-of-a-front-end-ui-developer/" target="_blank" class="button_secundair">Lees meer</a>
                                </div>

                                <div class="mt-3 offset-lg-1 col-lg-5">
                                    <img src="../img/blog_day_of.png" class="img-fluid">
                                </div>
                            </div>

                            <!-- Foto slider -->
                            <h2 class="mt-5">Onze <?php echo $page_content['medewerkers']; ?> </h2>
                              <div id="carouselExampleIndicators" class="carousel slide mt-3" data-interval="false">
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="../img/slide1.png" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="../img/slide2.png" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="../img/slide3.png" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>

                            <!-- Blok case -->
                              <div class="row mt-5">
                                <div class="mt-3 col-lg-5 col-md-10 col-sm-12">
                                  <h2>Hyundai</h2>
                                  <p class="mt-3 pb-3">Voor Hyundai hebben we een online platform ontwikkelt met behulp van sitecore</p>
                                  <a href="https://www.valtech.com/nl-nl/cases/hyundai-construction-equipment/" target="_blank" class="button_secundair">Bekijk case</a>
                                </div>

                                <div class="mt-3 offset-lg-1 col-lg-5">
                                  <img src="../img/case_hyundai.png" class="img-fluid">
                                </div>
                              </div>

                            <div class="mt-5 pt-3 row">
                                <h2 class="col-12">Vacatures <?php echo $page_content['expertise']; ?></h2>
                                <div class="col-lg-6">
                                    <a class="col-lg-8 mt-1" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['url']; ?>">
                                        <div>
                                            <h4>Junior <?php echo $page_content['medewerker']; ?></h4>
                                            <p>Utrecht</p>
                                            <hr>
                                        </div>
                                    </a>
                                    <a class="col-lg-8" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['url']; ?>">
                                        <div>
                                            <h4>Senior <?php echo $page_content['medewerker']; ?></h4>
                                            <p>Utrecht</p>
                                            <hr>
                                        </div>
                                    </a>
                                    <a class="col-lg-8" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['url']; ?>">
                                        <div>
                                            <h4>Senior <?php echo $page_content['medewerker']; ?></h4>
                                            <p>Eindhoven</p>
                                            <hr>
                                        </div>
                                    </a>
                                    <a class="col-lg-8" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['url']; ?>">
                                        <div>
                                            <h4>Junior <?php echo $page_content['medewerker']; ?></h4>
                                            <p>Amersfoort</p>
                                            <hr>
                                        </div>
                                    </a>
                                    <a class="col-lg-8" href="sollicitatie_vacature.php?expertise=<?php echo $page_content['url']; ?>">
                                        <div>
                                            <h4>Senior <?php echo $page_content['medewerker']; ?></h4>
                                            <p>Utrecht</p>
                                            <hr class="pb-3">
                                        </div>
                                    </a>

                                    <a href="vacature_overzicht_basic.php?expertise=<?php echo $page_content['url']; ?>" class="button_secundair">Bekijk alle 60 vacatures</a>
                                </div>

                                <div class="col-lg-5 offset-lg-1 mt-lg-0 mt-4 pt-4 pt-lg-4">
                                    <p class="pb-3">Benieuwd naar vacatures die bij jou passen? Vul de filters in en krijg een relevant overzicht</p>
                                    <a href="vacature_stap1.php?expertise=<?php echo $page_content['url']; ?>" class="button_primair">Start hier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
