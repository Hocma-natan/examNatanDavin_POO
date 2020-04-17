<?php
    class RecetteManager extends DbManager {
        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $recettes = [];
            $sql =  'SELECT * FROM raviole';
            foreach  ($this->bdd->query($sql) as $row) {
                $recettes[] = new Recette($row['id'], $row['ingredient_principal'], $row['titre'], $row['recette'], $row['image']);
            }

            return $recettes;
        }

        public function insert(Recette $recette)
        {
            $ingredient = $recette->getIngredient();
            $titre = $recette->getTitre();
            $recepy = $recette->getRecette();
            $file = $recette->getImage();
            $requete = $this->bdd->prepare("INSERT INTO raviole (ingredient_principal, titre, recette, image) VALUES (?,?,?,?)");
            $requete->bindParam(1, $ingredient);
            $requete->bindParam(2, $titre);
            $requete->bindParam(3, $recepy);
            $requete->bindParam(4, $file);
            $requete->execute();
            $recette->setId($this->bdd->lastInsertId());
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM raviole where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM raviole WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $recette = new Recette($res['id'], $res['ingredient_principal'], $res['titre'], $res['recette'], $res['image']);

            return $recette;
        }

        public function update(Recette $recette)
        {
            $ingredient = $recette->getIngredient();
            $titre = $recette->getTitre();
            $recepy = $recette->getRecette();
            $image = $recette->getImage();
            $id = $recette->getId();
            $requete = $this->bdd->prepare("UPDATE  raviole SET ingredient_principal =? , titre = ?, recette = ?, image = ? WHERE id = ?");
            $requete->bindParam(1, $ingredient);
            $requete->bindParam(2, $titre);
            $requete->bindParam(3, $recepy);
            $requete->bindParam(4, $image);
            $requete->bindParam(5, $id);
            $requete->execute();
        }

    }
?>