<?php
/*
$anoNascimento = 1983;
$nomeCompleto = "Alexandre";
*/

$this;

// na linha de baixo tem uma variável com número
$_nome1 = "alexandre";
$sobrenome = "gonçalves ferreira";

$nomeCompleto = $_nome1 . " " . $sobrenome;

echo $nomeCompleto;
echo "<br/>";

exit;

echo $_nome1;
echo "<br/>";

unset($_nome1);

// verificar se a variável foi definida ou não
if (isset($_nome1)) {
	echo $_nome1;
}

?>