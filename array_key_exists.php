<?php
function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
//pr($carInfo);


?>