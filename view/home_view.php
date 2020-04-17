<html>
    <head>
    <?php
    include 'view/parts/stylesheets.html';
    ?>

    <div class="container">
        <table class="table">
            <thead>
                <td>titre</td>
                <td>Ingrédients principal</td>
                <td>Recette</td>
                <td>Image</td>
                <td>Options</td>
            </thead>

            <tbody>
            <?php
                foreach($recettes as $res){
            ?>

                    <tr>
                        <td> <?php echo($res->getTitre()) ?> </td>
                        <td> <?php echo($res->getIngredient()) ?> </td>
                        <td> <?php echo($res->getRecette()) ?> </td>
                        <td> <?php echo($res->getImage()) ?> </td>

                        <td>
                            <a href="http://localhost/PHP-orientéObjet/exam/index.php?controller=recette&action=delete&id=<?php echo($res->getId()) ?>">Supprimer</a>
                            <a href="http://localhost/PHP-orientéObjet/exam/index.php?controller=recette&action=editForm&id=<?php echo($res->getId()) ?>">Modifier</a>
                            <a href="http://localhost/PHP-orientéObjet/exam/index.php?controller=recette&action=viewDetail&id=<?php echo($res->getId()) ?>">Voir details</a>
                        </td>
                    </tr>


                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</body>

<?php
include 'view/parts/scripts.html'
?>

</html>
