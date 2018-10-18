<?php  

$pessoa = array(
	'nome' => 'alexandre',
	'idade' => 20
);

foreach ($pessoa as $value) {
	echo $value . '<br/>';
}

foreach ($pessoa as &$value) {
	if (gettype($value) === 'integer') $value += 10;
	echo $value . '<br/>';
}
print_r($pessoa);

echo '<br/><br/>';

$pessoa1 = array(
	'nome' => 'eddie',
	'idade' => 20
);
foreach ($pessoa1 as $value) {
	if (gettype($value) === 'integer') $value += 10;
	echo $value . '<br/>';
}
print_r($pessoa1);

?>