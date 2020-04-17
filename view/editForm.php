<html>
<head>
    <?php
        include 'Parts/stylesheets.html'
    ?>

<div class="container">
<h1>modifiez la recette</h1>

    <form method="post" action="http://localhost/PHP-orientéObjet/exam/index.php?controller=recette&action=editRecette">
        <label>Titre de la recette</label>
        <input name="titre" class="form-control" value="<?php echo($recette->getTitre()) ?>">

        <label>Ingredient principal</label>
        <input name="ingredient_principal" class="form-control" value="<?php echo($recette->getIngredient()) ?>">

        <label>Recette</label>
        <textarea name="recette" class="form-control" placeholder="écrivez votre recette ici"> <?php echo($recette->getRecette()) ?></textarea>

        <label>Image</label>
        <input name="image" class="form-control" placeholder="Actuellement en CHANTIER" value="<?php echo($recette->getImage()) ?>">

        <input class="btn btn-success" type="submit" value="valider">
    </form>
</div>

<?php
 include 'Parts/scripts.html'
?>

</body>