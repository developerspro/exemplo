<?php
echo "<pre>";
$lista[10] = 10;
$lista[] = 11; 
$lista[] = 12;
$lista[] = "nome";
$lista[] = 13;

var_dump($lista);

$lista1 = array();

var_dump($lista1);

$lista2 = [1,2,3,"teste",5];
$lista2[] = 20;
var_dump($lista2);
