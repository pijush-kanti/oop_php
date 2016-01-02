<?php
/*----------------Array asort---------------*/
include ('config.php');
//require ('configs.php');
$car = array ('Toyota5' => 5, 'Toyota4' => 4, 'Toyota3' => 3, 'Toyota2' => 2, 'Toyota1' => 1);
asort($car);
foreach ($car as $key => $carInfo){
    echo $key . '&nbsp;=&nbsp;' . $carInfo . '<br>';
}


/*----------------Array multisort---------------*/
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 5, 2, 4);
array_multisort($ar1, $ar2);
pr($ar2);

/*----------------Array rsort---------------*/

$car = array ('Toyota5' => 1, 'Toyota4' => 4, 'Toyota3' => 3, 'Toyota2' => 2, 'Toyota1' => 5);
rsort($car);
foreach ($car as $key => $carInfo){
    echo $key . '&nbsp;=&nbsp;' . $carInfo . '<br>';
}

/*----------------Shuffle---------------*/
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

$number = array();
for ($i=1; $i<=20; $i++){
    $number[] = $i;
    
}
pr($number);

 ?>