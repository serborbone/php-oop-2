<?php

  class creditCard {
  
    public $cardName;
    public $cardLastName;
    public $cardExpireMonth;
    public $cardExpireYear;

    public function getcardName($name) {
    
      return $this->cardName = $name;
    
    }

    public function getcardLastName($lastname) {

      return $this->cardLastName = $lastname;

    }

    public function getExpireMonth($expireMonth) {

      return $this->cardExpireMonth = $expireMonth;

    }

    public function getExpireYear($expireYear) {

      return $this->cardExpireYear = $expireYear;

    }
  
  }

?>