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
								echo"<a href='c++alum.php?salir=1'>Cerrar Sesion</a>";
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
						<div class="course_title">C++</div>
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
								<div class="course_info_title">Lenguaje De Programacion:</div>
								<div class="course_info_text"><a href="c++alum.php">C++</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="images/course_14.jpg" alt=""></div>

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
									<div class="tab_panel_title">C++</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>C++ es un lenguaje de programación diseñado en 1979 por Bjarne Stroustrup. La intención de su creación fue extender al lenguaje de programación C mecanismos que permiten la manipulación de objetos. En ese sentido, desde el punto de vista de los lenguajes orientados a objetos, el C++ es un lenguaje híbrido.</p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Ventajas</div>
											<ul class="tab_panel_bullets">
												<li>Alto rendimiento: Es una de sus principales características, el alto rendimiento que ofrece. Esto es debido a que puede hacer llamadas directas al sistema operativo, es un lenguaje compilado para cada plataforma, posee gran variedad de parámetros de optimización y se integra de forma directa con el lenguaje ensamblador.</li>
												<li>Lenguaje actualizado: A pesar de que ya tiene muchos años, el lenguaje se ha ido actualizando, permitiendo crear, relacionar y operar con datos complejos y ha implementado múltiples patrones de diseño</li>
												<li>Multiplataforma</li>
												<li>Extendido: C y C++ están muy extendidos. Casi cualquier programa o sistema están escritos o tienen alguna parte escrita en estos lenguajes (desde un navegador web hasta el propio sistema operativo).</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Origen</div>
											<div class="tab_panel_text">
												<p>Fue diseñado a mediados de los años 80 por el danés Bjarne Stroustrup. Si intención fue la de extender el lenguaje de programación C (con mucho éxito en ese momento) para que tuviese los mecanismos necesarios para manipular objetos. Por lo tanto C++ contiene los paradigmas de la programación estructurada y orientada a objetos, por lo que se le conoce como un lenguaje de programación multiparadigma.</p>
											</div>
										</div>
										<div class="tab_panel_faq">
											<div class="tab_panel_title">Preguntas Frecuentes</div>

											<!-- Accordions -->
											<div class="accordions">

												<div class="elements_accordions">

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Qué significa C++?</div></div>
														<div class="accordion_panel">
															<p>A C++ primero se le conoció como “C con clases”. Luego se cambió a C++ que significa “incremento de C”, dando a entender que se trata de una extensión del lenguaje de programación C.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center active"><div>Por qué estudiar C++ en 2020</div></div>
														<div class="accordion_panel">
															<p>Si se busca programar en alto nivel, con la opción de poder bajar incluso a ensamblador, C++ sigue siendo una gran opción, ya que estamos ante un lenguaje de programación muy potente y que se ha mantenido actualizado.

La programación de videojuegos sigue siendo una profesión en auge y en ella el conocimiento de Unity y C++ es muy valorado.

¿Estás pensando en comenzar a aprender a programar en C++? Ahora es un buen momento para hacerlo, ya que te ofrecemos 15 días de acceso gratuito para probar los cursos y talleres de nuestra plataforma, entre ellos nuestro curso de introducción a C++, una formación pensada para iniciarse de forma práctica en este interesante lenguaje de programación.

Comienza sabiendo más sobre de los lenguajes más utilizados con este completo artículo en el que te contamos qué es C++, su origen, ventajas, aplicaciones, etc.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Versiones de C++</div></div>
														<div class="accordion_panel">
															<p>La versión más actual de C++ es la 17 y es del año 2017 (del año se obtiene el número de versión) y sustituye a la 14 del 2014. La próxima versión está prevista que aparezca en el año 2020 y se llamará, siguiendo la misma tradición, C++ 20.

C++ es un lenguaje robusto y bien diseñado que ha sabido actualizarse con el paso de los años. Su potencia y capacidad de programación en ensamblador le permite seguir siendo una de las mejores opciones para programar hoy en día. Aprender a programar en C++ sigue siendo un gran valor que abrirá las puertas del mercado a muchos programadores en este 2019.

Ante la decisión de aprender un nuevo lenguaje de programación, C++ debe de estar en las prioridades. Las ventajas que tiene son muy grandes como ya hemos visto y merece la pena el esfuerzo necesario para aprenderlo. Además, su comprensión facilitará el aprendizaje futuro de otros lenguajes de programación, como Java. A pesar de ser un lenguaje de alto nivel, el programador podrá tener acceso a programación en bajo nivel, algo que no se puede hacer con la mayoría de lenguajes de programación.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Cuales son las herramientas que necesito para usar C++ en Windows?</div></div>
														<div class="accordion_panel">
															<p>*Si estas en windows puedes usar:a

<br>*Visual c++
<br>*Visual Studio
<br>*Notepad++
<br>*DevCpp
<br>*Code::Blocks
<br>*Eclipse
<br>*entre otros</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Y si estoy en Linux?</div></div>
														<div class="accordion_panel">
															<p>Si estas en Linux puedes usar:

<br>*Gedit
<br>*Geany
<br>*Kate
<br>*KDevelop
<br>*Eclipse
<br>*Code::Blocks
<br>*Entre otros
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
										<div class="tab_panel_title">C++</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>En AIE-Learnig hemos organizado el Curso de C++ por lecciones, desde lo mas basico a lo mas avanzado, esto, para facilitar el aprendizaje de nuestros usuarios.¡Mucho Animo y a Programar!!</p>
											</div>

											<!-- Dropdowns -->
											<ul class="dropdowns">
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 1:</span> ¿Que es C++?.</div>
														<div class="dropdown_item_text">
															<p>C ++ es un lenguaje de programación de propósito general.
C ++ se usa para crear programas de computadora. ¡Desde aplicaciones de arte, reproductores de música e incluso videojuegos!</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.1:</span> Al Grano. Tu Primer Programa.</div>
																<div class="dropdown_item_text">
																	<p>Un programa C ++ es una colección de comandos o declaraciones.A continuación hay un código simple que dice "¡Hola, mundo!" como su salida<br><br>""#include <iostream>"<br>int main ()<br>{  <br> cout << "¡Hola mundo!";<br>return 0;</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.2:</span>Partes del Codigo</div>
																<div class="dropdown_item_text">
																	<p>Analicemos las partes del código.<br><br> #include <iostream><br><br>C ++ ofrece varios encabezados, cada uno de los cuales contiene información necesaria para que los programas funcionen correctamente. Este programa en particular requiere el encabezado <iostream><br>El signo de número (#) al comienzo de una línea apunta al preprocesador del compilador. En este caso, #include le dice al preprocesador que incluya el encabezado <iostream><br>El compilador de C ++ ignora las líneas en blanco.
En general, las líneas en blanco sirven para mejorar la legibilidad y la estructura del código<br>En nuestro código, la línea que usa el espacio de nombres estándar; le dice al compilador que use el espacio de nombres estándar (estándar)<br>La ejecución del programa comienza con la función principal, int main ()<br>
																	Las llaves {} indican el principio y el final de una función, que también puede denominarse cuerpo de la función. La información dentro de los corchetes indica lo que hace la función cuando se ejecuta<br>En C ++, las secuencias se utilizan para realizar operaciones de entrada y salida.
																	En la mayoría de los entornos de programa, el destino de salida predeterminado estándar es la pantalla. En C ++, cout es el objeto de secuencia utilizado para acceder a él.
																	cout se usa en combinación con el operador de inserción. Escriba el operador de inserción como << para insertar los datos que vienen después en la secuencia que viene antes.<br>Declaraciones

																	Un bloque es un conjunto de declaraciones conectadas lógicamente, rodeado de llaves de apertura y cierre.
																	Por ejemplo:<br><br>{ <br> cout << "¡Hola mundo!";<br> devuelve 0; <br>}<br>Puede tener varias declaraciones en una sola línea, siempre que recuerde finalizar cada declaración con un punto y coma . De lo contrario, se producirá un error.<br> Return 0: <br><br>La última instrucción en el programa es la declaración de devolución . La línea devuelve 0; termina la función main () y hace que devuelva el valor 0 al proceso de llamada. Un valor distinto de cero (generalmente de 1) señala una terminación anormal<br>Si la declaración return se deja, el compilador de C ++ inserta implícitamente " return 0; " al final de la función main ().</p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 2:</span>Obteniendo las herramientas</div>
														<div class="dropdown_item_text">
															<p>Puede ejecutar, guardar y compartir sus códigos C ++ en nuestro Code Playground , sin instalar ningún software adicional.</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.1:</span> Obteniendo las herramientas.</div>
																<div class="dropdown_item_text">
																	<p>Necesita los dos componentes siguientes para compilar programas en C ++<br>
Necesita los dos componentes siguientes para compilar programas en C ++.<br>2. Compilador : compila el código fuente en el programa ejecutable final. Hay varios compiladores de C ++ disponibles. El compilador más utilizado y gratuito disponible es el compilador GNU C / C ++ .<br><br>Varios IDE y compiladores de C ++ están disponibles. Utilizaremos una herramienta gratuita llamada Code :: Blocks , que incluye un IDE y un compilador, y está disponible para Windows, Linux y MacOS.<br>Para descargar Code :: Blocks, vaya a http://www.codeblocks.org/, haga clic en el enlace Descargas y seleccione "Descargue la versión binaria ".
Elija su sistema operativo y descargue el archivo de instalación, que incluye el compilador de C ++ (para Windows, es el que tiene mingw en el nombre).</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.2:</span> Obteniendo las herramientas.</div>
																<div class="dropdown_item_text">
																	<p>Para crear un proyecto, abra Code :: Blocks y haga clic en " Crear un nuevo proyecto " (o Archivo-> Nuevo-> Proyecto).
Esto abrirá un cuadro de diálogo de plantillas de proyecto. Elija la aplicación Consola y haga clic en Ir .<br> <div class="" img src="course_14.jpg" width="600px" height="250px"<br>
Revisa el asistente y asegúrate de que C ++ esté seleccionado como el idioma.
Asigne un nombre a su proyecto y especifique una carpeta para guardarlo.<br><img src="c2.png" width="600px" height="250px">Asegúrese de que el compilador esté seleccionado y haga clic en Finalizar .
GNU GCC es uno de los compiladores populares disponibles para Code :: Blocks.
En la barra lateral izquierda, expanda Fuentes . Verá su proyecto, junto con sus archivos fuente. Code :: Blocks creó automáticamente un archivo main.cpp que incluye un programa básico Hello World (los archivos fuente C ++ tienen extensiones .cpp, .cp o .c).
<br><img src="c3.png" width="600px" height="250px"><br>Haga clic en el icono " Compilar y ejecutar " en la barra de herramientas para compilar y ejecutar el programa<br><img src="c4.png" width="600px" height="250px"><br>Se abrirá una ventana de consola y mostrará la salida del programa.<br><img src="c5.png" width="600px" height="250px"><br><br>Felicidades! ¡Acaba de compilar y ejecutar su primer programa C ++!</p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 3:</span>Variables</div>
														<div class="dropdown_item_text">
															<p>
La creación de una variable reserva una ubicación de memoria o un espacio en la memoria para almacenar valores. El compilador requiere que proporcione un tipo de datos para cada variable que declare.<br>C ++ ofrece una gran variedad de tipos de datos integrados y definidos por el usuario<br><br>Entero , un tipo incorporado, representa un valor de número entero. Definir entero usando la palabra clave int .<br>C ++ requiere que especifique el tipo y el identificador para cada variable definida.
Un identificadores un nombre para una variable, función, clase, módulo o cualquier otro elemento definido por el usuario. Un identificador comienza con una letra (AZ o az) o un guión bajo (_), seguido de letras, guiones bajos y dígitos adicionales (0 a 9).<br>Por ejemplo, defina una variable llamada myVariable que pueda contener valores enteros de la siguiente manera:<br><br>int myVariable = 10;<br><br>Ahora, asignemos un valor a la variable e imprímalo.<br><br>#include <iostream><br>usando el espacio de nombres estándar; <br>int main ()<br>{ <br>int  myVariable = 10; <br>   cout << myVariable; <br> devuelve 0;<br>} <br>// Salidas 10 <br><br> Observacion:El lenguaje de programación C ++ distingue entre mayúsculas y minúsculas , por lo que myVariable y myvariable son dos identificadores diferentes.<br><br>Defina todas las variables con un nombre y un tipo de datos antes de usarlas en un programa. En los casos en que tiene múltiples variables del mismo tipo, es posible definirlas en una declaración, separándolas con comas<br><br>int  a, b; <br>// define dos variables de tipo int<br><br>Se le puede asignar un valor a una variable y se puede usar para realizar operaciones.
Por ejemplo, podemos crear una variable adicional llamada suma y sumar dos variables juntas<br>int a = 30; <br>int b = 15; <br>int suma = a + b; <br>// Ahora suma es igual a 45<br><br>Use el operador + para sumar dos números.<br><br><b>Creemos un programa para calcular e imprimir la suma de dos enteros.</b><br><br>#include <iostream><br>usando el espacio de nombres estándar; <br>int main () <br>{ <br>int a = 30; <br>  int b = 12; <br>  int suma = a + b; cout << sum;     devuelve 0; } // Salidas 42<br>Observacion "Siempre tenga en cuenta que todas las variables deben definirse con un nombre y un tipo de datos antes de que puedan usarse." </p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 4:</span> Condicionales</div>
														<div class="dropdown_item_text">
															<p>Los condicionales en C++, son una estructura de control esencial al momento de programar y aprender a programar.

Existen diferentes tipos de condicionales, cada uno tiene una utilidad y funcionalidad diferente, que consideran diferentes situaciones que se pueden llegar a presentar durante la ejecución de un algoritmo. Depende entonces del conocimiento que tengamos acerca de cada uno de los condicionales saber determinar correctamente cuando es necesario implementar uno u otro. Tenemos a nuestra disposición los siguientes tipos de condicionales en C++:<br>Condicional If en C++<br>Condicional if-else en C++<br>Condicional Switch en C++<br><br>En este modulo estaremos aprendiendo sobre la Primera de las tres condicionales>ç<br><br><b>¿Cómo funciona un Condicional If?</b><br><br>Para comprender mejor cómo funciona el condicional if, una muy buena forma es partiendo de un ejemplo. Supongamos que queremos verificar si el resultado de una suma ingresada por el usuario es correcto o no. Para este ejemplo, el condicional if, es el encargado de verificar si el resultado ingresado corresponde o no a la respuesta correcta de la suma. El condicional if, funciona verificando la condición ingresada y de acuerdo a su valor de verdad (falso o verdadero) lleva a cabo o no una serie de instrucciones.<br><br><b>Sintaxis del Condicional If en C++</b><br> <img src="if.png.png" width="600px" height="250px"<br><br><br><b>Línea 1:</b><br>En esta línea está prácticamente todo lo esencial del condicional, aquí le hemos dicho al interior del argumento del condicional if, cual es la condición que se debe cumplir para que se ejecute el primer bloque de instrucciones, esta línea es en efecto esencial ya que nos da la pauta para que el algoritmo determine si ejecutará o no el bloque de instrucciones al interior de las llaves.<br><br><b>Línea 2:</b><br>En la línea 2 tenemos una llave abriendo "{" lo cual como seguramente ya sabrás indica que allí comienza el bloque de instrucciones que se ejecutarán si se cumple la condición dada. Esta llave no es del todo obligatoria, sin embargo si no la ponemos solo se ejecutara dentro de nuestro ciclo la primera línea inmediatamente posterior a la declaración del condicional, de modo que si deseamos que se ejecuten varias líneas dentro de nuestro condicional, debemos usar las llaves<br><br><b>Línea 3 a 7:</b><br>En estas líneas es donde estarán todas las operaciones que queramos llevar a cabo en caso de cumplirse la condición, este bloque podrá tener la cantidad de líneas necesarias incluso, como veremos más adelante dentro de estas podría haber uno o más condicionales en su interior, así que podrías tener lo que se conoce como condicionales anidados (ya veremos eso más adelante).<br><br><b>Línea 8:</b><br>En esta línea hacemos uso de la llave cerrando "}", una vez más como seguramente ya sabrás esta nos indica que allí termina el bloque del condicional y se dará por terminada la ejecución de este para continuar ejecutando el resto del programa<br><br><b>Línea 9 a 11:</b><br>Estas líneas contienen la estructura restante del algoritmo, quise ponerlas allí, para que quede claro que sin importar si la condición se cumple o no, el algoritmo siempre va a ejecutar estas líneas, es decir las líneas que se encuentran después de la llave de cierre de un condicional, siempre se ejecutarán sin importar si la condición se cumpla o no.<br><br><b>Ejemplos de Condicional If-else en C++</b><br>A continuación vamos a ver unos cuantos ejemplos para comprender de manera adecuada el uso de los condicionales if en c++, recuerda que si no comprendes alguno de estos ejemplos o tienes alguna pregunta o sugerencia sobre estos o cualquier contenido de la sección, puedes dejarlas en la sección de comentarios<br><br><b>Ejemplo 1: Verificación de valores en C++</b><br>Vamos a retomar el ejemplo anterior, deseábamos un sistema, en el cual un usuario nos ingresaba el resultado de una suma mostrada en pantalla y verificábamos si el resultado ingresado era el correcto a esta operación. En caso de ser correcto, el sistema muestra un mensaje de felicitación.<br><br< <b>Solución al Ejemplo 1</b>:<br>Debemos entonces determinar cuál va a ser nuestra condición a evaluar, en este ejemplo, la condición debe ser que la respuesta ingresada, sea igual al resultado de la suma, veamos entonces como realizar esto:<br>int resultado = 0;<br>cout << "Cuanto es 39+50? ";<br>cin >> resultado;<br>if(resultado == 39+50)<br>{<br>  cout << "Respuesta Correcta. Felicitaciones!\n";<br>}<br><br><br><b>El código funcional completo sería el siguiente:</b><br><br>using namespace std;<br>int main()<br>{<br>     int resultado = 0;<br>     cout << "Cuanto es 39+50? ";<br>     cin >> resultado;<br>      if(resultado == 39+50)<br>  {<br>      cout << "Respuesta Correcta. Felicitaciones!\n";<br>    }<br>}</p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 5:</span>Bucles</div>
														<div class="dropdown_item_text">
															<p>Los ciclos o también conocidos como bucles, son una estructura de control esencial al momento de programar. Tanto C como C++ y la mayoría de los lenguajes utilizados actualmente, nos permiten hacer uso de estas estructuras. Un ciclo o bucle permite repetir una o varias instrucciones cuantas veces lo necesitemos, por ejemplo, si quisiéramos escribir los números del uno al cien no tendría sentido escribir cien líneas mostrando un numero en cada una, para esto y para muchísimas cosas más, es útil un ciclo, permitiéndonos hacer una misma tarea en una cantidad de líneas muy pequeña y de forma prácticamente automática.<br>Existen diferentes tipos de ciclos o bucles, cada uno tiene una utilidad para casos específicos y depende de nuestra habilidad y conocimientos poder determinar en qué momento es bueno usar alguno de ellos. Tenemos entonces a nuestra disposición los siguientes tipos de ciclos en C++:<br>Ciclo for en C++<br>Ciclo while en C++<br>Ciclo do-while en C++<br><b>¿Cómo funciona un Ciclo For?</b><br>Para comprender mejor el funcionamiento del ciclo for, pongamos un ejemplo, supongamos que queremos mostrar los números pares entre el 50 y el 100, si imaginamos un poco como seria esto, podremos darnos cuenta que nuestro ciclo deberá mostrar una serie de números como la siguiente: 50 52 54 56 58 60 ... 96 98 100. Como podemos verificar, tenemos entonces los componentes necesarios para nuestro ciclo for, tenemos un valor inicial que sería el 50, tenemos también un valor final que sería el 100 y tenemos un tamaño de paso que es 2 (los números pares). Estamos ahora en capacidad de determinar los componentes esenciales para un ciclo for<br><b>Sintaxis del Ciclo For en C++:</b><br>La sintaxis de un ciclo for es simple en C++, en realidad en la mayoría de los lenguajes de alto nivel es incluso muy similar, de hecho, con tan solo tener bien claros los 3 componentes del ciclo for (inicio, final y tamaño de paso) tenemos prácticamente todo hecho<br>for(int i = valor inicial; i <= valor final; i = i + paso)<br>
{<br>
        ....<br>
        ....<br>
    Bloque de Instrucciones....<br>
        ....<br>
        ....<br>Vamos ahora a ver línea por línea el anterior código para comprender todo y quedar claros. Posteriormente veremos un ejemplo con valores reales.<br><b>Línea 1:</b><br>En esta línea está prácticamente todo lo esencial de un ciclo for. La sintaxis es simple, tenemos una variable de control llamada i que es tipo entero (int), cabe notar que la variable se puede llamar como nosotros lo deseemos y puede ser del tipo de queramos también, sin embargo en la mayoría de los casos se usa la "i" como nombre y el entero como tipo, pero somos libres de modificar esto a nuestro gusto. Esta variable "i" se le asigna un valor inicial que puede ser cualquier número correspondiente al tipo de dato asignado. Posteriormente lo que haremos será especificar hasta donde irá nuestro ciclo por medio del valor final, ten en cuenta que cada uno de estos componentes es separado por un punto y coma ";", también es importante saber que la condición final puede ser cualquier cosa, mayor, menor, mayor o igual, menor o igual, sin embargo no tiene sentido que la condición sea por ejemplo un igual, pues nuestra variable de control siempre va a cambiar entre valores, menores o mayores que el valor final deseado, si fuera un igual no tendríamos un error de sintaxis, pero nuestro for básicamente no haría nada de nada. Finalmente el ultimo componente de esta primer línea es el tamaño del paso, este componente se especifica aumentando en la cantidad deseada la variable de control.<br><b>Línea 2:</b><br>En la línea 2 tenemos una llave abriendo "{" lo cual como seguramente ya sabrás indica que allí comienza el bloque de instrucciones que se ejecutaran cada vez que el ciclo de un "giro". Esta llave no es del todo obligatoria, sin embargo si no la ponemos solo se ejecutara dentro de nuestro ciclo la primera línea inmediatamente posterior a la declaración del ciclo, de modo que si deseamos que se ejecuten varias líneas dentro de nuestro ciclo, debemos usar las llaves<br><b>Línea 3 a 7:</b><br>En estas líneas es donde estarán todas las operaciones que queramos llevar a cabo de manera iterativa durante la ejecución del ciclo, este bloque podrá tener la cantidad de líneas necesarias incluso, como veremos más adelante dentro de estas podría haber uno o más ciclos, así que podrías tener todo un programa dentro de un ciclo<br><b>Línea 8:</b><br>En esta última línea hacemos uso de la llave cerrando "}", una vez más como seguramente ya sabrás esta nos indica que allí termina el bloque del ciclo for y se dará por terminada la ejecución de este para continuar ejecutando el resto del algoritmo.<br><br><b>Ejemplos de Ciclo For en C++</b><br><b>Ejemplo 1: Mostrar en pantalla los números pares</b><br>Vamos a retomar el ejemplo anterior, donde deseábamos sacar los números pares entre el numero 50 y el 100, es un ejemplo sencillo con el que nos aseguraremos de haber comprendido bien lo anterior:<br><b>Solución Ejemplo 1:</b><br>Como pudimos ver anteriormente, tenemos entonces que el valor inicial para nuestro ciclo es el numero 50 y el valor final es el 100, además, dado que necesitamos los números pares vamos a ir de dos en dos, así que el tamaño del paso va a ser 2, teniendo estos 3 componentes identificados, estamos listos para crear nuestro ciclo for así:<br>for(int i=50;i<=100;i+=2)<br>{//Notemos que escribir i+=2 es similar a escribir i = i + 2<br>cout << i << endl;<br>}<br><br>El código funcional completo sería el siguiente:<br><br>#include "iostream"<br>#include "stdlib.h"<br>using namespace std;<br>int main()<br>{for(int i=50;i<=100;i+=2)
    {//Notemos que escribir i+=2 es similar a escribir i = i + 2<br>
        cout << i << endl;<br>
    }<br>
    system("PAUSE");<br>
    return 0;<br>
	}<br><br>En efecto los ciclos for, son bastante útiles, sin embargo desde el punto de vista de la eficiencia, es recomendable evitarlos en la medida de lo posible, siempre que vayas a usar un ciclo for, deberías preguntarte primero si es totalmente necesario o si existe una manera más efectiva de hacerlo. Evidentemente habrá situaciones en las que será casi que imprescindible usar el ciclo for, pues por algo existen. Está entonces en nuestra habilidad determinar cuándo usarlos y mejor aún cómo usarlos de manera efectiva.</p>
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
									<p>Hola! Me llamo Isaias y sere tu profesor de este lenguaje exactamente C++, soy ingeniero en informatica como tambien de electromecanica recien egresado de Harvard.</p>
								</div>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Puedes ver tambien... </div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_4.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="python.php">Python</a></div>
										<div class="latest_price">Aprenderas.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_5.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="java.php">Java</a></div>
										<div class="latest_price">Manejaras.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_6.jpg" alt=""></div></div>
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
