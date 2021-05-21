<?php

echo "Praticando Arrays <br>";

$Cadastro = array("Maria da Silva", 30, 1.7, true, "Olá", false);
$cadastro = array("nome" => "Maria da Silva", "idade" => 30, "altura" => 1.7, "fumante" => true);

var_dump($Cadastro);
//var_dump($cadastro);

$tamanho = count($Cadastro);
//echo $tamanho;

for ($i=0; $i < $tamanho; $i++) { 
    echo $Cadastro[$i];
    echo "<br>";
}
