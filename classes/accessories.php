<?php

  class accessories extends product {

    //attributi dalla classe product
    public $animal;

    public function setAnimal($animalType) {
      
      return $this->animal= $animalType;

    }

    //Check Sconto
    public function getDiscount($discValue) {
    
      if ($this->discount !== $discValue) {
      
        $this->discount = 20;
      
      }
      
      if ($this->discount == 20) {
      
        $this->priceProduct =  $this->priceProduct - (($this->priceProduct / 100) * 20);

      }
    
    }


  }

?>