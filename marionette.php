<?php

class Marionette {
    public $marionette = [
        ["name" => "Bear", "price" => 900],
        ["name" => "Eagle", "price" => 900],
        ["name" => "Tiger", "price" => 900],
        ["name" => "Dragon", "price" => 900],
        ["name" => "Lion", "price" => 900]
    ];
    public $selectedMarName;
    public $selectedMarPrice;
    
    public function pickMar() {
        $randomMar = rand(0,4);

        $this->selectedMarName = $this->marionette[$randomMar]["name"];
        $this->selectedMarPrice = $this->marionette[$randomMar]["price"];
    }
}



?>