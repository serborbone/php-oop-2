<?php

class food extends product {

    public $animal;
    public $animalAge;
    public $expireDate;

    public function setAnimal($animalType) {
      
      return $this->animal= $animalType;

    }

    public function setAge($age) {

      return $this->animalAge = $age;

    }

    public function setExpire($expire) {

      return $this->expireDate = $expire;

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