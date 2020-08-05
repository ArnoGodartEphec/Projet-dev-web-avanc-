<!-- Section de post de recettes -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- balise permettant l'ajout du responsive de Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Noob Cooking</title>

    <!-- feuille de style du template <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
</head>
<div class="w3-container w3-padding-64" id="postez">
    <h1>Postez votre recette</h1><br>
    <form action="action_page.php" target="_blank">
        <p>Votre nom : <input type="text" name="nom" /></p>
        <p>Nom de la recette : <input type="text" name="nomRecette" /></p>
        <p>Description <textarea rows="5" cols="33"></textarea></p>
        <p><input type="submit" value="OK"></p>
    </form>
</div>
</html>
