<?php


namespace Hillel;


class ShawarmaCalculator
{
private float $price=0;
private array $order;
private array $ingredients = array();
public function add(ShawarmaInterface $shaurma)
{
    $this->order[]=$shaurma;
    $this->price+=$shaurma->getCost();
    foreach ($shaurma->getIngredients() as $ingridient)
    {
        if(!array_search($ingridient,$this->ingredients))
        {
            $this->ingredients[]=$ingridient;
        }
    }
}

public function getPrice():float
{
    return $this->price;
}
public function getIngredients():array
{
    return $this->ingredients;
}





}