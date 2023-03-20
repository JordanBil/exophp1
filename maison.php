<?php

    class Maison{
        public $nomMaison ;
        public $longueurMaison ;
        public $largeurMaison ;
        public $nbrEtage ;
        public function __construct($nom, $longueur, $largeur, $etage) {
            $this->nomMaison = $nom;
            $this->longueurMaison = $longueur;
            $this->largeurMaison = $largeur;
            $this->nbrEtage = $etage;
        } 
        public function surface(){
            $result = $this->longueurMaison*$this->largeurMaison*$this->nbrEtage ;
            echo "<p>la surface de $this->nomMaison est égale à : $result m2</p>";
        }
    }


 ?>
