<?php

    class Maison{
        public $nomMaison ;
        public $longueurMaison ;
        public $largueurMaison ;
        public $nbrEtage ;
        public function surface(){
            $result = $this->longueurMaison*$this->largueurMaison*$this->nrbEtage ;
            echo "<p>la surface de $this->nomMaison est égale à : $result m2</p>";
        }
    }

$villa = new Maison();

$villa->nomMaison = "villaBene";

 $villa->longueurMaison = 5;

 $villa->largueurMaison = 6; 

 $villa->nrbEtage = 2 ;

 $villa->surface();

 ?>
