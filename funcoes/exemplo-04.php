<?php  

function ola() {
	$argumentos = func_get_args();
	return $argumentos;
}

var_dump(ola("mundo", "bom dia"));
var_dump(ola("mundo", 10));
var_dump(ola("", ""));

?>