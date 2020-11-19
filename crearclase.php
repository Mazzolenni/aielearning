<?php
	include ("includes/conectar.php");
	session_start();

	if (!isset($_SESSION['user'])) {
	header("Location: index.php");
	}

	$consulta2 ="SELECT * FROM usuario ORDER BY idusuario ASC";
	$params2 = array();
	$options2 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt2 = sqlsrv_query( $conn, $consulta2 , $params2, $options2 );
	$row_count2 = sqlsrv_num_rows( $stmt2 );
	$a = sqlsrv_fetch_array	($stmt2);

	if(isset($_REQUEST['eli'])){
		$consulta3 = "DELETE FROM usuario WHERE idusuario =".$_REQUEST['eli'];
		$params3 = array();
		$options3 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
		$stmt3 = sqlsrv_query( $conn, $consulta3 , $params3, $options3 );
		header("Location: crearclase.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Crear Clase</title>
</head>
<body>
<br>
<section class="contenedor">
	<form action="crearclase.php" method="post" class="fcrearclase">
	<h1>Lista de Usuario</h1><hr>

	<hr>
	<table border>
	<tr>
		 <td>Id Usuario</td>
		 <td>Usuario</td>
		 <td>Contraseña</td>
		 <td>Nombre</td>
		 <td>Apellido</td>
		 <td>Eliminar</td>
	</tr>


<?php
if($row_count2>0){
	do{
		echo "<tr><td>".$a['idusuario']."</td>";
		echo "<td>".$a['usuario']."</td>";
		echo "<td>".$a['password']."</td>";
		echo "<td>".$a['nombre']."</td>";
			echo "<td>".$a['apellido']."</td>";
		echo "<td><a href='crearclase.php?eli=".$a['idusuario']."'>Eliminar Usuario</a></td>";

	}
	while ($a = sqlsrv_fetch_array	($stmt2));
		echo "<tr><td colspan='5'><b>Total de Usuarios ".$row_count2."</td></tr>";
	}
	else{
	echo "<tr><td colspan='5'> No hay clases creadas</td></tr>";
	}
?>

	</table>
</section>


</body>
</html>
