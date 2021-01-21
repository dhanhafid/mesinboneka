<?php
require 'accessories.php';

class Rule extends Accessories {
    public $totalAfterTax;
    
    public function count($totalBeforeTax, $accessories1, $accessories2 , $accessories3 ) {
        
        if ( (($accessories1 == "sword") || ($accessories2 == "sword") || ($accessories3 == "sword")) && (($accessories1 == "shield") || ($accessories2 == "shield") || ($accessories3 == "shield")) ) {
            echo "\ncombination beetwen sword and shield cause +10% cost";
            $this->totalAfterTax = $totalBeforeTax + $totalBeforeTax*10/100;
        } elseif ( (($accessories1 == "hat") || ($accessories2 == "hat") || ($accessories3 == "hat")) && (($accessories1 == "angel wings") || ($accessories2 == "angel wings") || ($accessories3 == "angel wings")) ) {
            echo "\ncombination beetwen hat and angel wings cause +13% cost";
            $this->totalAfterTax = $totalBeforeTax + $totalBeforeTax*13/100;
        } elseif ( $accessories3 == "magic ring" ) {
            echo "\nthe third accessories was magic ring, +20% cost";
            $this->totalAfterTax = $totalBeforeTax + $totalBeforeTax*20/100;
        } else {
            $this->totalAfterTax = $totalBeforeTax;
        }

    }
}


