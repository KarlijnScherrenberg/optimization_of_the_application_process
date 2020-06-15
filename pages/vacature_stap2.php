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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<?php
    $page = $_GET['expertise'];

    $expertise = $_POST['expertiseOption'];
    $ervaring = $_POST["ervaringniveau"];
    $werktijden = $_POST["werktijden"];
    $salaris = $_POST["salaris"];

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
          <li class="done">Praktische filters</li>
          <li class="active">Competentie filters</li>
          <li>Vacature overzicht</li>
        </ul>
      </div>

      <div class="col-lg-6 offset-lg-3">
        <h1 class="mt-5">Vul hier je competenties in</h1>

        <form name="competentie_filters" action="vacature_overzicht.php?expertise=<?php echo $expertise; ?>" method="post">
          <label class="mt-5">Kies 3 passende competenties*</label><br>
          <div class="checkbox-group options">
            <input type="checkbox" name="competentie" value="klantgericht" required> Klantgericht<br>
            <input type="checkbox" name="competentie" value="samenwerkend" required> Samenwerkend<br>
            <input type="checkbox" name="competentie" value="zelfredzaam" required> Zelfredzaam<br>
            <input type="checkbox" name="competentie" value="analytisch" required> Analytisch<br>
            <input type="checkbox" name="competentie" value="resultaatgericht" required> Resultaatgericht<br>
            <input type="checkbox" name="competentie" value="creatief" required> Creatief<br>
            <input type="checkbox" name="competentie" value="communicatief" required> Communicatief<br>
            <input type="checkbox" name="competentie" value="sociaal" required> Sociaal<br>
            <input type="checkbox" name="competentie" value="verantwoordelijk" required> Verantwoordelijk<br>
          </div>


            <input type="hidden" id="expertises" name="expertises" value="<?php echo $expertise; ?>">
            <input type="hidden" id="ervaringniveau" name="ervaringniveau" value="<?php echo $ervaring; ?>">
            <input type="hidden" id="werktijden" name="werktijden" value="<?php echo $werktijden; ?>">
            <input type="hidden" id="salaris" name="salaris" value="<?php echo $salaris; ?>">


      </div>
    </div>
  </div>

  <nav class="navbar fixed-bottom bg-white">
    <div class="row mx-auto">
      <a href="vacature_stap1.php?expertise=<?php echo $expertise; ?>" class="button_secundair">Terug</a>
      <input type="submit" value="Verder" class="button_primair ml-2">
      </form>
    </div>
  </nav>


  <script>
    $(function(){
      var requiredCheckboxes = $('.options :checkbox[required]');
      requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
          requiredCheckboxes.removeAttr('required');
        } else {
          requiredCheckboxes.attr('required', 'required');
        }
      });
    });

    $(function(){
      var max = 3;
      var checkboxes = $('input[type="checkbox"]');

      checkboxes.change(function(){
        var current = checkboxes.filter(':checked').length;
        checkboxes.filter(':not(:checked)').prop('disabled', current >= max);
      });
    });
  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
