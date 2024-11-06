<?php

//Operadores de Comparação
$a = 30;
$b = 55;

//Comparar se é maior
var_dump($a > $b);
$comparar = $a > $b;
echo "<br>";
var_dump($a < $b);

//atribuição de valor
echo "<br>";
//var_dump($a = $b);

//operador de igualdade
echo "<br>";
var_dump($a == $b);

//operador de igualdade e tipo
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($a === $b);

//operador de valor de diferença
var_dump($a != $b);
echo"<br>";
echo $a;
echo"<br>";
echo $b;

//operador spaceship
$a = 30;
$b = 55;
echo"<br>";
var_dump($a <=> $b);
?>