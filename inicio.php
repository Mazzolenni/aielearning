<!DOCTYPE html>
<?php
include ("includes/conectar.php");//incluir un archivo
session_start();// Crear una sesion
	if ( !isset($_SESSION['user'])) {
	header("Location:index.php");
	}
	if ( isset($_REQUEST['salir'])) {
		session_destroy();
header("Location:index.php");
}

 ?>

 ?>
<html lang="en">
<head>
<title>AIE-Learning</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
										<i class="" aria-hidden="true"></i>
										<div class="login_button" ><a href="editarperfil.php">Editar Perfil</a></div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button" name="salir"><a href="inicio.php?salir=1">Cerrar Sesion</a></div>

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
								<?php
							if ( isset($_SESSION['user'])) {

					echo "<a href='inicio.php'>
						<div class='logo_text'>AIE-<span>Learning</span></div>
					</a>";
								 }
					else {
							echo "<a href='index.php'>
								<div class='logo_text'>AIE-<span>Learning</span></div>
							</a>";
					}
								 ?>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<?php
                if ( isset($_SESSION['user'])) {

						echo "<li><a href='inicio.php'>Hogar</a></li>";
					         }
						else {
								echo "<li><a href='index.php'>Hogar</a></li>";
						}
									 ?>
									<li><a href="about.php">Acerca de</a></li>
									<li><a href="cursos.php">Cursos</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="comentario2.php">Comentarios</a></li>
									<li><a href="cuestionario.php">Cuestionario</a></li>
								</ul>


		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Buscar" required="required">
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
				<li class="menu_mm"><a href="cuestionariot.php">Cuestionarioto</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">

			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">El Sistema de Educacion hasta tu comodidad</div>
									<div class="home_slider_subtitle">Futuro de la tecnologia educativa</div>
									<div class="home_slider_form_container">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">El Sistema de Educacion hasta tu comodidad</div>
									<div class="home_slider_subtitle">Futuro de la tecnologia educativa</div>
									<div class="home_slider_form_container">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">El Sistema de Educacion hasta tu comodidad</div>
									<div class="home_slider_subtitle">Futuro de la tecnologia educativa</div>
									<div class="home_slider_form_container">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Bienvenido a AIE-Learning</h2>
						<div class="section_subtitle"><p>Es una página web acompañada para proveer al usuario un método de enseñanza, esto para el buen aprendizaje sobre lenguajes de programación y diseño de paginas web como:</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				<?php
						 $consulta2 = "SELECT * FROM cursos ORDER BY idcursos ASC";
						 $params2 = array();
						 $options2 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
						 $stmt2 = sqlsrv_query($conn, $consulta2, $params2, $options2);
						 $row_count2 = sqlsrv_num_rows($stmt2);
						 $a2 = sqlsrv_fetch_array($stmt2);

						if($row_count2>0){
							do {

				 ?>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
			<?php
				echo "<div class='feature_icon'><img src='imagencurso/" .$a2['iconos']."' width=70 height=70 alt=''></div>
						<h3 class='feature_title'>".$a2['nombre']."</h3>
						<div class='feature_text'><p>".$a2['descripcion']."</p></div>";
						?>
					</div>
				</div>

				<?php
								}
						 while ($a2=sqlsrv_fetch_array($stmt2));
								}
						 else{
									 echo "Sin cursos";
								}
				?>


			</div>
		</div>
	</div>





	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Cursos populares en linea</h2>
						<div class="section_subtitle"><p>En esta sección, puedes elegir los cursos mas populares que puntean nuestros estudiantes de la plataforma.</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">

				<?php
						 $consulta2 = "SELECT * FROM cursos ORDER BY idcursos ASC";
						 $params2 = array();
						 $options2 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
						 $stmt2 = sqlsrv_query($conn, $consulta2, $params2, $options2);
						 $row_count2 = sqlsrv_num_rows($stmt2);
						 $a2 = sqlsrv_fetch_array($stmt2);

						if($row_count2>0){
							do {

				 ?>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
            <?php
					echo "	<div class='course_image'><img src='imagencurso/".$a2['imagen']."' width=300 height=185 alt=''></div>
						<div class='course_body'>


							<h3 class='course_title'><a href='".$a2['nombre']."'> ".$a2['nombre']." </a></h3>
							<div class='course_teacher'> ".$a2['tutor']." </div>
							<div class='course_text'>
								<p><div>".$a2['sintesis']."</div>";

              ?>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Estudiantes</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>

							</div>
						</div>
					</div>
				</div>

				<?php
								}
						 while ($a2=sqlsrv_fetch_array($stmt2));
								}
						 else{
									 echo "Sin cursos";
								}
				?>

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="cursos.php">Ver todos los Cursos</a></div>


				</div>
			</div>
		</div>
	</div>




	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">A recordar...</h2>
						<div class="section_subtitle"><p>Al entrar al mundo de la informatica debemos simpre tener en cuenta estas definiciones que al transcurso de ir desarrollando nos ayudaran mucho. </p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/event_7.jpg" width=300 height=185 alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">1</div>

								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="">Algoritmos</a></div>
								<div class="event_info_container">

									<div class="event_text">
										<p>Es como una secuencia de instrucciones que representan un modelo de solución para determinado tipo de problemas.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/event_5.jpg" width=300 height=185 alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">2</div>

								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="">Base de Datos</a></div>
								<div class="event_info_container">

									<div class="event_text">
										<p>Es una colección de información organizada de forma que un programa de ordenador pueda seleccionar rápidamente los fragmentos de datos que necesite.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/event_6.jpg" width=300 height=185 alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">3</div>

								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="">Patrones de Diseño</a></div>
								<div class="event_info_container">

									<div class="event_text">
										<p>Son unas técnicas para resolver problemas comunes en el desarrollo de software y otros ámbitos referentes al diseño de interacción o interfaces.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

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
							<div class="team_title"><a href="">Isaias Cano</a></div>
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
							<div class="team_title"><a href="">Eduardo Balbuena</a></div>
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
							<div class="team_title"><a href="">Alan So</a></div>
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
							<div class="team_title"><a href="">Orlando Acosta</a></div>
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

	<div class="contact-information wow fadeInUp" data-wow-delay="400ms">
			<div class="section-heading text-left">
	<div class="col-12 col-lg-7">
	<div class="section-heading text-left">
	<span>Seccion</span>
	<h3>Añadir</h3>
	<p class="mt-30">Esta sección exclusivo para los usuarios registrados sirve para que puedan editar la pagina a su gusto y puedan añadir cosas nuevas para el aprendizaje mutuo.</p>
	</div>
	<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
			<form action="inicio.php" method="post" enctype="multipart/form-data">
					<input type="text" class="form-control" id="name"  name="tutor"  placeholder="Nombre del tutor">
          <input type="file" class="form-control" id="name" name="imagen"  required >
					<textarea name="descripcion" class="form-control" id="message" cols="30" rows="10" placeholder="Descripcion"></textarea>
					<button class="btn academy-btn mt-30" type="submit">Enviar</button>
			</form>
	</div>
	</div>

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">!Juegos!</h2>
						<div class="section_subtitle"><p>En esta sección expandiremos su aprendizaje pero de forma novedosa y divertida.</p></div>
					</div>
					<div class="row">
						<div class="col">
							<div class="courses_button trans_200"><a href="cursos.php">Juegos</a></div>
	<!-- Latest News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Proximamente...</h2>
						<div class="section_subtitle"><p>En esta sección les brindaremos de nuestras proximas actualizaciones o de proximos proyectos que tengamos en mente.</p></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">

					<!-- News Post Large -->
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
							<div class="news_post_large_title"><a href="noticia4.php">Nuevos Lenguajes</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="">Admin</a></li>
									<li><a href="">Febrero 11, 2021</a></li>
								</ul>
							</div>
							<div class="news_post_text">
								<p>Podremos añadir nuevos lenguajes en el cual te ayudaran a especializarte a codigos mas complejos.</p>
							</div>
							<div class="news_post_link"><a href="noticia4.php">Leer mas</a></div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="noticia1.php">Kotlin llegará en este verano...</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="">admin</a></li>
									<li><a href="">marzo 20, 2021</a></li>
								</ul>
							</div>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="noticia3.php">Juegos recreativos que te estimulen al aprendizaje.</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="">admin</a></li>
									<li><a href="">Julio 7, 2022</a></li>
								</ul>
							</div>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="noticia5.php">El pack completo del Lenguaje C# vendrá recargado.</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="">admin</a></li>
									<li><a href="">Septiembre 14, 2021</a></li>
								</ul>
							</div>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="noticia6.php">Por navidades traeremos sorpresas para nuestros AIE-Lernianos.</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="">admin</a></li>
									<li><a href="">Diciembre 25, 2020</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <span>Seccion</span>
                                        <h3>Añadir</h3>
                                        <p class="mt-30">Esta sección exclusivo para los usuarios registrados sirve para que puedan editar la pagina a su gusto y puedan añadir cosas nuevas para el aprendizaje mutuo.</p>
                                    </div>

                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">

                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>

                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>

                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form action="inicio.php" method="post" enctype="multipart/form-data">
                                        <input type="text" class="form-control" id="name" name="cursos" placeholder="Titulo de la noticia">
																				<input type="text" class="form-control" id="name" name="cursos" placeholder="Nombre del admin">
																				<input type="text" class="form-control" id="name"  name="tutor"  placeholder="Fecha de la noticia">
																				<input type="file" class="form-control" id="name" name="imagen"  required >
                                        <textarea name="descripcion" class="form-control" id="message" cols="30" rows="10" placeholder="Descripcion"></textarea>
                                        <button class="btn academy-btn mt-30" type="submit">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
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
										<a href="inicio.php">
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
