<?php
include ("includes/conectar.php");//incluir un archivo
session_start();

if ( isset($_REQUEST['salir'])) {
	session_destroy();
header("Location:inicioalum.php");
}


if(isset($_REQUEST['cursos']) && !isset($_REQUEST['modificar'])) {
  $u=$_SESSION['user'];
	$tc=$_REQUEST['idtipocurso'];
	$n=$_REQUEST['cursos'];
	$t=$_REQUEST['tutor'];
	$i=$_FILES['imagen']['name'];
	$d=$_REQUEST['descripcion'];
	$hoy= date("Y-m-d H:i:s");


	$consulta0 ="INSERT INTO cursos (nombre, tutor, descripcion, imagen, idtipocurso) VALUES ('$n','$t','$d','$i','$tc')";
	$ejecutar0 = sqlsrv_query ($conn, $consulta0);
  move_uploaded_file ($_FILES['imagen']['tmp_name'], "imagencurso/".$i);

header ("location:inicioalum.php");
}

if(isset($_REQUEST['eli'])){
	$consulta4 = "DELETE FROM cursos WHERE idcursos =".$_REQUEST['eli'];
	$params4 = array();
	$options4 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt4 = sqlsrv_query( $conn, $consulta4 , $params4, $options4 );
	header("Location: cursos.php");
}

if(isset($_REQUEST['edi'])){
	$consulta5 = "SELECT * FROM cursos WHERE idcursos =".$_REQUEST['edi'];
	$params5 = array();
	$options5 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt5 = sqlsrv_query( $conn, $consulta5 , $params5, $options5 );
	$a5= sqlsrv_fetch_array($stmt5);
	$idtipocurso= $a5['idtipocurso'];

  $consulta6 = "SELECT * FROM tipocurso WHERE idtipocurso =$idtipocurso";
	$params6 = array();
	$options6 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt6 = sqlsrv_query( $conn, $consulta6 , $params6, $options6 );
	$a6= sqlsrv_fetch_array($stmt6);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Cursos</title>
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
									<div class="login_button"><a href="iniciar sesion.php">
                    <?php
											if (isset($_SESSION['user'])) {
											echo"<a href='cursosalum.php?salir=1'>Cerrar Sesion</a>";
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
				<li class="menu_mm"><a href="cometarios2alum.php">Comentarios</a></li>
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
								<li>Cursos</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" class="courses_search_input" placeholder="Buscar Cursos" required="required">
							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>Todas Las Categorias</option>
								<option>Lenguaje De Programacion</option>
								<option>Deasarrollo Web</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto">Buscar ahora</button>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">

							<?php
							$consulta3 = "SELECT * FROM cursos ORDER BY idcursos ASC";
							$params3 = array();
							$options3 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
							$stmt3 = sqlsrv_query($conn, $consulta3, $params3, $options3);
							$row_count3 = sqlsrv_num_rows($stmt3);
							$a3 = sqlsrv_fetch_array($stmt3);

							if($row_count3>0){

               do {

								 $consulta4 = "SELECT * FROM cursoalumno WHERE idcursos=".$a3['idcursos'];
								 $params4 = array();
								 $options4 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
								 $stmt4 = sqlsrv_query($conn, $consulta4, $params4, $options4);
								 $row_count4 = sqlsrv_num_rows($stmt4);


								?>


							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<?php

								echo "<div class='course_image'><img src='imagencurso/".$a3['imagen']."' width=400 height=200 alt=''></div>
									  <div class='course_body'>
										<h3 class='course_title'><a href='".$a3['nombre'].".php'>".$a3['nombre']."</a></h3>
										<div class='course_teacher'>".$a3['tutor']."</div>
										<div class='course_text'>
											<p>".$a3['descripcion']."</p>
										</div>
									</div>
									<div class='course_footer'>
										<div class='course_footer_content d-flex flex-row align-items-center justify-content-start'>
											<div class='course_info'>
												<i class='fa fa-graduation-cap' aria-hidden='true'></i>
												<span>".$row_count4." Estudiantes</span>
												 <a href='cursos.php?eli=".$a3['idcursos']."'>Eliminar Curso</a>
											<br>	 <a href='cursos.php?edi=".$a3['idcursos']."'>Editar Curso</a>
											</div>
											<div class='course_info'>
												<i class='fa fa-star' aria-hidden='true'></i>
												<span>5 Valoracion</span>";
												?>

											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
				 }
				 while ($a3=sqlsrv_fetch_array($stmt3));
				 }
				 else {
				 echo "No hay tipos de cursos";
				 }

							 ?>



							<!-- Course -->

						</div>
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="cursosalum.php">1</a></li>
										<li><a href="cursos2alum.php">2</a></li>
										<li><a href="cursos3alum.php">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Cursos</div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="c++alum.php">C++</a></li>
									<li><a href="phpalum.php">Php</a></li>
									<li><a href="pythonalum.php">Python</a></li>
									<li><a href="javaalum.php">Java</a></li>
									<li><a href="javascriptalum.php">JavaScript</a></li>
								</ul>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">A recordar...</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/event_7.jpg" width=90 height=60 alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="inicioalum.php">Algoritmos</a></div>
										<div class="latest_price">¿Que es?</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/event_5.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="inicioalum.php">Base De Datos</a></div>
										<div class="latest_price">¿Que era?</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/event_6.jpg"  alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="inicioalum.php">Patrones De Diseño</a></div>
										<div class="latest_price">¿Que son?</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Gallery -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Instagram</div>
							<div class="sidebar_gallery">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a 	<div class="feature_icon" href="https://www.instagram.com/aielearning/?hl=es-la">
											<img src="images/icon_5.png" width=70 height=70 alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a <div class="feature_icon" href="https://www.instagram.com/aielearning/?hl=es-la">
											<img src="images/icon_10.png" width=70 height=70 alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="feature_icon" href="https://www.instagram.com/aielearning/?hl=es-la">
											<img src="images/icon_8.png" width=70 height=70 alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="feature_icon" href="https://www.instagram.com/aielearning/?hl=es-la">
											<img src="images/icon_11.png" width=70 height=70 alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="feature_icon" href="https://www.instagram.com/aielearning/?hl=es-la">
											<img src="images/icon_9.png" width=70 height=70 alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="feature_icon" href="https://www.instagram.com/aielearning/?hl=es-la">
											<img src="images/icon_13.png" width=70 height=70>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Tags -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Ten en cuenta</div>
							<div class="sidebar_tags">
								<ul class="tags_list">
									<li><a>Creatividad</a></li>
									<li><a>Perseverancia</a></li>
									<li><a>Aprendizaje</a></li>
									<li><a>Ideas</a></li>
									<li><a>Paciencia</a></li>
									<li><a>Unico</a></li>
								</ul>
							</div>
						</div>


						<!-- Banner -->
						<div class="sidebar_section">
							<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
								<div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
								<div class="sidebar_banner_overlay"></div>
								<div class="sidebar_banner_content">
									<div class="banner_title">Aplicacion Android</div>
									<div class="banner_button"><a><h5>Muy Pronto...</a><h5></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Newsletter -->
	<div class="section-heading text-left">
<div class="col-12 col-lg-7">
<div class="section-heading text-left">


	<form action="cursosalum.php" method="post" enctype="multipart/form-data">







</div>


</div>

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">Controlar la complejidad es la esencia de la programación</div>
							<div class="newsletter_subtitle">El Conocimiento es Poder</div>
						</div>

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
										<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: aie.learning@gmail.com</li>
											<li>Phone:  +(595) 111 555 666</li>
											<li>Asuncion Paraguay</li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer links -->


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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>
