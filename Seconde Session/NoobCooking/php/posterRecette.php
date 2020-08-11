<!-- Section de post de recettes -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- balise permettant l'ajout du responsive de Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Noob Cooking</title>
</head>
<body>
<div class="w3-container w3-padding-64" id="postez">
    <h1>Postez votre recette</h1><br>
    <form action="soumission.php" target="_blank" method="post">
        <label for="nom"></label>
        <p>Votre nom : <input type="text" name="nom" id="nom" required/></p>
        <label for="nomRecette"></label>
        <p>Nom de la recette : <input type="text" name="nomRecette" id="nomRecette" required /></p>
        <label for="personnes"></label>
        <p><input type="number" placeholder="Pour combien ? (pas de négatifs stp)" name="personnes" id="personnes" required></p>
        <label for="description"></label>
        <p>Description :<textarea rows="5" cols="33" name="description" id="description" required></textarea></p>
        <p><input type="submit" value="Poster"></p>
    </form>
</div>
</body>
<footer><?php include('footer.php')?></footer>
</html>
