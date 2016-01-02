<?php
function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$car = array ('Toyota1' => 2001, 'Toyota2' => 2002, 'Toyota3' => 2003, 'Toyota4' => 2005, 'Toyota5' => 2006);
$year = array (2001, 2005, 2007, 2008, 2012);
$carInfo = array_flip($car);
pr($carInfo);


?>