<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- balise permettant l'ajout du responsive de Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Noob Cooking</title>

    <!-- feuille de style du template <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
</head>
<body>



    <div>
        <h1>Bonjour <?php echo htmlspecialchars($_POST['nom']); ?></h1>
            <h2>Merci d'avoir posté la recette : <?php echo htmlspecialchars($_POST['nomRecette']);?></h2>
            <p>Description : <?php echo htmlspecialchars($_POST['description']); ?></p>
            <p>Cette recette est pour <?php echo htmlspecialchars($_POST['personnes']);?></p>
            <p>Difficulté de la recette : <?echo htmlspecialchars($_POST['difficultes']) ?></p>
    </div>
</body>
<footer><?php include('footer.php');?></footer>





</html>




