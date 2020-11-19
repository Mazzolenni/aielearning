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
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
									<li><div class="question">Tiene alguna Pregunta?</div></li>
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
								echo"<a href='blogalum.php?salir=1'>Cerrar Sesion</a>";
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

	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="inicioalum.php">Hogar</a></li>
								<li>Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_post_container">

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/course_25.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="noticia1alum.php">Kotlin Llegará este verano...</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="">admin</a></li>
										<li><a href="">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">

								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="noticia2alum.php">Nuevos Maestros.</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="">admin</a></li>
										<li><a href="">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">

								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/course_33.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="noticia3alum.php">!Juegos recreativos que te estimulen al aprendizaje!</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="">admin</a></li>
										<li><a href="">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">

								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/course_32.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="noticia4alum.php">Nuevos Lenguajes</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="">admin</a></li>
										<li><a href="">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">

								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/course_26.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="noticia5alum.php">El pack completo del Lenguaje C# vendrá recargado.</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="">admin</a></li>
										<li><a href="">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">

								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/course_31.jpg" width=300 height=185 alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="noticia6alum.php">Por navidades traeremos sorpresas para nuestros AIE-Lernianos.</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="">admin</a></li>
										<li><a href="">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">

								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="noticia7alum.php">Expansion de la pagina.</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="">admin</a></li>
										<li><a href="">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

				</div>
			</div>
		</div>
	</div>

	<div class="section-heading text-left">
<div class="col-12 col-lg-7">
<div class="section-heading text-left">

</div>
<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
</div>
</div>
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->


						<!-- Newsletter Form -->


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
								<li><a href="">Copyright notification</a></li>
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privacy Policy</a></li>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>
</body>
</html>
