<?php
include 'include.php';

if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
    $recetteController = new DefaultController();
    $recetteController->home();
}
elseif($_GET['controller'] === 'recette' && $_GET['action'] === 'addForm'){
    $recetteController = new RecetteController();
    $recetteController->addForm();
}
elseif($_GET['controller'] === 'recette' && $_GET['action'] === 'addRecette'){
    $recetteController = new RecetteController();
    $recetteController->addRecette();
}
elseif($_GET['controller'] === 'recette' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->delete($_GET['id']);
}
elseif($_GET['controller'] === 'recette' && $_GET['action'] === 'editForm' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->editForm($_GET['id']);
}
elseif($_GET['controller'] === 'recette' && $_GET['action'] === 'editRecette' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->editRecette($_GET['id']);
}
elseif($_GET['controller'] === 'recette' && $_GET['action'] === 'viewDetail' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->viewRecette($_GET['id']);
}
else{
    throw new Exception('La page demandée n\'existe pas', 404);
}

?>