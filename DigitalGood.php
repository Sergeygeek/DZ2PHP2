<?php
include_once "PieceGood.php";

class DigitalGood extends PieceGood {
    private $name;
    private $amount;
    
    function dPricePerPiece(){
        (int)$dPricePerPiece;
        $dPricePerPiece = parent::$this->pricePerPiece / 2;
        return $dPricePerPiece;
    }
            
    function dFinalPrice(){
        (int)$dFinalPrice;
        $dFinalPrice = $this->dPricePerPiece() * $this->amount
    }
        
}
    

?>