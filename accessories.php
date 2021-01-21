<?php
require 'marionette.php';

class Accessories extends Marionette {
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



