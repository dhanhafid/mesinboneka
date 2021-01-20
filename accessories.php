<?php
require 'marionette.php';

class Acc extends Mar {
    public $accessories = [
        ["name" => "hat", "price" => 30],
        ["name" => "stick", "price" => 20],
        ["name" => "sword", "price" => 50],
        ["name" => "shield", "price" => 40],
        ["name" => "magic ring", "price" => 120],
        ["name" => "angel wings", "price" => 100]
    ];
    public $selectedAccName;
    public $selectedAccPrice;
    
    public function pickAcc() {
        $randomAcc = rand(0,5);
        
        $this->selectedAccName = $this->accessories[$randomAcc]["name"];
        $this->selectedAccPrice = $this->accessories[$randomAcc]["price"];
    }
}


$acc1 = new Acc;
$acc2 = new Acc;
$acc3 = new Acc;

$randomNumberOfAcc = rand(1,3);

if($randomNumberOfAcc == 1){
    $acc1->pickAcc();
}elseif($randomNumberOfAcc == 2){
    $acc1->pickAcc();
    $acc2->pickAcc();
}elseif($randomNumberOfAcc == 3){
    $acc1->pickAcc();
    $acc2->pickAcc();
    $acc3->pickAcc();
}

echo "$acc1->selectedAccName $acc1->selectedAccPrice \n";
echo "$acc2->selectedAccName $acc2->selectedAccPrice \n";
echo "$acc3->selectedAccName $acc3->selectedAccPrice \n";

$totalBeforeTax = $mar->selectedMarPrice + $acc1->selectedAccPrice + $acc2->selectedAccPrice + $acc3->selectedAccPrice;

