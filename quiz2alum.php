<?php
include ("includes/conectar.php");//incluir un archivo
session_start();

if ( isset($_REQUEST['salir'])) {
	session_destroy();
header("Location:inicioalum.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>C++ QUIZ |AIELearning</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">¿Tiene alguna pregunta?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>0985-216-898</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>AIE-Learning56@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
								<div class="login_button">
									<?php
							if (isset($_SESSION['user'])) {
							echo"<a href='quiz2alum.php?salir=1'>Cerrar Sesion</a>";
							}
							else {
									echo"<a href='iniciar sesion.php'>Registrarse o Iniciar sesion</a>";
							}
						?>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="inicioalum.php">
									<div class="logo_text">AIE-<span>Learning</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="inicioalum.php">Hogar</a></li>
									<li><a href="aboutalum.php">Acerca De</a></li>
									<li class="active"><a href="cursosalum.php">Cursos</a></li>
									<li><a href="blogalum.php">Blog</a></li>
									<li><a href="comentario2alum.php">Comentarios</a></li>
									<li><a href="cuestionarioalum.php">Cuestionario</a></li>
								</ul>
								

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="inicioalum.php">Hogar</a></li>
				<li class="menu_mm"><a href="aboutalum.php">Acerca de</a></li>
				<li class="menu_mm"><a href="cursosalum.php">Cursos</a></li>
				<li class="menu_mm"><a href="blogalum.php">Blog</a></li>
				<li class="menu_mm"><a href="comentario2alum.php">Comentarios</a></li>
				<li class="menu_mm"><a href="cuestionarioalum.php">Cuestionario</a></li>
			</ul>
		</nav>
	</div>
<div>
</div>
<div>

<br><br><br><br><br><br><br><br>

  <title>Cuestionario PHP</title>
  <div id="page-wrap">
  <h1>Cuestionario Nª1 PHP</h1>

  <form action="result2.php" method="post" id="quiz">

            <ol>

                <li>

                    <h3>PHP es un...</h3>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Lenguaje de programación del lado del servidor </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Sitio web</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Página de inicio</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Lenguaje de marcado</label>
                    </div>

                </li>

                <li>

                    <h3>¿Cuál de las siguientes es la sintaxis correcta?</h3>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) echo "(< p> Hola.  < /p>);</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)echo (< p> 'Hola' < /p></label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) echo "< p> Hola. </ p>";</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Ninguna de las anteriores</label>
                    </div>

                </li>

                <li>

                    <h3>¿Puedes ejecutar PHP en Linux?</h3>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Si</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) No ( : )</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Solo se puede ejecutar en Windows</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Solo se puede ejecutar en MAC</label>
                    </div>

                </li>

                <li>

                    <h3>¿Cuál de las siguientes opciones es correcta cuando se usa PHP con la etiqueta script?</h3>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) n script language = "php"</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) script type = "application / ecmascript"</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) script type = "text / javascript"</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) A&B son correctas</label>
                    </div>

                </li>

                <li>

                    <h3>¿Cuál es la forma más recomendada de utilizar etiquetas PHP?</h3>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) < php</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)< ?</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) < ? php</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) int main</label>
                    </div>

                </li>

            </ol>

            <input type="submit" value="Submit" class="submitbtn" />

    </form>

  </div>
