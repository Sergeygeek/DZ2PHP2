<?php
include_once "AbstractGood.php";

class WeightGood extends AbstractGood {
    private $name;
    private $price;
    private $weight;
    
    function setName($name){
        $this->name = $name;
        return $name;
    }
    
    function setPrice($price){
        $this->pricePerPiece = $price;
        return $price;
    }
    
    function setWeight($weight){
        $this->weight = $weight;
        return $weight;
    }
    
    function finalPrice(){
        (int)$finalPrice;
        $finalPrice = $this->price * $this->weight;
        return $finalPrice;
    }
        
}
    

?>