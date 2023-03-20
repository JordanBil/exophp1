<?php

    class Vehicule{
        public $nomVehicule ;
        public $vitesseVehicule ;
        public $nbrRoue ;
        public function __construct($nom, $vitesse, $roue) {
            $this->nomVehicule = $nom;
            $this->vitesseVehicule = $vitesse;
            $this->nbrRoue = $roue;
        }
        public function detect() {
            if ($this->nbrRoue == 2){
                echo ('Ce véhicule est une moto !');
                
            } else if ($this->nbrRoue == 4) {
                echo('Ce véhicule est une voiture !');

            } else {
                echo('Ce vehicule n existe pas !');
            }
        }
        public function boost(){

           $this->vitesseVehicule += 50 ;


        }
        public function plusRapide($voiture1,$voiture2){
            if($voiture1->vitesseVehicule > $voiture2->vitesseVehicule){
                echo ("$voiture1->nomVehicule est le véhicule le plus rapide");
            } else {
                echo ("$voiture2->nomVehicule est le véhicule le plus rapide");
            }
        }
      
        
    }


 ?>