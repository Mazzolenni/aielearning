<!DOCTYPE html>
<?php
	include ("includes/conectar.php");//incluir un archivo
if ( isset($_POST['ir']) && !empty($_POST['user']) ) {

$u=$_POST['user'];
$p=$_POST['pass'];
$n=$_POST['nombre'];
$a=$_POST['apellido'];
$tipousu=$_POST['idtipousu'];


$consulta1 = "SELECT * FROM usuarios WHERE login= '".$u."'";
$params1 = array();
$options1 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt1 = sqlsrv_query( $conn, $consulta1 , $params1, $options1);
$row_count1 = sqlsrv_num_rows( $stmt1 );

  if ($row_count1==1){
    echo "<script> alert ('El usuario ya esta registrado') </script>";
    echo "<script> window.open ('registro.php', '_self') </script>";
  }

  else {
  $consulta2 = "INSERT INTO usuarios (nombre, apellido, login, password, idtipousuario) VALUES ('$n','$a','$u','$p', '$tipousu')";
	$ejecutar2 = sqlsrv_query ($conn, $consulta2);

  if ($ejecutar2){

  echo "<script> alert ('El usuario se ha registrado') </script>";
	header("Location:iniciar sesion.php");
  }
  }
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
    <title>Registro</title>

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
                    <h2 class="title">Resgistro</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nombre">
                                            <label class="label--desc">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="apellido">
                                            <label class="label--desc">Apellido</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Usuario</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user">
                                </div>
                            </div>
														<p>
                        <div class="form-row">
                           <div class="name">Contraseña</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pass">
                                </div>
                            </div>
                        </div>
                        </div>

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
                        <p>
                        <div class="form-row m-b-55">
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="ir">Registrar</button>
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
