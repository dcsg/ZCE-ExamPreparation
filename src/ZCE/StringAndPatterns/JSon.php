<?php


$array = array(
    "João" => array(
        "Idade"     => 23,
        "Casado"    => true,
        "Filhos"    => false
        ),
    "Maria" => array(
            "Idade"     => 35,
            "Casado"    => true,
            "Filhos"    => true
            ),
);


$arrayJsonEncoded = json_encode($array);