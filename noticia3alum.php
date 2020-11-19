<?Php
include ("includes/conectar.php");
session_start();

if (!isset($_SESSION['user'])) {
header("Location: inicioalum.php");
}

if (isset($_REQUEST['salir'])) {
session_destroy();
header("Location: inicioalum.php");
}

if(isset($_REQUEST['nombre']) && !isset($_REQUEST['modificar'])) {
	$u=$_SESSION['user'];
	$n=$_REQUEST['nombre'];
	$e=$_REQUEST['email'];
	$c=$_REQUEST['comentario'];
	$hoy = date("Y-m-d H:i:s");

	$consulta0 ="INSERT INTO planclase (usuario, nombre, correo, comentario, fecha) VALUES ('$u','$n','$e','$c','$hoy',)";
	$ejecutar0 = sqlsrv_query ($conn, $consulta0);
}


if(isset($_REQUEST['ea'])){
$consulta3 = "DELETE FROM planclase WHERE idplan ='".$_REQUEST['ea']."'";
$stmt3 = sqlsrv_query( $conn, $consulta3);
header("Location: plan.php");
}


if(isset($_REQUEST['ma'])){
$consulta4 = "SELECT * FROM planclase WHERE idplan ='".$_REQUEST['ma']."'";
$params4 = array();
$options4 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt4 = sqlsrv_query( $conn, $consulta4 , $params4, $options4 );
$mplan = sqlsrv_fetch_array($stmt4);
}

$consulta2 = "SELECT * FROM comentario ORDER BY fecha DESC";
$params2 = array();
$options2 =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt2 = sqlsrv_query($conn, $consulta2, $params2, $options2);
$row_count2 = sqlsrv_num_rows($stmt2);
$a2 = sqlsrv_fetch_array($stmt2);




?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Noticias</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">
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
									<li><div class="question">Tienes alguna Pregunta?</div></li>
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
								echo"<a href='noticia3alum.php?salir=1'>Cerrar Sesion</a>";
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
								<a href="index.php">
									<div class="logo_text">AIE-<span>Learning</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="inicioalum.php">Hogar</a></li>
									<li><a href="aboutalum.php">Acerca de</a></li>
									<li><a href="cursosalum.php">Cursos</a></li>
									<li><a href="blogalum.php">Blog</a></li>
									<li><a href="comentarioalum.php">Comentarios</a></li>
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
				<li class="menu_mm"><a href="comentarioalum.php">Comentarios</a></li>
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
								<li><a href="blogalum.php">Blog</a></li>

								<li>Noticias</li>
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

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title">Juegos recreativos que te estimulen al aprendizaje.</div>
						<div class="blog_meta">
							<ul>
								<li>Se posteo el <a href="">Mayo 5, 2021</a></li>
								<li>Por el <a href="">Admin</a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="images/course_33.jpg" alt=""></div>
						<p>:</p>
						<div class="blog_quote d-flex flex-row align-items-center justify-content-start">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
							<div>¿Aprender Jugando?</div>
						</div>
						<p>Esto es precisamente lo que ofrecerá AIE-Learning. Una mezcla entre una plataforma de desarrollo online y una plataforma de videojuegos, que propone al usuario distintos ejercicios y retos de programación. Además, es posible retar a otras personas para comparar avances, utilizando logros y puntuaciones, utilizando nueva y poderosa estrategia para influir y motivar a grupos de personas. Una vez resuelto ofrece una respuesta muy visual.</p>
						<p>Gracias a AIE-Game podremos aprender conceptos de la inteligencia artificial como si de un juego se tratara. Además, proporciona un entorno multijugador para usuarios que puedan confrontar con el código creado por ellos, y a su vez competir por la eficiencia. Este modelo multijugador se ha vuelto muy popular entre los programadores más avanzados.

Sin duda, se trata de una propuesta muy interesante que atraerá a muchísimas personas.Tendremos un formulario en donde se podran inscribir en la web y con esto llevaremos a una experiencia de juego que va más allá del mero aprendizaje. En el momento que escribes el código ya estás jugando. Realmente esta propuesta ha conseguido implantar una nueva manera de programar.</p>
						<div class="blog_subtitle">¿De que tratará?</div>
						<p>Los juegos de codificación en solitario y multijugador se basan en turnos: en cada turno, su programa obtiene nuevas entradas y debe generar la acción.
<p>La meta sera que de tu programa debe destruir las naves enemigas disparando al enemigo más cercano en cada turno.

<p>Las reglas son muy faciles, En cada inicio de turno (dentro del ciclo del juego), obtienes información sobre los dos enemigos más cercanos:</p>
<li>Enemigo1 y dist1: el nombre y la distancia al enemigo 1.</li>
<li>Enemigo2 y dist2: el nombre y la distancia al enemigo 2.</li>
<p>Antes de que termine su turno (final del ciclo), envíe el valor de enemigo1 o enemigo2 para disparar al enemigo más cercano.</p>
						<div class="blog_images">
							<div class="row">
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/course_34.jpg" alt=""></div></div>
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/course_35.jpg" alt=""></div></div>
							</div>
						</div>
					</div>
					<div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="blog_tags">

						</div>
						<div class="blog_social ml-lg-auto">

						</div>
					</div>
					<!-- Comments -->
					<div class="comments_container">
						<div class="comments_title"><span>30</span> Comentarios</div>
						<ul class="comments_list">
							<li>
								<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
									<div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
									<div class="comment_content">
										<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author"><a href="">Rhasley Ferreira</a></div>
											<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
											<div class="comment_time ml-auto">October 19,2020</div>
										</div>
										<div class="comment_text">
											<p>Estoy con ansias de poder leer mas acerca de Kotlin en esta pagina tan virtuosa donde he aprendido bastante. Grande Edu e Isa</p>
										</div>
										<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
											<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
											<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
										</div>
									</div>
								</div>
								<ul>
									<li>
										<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
											<div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>
											<div class="comment_content">
												<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
													<div class="comment_author"><a href="">Enzo Coronel</a></div>
													<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
													<div class="comment_time ml-auto">October 19,2020</div>
												</div>
												<div class="comment_text">
													<p>La gran 7 esta su trabajo, Mucho exito para lo que se viene, van a llegar lejos amigos</p>
												</div>
												<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
													<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
													<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
									<div class="comment_image"><div><img src="images/comment_3.jpg" alt=""></div></div>
									<div class="comment_content">
										<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author"><a href="">Hengui Correa</a></div>
											<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
											<div class="comment_time ml-auto">October 19,2020</div>
										</div>
										<div class="comment_text">
											<p>Gracias a ustedes aprendi a hackear call of duty!</p>
										</div>
										<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
											<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
											<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="add_comment_container">
							<div class="add_comment_title">Escribe un comentario</div>
							<div class="add_comment_text">Tu Email no sera publicado, solo tu nombre de Usuario*</div>
							<form action="cometarios2.php" method="post" class="comment_form">
								<div>
									<div class="form_title">Comentario*</div>
									<textarea class="comment_input comment_textarea" name="comentario" required="required"></textarea>
								</div>
								<div class="row">
									<div class="col-md-6 input_col">
										<div class="form_title">Nombre*</div>
										<input type="text" name="nombre" class="comment_input" required="required">
									</div>
									<div class="col-md-6 input_col">
										<div class="form_title">Email*</div>
										<input type="text" name="email" class="comment_input" required="required">
									</div>
								</div>
								<div class="comment_notify">
									<input type="checkbox" id="checkbox_notify" name="regular_checkbox" class="regular_checkbox checkbox_account" checked>
									<label for="checkbox_notify"><i class="fa fa-check" aria-hidden="true"></i></label>
									<span>Notificame cuando mi email ha sido enviado</span>
								</div>
								<div>
									<button type="submit" name="guardar" class="comment_button trans_200">Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Cursos</div>
							<div class="sidebar_categories">
								<ul class="categories_list">
									<li><a href="c++alum.php" class="clearfix">C++<span>(25)</span></a></li>
									<li><a href="phpalum.php" class="clearfix">Php<span>(10)</span></a></li>
									<li><a href="pythonalum.php" class="clearfix">Python<span>(22)</span></a></li>
									<li><a href="javaalum.php" class="clearfix">Java<span>(12)</span></a></li>
									<li><a href="javascriptalum.php" class="clearfix">JavaScript<span>(18)</span></a></li>
								</ul>
							</div>
						</div>

						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">A Recordar...</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/event_7.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="">Algoritmos</a></div>
										<div class="latest_date">november 11, 2021</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/event_5.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="">Base De Datos</a></div>
										<div class="latest_date">november 11, 2021</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/event_6.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="">Patrones De Diseño</a></div>
										<div class="latest_date">november 11, 2021</div>
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

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">Mantente Atento Para Las Nuevas Actualizaciones.</div>
							<div class="newsletter_subtitle"></div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">

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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/blog_single.js"></script>
</body>
</html>
