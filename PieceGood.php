<?php
include_once "AbstractGood.php";

class PieceGood extends AbstractGood {
    private (string)$name;
    private (int)$pricePerPiece;
    private (int)$amount = 1;
        
    function setName($name){
        $this->name = $name;
        return $name;
    }
    
    function setPrice($price){
        $this->pricePerPiece = $price;
        return $price;
    }
    
    function setAmount($amount){
        $this->amount = $amount;
        return $amount;
    }
    
    function finalPrice(){
        (int)$finalPrice;
        $finalPrice = $this->pricePerPiece * $this->amount;
        return $finalPrice;
    }
            
}
    

?>