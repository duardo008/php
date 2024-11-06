<?php

$nome = "Eduardo";

$nome = strtoupper($nome);

$nome = strtolower($nome);

$nome = str_replace("a", "@", $nome);

echo "nome: " . $nome; 

$frase = "Deus ajuda quem cedo madruga";

$palavra = "cedo";

$q = strpos($frase, $palavra);

echo "<br>";

echo "posição: " . $q;

$frase1 = substr($frase, 0, $q);
$frase2 = substr($frase, $q, 29);

echo "<br>";

echo $frase1;

echo "<br>";

echo $frase2




?>      