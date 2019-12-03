<?php

/* 1º Este é um array de uma dimensão, no caso é chamado de Vetor.
2º Todo array inicia em 0. */
$frutas = array("Laranja", "Abacaxi", "Melancia");
// Print_r impreme o array.
print_r($frutas);echo "<br>";

// Para ser um array tem que ter mais de uma dimensão, bidimensional, tridimensional etc...

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];echo "<br>";
// Função para saber qual é a última informação que o array contem.
echo end($carros[1]);echo"<br>";

// Algums funções para tratar arrays.
$pessoas = array();

// Função para adicionar um item ao array depois dele já estar criado.
array_push($pessoas, array(
	'nome'=>'João Pedro',
	'idade'=>'20'
));

array_push($pessoas, array(
	'nome'=>'Maria Luiza',
	'idade'=>'1'
));

print_r($pessoas);echo"<br>";
print_r($pessoas[0]);echo"<br>";
print_r($pessoas[1]);echo"<br>";
print_r($pessoas[1]['nome']);echo"<br>";
 ?>