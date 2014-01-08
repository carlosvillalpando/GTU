<?php
	$variable = $_POST['cabecera'];
	$respuesta =  array('Respuesta' => 'positivo', 'Datos' => $variable);
	echo json_encode($respuesta);
?>