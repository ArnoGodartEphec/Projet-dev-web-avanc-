<?php
session_start();
require_once 'php/db_connect.php';

// Ici on vérifie si la c'est un utlisateur connecté ou pas
if(isset($_SESSION['id'])){

}
else{
  $_SESSION['id']=0;
  $_SESSION['userName']="";
}

// Les 2 lignes en commentaires ici servent à "créer un compte" et hasher le mdp. Il faut créer le user et mdp dans la DB puis relaod la page
// Pas super propre
// $sth = $dbh->prepare('UPDATE users SET password = :mdp WHERE id = :id');
// $sth->execute([':mdp' => password_hash('arno', PASSWORD_DEFAULT), ':id' => 2]);

// Vérification du formulaire de connexion 
if(isset($_POST['envoi'])) {
    
    $sql = 'SELECT * FROM users WHERE username = :user';
    $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':user' => trim(htmlspecialchars($_POST['user']))));
    $user = $sth->fetch(PDO::FETCH_ASSOC);
    $sth->closeCursor();

//Vérifie si le mot de passe dans la DB est le même que celui entré
    $isPasswordCorrect = password_verify($_POST['password'], $user['password']);



  if(!isset($user)) {
    // Si l'user n'existe pas 
  } else {
      if($isPasswordCorrect) {
        // Si le mot de passe est correcte
        $_SESSION['id'] = $user['id'];
        $_SESSION['userName'] = $user['username'];
        $_SESSION['email'] = $user['email'];


      }  
      else{
        // Mot de passe incorrecte
      }
    
    
  }
}


?>

<!-- Début du fichier HTML -->
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

  <!-- Section blanche-->
  <div id="w">
    <div class="container">
      <div class="row centered">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">

                <?php

                // Si l'utilisateur n'est pas connecté, afficher le formulaire de connexion
                    if ( $_SESSION['id']==0){

                ?>
                    <form id='formContact'class="form-inline" method="post">
                        <input type="text" id="user" class="input form-control" name="user" placeholder="Nom d'utilisateur" required>
                        <input type="password" id="password" class="input form-control" name="password" placeholder="Mot de passe" required>
                        <button name="envoi" type="submit" id="submitContact" value="S'identifier"class="btn btn-primary mb-2">Se connecter</button>
                    </form>   
   

                <?php
                }
                    else{   // Afficher un bouton pour se déconnecter
                ?>
                    Vous êtes connecté - 
                     <a href='logout.php'>Se déconnecter</a>
                <?php }
          
                ?>

                <!-- Partie avec la petite flèche rouge -->
                </div>
                <br/>
                <i class="glyphicon glyphicon-chevron-down"></i>
            </div>
        </div>
    </div>
</div>
  


<!--Formulaire permettant de poster une recette (connecté ou non) -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="centered">Postez votre recette</h2>
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
                    
            </div>
        </div>
    </div>
</div>


<!-- Section affichant la liste des recettes -->
<div id="g">
    <div class="container">
        <div class="row mt">
            <div class="col-md-12">
              <div id='recettes'>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- Partie Copyrights -->
<div id="copyrights">
    <div class="container">
        <p>&copy; Copyrights Arno</p>

<!-- Librairies Javascript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>

<!-- Fichier main.js provenant du template et pas vraiment utilisé -->
  <script src="js/main.js"></script>
    </div>
</div>
</body>

<!-- Librairies Bootstrap pour le JQuery ainsi que pour les messages d'erreurs (Sweetalert) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9">
</script>


<script>

// Fonction gérant le formulaire
function cleanForm(){
    var nom = $('#nom').val();
    var titre = $('#titre').val();
    var recette = $('#recette').val();
    var id = <?php echo $_SESSION['id']; ?>;

    // Si aucune donnée n'est entrée dans le formulaire, pop-up d'erreur
    if(nom=='' || titre == ''|| recette ==''){
      Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: "Il manque des données pour enregistrer la nouvelle recette."
      })
    }
    // Sinon, faire appel à l'API addRecette, un POST qui permet d'ajouter une recette
    else{

    $.ajax({
            url:'api/addRecette.php',
            type:'POST',
            data:{
                id:id,
                nom:nom,
                titre:titre,
                recette:recette
            },
            success: function(data){        // Petit message confrimant que la recette a bien été ajoutée
              Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: "La recette a été ajoutée!",
                        showConfirmButton: false,
                        timer: 1500
                    })
              document.getElementById("titre").value = "";
              document.getElementById("recette").value = "";
              remplirRecette();
            }
    });
  }


  }

  // Appel à l'API getRecette, permettant d'afficher les recettes ajoutées dans la section verte
  function remplirRecette(){
    $.ajax({
            url:'api/getRecette.php',
            type:'GET',
            success: function(data){
              data=JSON.parse(data);
              var recetteAll=""
              var nombre=1;
              for(var i = 0;i<data.length;i++){
                var ligne= "<h2>"+nombre+") Titre: "+data[i]["titre"]+"</h2>"+
                           "<h5>Auteur: "+data[i]["nom"]+"</h5>"+
                            data[i]["description"]+"<br><hr>";
                recetteAll=recetteAll+ligne;
                nombre++;
              }
              
              
              $('#recettes').html(recetteAll); 
             
            }
    });
  }

// Fonction permettant d'ajouter les recettes au chargement de la page
  window.onload = function () { 
    remplirRecette();
   }

</script>
</html>
