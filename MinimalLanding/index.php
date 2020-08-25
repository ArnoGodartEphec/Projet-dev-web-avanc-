<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Noob Cooking</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/unveil-effects/animations.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

<!-- Header -->
<?php include('header.php'); ?>

  <!--  ********** WHITE SECTION ********** -->
  <div id="w">
    <div class="container">
      <div class="row centered">
        <div class="col-md-8 col-md-offset-2">
          <h4>Découvrez-nous</h4>
          <br/>
          <i class="glyphicon glyphicon-chevron-down"></i>
        </div>
        <!--col-md-8 -->
      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/w -->

  <!--  ********** GREEN SECTION ********** -->
  <div id="g">
    <div class="container">
      <div class="row mt">
        <div class="col-md-6 centered">
          <img src="img/iPhone-white.png" class="img-responsive aligncenter" width="320" alt="" data-effect="slide-left">
        </div>
        <!--/col-md-6 -->

        <div class="col-md-4">
          <h1 data-effect="slide-right">1</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <!--/col-md-4 -->

      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/G -->
  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="centered">Postez votre recette</h2>
          <form class="contact-form php-mail-form" role="form" action="listeRecette.php" method="post">
            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Entre ton nom mec" data-rule="minlen:4" data-msg="Ton nom fait vraiment moins de 4 lettres ?" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Ton mail" data-rule="email" data-msg="Tu sais quand même écrire une adresse mail ?">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="password" name="name" class="form-control" id="contact-password" placeholder="Ca restera entre nous" data-rule="minlen:4" data-msg="Fais un effort stp" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Titre de la recette miam" data-rule="minlen:4" data-msg="Bizarre un titre aussi court non ?">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Le plus important" rows="5" data-rule="required" data-msg="Que viens tu faire ici au final ?"></textarea>
              <div class="validate"></div>
            </div>
            <div class="form-send">
              <button type="submit" class="btn btn-large">Appuye sur le gros carré vert</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- / contact -->




  <div id="copyrights">
    <div class="container">
      <p>&copy; Copyrights Arno</p>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
    </div>
  </div>
</body>
</html>
