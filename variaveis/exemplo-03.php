<?php 

/// tipos básicos
$nome = "xandorra";
$site = 'www.twitter.com/xandorra';
$ano = 1983;
$salario = 5500.99;
$bloqueado = false;

/// tipos compostos
$frutas = array("abacaxi", "laranja", "manga");
$nascimento = new DateTime();

/// tipos especiais
$arquivo = fopen("exemplo-03.php", "r");
$nulo = NULL; /// ausência de valor
$vazio = ""; /// instanciado na memória

// echo $frutas[2];
// var_dump($nascimento);
// var_dump($arquivo);

?>