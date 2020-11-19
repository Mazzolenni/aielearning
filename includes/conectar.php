/*Conectar a la Base de Datos*/
<?php
	$serverName = "DESKTOP-5GVF0L4\SQLEVIDOS"; /*Nombre del servidor o el nombre de la computadora*/
	$connectionInfo = array ("Database"=>"proyecto", "UID"=>"Isaias Cano", "PWD"=>"isaias56", "ReturnDatesAsStrings"=> true);

	$conn = sqlsrv_connect ($serverName, $connectionInfo);

	if ($conn){
		echo "conexion realizada exitosamente a Base de Datos";
	}
	else {
		echo "conexion fallida";
		die (print_r(sqlsrv_errors(), false ));
	}
?>
