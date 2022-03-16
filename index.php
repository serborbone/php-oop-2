<?php

  class product {

    //attributi comuni a tutti i prodotti
    public $productName;
    public $priceProduct;
    public $categoryProduct;
    public $brandProduct;

    public function __construct($nameProd, $priceProd, $categoryProd, $brandProd) {
      
      $this->productName = $nameProd;
      $this->priceProduct = $priceProd;
      $this->categoryProduct = $categoryProd;
      $this->brandProduct = $brandProd;

    }

  }

  class food extends product {

    public $animalAge;
    public $expireDate;

    public function setAge($age) {

      $this->animalAge = $age;

    }

    public function setExpire($expire) {

      $this->expireDate = $expire;

    }

  }

  class toy extends product {

    public $animal;

    public function setAnimal($animalType) {
      
      $this->animal= $animalType;

    }

  }

  class accessories extends product {

    //attributi dalla classe product

  }

  //$product = new product('Crocchette', 10, 'Food');
  $food = new food('Crocchette', 10, 'Food', 'Royal Canin');
  $toy = new toy('Palla di gomma', 8, 'Toy', 'Friskies');
  $accessories = new accessories('Cuccia in stoffa', 35, 'Cuccia', 'Pet Friend');

  $food->setAge(5);
  $food->setExpire('20 Marzo 2024');
  $toy->setAnimal('Gatto');

  //var_dump($product);
  var_dump($food);
  var_dump($toy);
  var_dump($accessories);



?>