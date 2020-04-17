<html>
    <head>
    <?php
    include 'view/parts/stylesheets.html';
    ?>

    <div class="container">
        <h1><?php echo($recette->getTitre()) ?></h1>
        <h2><?php echo($recette->getIngredient()) ?></h2>
        <p><?php echo($recette->getRecette()) ?></p>
        <img src="<?php echo($recette->getImage()) ?>">
    </div>


    </body>

<?php
include 'view/parts/scripts.html'
?>

</html>