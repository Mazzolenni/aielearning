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
<title>Java QUIZ |AIELearning</title>
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
									echo"<a href='cuestionarioalum.php?salir=1'>Cerrar Sesion</a>";
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
  <!-- Courses -->
<br><br>
	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" class="courses_search_input" placeholder="Buscar Cuestionarios" required="required">
							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>Todas Los cuestionarios</option>
								<option>Lenguaje De Programacion</option>
								<option>Deasarrollo Web</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto">Buscar ahora</button>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_14.jpg" width=400 height=200 alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="quizalum.php">C++</a></h3>
										<div class="course_teacher">Mr.Isaias</div>
										<div class="course_text">
											<p>Pon a prueba tus conocimientos acerca de C++!!</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span></span>
											</div>
											<div class="course_info">

												<span></span>
											</div>
											<div class="course_price ml-auto"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_15.jpg" width=400 height=200 alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="quiz2alum.php">Php</a></h3>
										<div class="course_teacher">Ms. alan</div>
										<div class="course_text">
											<p>Pon a prueba tus conocimientos acerca de PHP!!</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span></span>
											</div>
											<div class="course_info">

												<span></span>
											</div>
											<div class="course_price ml-auto"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_20.jpg" width=400 height=200 alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="quiz3alum.php">Python</a></h3>
										<div class="course_teacher">Mr. isaias</div>
										<div class="course_text">
											<p>Pon a prueba tus conocimientos acerca de Python!!</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span></span>
											</div>
											<div class="course_info">

												<span></span>
											</div>
											<div class="course_price ml-auto"><span></span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_19.jpg"  width=400 height=200 alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="quiz5alum.php">Java</a></h3>
										<div class="course_teacher">Mr. Eduardo</div>
										<div class="course_text">
											<p>Pon a prueba tus conocimientos acerca de Java!!</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span></span>
											</div>
											<div class="course_info">

												<span></span>
											</div>
											<div class="course_price ml-auto"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_24.jpg" width=400 height=200 alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="quiz6alum.php">JavaScript</a></h3>
										<div class="course_teacher">Ms. Isaias</div>
										<div class="course_text">
											<p>Pon a prueba tus conocimientos acerca de JavaScript!!</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span></span>
											</div>
											<div class="course_info">


											</div>
											<div class="course_price ml-auto"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/course_18.jpg" width=400 height=200 alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="quiz4alum.php">HTML</a></h3>
										<div class="course_teacher">Mr. Alan</div>
										<div class="course_text">
											<p>Pon a prueba tus conocimientos acerca de HTML!!</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span></span>
											</div>
											<div class="course_info">

												<span></span>
											</div>
											<div</div>
										</div>
									</div>
								</div>
							</div>

						</div>
