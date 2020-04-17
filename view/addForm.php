<html>
<head>
    <?php
        include 'Parts/stylesheets.html'
    ?>

<div class="container">
<h1>Ajout d'une nouvelle recette</h1>

    <form method="post" action="http://localhost/PHP-orientéObjet/exam/index.php?controller=recette&action=addRecette">
        <label>Titre de la recette</label>
        <input name="titre" class="form-control">

        <label>Ingredient principal</label>
        <input name="ingredient_principal" class="form-control">

        <label>Recette</label>
        <textarea name="recette" class="form-control" placeholder="écrivez votre recette ici"></textarea>

        <label>Image</label>
        <input name="image" class="form-control" placeholder="Actuellement en CHANTIER">

        <input class="btn btn-success" type="submit" value="valider">
    </form>
</div>

<?php
 include 'Parts/scripts.html'
?>

</body>