<?php


namespace Hillel;


class ShawarmaConst extends Shawarma
{
    public function __construct(string $title,float $cost,array $ingredients_key){
        $this->setTitle($title);
        $this->setCoast($cost);
        $this->setIngredients($ingredients_key);

    }

}






/*[0]=>  string(17) "pickled cucumbers"
  [1]=>  string(12) "fried potato"
  [2]=>  string(14) "tandoor lavash"
  [3]=>  string(38) "pickled onions with barberry and herbs"
  [4]=>  string(12) "garlic Sause"
  [5]=>  string(12) "chicken meat"
  [6]=>  string(15) "cole slow salad"
  [7]=>  string(13) "korean carrot"
  [8]=>  string(8) "beef leg"
  [9]=>  string(14) "fresh tomatoes"
  [10]=>  string(6) "hummus"
  [11]=>  string(11) "tahin sauce"
  [12]=>  string(11) "spicy sauce"
  [13]=>  string(8) "cilantro"
  [14]=>  string(9) "lamb meat"
  [15]=>  string(13) "lavash arabic"
}*/