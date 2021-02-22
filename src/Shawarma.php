<?php


namespace Hillel;


abstract class Shawarma implements ShawarmaInterface
{
    protected $all_ingredients_array = array("pickled cucumbers", "fried potato", "tandoor lavash", "pickled onions with barberry and herbs", "garlic Sause",
        "chicken meat", "cole slow salad", "korean carrot", "beef leg", "fresh tomatoes", "hummus", "tahin sauce", "spicy sauce", "cilantro", "lamb meat",
        "lavash arabic");
    protected float $coast;
    protected string $title;
    protected array $ingredients;


    public function getCost(): float
    {
        return $this->coast;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    protected function setIngredients(array $ingredients_key)
    {
        foreach ($ingredients_key as $id)
        {
          $this->ingredients[] = $this->all_ingredients_array[$id];
        }

    }

    protected function setTitle(string $title){
            $this->title=$title;
    }

    protected function setCoast(float $coast){
            $this->coast=$coast;

    }

}

