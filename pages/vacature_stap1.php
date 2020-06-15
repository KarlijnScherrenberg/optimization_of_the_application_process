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
        ), 'data_analyse' => array(
            'expertise' => 'Data & Analyse',
            'url' => 'data_analyse',
        ), 'design' => array(
            'expertise' => 'Design',
            'url' => 'design',
        ), 'development' => array(
            'expertise' => 'Development',
            'url' => 'development',
        ), 'digital_marketing' => array(
            'expertise' => 'Digital Marketing',
            'url' => 'digital_marketing',
        ), 'finance' => array(
            'expertise' => 'Finance',
            'url' => 'finance',
        ), 'hr_education' => array(
            'expertise' => 'Hr & Academy',
            'url' => 'hr_education',
        ), 'recruitment' => array(
            'expertise' => 'Recruitment',
            'url' => 'recruitment',
        ), 'it' => array(
            'expertise' => 'IT',
            'url' => 'it',
        ), 'project_management' => array(
            'expertise' => 'Project Management',
            'url' => 'project_management',
        ), 'strategie' => array(
            'expertise' => 'Strategie',
            'url' => 'strategie',
        ), 'sales_account' => array(
            'expertise' => 'Sales & Account',
            'url' => 'sales_account',
        )
    );

    $page_content = $content[$page];

    ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white static-top">
    <div class="container">
      <a class="navbar-brand" href="../index.html"><img style="height: 30px" width="auto" src="../img/valtech-logo-black.png"></a>
<!--      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--      </button>-->
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
  <div class="container mb-5 pb-5">
    <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-8 offset-lg-2">
          <ul class="progressbar_vacature">
            <li class="active">Praktische filters</li>
            <li>Competentie filters</li>
            <li>Vacature overzicht</li>
          </ul>
        </div>

        <div class="col-lg-6 offset-lg-3">
          <h1 class="mt-5">Vul hier een aantal praktische filters in</h1>

          <form name="praktische_filters" action="vacature_stap2.php?expertise=<?php echo $page_content['url']; ?>" method="post">
            <label class="mt-5" for="expertises">Expertise*</label><br>
              <select name="expertiseOption" class="custom-select">
                  <option value="<?php echo $page_content['url']; ?>"><?php echo $page_content['expertise']; ?></option>
                  <option value="cloud_engineer">Cloud Engineer</option>
                  <option value="data_analyse">Data & Analyse</option>
                  <option value="design">Design</option>
                  <option value="development">Development</option>
                  <option value="digital_marketing">Digital Marketing</option>
                  <option value="finance">Finance</option>
                  <option value="hr_education">Hr & Education</option>
                  <option value="recruitment">Recruitment</option>
                  <option value="it">IT</option>
                  <option value="project_management">Project Management</option>
                  <option value="strategie">Strategie</option>
                  <option value="sales_account">Sales & Account</option>
              </select>


<!--            <input type="text" id="expertises" name="expertises" required value="--><?php //echo $page_content['expertise']; ?><!--">-->
            <p class="mt-2">Aan de hand van je interesse hebben wij deze expertise geselecteerd</p>

            <h2 class="mt-5">Reisafstand</h2>
            <label class="mt-3" for="postcode">Postcode</label><br>
            <input type="text" id="postcode" name="postcode">

            <label class="mt-3">Voorkeur kilometers</label><br>
            <input type="radio" name="kilometer" value="15km"> Minder dan 15 kilometer<br>
            <input type="radio" name="kilometer" value="25km"> Tot 25 kilometer<br>
            <input type="radio" name="kilometer" value="50km"> Tot 50 kilometer<br>
            <input type="radio" name="kilometer" value="geenkm"> Geen voorkeur<br>


            <label class="mt-5">Ervaringniveau</label><br>
            <input type="radio" name="ervaringniveau" value="Junior 0 - 2 jaar"> Junior 0 - 2 jaar<br>
            <input type="radio" name="ervaringniveau" value="Medior 2 -5 jaar"> Medior 2 - 5 jaar<br>
            <input type="radio" name="ervaringniveau" value="Senior 5+ jaar"> Senior 5+ jaar<br>

            <label class="mt-5">Werktijden</label><br>
            <input type="radio" name="werktijden" value="Fulltime, 40 uur"> Fulltime, 40 uur<br>
            <input type="radio" name="werktijden" value="Parttime, 36 uur"> Parttime, 36 uur<br>
            <input type="radio" name="werktijden" value="Alle werktijden"> Alle werktijden<br>

            <label class="mt-5">Salaris</label><br>
            <p>Bruto salaris verwachting op basis van 40 uur</p>
              <div class="checkbox-group options">
                  <input type="checkbox" name="salaris" value="&#8364;2000 - &#8364;2500" > &#8364;2000 - &#8364;2500<br>
                  <input type="checkbox" name="salaris" value="&#8364;2000 - &#8364;2500" > &#8364;2000 - &#8364;2500<br>
                  <input type="checkbox" name="salaris" value="&#8364;3000 - &#8364;5000" > &#8364;3000 - &#8364;5000<br>
                  <input type="checkbox" name="salaris" value="&#8364;5000 - hoger" > &#8364;5000 - hoger<br>
              </div>





        </div>
    </div>
  </div>

    <nav class="navbar fixed-bottom bg-white">
      <div class="row mx-auto">
        <a href="vacature_overzicht_basic.php?expertise=<?php echo $page_content['url']; ?>" class="button_secundair">Terug</a>
        <input type="submit" value="Verder" class="button_primair ml-2">
        </form>
<!--        <a href="vacature_stap2.html" class="button_primair ml-2">Verder</a>-->
      </div>
    </nav>



  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
