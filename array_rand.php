<?php
require "config.php";

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input,4);
pr($rand_keys);
?>