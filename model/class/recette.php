<?php
    class Recette{
        private $id;
        private $ingredient_principal;
        private $titre;
        private $recette;
        private $image;

       
        public function __construct($id = null, $ingredient_principal, $titre, $recette, $image)
        {
            $this->id = $id;
            $this->ingredient_principal = $ingredient_principal;
            $this->titre = $titre;
            $this->recette = $recette;
            $this->image = $image;
        }


        public function getId()
        {
            return $this->id;
        }


        public function setId($id)
        {
            $this->id = $id;
        }

        public function getIngredient()
        {
            return $this->ingredient_principal;
        }

        public function setIngredient($ingredient_principal)
        {
            $this->titre = $ingredient_principal;
        }

        public function getTitre()
        {
            return $this->titre;
        }


        public function setTitre($titre)
        {
            $this->titre = $titre;
        }


        public function getRecette()
        {
            return $this->recette;
        }

        public function setRecette($recette)
        {
            $this->contenu = $recette;
        }

        public function getImage()
        {
            return $this->image;
        }


        public function setImage($image)
        {
            $this->image = $image;
        }
    }
?>