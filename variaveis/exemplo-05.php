<?php

$nome = "alexandre";

function teste() {

	global $nome;
	echo $nome . " - ";

}

function teste2() {

	$nome = "dio";
	echo $nome . " agora no teste2";

}

teste();
teste2();

?>