<?php
    // $boneka = array("beruang"=>900, "elang"=>900,
    //                 "harimau"=>900, "naga"=>900,
    //                 "singa"=>900);
                    
    // $aksesoris = array("topi"=>30, "tongkat"=>20,
    //                 "pedang"=>50, "perisa"=>40,
    //                 "cincin sakti"=>120, "sayap malaikat"=>100);

    // foreach($boneka as $x => $x_value) {
    //     echo "boneka " . $x . ", harga=" . $x_value;
    //     echo "<br>";
    //     }
    
    //     echo $boneka[0];

    $boneka = array (900, 900, 900, 900, 900);
    $aksesoris = array (30, 20, 50, 40, 120, 100);
    
    
    $randomBoneka = rand(0,4);
    $randomAksesoris = rand(0,5);
    
    echo $boneka[$randomBoneka];
    echo $aksesoris[$randomAksesoris];
    echo "<br>";

    echo $boneka[$randomBoneka] + $aksesoris[$randomAksesoris] + $aksesoris[$randomAksesoris] + $aksesoris[$randomAksesoris];

    

?>