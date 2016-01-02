<?php
//include ('config.php');

$carName = array("BMW1","BMW2","BMW3","BMW4","BMW5","BMW6");
$carModel = array(2001,2002,2003,2004,2005,2006);
$newArray = array_combine($carName, $carModel);
$implode_car = implode(",", $newArray);
echo $implode_car;


//pr($newArray);

?>