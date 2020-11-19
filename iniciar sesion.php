<!DOCTYPE html>
<?php
	include ("includes/conectar.php");//incluir un archivo
	session_start();// Crear una sesion

	if ( isset($_POST['entrar']) && !empty($_POST['username']) ) {
	$ulogin=$_POST['username'];
	$plogin=$_POST['pass'];
	$tipousu = $_POST['idtipousu'];

	$consulta0 = "SELECT * FROM usuarios WHERE login= '$ulogin' AND password= '$plogin' AND idtipousuario= '$tipousu'";
    $params0 = array();
    $options0 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt0 = sqlsrv_query( $conn, $consulta0 , $params0, $options0 );
    $row_count0 = sqlsrv_num_rows( $stmt0 );

    if ($row_count0==1){
        $a0 = sqlsrv_fetch_array ($stmt0);
        $controltipou = $a0['idtipousuario'];

        if ($controltipou==1){
            $_SESSION['user']= $ulogin;
            header("Location:inicioalum.php");
        }
        else if ($controltipou==2){
            $_SESSION['user']= $ulogin;
            header("Location:inicio.php");
        }
    }
    else {
        echo "<script> alert ('Usuario o Contraseña o Tipo de Usuario Incorrecto') </script>";
        echo "<script> window.open ('iniciar sesion.php', '_self') </script>";
    }
	}


?>




<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Login1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login1/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login1/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-49">
						Inicia Sesión
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Su usuario es requerido">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="username" placeholder="Escriba su nombre de usuario">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Su contraseña es requerida">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="Escriba su contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div>
						<br><br>
					<?php
                            $consulta3 = "SELECT * FROM tipousuario ORDER BY idtipousuario ASC";
                            $params3 = array();
                            $options3 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                            $stmt3 = sqlsrv_query($conn, $consulta3, $params3, $options3);
                            $row_count3 = sqlsrv_num_rows($stmt3);
                            $a3 = sqlsrv_fetch_array($stmt3);

                            if($row_count3>0){
                                echo "<select name='idtipousu'  id='courses_search_select' class='courses_search_select courses_search_input'>";
                                echo "<option> Tipo de Usuario </option>";
                            do {
                                echo "<option value='".$a3['idtipousuario']."' >".$a3['nomtipousu']."</option>";
                            }
                            while ($a3=sqlsrv_fetch_array($stmt3));
                            }
                            else {
                                echo "No hay Tipos de Usuario";
                            }
                            ?>
                                </select>

                    </div>
                    <p><br>
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Olvidó la contraseña?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="entrar">
								Iniciar Sesión
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Regístrese utilizando
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							O regístrese utilizando
						</span>

						<a href="registro.php" class="txt2">registro</a></div>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="Login1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login1/vendor/bootstrap/js/popper.js"></script>
	<script src="Login1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login1/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login1/js/main.js"></script>

</body>
</html>
