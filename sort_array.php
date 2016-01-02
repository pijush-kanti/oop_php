<?php
function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

 $res_arr = array();
$arr = array ( 255, 1, 5, 2);


function resarray($arr){
    $arr_count = count($arr);
    for ($i=0; $i < $arr_count; $i++){
    $min  = min($arr);
    $res_arr[] = $min;
    $key = array_search($min, $arr);
    unset($arr[$key]);
    $arr = array_values($arr);
}
}
resarray($arr);
pr($arr);



?>