<?php
session_start();
require_once "php/db_connect.php";

// Si l'id >0 alors utilisateur créé
if($_SESSION['id']>0){

// Si id = 0 utilisateur non créé
}else{
    $_SESSION['id']=0;
}

// On prépare la requête et on l'éxecute
// Requête quand on créer un compte, quand on appuye sur le bouton "Se connecter"
if (isset($_POST['envoi'])) {
    $sql = 'SELECT * FROM users WHERE username = :user';
    $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':user' => trim(htmlspecialchars($_POST['user']))));
    $user = $sth->fetch(PDO::FETCH_ASSOC);
    $sth->closeCursor();

    // On place le mdp dans la DB et on lui attribue un id
    $sth = $dbh->prepare('UPDATE users SET password = :mdp WHERE id = :id');
    // Méthode pawword_hash permettant de hasher le pass envoyé à la DB (pas super propre)
    $sth->execute([':mdp' => password_hash('toto', PASSWORD_DEFAULT), ':id' => 1]);

    //On vérifie le mot de passe hashé et le même que le password entré
    $isPasswordCorrect = password_verify($_POST['password'], $user['password']);

// Boucle permettant de vérifier si l'user existe ou non (l'user peut poster une recette même si il n'est pas connecté)
    if (!isset($user))   {
        // Ici, l'user n'existe pas
    } else {
        if($isPasswordCorrect) {
                // Si le mdp est correct, on place les infos
                $_SESSION['id'] = $user['id'];
                $_SESSION['userName'] = $user['username'];
                $_SESSION['email'] = $user['email'];
        }

        else{
            // Si le mdp n'est pas correct
        }
    }
}
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

<!-- Section Formulaire pour s'enregistrer -->
  <div id="w">
    <div class="container">
      <div class="row centered">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <?php
                if ( $_SESSION['id']==0){}
                    ?>
                <form id='formContact' class="form-inline" method="post">
                    <label for="user"></label>
                        <input type="text" id="user" class="input form-control" name="user" placeholder="Nom d'utilisateur" required>
                    <label for="password"></label>
                        <input type="password" id="password" class="input form-control" name="password" placeholder="Mot de passe" required>
                    <button name="envoi" type="submit" id="submitContact" value="S'identifier" class="btn btn-primary mb-2">Se connecter</button>
                </form>

            </div><br/>
        </div>
      </div>
    </div>
  </div>

<!-- Formulaire pour poster une recette -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="centered">Postez votre recette</h2>
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="name" name="nom" class="form-control" id="nom" required placeholder="Votre nom" value="name" data-rule="minlen:4" data-msg="Ton nom fait vraiment moins de 4 lettres ?" >
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="titre"></label>
                        <input type="text" name="titre" class="form-control" id="titre" required placeholder="Titre de la recette miam" data-rule="minlen:4" data-msg="Bizarre un titre aussi court non ?">
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="recette"></label>
                        <textarea class="form-control" name="recette" id="recette" required placeholder="Le plus important" rows="5" data-rule="required" data-msg="Que viens tu faire ici au final ?"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="form-send">
                        <button type="submit" class="btn btn-large">Ajouter la recette!</button>
                    </div>

            </div>
        </div>
    </div>
</div>

<!-- Liste des recettes -->
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
        </div>
    </div>
</div>

<div id="copyrights">
    <div class="container">
      <p>&copy; Copyrights Arno</p>
    </div>
</div>

    <!-- Librairies JS-->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/php-mail-form/validate.js"></script>
    <script src="lib/unveil-effects/unveil-effects.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>
</html>
