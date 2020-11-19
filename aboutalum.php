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
<title>About</title>
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
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
									<li><div class="question">Tienes alguna pregunta?</div></li>
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
										echo"<a href='aboutalum.php?salir=1'>Cerrar Sesion</a>";
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
									<li><a href="aboutalum.php">Acerca de</a></li>
									<li><a href="cursosalum.php">Cursos</a></li>
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

	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="inicioalum.php">Hogar</a></li>
								<li>Acerca De</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Bienvenido a AIE-Learning</h2>
						<div class="section_subtitle"><p>Una platorma de aprendizaje hasta tu comodidad y esta es nuestra:</p></div>
					</div>
				</div>
			</div>
			<div class="row about_row">

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><img src="images/about_1.jpg" alt=""></div>
						<div class="about_item_title"><a href="">Nuestra Historia</a></div>
						<div class="about_item_text">
							<p>Somos un grupo de amigos y estudiantes apasionados por la informatica y el mundo de la programacion.</p>
						</div>
					</div>
				</div>

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_middle">
					<div class="about_item">
						<div class="about_item_image"><img src="images/about_2.jpg" alt=""></div>
						<div class="about_item_title"><a href="">Nuestra Mision</a></div>
						<div class="about_item_text">
							<p>Nuestra mision como AIE Learning es poder proveer a los usuarios herramientas para el aprendizaje de nuevos lenguajes de programacion y desarrollo web de forma gratuita.</p>
						</div>
					</div>
				</div>

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_right">
					<div class="about_item">
						<div class="about_item_image"><img src="images/about_3.jpg" alt=""></div>
						<div class="about_item_title"><a href="">Nuestra Vision</a></div>
						<div class="about_item_text">
							<p>Somos un ente joven, nuestra vision es llegar a alcanzar la fama para poder competir con los mejores sitios de programacion.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Feature -->

	<div class="feature">
		<div class="feature_background" style="background-image:url(images/cursos_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Porque elejirnos?</h2>
						<div class="section_subtitle"><p>Somos un grupo de jovenes capacitados en el area de informatica, toda la informacion de AIELearning es procedente de fuentes confiables, informacion necesaria y segura para el buen aprendizaje</p></div>
					</div>
				</div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				<div class="col-lg-6 feature_col">
					<div class="feature_content">
						<!-- Accordions -->
						<div class="accordions">

							<div class="elements_accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Premio al mejor proyecto 2020</div></div>
									<div class="accordion_panel">
										<p>AIE-Learning resulto ganador del premio al mejor proyecto de informatica del 2020, ganando reconocimiento por la calidad de informacion a un buen alcance.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Aprendiendo con los mejores</div></div>
									<div class="accordion_panel">
										<p>AIELearning fue programado por los mejore estudiantes del Heavens Kingdom Christian School a nivel de informatica</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Nuestros titulos son reconocidos</div></div>
									<div class="accordion_panel">
										<p>Por mama y papa</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Alcanzando a todo el mundo</div></div>
									<div class="accordion_panel">
										<p>Con el poco tiempo que llevamos, ya hemos alcanzado a personas de Etiopia, Argentina y Colombia, y buscamos llegar a muchas mas partes del mundo</p>
									</div>
								</div>

							</div>

						</div>
						<!-- Accordions End -->
					</div>
				</div>

				<!-- Feature Video -->
				<div class="col-lg-6 feature_col">
					<div class="feature_video d-flex flex-column align-items-center justify-content-center">
						<div class="feature_video_background" style="background-image:url(images/video.jpg)"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

				<div class="team">
					<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="section_title_container text-center">
									<h2 class="section_title">Los mejores tutores online</h2>
									<div class="section_subtitle"><p>Recien graduados de Harvard tuvieron la idea de crear esta plataforma para llevar el aprendizaje de la programación a todos los lugares gratuitamente.</p></div>
								</div>
							</div>
						</div>
						<div class="row team_row">

							<!-- Team Item -->
							<div class="col-lg-3 col-md-6 team_col">
								<div class="team_item">
									<div class="team_image"><img src="images/team_5.jpg" alt=""></div>
									<div class="team_body">
										<h3 class="feature_title">Isaias Cano</h3>
										<div class="team_subtitle">Ingeniero en Informatica y marketing</div>
										<div class="social_list">
											<ul>
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="https://www.instagram.com/canoisaias56/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<!-- Team Item -->
							<div class="col-lg-3 col-md-6 team_col">
								<div class="team_item">
									<div class="team_image"><img src="images/team_6.jpg" alt=""></div>
									<div class="team_body">
										<h4 class="feature_title">Eduardo Balbuena</h4>
										<div class="team_subtitle">Diseñador y Polimata</div>
										<div class="social_list">
											<ul>
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="https://www.instagram.com/edu_balbuena03/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<!-- Team Item -->
							<div class="col-lg-3 col-md-6 team_col">
								<div class="team_item">
									<div class="team_image"><img src="images/team_9.jpg" alt=""></div>
									<div class="team_body">
										<h3 class="feature_title">Alan Soo</h3>
										<div class="team_subtitle">Modelo y Hacker</div>
										<div class="social_list">
											<ul>
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="https://www.instagram.com/alan_oru3/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<!-- Team Item -->
							<div class="col-lg-3 col-md-6 team_col">
								<div class="team_item">
									<div class="team_image"><img src="images/team_8.jpg" alt=""></div>
									<div class="team_body">
										<h3 class="feature_title">Orlando Acosta</h3>
										<div class="team_subtitle">Informatico, Matematico y Profesor</div>
										<div class="social_list">
											<ul>
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="https://www.instagram.com/orlanacostaa/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

	<!-- Counter -->

						</div>
					</div>

				</div>
			</div>


				</div>
			</div>

		</div>
	</div>

	<!-- Partners -->

	<div class="partners">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="partners_slider_container">
						<div class="owl-carousel owl-theme partners_slider">

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_1.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_2.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_3.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_4.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_5.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_6.png" alt=""></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">

								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="inicioalum.php">
											<div class="footer_logo_text">AIE-<span>Learning</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Estan son nuestras cuentas en las que puedes seguirnos y consultar cualquier cosa.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
											<li><a href="https://www.instagram.com/aielearning/?hl=es-la"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
								<CENTER><div align=center class="footer_title">Contacta con Nosotros</div></CENTER>
									<div align=rignt class="footer_contact_info">
										<ul>
											<li>Email: AIE-Learning56@gmail.com</li>
											<li>Phone:  0985-216-898</li>
											<li>Florida San Lorenzo, Paraguay</li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer links -->
								<div class="footer_section footer_links">

									<div class="footer_links_container">
										<ul>

										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col clearfix">

								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Para movil</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="https://mega.nz/"><img width=50 height=50 src="images/mobile_3.png" alt=""></a></div>
									<p><div class="footer_image"><a href="https://www.mediafire.com/"><img width=50 height=50 src="images/mobile_4.png" alt=""></a></div></p>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/about.js"></script>
</body>
</html>
