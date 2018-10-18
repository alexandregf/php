<?php  

$hierarch = array(
	array(
		'cargo' => 'CEO',
		'subordinados' => array(
			
			//diretor
			array(
				'cargo' => 'diretor 1',
				'subordinados' => array(
					//gerente
					array(
						'cargo' => 'gerente 1'
					),
					///gerente
					//gerente 1b
					array(
						'cargo' => 'gerente 1b'
					)
					///gerente 1b
				)
			),
			///diretor

			//diretor 2
			array(
				'cargo' => 'diretor 2',
				'subordinados' => array(
					//gerente
					array(
						'cargo' => 'gerente 2',
						'subordinados' => array(
							//supervisor
							array(
								'cargo' => 'supervisor 2'
							)
							///supervisor
						)
					)
					///gerente
				)
			),		
			///diretor
		)
	)
);

function exibe($cargos) {

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";

		$html .= $cargo['cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarch);

?>