<?php  

function ola($texto = "mundo", $periodo) {
	return "olá $texto! $periodo!<br/>";
}

echo ola("mundo", "bom dia");
echo ola("bh", "boa tarde");
echo ola("", "");

?>