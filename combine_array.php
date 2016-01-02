<?php
function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$car = array ('Toyota1', 'Toyota2', 'Toyota3', 'Toyota4', 'Toyota5');
$year = array (2001, 2005, 2007, 2008, 2012);
//$carInfo = array_combine($car, $year);
$carInfo = array_merge($car, $year);
  //$arr_count = count($carInfo);
  /*for ($i=0; $i<count($car); $i++){
    //echo $car[$i] . "<br>" .$year[$i];
    $carInfo[$car[$i]] = $year[$i];
}*/


pr($carInfo);


?>