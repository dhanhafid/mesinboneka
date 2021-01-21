<?php

require 'cost.php';

$mar = new Marionette;
$mar->pickMar();

echo "$mar->selectedMarName $mar->selectedMarPrice\n\n";

$acc1 = new Accessories;
$acc2 = new Accessories;
$acc3 = new Accessories;

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

$rule = new Rule;

$rule->count($totalBeforeTax, $acc1->selectedAccName, $acc2->selectedAccName, $acc3->selectedAccName );
echo "\n----------------------------------------\ntotal cost $rule->totalAfterTax";