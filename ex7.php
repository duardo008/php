<?php

function exibirNome() {
    //escopo 1
    global  $nome;
    $nome = "Dom Pedro I";
    echo "Nome: " . $nome;
};

function exibirNome2() {
    //escopo 2
    $nome = "Tiradentes";
    echo "Nome: " . $nome;
};

echo "<br>";
exibirNome();
echo "<br>";
exibirNome2();



?>