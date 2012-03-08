<?php


$data = array(
    0 => 1,
    3 => 2,
    5 => 3,
    2 => 5,
    1 => 4
);

//order by keys
ksort($data);
$keysOrder = $data;

//order by values
asort($data);
$valuesOrder = $data;
var_dump($keysOrder);
var_dump($valuesOrder);