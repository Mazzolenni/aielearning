<!DOCTYPE html>

<?php
	include ("includes/conectar.php");
	session_start();

	if ( !isset($_SESSION['user'])) {
		header("Location: index.php");
	}

	$consulta0 = "SELECT * FROM usuario WHERE usuario= '".$_SESSION['user']."'";
	$params0 = array();
	$options0 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt0 = sqlsrv_query( $conn, $consulta0 , $params0, $options0 );
	$array= sqlsrv_fetch_array ($stmt0);

	if ( isset($_GET['cerrar'])) {
		session_destroy();
		header("Location: index.php");
	}

	if ( isset($_POST['registrar']) && !empty($_POST['pass']) ) {

		$p=$_POST['pass'];
		$n=$_POST['nombre'];
		$a=$_POST['apellido'];



	$consulta0 = "UPDATE usuario SET password='$p', nombre='$n', apellido='$a' WHERE usuario= '".$_SESSION['user']."'";
	$ejecutar0 = sqlsrv_query ($conn, $consulta0);
	header("Location: inicio.php");
	}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Editar Perfil </title>
</head>
<body>
	<div class="col-md-8 col-md-offsaet-2">
	<h1> Editar Perfil </h1>

		<form method="POST" action="editar.php" enctype="multipart/form-data">
			<div class="form-group">
				Usuario: <?php echo $array['usuario']; ?> <br><br>
			</div>
			<div class="form-group">
				Nombre <br>
				<input type="text" name="nombre" class="form-control" value="<?php echo $array['nombre']; ?>" required> <br><br>
			</div>
			<div class="form-group">
				Apellido <br>
				<input type="text" name="apellido" class="form-control" value="<?php echo $array['apellido']; ?>" required> <br><br>
			</div>
			<div class="form-group">
				Contraseña <br>
				<input type="password" name="pass" class="form-control" value="<?php echo $array['password']; ?>" required> <br><br>
			</div>

			<div class="form-group">
				<input type="submit" name="registrar" class="btn btn-warning" value="Guardar Cambios"></input> <br>
			</div>
		</form>
	</div>
	<br>
	<hr>
	<a href="inicio.php"> Volver a Inicio </a> <br>
</body>
</html>
