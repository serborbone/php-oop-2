<?php

  class user {

    public $name;
    public $lastname;
    public $email;

    public $registered = false;
    public $discount = 0;

    public function __construct($nameUser, $lastnameUser, $emailUser) {
      $this->name = $nameUser;
      $this->lastname = $lastnameUser;
      $this->email = $emailUser;

    }

    // Controllo se l'utente è registrato e se true assegno il valore 20 all'attributo $discount
    public function checkRegistered($checkRegistered) {
    
      if ($this->registered !== $checkRegistered) {

          $this->registered = $checkRegistered;
          $this->discount = 20;
      }

    }

  }

?>