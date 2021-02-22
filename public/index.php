<?php


require_once '../vendor/autoload.php';

//namespace Hillel;

$Odessa = new \Hillel\ShawarmaOd();
$beef = new \Hillel\ShawarmaBeef();
$lamb=new \Hillel\ShawarmaLamb();

$order1 = new \Hillel\ShawarmaCalculator();
$order1->add($Odessa);
$order1->add($beef);
$order1->add($lamb);
echo "order1 price = ".$order1->getPrice()."</br>";
echo "Infridients list for order1</br>";
foreach ($order1->getIngredients() as $ingredient)
{
    echo $ingredient."</br>";
}

