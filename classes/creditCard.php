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

    public function checkExpired() {
    
      $expiration = DateTime::createFromFormat('m-y', $this->cardExpireMonth. '-'. $this->cardExpireYear);
      $currentTime = new DateTime();

      if ($expiration < $currentTime) {

        echo 'Attenzione: La carta di credito inserita è scaduta!';

      }

    }
  
  }

?>