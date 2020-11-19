<?php
include ("includes/conectar.php");//incluir un archivo
session_start();

if ( isset($_REQUEST['salir'])) {
	session_destroy();
header("Location:index.php");
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
							echo"<a href='quiz.php?salir=1'>Cerrar Sesion</a>";
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
								<a href="idex.php">
									<div class="logo_text">AIE-<span>Learning</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">Hogar</a></li>
									<li><a href="about.php">Acerca De</a></li>
									<li class="active"><a href="cursos.php">Cursos</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="comentario2.php">Comentarios</a></li>
									<li><a href="contact.php">Contacto</a></li>
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
				<li class="menu_mm"><a href="index.php">Hogar</a></li>
				<li class="menu_mm"><a href="about.php">Acerca de</a></li>
				<li class="menu_mm"><a href="cursos.php">Cursos</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="comentario2.php">Comentarios</a></li>
				<li class="menu_mm"><a href="contact.php">Contacto</a></li>
			</ul>
		</nav>
	</div>
<div>
</div>
<div>

<br><br><br><br><br><br><br><br>

			<title>Cuestionario C++</title>
		 	<div id="page-wrap">
			<h1>Cuestionario Nª1 C++</h1>

			<form action="result.php" method="post" id="quiz">

		            <ol>

		                <li>

		                    <h3>C++ es un...</h3>

		                    <div>
		                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
		                        <label for="question-1-answers-A">A) Programa de creación de películas </label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
		                        <label for="question-1-answers-B">B) Lenguaje de secuencias de comandos del lado del cliente</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
		                        <label for="question-1-answers-C">C) Lenguaje de programación de propósito general</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
		                        <label for="question-1-answers-D">D) Otro</label>
		                    </div>

		                </li>

		                <li>

		                    <h3>¿Cuál es el punto de partida de un programa informático?</h3>

		                    <div>
		                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
		                        <label for="question-2-answers-A">A) Desde "iostream"</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
		                        <label for="question-2-answers-B">B) Primera linea</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
		                        <label for="question-2-answers-C">C) Función principal</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
		                        <label for="question-2-answers-D">D) Ninguna de las anteriores</label>
		                    </div>

		                </li>

		                <li>

		                    <h3>Cada instrucción debe terminar con:</h3>

		                    <div>
		                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
		                        <label for="question-3-answers-A">A) punto y coma (;)</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
		                        <label for="question-3-answers-B">B) colon ( : )</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
		                        <label for="question-3-answers-C">C) coma (,)</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
		                        <label for="question-3-answers-D">D) punto (.)</label>
		                    </div>

		                </li>

		                <li>

		                    <h3>¿Qué opción necesitas para hacer programas en C ++?</h3>

		                    <div>
		                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
		                        <label for="question-4-answers-A">A) navegador web</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
		                        <label for="question-4-answers-B">B) Sobresalir</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
		                        <label for="question-4-answers-C">C) Compilador</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
		                        <label for="question-4-answers-D">D) Marco de referencia</label>
		                    </div>

		                </li>

		                <li>

		                    <h3>¿Cuál de los siguientes es un compilador de C ++?</h3>

		                    <div>
		                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
		                        <label for="question-5-answers-A">A) Consola</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
		                        <label for="question-5-answers-B">B)GAC</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
		                        <label for="question-5-answers-C">C) GNU GCC</label>
		                    </div>

		                    <div>
		                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
		                        <label for="question-5-answers-D">D) CodeBlocks</label>
		                    </div>

		                </li>

		            </ol>

		            <input type="submit" value="Submit" class="submitbtn" />

				</form>

			</div>
