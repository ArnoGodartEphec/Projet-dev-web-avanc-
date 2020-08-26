<?php
session_start();
require_once("php/db_connect.php");
?>

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
        
          <div class="form-group">


          <form id='formContact'class="form-inline" method="post">
          <input type="text" id="user" class="input form-control" name="user" placeholder="Nom d'utilsiateur" required>
          <input type="password" id="password" class="input form-control" name="password" placeholder="Mot de passe" required>
          
           
            <button name="envoi" type="submit" id="submitContact" value="S'identifier"class="btn btn-primary mb-2">Se connecter</button>
          </form>   
   



        </div>
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


<!--/G -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="centered">Postez votre recette</h2>
                <!-- <form class="contact-form php-mail-form" role="form" action="api/addRecette.php" method="post"> -->
                    <div class="form-group">
                        <input type="name" name="nom" class="form-control" id="nom"  required placeholder="Votre nom" value='<?php echo  $_SESSION['userName']?>' data-rule="minlen:4" data-msg="Ton nom fait vraiment moins de 4 lettres ?" >
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="titre" class="form-control" id="titre" required placeholder="Titre de la recette miam" data-rule="minlen:4" data-msg="Bizarre un titre aussi court non ?">
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="recette" id="recette" required placeholder="Le plus important" rows="5" data-rule="required" data-msg="Que viens tu faire ici au final ?"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="form-send">
                        <button onclick="cleanForm()" type="submit" class="btn btn-large">Ajouter la recette!</button>
                    </div>

                <!-- </form> -->

            </div>
        </div>
    </div>
</div>
<!--  ********** GREEN SECTION ********** -->
<div id="g">
    <div class="container">
        <div class="row mt">
            <div class="col-md-12">
                <ul class="list-group-flush">
                    <li class="list-group-item" id="nomUser">toto</li>
                    <li class="list-group-item" id="titreRecette">test</li>
                    <li class="list-group-item">test</li>
                </ul>
            </div>
            <!--/col-md-4 -->

        </div>
        <!--/row -->
    </div>
    <!--/container -->
</div>
  




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
