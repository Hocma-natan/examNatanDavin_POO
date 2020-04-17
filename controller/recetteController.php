<?php
class RecetteController{

    public function addForm(){
        require 'View/addForm.php';
    }
    public function addRecette(){
        $recette = new Recette(null, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $_POST['image']);
        $recetteManager = new RecetteManager();
        $recetteManager->insert($recette);
        header('location: http://localhost/PHP-orientéObjet/exam/index.php?controller=default&action=home');
    }
    public function delete($id){
        $recetteManager = new RecetteManager();
        $recetteManager->delete($id);
        header('location: http://localhost/PHP-orientéObjet/exam/index.php?controller=default&action=home');
    }
    public function editForm($id){
        $recetteManager = new RecetteManager;
        $recette = $recetteManager->select($id);
        require 'view/editForm.php';
    }
    public function editRecette($id){
        $recetteManager = new RecetteManager;
        $recette = new Recette($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $_POST['image']);
        $recetteManager->update($recette);
        header('location: http://localhost/PHP-orientéObjet/exam/index.php?controller=default&action=home');
    }
    public function viewRecette($id){
        $recetteManager = new RecetteManager;
        $recette = $recetteManager->select($id);
       require 'view/detail.php';
    }
}
?>