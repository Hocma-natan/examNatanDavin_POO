1:

<?php
interface Login{
public function($user, $password);
}
?>


2:


__construct() : pas de parametre. Se déclenche a chaque vois que l'ont construit un nouvel objet.

__destruct() : pas de parametre. Se déclenche a la fin de l'objet. sert a détruire l'objet. 
la plupart du temps destruct() est inutile, les objet se détruisent tout seule lorsqu'on a fini de s'en servir.

__get($name) : se déclenche lorsque l'ont tente d'accéder a une variable qui n'éxiste pas ou dont l'accés nous est interdit. 
prend en paramettre le nom de la variable a laquel ont tente d'accéder.

__set ($name, $value) : se déclenche lorsque l'ont tente de donner une valeur a uen variable qui n'éxiste pas ou dont l'accés nous est interdit.
prend en paramettre le nom de la variable et la valeur qu'ont éssaye de lui atribuer.

__isset() : se déclenche lorsque ont fait un isset(). pas de paramettre.

__unset() : se déclenche lorsque ont fait un unset(). pas de paramettre.



3:

la methode __destruct()

4:

les class abstraite :

<?php

abstract class TestAbstract{
echo ('je suis une classe abstraite')
}

?>


5:

public : accessible depuis l'éxterieur de la class.
private : accésible depuis l'interieur de la class uniquement. et uniquement via des fonctions public.
protected : comme private a l'exeption que l'ont peut y accéder par heritage.

6:

        404 not found

7:


dans le MVC le router se sert de la variable $_GET pour orienter l'utilisateur vers les différentes page qui lui seront nécéssaire pour utiliser le projet.


8:

un paterne MVC permet principalement de standardiser l'architecture d'un site:
-Cela facilite le travail en groupe (tout le monde connais l'architecture et "parle la même langue").
-accélère et facilite la maintenance (tout est a sa place et façile a retrouver en cas d'erreur).
-permet une eventuelle evolution plus façile et rapide (car tout est compartimenter).


9:

un model MVC se compose de 3 partie fondamemental :
-la partie model qui rassemble le PHP nécéssaire a la comunication avec la base de donnée (les requetes SQL par éxemple) ainsi que toute les class nécéssaire au projet.
-la partie controlleur dans laquel se trouve le code PHP destiner au traitement des donnée préalablement aquises dans le model.
-la partie view qui rasemble les vue constitué majoritairement de code HTML / CSS. et qui concerne donc l'affichage des information.