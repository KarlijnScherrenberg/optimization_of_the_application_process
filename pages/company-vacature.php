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
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

<!--        <div class="col-lg-10 offset-lg-1">-->
<!--          <ul class="progressbar">-->
<!--            <li class="done">Keuze topic</li>-->
<!--            <li class="done">Informatie topic</li>-->
<!--            <li class="done">Vind een expertise</li>-->
<!--            <li class="done">Informatie expertise</li>-->
<!--            <li class="active">Vacature match</li>-->
<!--          </ul>-->
<!--        </div>-->

        <div class="col-lg-6 offset-lg-3">
          <h1 class="mt-5">Bedankt voor je tijd!</h1>
          <p>We hopen dat we je genoeg hebben kunnen vertellen. Wellicht dat onderstaande onderwerpen je nog wat verder kunnen helpen?</p>
        </div>

        <div class="row justify-content-center mt-5">
          <a href="vacature_stap1.php?expertise=<?php echo $_GET['expertise']; ?>">
            <div class="topic-box text-center">
              <img class="mt-3" style="height: 100px; width: auto" src="../img/icon_vacature_match.png">
              <p class="mt-3">Vacature match</p>
            </div>
          </a>

          <a class="offset-lg-1" href="https://www.valtech.com/nl-nl/over-ons/contact-us/" target="_blank">
            <div class="topic-box text-center">
              <img class="mt-3" style="height: 100px; width: auto" src="../img/icon_contact.png">
              <p class="mt-3">Contact</p>
            </div>
          </a>
        </div>


    </div>
  </div>

    <nav class="navbar fixed-bottom bg-white">
      <div class="row mx-auto">
        <a href="company_expertise_detail.php?expertise=<?php echo $_GET['expertise']; ?>" class="button_secundair">Terug</a>
        <a href="#" class="button_primair ml-2 invisible">Verder</a>
      </div>
    </nav>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
