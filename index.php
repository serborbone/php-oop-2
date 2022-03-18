<?php

  require __DIR__. '/classes/product.php';
  require __DIR__. '/classes/food.php';
  require __DIR__. '/classes/toy.php';
  require __DIR__. '/classes/accessories.php';
  require __DIR__. '/classes/user.php';
  require __DIR__. '/classes/creditCard.php';

  // ISTANZE
  $food = new food('Crocchette', 10, 'Food', 'Royal Canin');
  $toy = new toy('Palla di gomma', 8, 'Toy', 'Friskies');
  $accessories = new accessories('Cuccia in stoffa', 35, 'Cuccia', 'Pet Friend');
  $user = new user('Mario', 'Rossi', 'mariorossi@email.it');
  $creditCard = new creditCard();


  //USER

  //se è true l'attributo $registered di user assume valore true e il valore di $discount è 20
  $user->checkRegistered(true);

  //CREDIT CARD

  $creditCard->getcardName('Mario');
  $creditCard->getcardLastName('Rossi');
  $creditCard->getExpireMonth('07');
  $creditCard->getExpireYear('25');

//Controllo se la carta di credito è scaduta
  $creditCard->checkExpired();


  // FOOD
  $food->setAnimal('Cane');
  $food->setAge(5);
  $food->setExpire('20 Marzo 2024');
  $food->getDiscount($user->discount);

  // TOY
  $toy->setAnimal('Gatto');
  $toy->getDiscount($user->discount);


  //ACCESSORIES
  $accessories->setAnimal('Coniglio');
  $accessories->getDiscount($user->discount);

  /*
  var_dump($food);
  var_dump($toy);
  var_dump($accessories);
  var_dump($user);
  var_dump($creditCard);
  */

?>