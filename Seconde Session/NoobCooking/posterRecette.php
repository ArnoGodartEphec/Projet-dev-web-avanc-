<!-- Section de post de recettes -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!-- balise permettant l'ajout du responsive de Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/recettes.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Ne passe pas à W3C permet de s'assurer qu'il utilise la dernière version du moteur de rendu -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noob Cooking</title>
</head>
<header>
    <h1>Postez votre recette</h1><hr>
</header>

<body>
<h2>Céer un compte</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="form">
                    <form class="register-form">
                    <input type="text" placeholder="nom d'utilisateur"/>
                    <input type="password" placeholder="mot de passe"/>
                    <input type="text" placeholder="adresse mail"/>
                    <button>Créer compte</button>
                    </form><hr>
                </div>
            </div>
        </div>

        <div class="row" id="postez">
            <div class="col-lg-12">
                <form action="soumission.php" target="_blank" method="post">
                    <label for="nom">Votre nom</label>
                        <input type="text" name="nom" id="nom" required/>
                    <label for="nomRecette">Nom de la recette</label>
                        <input type="text" name="nomRecette" id="nomRecette" required/>
                    <label for="description">Description :</label>
                        <textarea rows="5" cols="33" name="description" id="description" required></textarea><hr>
                    <label for="personnes">Pour combien de personnes ?</label>
                        <input type="number" name="personnes" id="personnes" required><hr>
                    <label for="difficultes">Sélectionnez votre difficulté</label>
                        <select name="difficultes" id="difficultes">
                            <option value="facile">Facile</option>
                            <option value="moyen">Moyen</option>
                            <option value="difficile">Difficile</option>
                        </select>
                        <input type="submit" value="Poster">
                </form>
        </div>
</div>

    </div>

</body>

<footer><?php include('footer.php') ?></footer>
</html>
