<!DOCTYPE html>
<?php
	include ("includes/conectar.php");
	session_start();

	if ( !isset($_SESSION['user'])) {
		header("Location: index.php");
	}

	$consulta0 = "SELECT * FROM usuarios WHERE login = '".$_SESSION['user']."'";
	$params0 = array();
	$options0 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt0 = sqlsrv_query( $conn, $consulta0 , $params0, $options0 );
	$array= sqlsrv_fetch_array ($stmt0);
	$tipousu=$array ['idtipousuario'];

	if ( isset($_GET['cerrar'])) {
		session_destroy();
		header("Location: index.php");
	}

	if ( isset($_POST['ir']) && !empty($_POST['pass']) ) {

		$p=$_POST['pass'];
		$n=$_POST['nombre'];
		$a=$_POST['apellido'];



	$consulta0 = "UPDATE usuarios SET password='$p', nombre='$n', apellido='$a' WHERE login = '".$_SESSION['user']."'";
	$ejecutar0 = sqlsrv_query ($conn, $consulta0);
	header("Location: inicio.php");
	}

?>



<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Editar Perfil</title>

    <!-- Icons font CSS-->
    <link href="Login1/vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="Login1/vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="Login1/vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Login1/vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="Login1/css1/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registro</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nombre" value="<?php echo $array['nombre']; ?>">
                                            <label class="label--desc">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="apellido" value="<?php echo $array['apellido']; ?>">
                                            <label class="label--desc">Apellido</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="value">
                                <div class="input-group">
                                </div>
                            </div>
                        <div class="form-row">
                            <div class="name">Contraseña</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pass" value="<?php echo $array['password']; ?>"
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
													<div class="form-row p-t-20">
	                            <label class="label label--block"></label>
	                            <div class="p-t-15">
	                                <label class="radio-container m-r-55">
	                                    <input type="radio" checked="checked" name="exist">

	                                </label>
	                                <label class="radio-container">
	                                    <input type="radio" name="exist">
	                                </label>

	                            </div>
	                        </div>

                            </div>
                        </div>

                        <div class="form-row p-t-20">

                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" color=61E0E0 type="submit" name="ir">Editar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="Login1/vendor1/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="Login1/vendor1/select2/select2.min.js"></script>
    <script src="Login1/vendor1/datepicker/moment.min.js"></script>
    <script src="Login1/vendor1/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Login1/js1/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
