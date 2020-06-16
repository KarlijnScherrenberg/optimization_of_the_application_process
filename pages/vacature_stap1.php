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
//Get expertise from url
$page = $_GET['expertise'];

//Content arrays
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

    //Koppel expertise aan array
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
<div class="container mb-5 pb-5">
    <div class="row">
      <div class="col-lg-12">
          <!-- Timeline -->
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
              <!-- Filter expertise -->
              <label class="mt-5" for="expertises">Expertise*</label><br>
              <select name="expertiseOption" class="custom-select">
                  <option value="<?php echo $page_content['url']; ?>"><?php echo $page_content['expertise']; ?></option>
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
              <p class="mt-2">Aan de hand van je interesse hebben wij deze expertise geselecteerd</p>

              <!-- Filter offices -->
              <label class="mt-5">Voorkeur kantoor(en)</label><br>
              <div class="checkbox-group options">
                  <label class="label_style"><input type="checkbox" name="salaris" value="Amersfoort" > Amersfoort</label><br>
                  <label class="label_style"><input type="checkbox" name="salaris" value="Amsterdam" > Amsterdam</label><br>
                  <label class="label_style"><input type="checkbox" name="salaris" value="Eindhoven" > Eindhoven</label><br>
                  <label class="label_style"><input type="checkbox" name="salaris" value="Utrecht" > Utrecht</label><br>
                  <label class="label_style"><input type="checkbox" name="salaris" value="Geen voorkeur" > Geen voorkeur</label><br>
              </div>

              <!-- Filter Ervaring -->
              <label class="mt-5">Ervaringniveau</label><br>
              <label class="label_style"><input type="radio" name="ervaringniveau" value="Junior 0 - 2 jaar"> Junior 0 - 2 jaar</label><br>
              <label class="label_style"><input type="radio" name="ervaringniveau" value="Medior 2 -5 jaar"> Medior 2 - 5 jaar</label><br>
              <label class="label_style"><input type="radio" name="ervaringniveau" value="Senior 5+ jaar"> Senior 5+ jaar</label><br>

              <!-- Filter werktijden -->
              <label class="mt-5">Werktijden</label><br>
              <label class="label_style"><input type="radio" name="werktijden" value="Fulltime, 40 uur"> Fulltime, 40 uur</label><br>
              <label class="label_style"><input type="radio" name="werktijden" value="Parttime, 36 uur"> Parttime, 36 uur</label><br>
              <label class="label_style"><input type="radio" name="werktijden" value="Alle werktijden"> Alle werktijden</label><br>
        </div>
    </div>
  </div>
</div>

<!-- Navbar bottom -->
<nav class="navbar fixed-bottom bg-white">
    <div class="row mx-auto">
        <a href="vacature_overzicht_basic.php?expertise=<?php echo $page_content['url']; ?>" class="button_secundair">Terug</a>
        <input type="submit" value="Verder" class="button_primair ml-2">
        </form>
    </div>
</nav>


<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.slim.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
