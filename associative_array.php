<?php

$car = array(
    'tata' => 102,
    'bm'  => 103,
    'kodak' => 104,
    'lumia' => 105
);

$car = array_flip($car);

    $carname = array();
    foreach ($car as $value){
        echo "<pre>";
        echo $value;
        echo "</pre>";
        $carname[] = $value;
    }

/*function carname($car){
$carname[]
}*/
//carname ($car);

?>