<?php
	include ("includes/conectar.php");
	session_start();

	if (!isset($_SESSION['user'])) {
	header("Location: index.php");
	}

	if (isset($_REQUEST['cerrar'])) {
	session_destroy();
	header("Location: index.php");
	}
	if(isset($_REQUEST['eli'])){
		$consulta3 = "DELETE FROM archivos WHERE idarchivos =".$_REQUEST['eli'];
		$params3 = array();
		$options3 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
		$stmt3 = sqlsrv_query( $conn, $consulta3 , $params3, $options3 );
		header("Location: archivos.php");
	}

	if ( isset($_REQUEST['subir']) && !empty($_REQUEST['subir']) ) {
		$usuario=$_SESSION['user'];
		$na=$_FILES['archivo']['name'];
		$tipo=$_FILES['archivo']['type'];
		$t=$_FILES['archivo']['size'];


		$consulta16 ="INSERT INTO archivos (nombre, tipo, tamanio, usuario) VALUES ('$na','$tipo','$t','$usuario'); SELECT @@IDENTITY  AS id;";
		$ejecutar16 = sqlsrv_query ($conn, $consulta16);
		move_uploaded_file ($_FILES['archivo']['tmp_name'], "archivos/".$usuario.$na);
	}

	$consulta2 = "SELECT * FROM archivos WHERE usuario='".$_SESSION['user']."' ";
	$params2 = array();
	$options2 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt2 = sqlsrv_query( $conn, $consulta2 , $params2, $options2 );
	$row_count2 = sqlsrv_num_rows( $stmt2 );
	$a2 = sqlsrv_fetch_array($stmt2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Pagina de Inicio </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<section class="contenedor">
<form method="POST" action="archivos.php" enctype="multipart/form-data">
	<label for="archivo"> Subir Archivos </label><br>
	<input type="file" name="archivo" required>
	<input type="hidden" name="subir" value="ok">
	<input type="submit" value="Subir Archivo">
</form>
<table>
	<tr>
		<td> Idarchivo </td>
		<td> Nombre </td>
		<td> Tipo </td>
		<td> Tamaño </td>
		<td> Usuario </td>
		<td> Descargar </td>
		<td> Eliminar </td>
	</tr>

	<?php

	if($row_count2>0){
		do{
			echo "<tr><td>".$a2['idarchivos']."</td>";
			echo "<td>".$a2['nombre']."</td>";
			echo "<td>".$a2['tipo']."</td>";
			echo "<td>".$a2['tamanio']."</td>";
				echo "<td>".$a2['usuario']."</td>";
				echo "<td><a href='archivos/".$a2['usuario'].$a2['nombre']."'>Descargar</a></td>";
			echo "<td><a href='archivos.php?eli=".$a2['idarchivos']."'>Eliminar</a></td>";


		}
		while ($a2 = sqlsrv_fetch_array	($stmt2));
			echo "<tr><td colspan='5'><b>Total de Archivos ".$row_count2."</td></tr>";
		}
		else{
		echo "<tr><td colspan='5'> No hay Archivos</td></tr>";
		}
	?>
</table>

	<script>
	function preguntar(valor){
		eliminar=confirm("¿Estas seguro de eliminar esta Actividad?");
		if (eliminar)
			window.location.href = "inicio.php?ea="+valor;
	}
	</script>
</section>


</body>
</html>
