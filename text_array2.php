<?php
require 'config.php';

$arr = 0;
$num = array(51, 71, 81);
//$num = 51;

   for ($x=1; $x<=100; $x++){
    //$number[]=$x;
    if (($x%2 !==0 ) && (in_array($x, $num)==false)) {
       
      
        $number[] = $x;
        $arr = $arr + $x;
       
    }
}


pr ($number);
echo $arr;
?>