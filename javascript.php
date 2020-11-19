<?php
include ("includes/conectar.php");//incluir un archivo
session_start();

if ( isset($_REQUEST['salir'])) {
	session_destroy();
header("Location:index.php");
}
if (isset($_REQUEST['verificar'])) {
if (!isset($_SESSION['user'])) {
	echo "<script> alert ('Necesita iniciar sesión para ver esta pagina') </script>";
	echo "<script> window.open ('iniciar sesion.php', '_self') </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Detalles Del Curso</title>
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
								echo"<a href='javascript.php?salir=1'>Cerrar Sesion</a>";
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
									<li><a href="index.php">Hogar</a></li>
									<li><a href="about.php">Acerca de</a></li>
									<li><a href="cursos.php">Cursos</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="comentario2.php">Comentarios</a></li>
									<li><a href="index.php?verificar=1">Cuestionario</a></li>
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
				<li class="menu_mm"><a href="comentarios2.php">Comentarios</a></li>
				<li class="menu_mm"><a href="cuestionario.php">Cuestionario</a></li>
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
								<li><a href="index.php">Hogar</a></li>
								<li><a href="cursos.php">Cursos</a></li>
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
						<div class="course_title">JavaSript</div>
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
								<div class="course_info_title">Desarollo web:</div>
								<div class="course_info_text"><a href="javascript.php">JavaScript</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="images/course_24.jpg" alt=""></div>

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
									<div class="tab_panel_title">JavaScript</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,​ basado en prototipos, imperativo, débilmente tipado y dinámico</p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Ventajas</div>
											<ul class="tab_panel_bullets">
												<li>Velocidad. Al ser client-side, JavaScript es muy rápido y cualquier función puede ser ejecutada inmediatamente en lugar de tener que cuestionarioar con el servidor y esperar una respuesta.</li>
												<li>Carga del servidor. Al ejecutarse del lado del cliente reduce la carga en el servidor de la página web.</li>
												<li>Simplicidad. JavaScript es relativamente simple de aprender e implementar.</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Origen</div>
											<div class="tab_panel_text">
												<p>La historia del lenguaje JavaScript empieza durante la década de los años 90, se vivió un verdadero boom tecnológico, el Internet cobró un protagonismo mayor a nivel mundial y la humanidad inició formalmente su relación con las computadoras.</p>
											</div>
										</div>
										<div class="tab_panel_faq">
											<div class="tab_panel_title">Preguntas Frecuentes</div>

											<!-- Accordions -->
											<div class="accordions">

												<div class="elements_accordions">

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Para que sirve JavaSript?</div></div>
														<div class="accordion_panel">
															<p> Se emplea en el desarrollo de páginas web para tareas como cambiar automáticamente la fecha de una página, hacer que una página aparezca en una ventana emergente al hacer clic en un enlace o que un texto o imagen cambien al pasar el ratón por encima</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center active"><div>Por qué estudiar JavaSript en 2020</div></div>
														<div class="accordion_panel">
															<p>Es relativamente fácil de depurar.
A diferencia de otros lenguajes JavaScript tiene un ciclo de retroalimentación rápido. Dado que está construido en el navegador, puedes ejecutar tu código y obtener resultados de forma instantánea. De esa forma, puedes aprender y mejorar mucho más rápido.<br>

Hay una gran demanda de profesionales de JavaScript.<br>
Dado que cada vez más empresas se vuelven digitales, existe una gran demanda de personas capacitadas en JavaScript. Y a medida que el lenguaje de programación continúa creciendo, el interés en los desarrolladores de JavaScript también debería continuar disparándose.<br>

Puede llevarte a una carrera lucrativa.<br>
El salario promedio para los programadores de JavaScript oscila entre $74,000 y $130,000 en países como Estados Unidos.<br>

Está evolucionando rápidamente.<br>
El ecosistema de JavaScript continúa evolucionando. Hay desarrollos constantes, lo que significa que también hay una oportunidad infinita de crecimiento.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Versiones de JavaSript</div></div>
														<div class="accordion_panel">
															<p>ECMAScript 1 (1997)<br>ECMAScript 2 (1998)<br>ECMAScript 2 (1998)<br>ECMAScript 2 (1998)<br>ECMAScript 5.1 (2011)<br>ECMAScript 2016 al 18</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Cuales son las herramientas que necesito para usar JavaScript en Windows?</div></div>
														<div class="accordion_panel">
															<p>*Si estas en windows debes usar:<br>1. Frameworks<br>2. Librerías JS<</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Y si estoy en Linux?</div></div>
														<div class="accordion_panel">
															<p>Si estas en Linux debes usar de igual manera Frameworks y Librerias JS como en Windows
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
										<div class="tab_panel_title">JavaScript</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>En AIE-Learnig hemos organizado el Curso de JavaScript por lecciones, desde lo mas basico a lo mas avanzado, esto, para facilitar el aprendizaje de nuestros usuarios.¡Mucho Animo y a Programar!!</p>
											</div>

											<!-- Dropdowns -->
											<ul class="dropdowns">
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 1:</span>Bienvenido a JavaScript</div>
														<div class="dropdown_item_text">
															<p>JavaScript es uno de los lenguajes de programación más populares del mundo y se utiliza para agregar interactividad a páginas web, procesar datos y crear varias aplicaciones (aplicaciones móviles, aplicaciones de escritorio, juegos y más).</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.1:</span>Tu primer JavaScript</div>
																<div class="dropdown_item_text">
																	<p>Comencemos agregando JavaScript a una página web<br><br>
JavaScript en la web vive dentro del documento HTML .<br>
En HTML, el código JavaScript debe insertarse entre las etiquetas "script" y ""/script"<br>
"script"<br>
    ... <br>
""/script"<br><br>

JavaScript se puede colocar en las secciones "body" y "head" de la página HTML <br>
En el siguiente ejemplo, lo colocamos dentro de la etiqueta "body" .<br><img src="script1.jpg" width="600px" height="250px"><br><br>Usemos JavaScript para imprimir "Hello World" en el navegador.<br><br>
"html" <br>
   "head"> "/head" <br>
   "body" <br>
     "script" <br>
       document.write ("¡Hola mundo!"); <br>
     "/script" <br>
   "/body" <br>
"/html"<br><br>La función document.write () escribe una cadena en nuestro documento HTML. Esta función se puede utilizar para escribir texto, HTML o ambos.<br>

El código anterior muestra el siguiente resultado:<br><img src="script2.PNG" width="600px" height="250px"><br><br><b>Dar formato al texto</b><br><br>

Al igual que en HTML, podemos usar etiquetas HTML para dar formato al texto en JavaScript<br>
Por ejemplo, podemos generar el texto como un encabezado<br><br>
"html"<br>
   "head" "/head" <br>
   "body" <br>
     "script"<br>
        document.write (" h1" ¡Hola mundo! "/h1" "); <br>
     "/script" <br>
   "/body" <br>
"/html"<br><br>
</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.2:</span>Agregar JavaScript a una pagina web</div>
																<div class="dropdown_item_text">
																	<p>Puede colocar cualquier número de scripts en un documento HTML.<br>
Normalmente, la etiqueta de secuencia de comandos se coloca en el encabezado del documento HTML:<br><br>
"html"<br>
   "head" <br>
     "script"<br>
      "/script"<br>
    "/head"<br>
   "body" <br>
   "/body" <br>
"/html"<br><br>Alternativamente, incluya JavaScript en la etiqueta "body".<br><br>
"html" <br>
   "head" "/head> <br>
   "body" "script"      "/script"    "/body" "/html"<br><br>La etiqueta "script" puede tener dos atributos, idioma y tipo , que especifican el tipo de script<br><br>
El atributo de idioma está obsoleto y no debe utilizarse.<br>

En el siguiente ejemplo, creamos un cuadro de alerta dentro de la etiqueta del script, usando la función alert ()<br><br>
"html"
  "head"
     "title" "/title"
     "script type = "text / javascript">
       alerta ("¡Este es un cuadro de alerta!");
     "/script"
    "/head"
   "body"
   "/body"
"/html"</p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 2:</span>JavaScript Externo </div>
														<div class="dropdown_item_text">
															<p>Los scripts también se pueden colocar en archivos externos<br>
Los scripts externos son útiles y prácticos cuando se usa el mismo código en varias páginas web diferentes<br>
Los archivos JavaScript tienen la extensión de archivo .js <br>

A continuación, hemos creado un nuevo archivo de texto , y lo llamamos demo.js<br><img src="script3.png" alt=""><br><br>Para utilizar un script externo, ponga el nombre del archivo del script en el atributo src (fuente) de la etiqueta "script" .<br>

Aquí hay un ejemplo:<br><br>
"html" <br>
   "head" <br>
     "title" "/title2 <br>
     "script"  src = "demo.js" > "/script" <br>
   "/head" <br>
   "body" <br>
   "/body" <br>
"/html"<br><br>

Su archivo demo.js incluye el siguiente JavaScript:<br><br>
alert ("¡Este es un cuadro de alerta!");<br><br>El resultado del ejemplo anterior será idéntico al resultado cuando incluimos el JavaScript dentro del archivo HTML.<br><img src="script4.png" alt=""><br>
Puede colocar una referencia de script externo en <head> o <body>, lo que prefiera.<br>
El script se comportará como si estuviera ubicado exactamente donde se encuentra la etiqueta "script".</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.1:</span>Comentarios en JavaScript</div>
																<div class="dropdown_item_text">
																	<p>No todas las declaraciones de JavaScript se "ejecutan<br>
El código después de una barra doble //, o entre / * y * /, se trata como un comentario .<br>
Los comentarios se ignoran y no se ejecutan.<br>

Los comentarios de una sola línea usan barras dobles.<br><br>
"script"<br>
   // Esta es una<br>
    alerta de comentario de una sola línea ("¡Este es un cuadro de alerta!"); <br>
"/script"<br><br><b>Resultado:</b><br><img src="script5.png" alt="">Todo lo que escriba entre / * y * / se considerará un comentario de varias líneas.<br>

Aquí hay un ejemplo.<br><br>
"script"<br>
    / * Este código <br>
   crea un<br>
   cuadro de alerta * / <br>
   alert ("¡Este es un cuadro de alerta!"); <br>
""/script"<br>
</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.2:</span>Instrumentos De Cuerda</div>
																<div class="dropdown_item_text">
																	<p>Como las cadenas deben escribirse entre comillas, deben manejarse las comillas dentro de la cadena . El carácter de escape de barra invertida (\) convierte los caracteres especiales en caracteres de cadena .<br><br>
var sayHello = '¡Hola mundo! \ ' Soy un programador de JavaScript. \ ' '; <br>
document.write (sayHello);<br><br><b>Resultado</b><br><img src="script9.png" alt=""><br><br>El carácter de escape (\) también se puede utilizar para insertar otros caracteres especiales en una cadena .<br>
Estos caracteres especiales se pueden agregar a una cadena de texto mediante el signo de barra invertida.<br><img src="script10.png" alt=""><br>
</p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 3:</span>Variables</div>
														<div class="dropdown_item_text">
															<p>Las variables son contenedores para almacenar valores de datos. El valor de una variable puede cambiar a lo largo del programa.<br>
Utilice la palabra clave var para declarar una variable :<br><br>
var x = 10;<br>

En el ejemplo anterior, el valor 10 se asigna a la variable x .<br><br>
En JavaScript, el signo igual (=) se denomina operador de " asignación ", en lugar de operador "igual a".<br>
Por ejemplo, x = y asignará el valor de y a x .<br>Asignemos un valor a una variable y lo enviemos al navegador.<br>
var x = 100; <br>
document.write (x);<br><img src="script6.png" alt=""><br>El uso de variables es útil de muchas formas. Puede tener mil líneas de código que pueden incluir la variable x. Cuando cambie el valor de x una vez , se cambiará automáticamente en todos los lugares donde lo utilizó.<br><br>
Los nombres de variables de JavaScript distinguen entre mayúsculas y minúsculas.<br>
En el siguiente ejemplo, cambiamos x a mayúsculas:<br><br>
var  x = 100; <br>
document.write ( X );<br><br>Este código no dará como resultado ningún resultado, ya que x y X son dos variables diferentes.<br><br>

Reglas de nomenclatura:<br>
- El primer carácter debe ser una letra, un guión bajo (_) o un signo de dólar ($). Los caracteres siguientes pueden ser letras, dígitos, guiones bajos o signos de dólar.<br>
- No se permiten números como primer carácter.<br>
- Los nombres de las variables no pueden incluir un operador matemático o lógico en el nombre. Por ejemplo, 2 * algo o esto + aquello ;<br>
- Los nombres de JavaScript no deben contener espacios .<br><br>
Hay algunas otras reglas a seguir al nombrar sus variables de JavaScript:<br><br>

- No debe usar ningún símbolo especial , como my # num, num% , etc.<br>
- Asegúrese de no usar ninguna de las siguientes palabras reservadas de JavaScript.<br><br><img src="script7.png" alt=""></p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 4:</span>Tipos De Datos</div>
														<div class="dropdown_item_text">
															<p>El término tipo de datos se refiere a los tipos de valores con los que puede trabajar un programa. Las variables de JavaScript pueden contener muchos tipos de datos, como números , cadenas , matrices y más.<br>

A diferencia de muchos otros lenguajes de programación, JavaScript no define diferentes tipos de números, como enteros, cortos, largos, de punto flotante, etc. Los

números de JavaScript se pueden escribir con o sin decimales.<br>
var num = 42; // Un número sin decimales<br><br>Los números de JavaScript también pueden tener decimales.<br><br>
"script"<br>
  var price = 55.55;<br>
  document.write (precio);<br>
""/script"<br><br><b>Resultado:</b><br><img src="script8.png" alt=""><br><br>Las cadenas de JavaScript se utilizan para almacenar y manipular texto.<br>
Una cadena puede ser cualquier texto que aparezca entre comillas . Puede utilizar comillas simples o dobles.<br><br>
var name = 'John'; <br>
var text = "Mi nombre es John Smith";<br><br>

Puede utilizar comillas dentro de una cadena , siempre que no coincidan con las comillas que rodean la cadena .<br><br>
var text = "Mi nombre es 'John'";<br><br><b>Booleanos</b><br><br>

En JavaScript booleano, puede tener uno de dos valores, verdadero o falso .<br>
Estos son útiles cuando necesita un tipo de datos que solo puede tener uno de dos valores, como Sí / No, Activado / Desactivado, Verdadero / Falso.<br>

Ejemplo:<br><br>
var isActive = true; <br>
var isHoliday = false;<br></p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 5:</span>Operadores</div>
														<div class="dropdown_item_text">
															<p>Los operadores aritméticos realizan funciones aritméticas en números (literales o variables).<br><img src="script11.png" alt=""><br>En el siguiente ejemplo, el operador de suma se usa para determinar la suma de dos números.<br><br>var x = 10 + 5; <br>
document.write (x); <br>

// Salidas 15<br>Puede sumar tantos números o variables como desee o necesite.<br>El operador de multiplicación (*) multiplica un número por el otro.<br>El operador / se utiliza para realizar operaciones de división<br>El operador Módulo (%) devuelve el resto de la división (lo que queda).
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
									<div class="tab_panel_title">Review del Curso</div>

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
												<li><span>5 Estrellas</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 Estrellas</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 Estrellas</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 Estrellas</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 Estrellas</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
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
															<div class="comment_author"><a href="#">Ana Paula</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">Hace un dia</div>
														</div>
														<div class="comment_text">
															<p>Puedo ver que esta muy completo y esta muy facha.</p>
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
																	<div class="comment_author"><a href="#">Estebom el manco</a></div>
																	<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
																	<div class="comment_time ml-auto">Hace un mes</div>
																</div>
																<div class="comment_text">
																	<p>Como lo que son tan pros, algun dia quiero ser como ustedes.</p>
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
															<div class="comment_author"><a href="#">Mariana la marciana</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">Hace dos meses</div>
														</div>
														<div class="comment_text">
															<p>La parte de las variables aprendi mucho, gracias AIE-Learning.</p>
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
											<div class="add_comment_title">Agrega una Reseña</div>
											<div class="add_comment_text">Debes de <a href="iniciar sesion.php">iniciar sesión</a> para publicar un comentario..</div>
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
							<div class="sidebar_section_title">Cursos</div>
							<div class="sidebar_feature">
								<div class="course_price"></div>

								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duración:</span></div>
										<div class="feature_text ml-auto">2 semanas aprox</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Visitas:</span></div>
										<div class="feature_text ml-auto">10</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lecturas:</span></div>
										<div class="feature_text ml-auto">6</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lecturas:</span></div>
										<div class="feature_text ml-auto">Yes</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lecturas:</span></div>
										<div class="feature_text ml-auto">35</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Profesor</div>
							<div class="sidebar_teacher">
								<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_image"><img src="images/teacher.jpg" alt=""></div>
									<div class="teacher_title">
										<div class="teacher_name"><a href="#">Isaias Cano</a></div>
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
										<div class="teacher_meta_title">Review:</div>
										<div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>
									</div>
									<!-- Teacher Quizzes -->
									<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_meta_title">Preguntas:</div>
										<div class="teacher_meta_text ml-auto"><span>60</span><i class="fa fa-user" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="teacher_info">
									<p>Hola! Me llamo Isaias y sere tu profesor de este lenguaje exactamente Java, soy ingeniero en informatica como tambien de electromecanica recien egresado de Harvard.</p>
								</div>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Puedes ver tambien... </div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_20.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="python.php">Python</a></div>
										<div class="latest_price">Aprenderas.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_23.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="ruby.php">Ruby</a></div>
										<div class="latest_price">Manejaras.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_22.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="css.php">Css</a></div>
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
										<a href="#">
											<div class="footer_logo_text">AIE-<span>Learning</span></div>
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
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: Info.deercreative@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>40 Baria Sreet 133/2 New York City, United States</li>
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
<script src="js/course.js"></script>
</body>
</html>
