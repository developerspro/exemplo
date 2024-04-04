<?php
echo "<pre>";
$lista["A"] = 10;
$lista["B"] = 11; 
$lista["C"] = 12;
$lista[] = 13;
$lista[] = 14;
$lista["texto"] =15;
$lista[] = 16;


$lista["alunos"] = array("matricula"=>1,"email"=>"aluno@eteck");
$lista["materias"] = array("DES I","PWII");
echo $lista["alunos"]["matricula"];
var_dump($lista);
for ($i=0; $i < count($lista); $i++) { 
   
    echo "Posição;".$i." Valor:".$lista[$i]."<br>";
}

foreach ($lista as $valor){
    echo "Valor:".$valor."<br>";
}
echo "<br><br>";
var_dump($lista);

$lista1 = array();

var_dump($lista1);

$lista2 = [1,2,3,"teste",5];
var_dump($lista2);
unset($lista2[3]);
$lista2[] = 20;
var_dump($lista2);
