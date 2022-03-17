<?php 

  class product {

    //attributi comuni a tutti i prodotti
    public $productName;
    public $priceProduct;
    public $categoryProduct;
    public $brandProduct;
    public $discount = 0;

    public function __construct($nameProd, $priceProd, $categoryProd, $brandProd) {
      
      $this->productName = $nameProd;
      $this->priceProduct = $priceProd;
      $this->categoryProduct = $categoryProd;
      $this->brandProduct = $brandProd;

    }

  }

?>