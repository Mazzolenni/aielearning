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
<title>Detalles Del Curso</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="AIEat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
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
									<li><div class="question">Tiene alguna pregunta?</div></li>
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
				<li class="menu_mm"><a href="comentarios2alum.php">Comentarios</a></li>
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
								<li><a href="cursosalum.php">Cursos</a></li>
								<li>Detalles Del Curso</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">

					<div class="course_container">
						<div class="course_title">Html</div>
						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Maestro:</div>
								<div class="course_info_text"><a href="#">Isaias Cano</a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Reviews:</div>
								<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Desarrolo Web</div>
								<div class="course_info_text"><a href="html.php">Html</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="images/course_18.jpg" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Descripcion</div>
								<div class="tab">Cursos</div>
								<div class="tab">Reseñas</div>
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_title">Html</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Html es un lenguaje de marcado que se utiliza para el desarrollo de páginas de Internet. Se trata de la sigla que corresponde a HyperText Markup Language, es decir, Lenguaje de Marcas de Hipertexto, que podría ser traducido como Lenguaje de Formato de Documentos para Hipertexto.<br></p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Ventajas</div>
											<ul class="tab_panel_bullets">
												<li>Sencillo que permite describir hipertexto.</li>
												<li>Texto presentado de forma estructurada y agradable.</li>
												<li>No necesita de grandes conocimientos cuando se cuenta con un editor de páginas web o WYSIWYG.</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Origen</div>
											<div class="tab_panel_text">
												<p>El origen de Html se remonta a 1980, cuando el físico Tim Berners-Lee, investigador del CERN (Organización Europea para la Investigación Nuclear) propuso un nuevo sistema de “hipertexto” para compartir documentos. </p>
											</div>
										</div>
										<div class="tab_panel_faq">
											<div class="tab_panel_title">Preguntas Frecuentes</div>

											<!-- Accordions -->
											<div class="accordions">

												<div class="elements_accordions">

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Qué significa Html?</div></div>
														<div class="accordion_panel">
															<p>Las siglas HTML quieren decir HyperText Markup Language lo cual significa “lenguajes de marcas de hipertexto”, se basa en un lenguaje de marcas para crear documentos que puedan ser distribuidos por Internet.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center active"><div>Por qué estudiar Html en 2020</div></div>
														<div class="accordion_panel">
															<p>Porque posee grandes ventaja como<br>No necesita de grandes conocimientos cuando se cuenta con un editor de páginas web o WYSIWYG.<br>
Archivos pequeños.<br>
Despliegue rápido.<br>
Lenguaje de fácil aprendizaje.<br>
admiten todos los exploradores.<br></p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Versiones de Html</div></div>
														<div class="accordion_panel">
															<p>Los estándares oficiales Html son el Html 2.0, el Html 3.2, el Html 4.0, el Html 4.01 y el Html 5. El Html 5 es la última especificación oficial y se espera que continúe evolucionando a lo largo de los próximos años.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Cuales son las herramientas que necesito para usar Html en Windows?</div></div>
														<div class="accordion_panel">
															<p> Los requisitos principales y fundamentales, para escribir código Html y crear páginas web, son básicamente dos: saber Html (esto lo conseguirás siguiendo este curso) y un editor de texto (nosotros utilizaremos el Notepad++, aunque se pueden usar otros editores o programas).</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Y si estoy en Linux?</div></div>
														<div class="accordion_panel">
															<p>Lo mismo se necesita que un sistema operativo Windows
</p>
														</div>
													</div>

												</div>

											</div>
										</div>
									</div>
								</div>

								<!-- Curriculum -->
								<div class="tab_panel tab_panel_2">
									<div class="tab_panel_content">
										<div class="tab_panel_title">Html</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>En AIE-Learnig hemos organizado el Curso de Html por lecciones, desde lo mas basico a lo mas avanzado, esto, para facilitar el aprendizaje de nuestros usuarios.¡Mucho Animo y a Programar!!</p>
											</div>

											<!-- Dropdowns -->
											<ul class="dropdowns">
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 1:</span> La estructura Web.</div>
														<div class="dropdown_item_text">
															<p>La capacidad de codificar usando Html es esencial para cualquier profesional de la web. La adquisición de esta habilidad debería ser el punto de partida para cualquier persona que esté aprendiendo a crear contenido para la web.<br><br>

Diseño Web Moderno<br>
Html : Estructura<br>
CSS : Presentación<br>
JavaScript : Comportamiento<br>

PHP o similar : Backend<br>
CMS : Gestión de contenido</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.1:</span>La etiqueta <html></div>
																<div class="dropdown_item_text">
																	<p>Aunque se han lanzado varias versiones a lo largo de los años, los conceptos básicos de Html siguen siendo los mismos.<br>

La estructura de un documento Html se ha comparado con la de un sándwich. Como un sándwich tiene dos rebanadas de pan, el documento Html tiene etiquetas HTML de apertura y cierre.<br><br>

Estas etiquetas, como el pan en un sándwich, rodean todo lo demás:<br><br>
"html"<br>
 …<br>
 "/html"<br></p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.2:</span>La etiqueta Head>div>
																<div class="dropdown_item_text">
																	<p>Inmediatamente después de la etiqueta Html de apertura, encontrará el encabezado del documento, que se identifica abriendo y cerrando las etiquetas de encabezado.<br>

El encabezado de un archivo Html contiene todos los elementos no visuales que ayudan a que la página funcione.<br><br>
"html" "head" … "/head" "/html"<br><br><b>La etiqueta "body"</b><br>La etiqueta del cuerpo sigue a la etiqueta de la cabeza.<br>
Todos los elementos visuales-estructurales están contenidos dentro de la etiqueta del cuerpo.<br>

Los títulos, párrafos, listas, citas, imágenes y enlaces son solo algunos de los elementos que pueden incluirse en la etiqueta del cuerpo.

   </p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 2:</span>El archivo Html </div>
														<div class="dropdown_item_text">
															<p>Los archivos Html son archivos de texto, por lo que puede usar cualquier editor de texto para crear su primera página web.<br>
Hay algunos editores Html muy buenos disponibles; puede elegir el que más le convenga. Por ahora, escribamos nuestros ejemplos en el Bloc de notas<bR><img src="images/html1.jpg" alt=""><br>
Para colocar un título en la pestaña que describe la página web, agregue un elemento "title" a su sección de encabezado:<br><br>
"html" <br>"head"<br>
      "title" primera página ""/title"<br>
    "/head"<br>
   "body"<br>
       Esta es una línea de texto. <br>
   ""/body"<br>
"/html"</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_
																<div class="dropdown_item_text">
																	<p></p>
																</div>
															</div>
														</li>
														<li>
															<div class="">
																<div class="dropdown_
																<div class="dropdown_item_tex">
																	<p></p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 3:</span>Creando Un Blog</div>
														<div class="dropdown_item_text">
															<p>A lo largo de este curso, lo ayudaremos a practicar y crear su propio proyecto de blog único, para que retenga lo que ha aprendido y pueda ponerlo en práctica. Simplemente continúe y siga las instrucciones en la sección TAREAS . Así es como se verá la página de tu blog terminada.<br>
TAREA : Toque Pruébelo usted mismo para ver el código y su salida.<br><br>

"html" <br>
  "head" <br>
    "title" Mi blog "/title" <br>
  "/head" <br>
    "body"<br>
 ...<br>No tenga miedo de los códigos largos. Para cuando complete el curso, todo tendrá sentido y se verá muy factible. ¡Te lo garantizamos!<br></p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 4:</span>Lenguajes De Programacion</div>
														<div class="dropdown_item_text">
															<p>HTML es facil de usar, y al mismo tiempo puedes combinarlo con practicamente todos los lenguajes de programacion conocidos, aqui unos ejemplos:<br><br>PHP<br>
Python<br>
Ruby<br>
C++<br>
C#<br>
Perl<br></p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 5:</span>Comandos Basicos Html</div>
														<div class="dropdown_item_text">
															<p>Aqui una lista con los comandos basicos Html que puedes usar a la hora de compilar:<br><br>< Html > ... < /Html > : Indica el comienzo y fin de un archivo Html<br>
< HEAD > ... < /HEAD > : Indica el comienzo y fin de un encabezado (aquí se coloca generalmente el título).<br>
< TITLE > ... < /TITLE > : Indica el título.<br>
< BODY > ... < /BODY > : Indica el comienzo y fin del cuerpo de la página.<br>
< P > ... < /P > : Indica comienzo y fin de un párrafo.<br>
< BR > : Permite saltarse una línea (se llama quiebre de línea).<br>
< Hn > ... < Hn > : Para n entre 1 y 6, hacen que el texto encerrado aparezca como encabezado (un subtítulo). Se recomienda usar sólo 1,2 y 3<br>
Tipos de letras<br>
< B > ... < /B > : Negrita.<br>
< L > ... < /L > : Cursiva.<br>
< BLINK > ... < /BLINK > : Parpadeante.<br>
< STRONG > ... < /STRONG > : Enfatizada.<br>
< UL > ... < /UL > : Indica comienzo y fin de una lista no ordenada (puntos). Dentro de ellos, cada item empieza por < LI > y termina al terminar la línea.<br>
< OL > ... < /OL > : Indica comienzo y fin de una lista ordenada (números). Dentro de ellos, cada item empieza por < LI > y termina al terminar la línea.<br>
Ejemplo:<br><br>
      < OL ><br>
        < LI > Primer item<br>
        < LI > Segundo item<br>
        < UL > <br>
          < LI > Primer subitem<br>
          < LI > Segundo subitem<br>
        < /UL ><br>
        < LI > Tercer item<br>
      < /OL ><br>
    </p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<!-- Reviews -->
								<div class="tab_panel tab_panel_3">
									<div class="tab_panel_title">Course Review</div>

									<!-- Rating -->
									<div class="review_rating_container">
										<div class="review_rating">
											<div class="review_rating_num">4.5</div>
											<div class="review_rating_stars">
												<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
											</div>
											<div class="review_rating_text">(28 Ratings)</div>
										</div>
										<div class="review_rating_bars">
											<ul>
												<li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
											</ul>
										</div>
									</div>

									<!-- Comments -->
									<div class="comments_container">
										<ul class="comments_list">
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Eduardo Balbuena </a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>Sos un crack</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
												<ul>
													<li>
														<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
															<div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>
															<div class="comment_content">
																<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_author"><a href="#">John Tyler</a></div>
																	<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
																	<div class="comment_time ml-auto">1 day ago</div>
																</div>
																<div class="comment_text">
																	<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
																</div>
																<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																	<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
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
															<div class="comment_author"><a href="#">Milley Cyrus</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<div class="add_comment_container">
											<div class="add_comment_title">Agrega una reseña</div>
											<div class="add_comment_text">Debes de <a href="iniciar sesion.php">iniciar sesión</a> para publicar un comentario.</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Detalles Del Curso</div>
							<div class="sidebar_feature">


								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Lecciones:</span></div>
										<div class="feature_text ml-auto">5 Lecciones</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Visitas:</span></div>
										<div class="feature_text ml-auto">18</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lecturas:</span></div>
										<div class="feature_text ml-auto">15</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lecturas:</span></div>
										<div class="feature_text ml-auto">Si</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Fase:</span></div>
										<div class="feature_text ml-auto">Alpha<</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Maestro</div>
							<div class="sidebar_teacher">
								<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_image"><img src="images/teacher.jpg" alt=""></div>
									<div class="teacher_title">
										<div class="teacher_name"><a href="#">Alan Orue</a></div>
										<div class="teacher_position">Ingeniero Informatico</div>
									</div>
								</div>
								<div class="teacher_meta_container">
									<!-- Teacher Rating -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Rating:</div>
										<div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>
									</div>
									<!-- Teacher Review -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Comentarios:</div>
										<div class="teacher_meta_text ml-auto"><span>3</span><i class="fa fa-comment" aria-hidden="true"></i></div>
									</div>
									<!-- Teacher Quizzes -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Participantes:</div>
										<div class="teacher_meta_text ml-auto"><span>16</span><i class="fa fa-user" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="teacher_info">
									<p>Buenas! Mi nombre es Alan Orue y soy Ingeniero Informatico, me he capacitado en la mejor institucion del Paraguay "Heavens Kingdom Christian School". Espero que este curso te sea de provecho. A Programar!</p>
								</div>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Sigue Aprendiendo </div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_17.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="javaScriptalum.php">JavaScript</a></div>
										<div class="latest_price">Aprenderas.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_15.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="phpalum.php">Php</a></div>
										<div class="latest_price">Manejaras.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_19.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="javaalum.php">Java</a></div>
										<div class="latest_price">Controlaras.</div>
									</div>
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
							<div class="newsletter_title"></div>
							<div class="newsletter_subtitle"></div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">


							</form>
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
											<div class="footer_logo_text">AIE<span>Learning</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Estan son nuestras cuentas en las que puedes seguirnos y consultar cualquier cosa.</p>
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
									<div class="footer_title">Contactanos</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: aie.learning@gmail.com</li>
											<li>Phone:  +(595) 111 555 666</li>
											<li>San Lorenzo Paraguay</li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

							<!-- Footer links -->

							</div>

							<div class="col-lg-3 footer_col clearfix">

								<!-- Footer links -->
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
<script src="js/course.js"></script>
</body>
</html>
