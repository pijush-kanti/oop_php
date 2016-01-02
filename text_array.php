<?php
require 'config.php';

$number = array();

$arr=0;
for ($x=1; $x<=100; $x++){
    //$number[]=$x;
    if(($x%2 !==0 ) && ($x!=51 && $x!=71 && $x!=81)){
      
        $number[] = $x;
        $arr = $arr + $x;
       
    }
}


pr($number);
echo $arr;
?>