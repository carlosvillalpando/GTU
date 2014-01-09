<?php
	$variable = $_POST['cabecera'].' carlos miau';
	$respuesta =  array('Respuesta' => 'positivo', 'Datos' => $variable);
	echo json_encode($respuesta);
?>