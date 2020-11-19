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
								echo"<a href='php.php?salir=1'>Cerrar Sesion</a>";
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
				<li class="menu_mm"><a href="cuestionarioionario.php">Cuestionario</a></li>
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
						<div class="course_title">Php</div>
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
								<div class="course_info_text"><a href="php.php">Php</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="images/course_15.jpg" alt=""></div>

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
									<div class="tab_panel_title">Php</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>PHP son las siglas en inglés del acrónimo Hypertext Pre-Processor, es decir, pre-procesador de hipertexto. Es un lenguaje de programación de propósito general que se ejecuta en el lado del servidor. Es un lenguaje interpretado</p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Ventajas</div>
											<ul class="tab_panel_bullets">
												<li>Lenguaje totalmente libre y abierto</li>
												<li>Curva de aprendizaje muy baja</li>
												<li>Los entornos de desarrollo son de rápida y fácil configuración</li>
												<li>Fácil despliegue: paquetes totalmente autoinstalables que integran PHP</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Origen</div>
											<div class="tab_panel_text">
												<p>PHP tal y como se conoce hoy en día es en realidad el sucesor de un producto llamado PHP/FI. Creado en 1994 por Rasmus Lerdorf, la primera encarnación de PHP era un conjunto simple de ficheros binarios Common Gateway Interface (CGI) escritos en el lenguaje de programación C.</p>
											</div>
										</div>
										<div class="tab_panel_faq">
											<div class="tab_panel_title">Preguntas Frecuentes</div>

											<!-- Accordions -->
											<div class="accordions">

												<div class="elements_accordions">

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Qué significa Php?</div></div>
														<div class="accordion_panel">
															<p>PHP son las siglas en inglés de “Hypertext Pre-Processor” que al traducirlo al español pierde un poco el sentido, mejor lo analizamos y encontramos que significa “Lenguaje de Programación Interpretado”. Este lenguaje es al que le debemos la visualización de contenido dinámico en las páginas web.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center active"><div>Por qué estudiar Php en 2020</div></div>
														<div class="accordion_panel">
															<p>ay estadísticas que señalan que un 80% de los sitios web utilizan PHP (Agosto 2018). Esto es así, en parte, gracias a famosos gestores de contenido open-source escritos en PHP como WordPress, Joomla, Drupal y Magento. Sólo WordPress se dice que representa un 30% de los sitios web a nivel mundial (Marzo 2018). Incluso sitios como WikiPedia y Facebook utilizan PHP. Es decir, por más que te digan lo contrario, la evidencia muestra que PHP sigue siendo sumamente popular.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Versiones de Php</div></div>
														<div class="accordion_panel">
															<p>A continuación detallaremos una lista de las principales versiones del lenguaje PHP.<br>1) PHP 1.0<br>2) PHP 2.0<br>3) PHP 3.0<br>4) PHP 4.0<br>5) PHP 5.0<br>6) PHP 5.6<br>7) PHP 7.0</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Cuales son las herramientas que necesito para usar Php en Windows?</div></div>
														<div class="accordion_panel">
															<p>*Si estas en windows puedes usar:a

<br>Un servidor web para enviar las páginas generadas al navegador web
<br>PHP para ejecutar el software
<br>Un servidor de bases de datos para archivar las páginas y los datos.
<br>Algun CodeBlocks
<</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Y si estoy en Linux?</div></div>
														<div class="accordion_panel">
															<p>Si estas en Linux puedes usar lo mismo que se necesita en un Sistema operativo Windows
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
										<div class="tab_panel_title">Php</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>En AIE-Learnig hemos organizado el Curso de Php por lecciones, desde lo mas basico a lo mas avanzado, esto, para facilitar el aprendizaje de nuestros usuarios.¡Mucho Animo y a Programar!!</p>
											</div>

											<!-- Dropdowns -->
											<ul class="dropdowns">
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 1:</span> ¿Que es Php?.</div>
														<div class="dropdown_item_text">
															<p>PHP: El preprocesador de hipertexto es un lenguaje de programación de código abierto, gratuito y muy popular. Los scripts PHP se ejecutan en el servidor .<br>Solo una breve lista de lo que PHP es capaz de:<br>
- Generar contenido de página dinámico<br>
- Crear, abrir, leer, escribir, eliminar y cerrar archivos en el servidor<br>
- Recopilar datos de formularios<br>
- Agregar, eliminar y modificar información almacenada en su base de datos<br>
- controlar el acceso de los usuarios<br>
-cifrar los datos<br>
-¡y mucho más!<br></p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.1:</span>Etiquetas PHP</div>
																<div class="dropdown_item_text">
																	<p><b>Sintaxis PHP</b><br>Un script PHP comienza con <? Php y termina con ?> :<br><br><? php<br>// ¿El código PHP va aquí <br>?><br><br> A continuación se muestra un ejemplo de un archivo PHP simple. El script PHP usa una función incorporada llamada  echo  para generar el texto ¡Hola mundo! a una página web.<br><br> html <br>head <br> >title< Mi primera página PHP /title <br>/head <br>body <br>  <? php    <br>echo "¡Hola mundo!"; <br> ?><br> body <br>html<br></p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.2:</span>Eco</div>
																<div class="dropdown_item_text">
																	<p>PHP tiene una función de " eco " incorporada, que se utiliza para generar texto.
En realidad, no es una función; es una construcción del lenguaje . Como tal, no requiere paréntesis.<br>Imprimamos un texto.<br><br><? php <br>echo "¡Me encanta PHP!"; <br>?>
<br><br><b>Declaraciones PHP</b><br>Cada declaración de PHP debe terminar con un punto y coma .<br><br><? php <br> echo "A"; <br> echo "B";<br>?>
<br>El marcado HTML se puede agregar al texto en la declaración de eco<br><? php <br>echo "<strong> Este es un texto en negrita. </strong>";<br>?><br><br><b>Resultado:</b><br><img src="php1.png" width="600px" height="250px"<br><br><br><br><b>Comentarios</b>En código PHP, un comentario es una línea que no se ejecuta como parte del programa. Puede utilizar los comentarios para comunicarse con los demás para que comprendan lo que está haciendo o como un recordatorio de lo que hizo<br>Un comentario de una sola línea comienza con //:<br><br>echo "<p> ¡Hola mundo! </p>"; <br> // Este es un comentario de una sola línea <br><br>echo "<p> ¡Estoy aprendiendo PHP! </p>"; <? php    <br>echo "<p> ¡Este es mi primer programa! </p>"; <br> ?><br><br><b>Resultado:</b><br> <img src="php2.png" width="600px" height="250px"<br><br> <b>Comentarios de varias líneas</b><br>Los comentarios de varias líneas se utilizan para redactar comentarios que ocupan más de una línea.
Un comentario de varias líneas comienza con / * y termina con * /.<br><img src="php3.png" width="600px" height="250px"<br>    < </p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 2:</span>Variables Y Operadores</div>
														<div class="dropdown_item_text">
															<p>Las variables se utilizan como "contenedores" en los que almacenamos información.
Una variable PHP comienza con un signo de dólar ($), seguido del nombre de la variable.<br>Reglas para variables PHP:<br>- El nombre de una variable debe comenzar con una letra o un guión bajo<br>- El nombre de una variable no puede comenzar con un número<br>- El nombre de una variable no puede comenzar con un número<br>- Los nombres de las variables distinguen entre mayúsculas y minúsculas ($ name y $ NAME serían dos variables diferentes)
<br></p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.1:</span> Variables</div>
																<div class="dropdown_item_text">
																	<p>Las constantes son similares a las variables, excepto que no se pueden cambiar o dejar de definir una vez definidas.
Empiece el nombre de su constante con una letra o un guión bajo.
Para crear una constante, use la función define () :<br>definir (nombre, valor, no distingue entre mayúsculas y minúsculas)
<br><br><b>Parámetros:</b> nombre : especifica el nombre de la constante;<br>
valor : especifica el valor de la constante;<br>
no distingue entre mayúsculas y minúsculas : especifica si el nombre de la constante no debe distinguir entre mayúsculas y minúsculas. El valor predeterminado es falso;
<br><br> <b>Tipos De Datos</b>Las variables pueden almacenar una variedad de tipos de datos.
Tipos de datos soportados por PHP: String , Integer , Float , Boolean , Array , Object , NULL, Resource.<br><br><b>Cadena PHP</b><br>Una cadena es una secuencia de caracteres, como "¡Hola mundo!"
<br>Una cadena puede ser cualquier texto dentro de un conjunto de comillas simples o dobles .
<br><br><? php <br> $ string1 = "¡Hola mundo!"; // comillas dobles <br> $ string2 = '¡Hola mundo!'; // comillas simples<br>?>
<br><br><b>
Entero PHP</b><br>Un entero es un número entero (sin decimales) que debe cumplir con los siguientes criterios:<br>
- No puede contener comas ni espacios en blanco<br>
- No debe tener punto decimal<br>
- Puede ser positivo o negativo<br><br> <b>PHP flotante</b><br>Un flotador , o número de punto flotante, es un número que incluye un punto decimal<br><br><? php <br>$ x = 42.168; <br>?>
<br><br> <b>PHP booleano</b><br>Un booleano representa dos estados posibles: VERDADERO o FALSO<br><br>Un booleano representa dos estados posibles: VERDADERO o FALSO<br> $ x = verdadero; $ y = falso; <br>?><br><br>La mayoría de los tipos de datos se pueden utilizar en combinación entre sí.</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.2:</span> Operadores PHP</div>
																<div class="dropdown_item_text">
																	<p>Un operador nos permite realizar una operación entre uno o más valores. El operador toma esos valores de entrada y los relaciona entre si, realizando una operación y aplicando otro valor como resultado. Para entendernos, operadores son los símbolos que usamos en las matemáticas para expresar cuentas con números, como los símbolos que nos indican ciertas operaciones: suma, resta, multiplicación, división >br< <b>Operadores de asignación</b><br>Los operadores de asignación son los más habituales y nos permiten traspasar valores en variables. Asignar es el proceso por el cual colocamos un valor en una variable.<br><br>= Asignación<br>n el pasado ya habíamos creado variables y asignado valores, por lo que lo debes de reconocer. Lo usamos así:<br><br>$valor = 'Esto es lo que se va a asignar a la variable';<br>Además, en la asignación podría darse el caso que el valor a asignar fuese el resultado de realizar una operación.<br>$a = 23;<br>$b = 3;<br>$c = $a - $b;<br><br><b>Operadores de comparación</b><br>Se utilizan principalmente en nuestras condiciones para comparar dos variables y verificar si cumple o no la propiedad del operador.<br><br>== Comprueba si son iguales<br>
!= Comprueba si son distintos<br>
=== Comprueba si son iguales y de exactamente el mismo tipo<br>
!== Comprueba si son distintos o de distinto tipo<br>
<> Diferente (igual que !=)<br>
< Menor qué, comprueba si un valor es menor que otro<br>
> Mayór qué<br>
<= Menor o igual<br>
>= Mayor o igual<br>
<=> Comparador de orden. (PHP 7)<br>
?? uno o el otro (PHP 7)<br><br>Vamos a adelantarnos un poco, presentando aquí un código en el que usamos la estructura de control condicional de PHP, que nos servirá para comparar valores dados en una expresión y hacer cosas cuando cumpla o no cierta condición.<br>$a = 20;<br>
$b = 30;<br>

if($a < $b) {<br>
    echo '$a es menor que $b';<br>
}<br><br><br><b>Operadores lógicos</b><br>Los operadores lógicos sirven para realizar operaciones lógicas, valga la redundancia. Son operaciones que al final van a devolver un "sí" o un "no", positivo o negativo. Se usan en combinación con los operadores de comparación cuando la expresión de la condición lo requiere.<br>and Operación lógica "y", será verdadero si ambos son verdaderos.<br>
or Operación lógica "o", será verdadero si uno de ellos es verdadero<br>
xor Operación lógica "xor", será verdadero si uno de ellos es verdadero, pero no ambos.<br>
! Operación de negación, si era verdadero pasa a falso y viceversa.<br>
&& Operación lógica "y"<br>
|| Operación lógica "o"<br></p>

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
														<div class="dropdown_item_title"><span>Leccion 4:</span>Estructuras De Control </div>
														<div class="dropdown_item_text">
															<p>Las estructuras de control nos permiten controlar el flujo del programa: tomar decisiones, realizar acciones repetitivas, dependiendo de unas condiciones que nosotros mismos establezcamos. Así podemos hacer un script que nos salude cada día de la semana de una manera diferente. O por ejemplo hacer un script que nos pida la contraseña una y otra vez hasta que suministremos la opción correcta.<br><br><b>Ejemplo:</b><br>El constructor if es una de las características más importantes de muchos lenguajes, incluido PHP. Permite la ejecución condicional de fragmentos de código.<br><br><b>Sintaxis</b><br>if (expresiones){<br>

Sentencia};<br>

Como se describe en la sección sobre expresiones, la expresión es evaluada a su valor booleano. Si la expresión se evalúa como TRUE, PHP ejecutará la sentencia y si se evalúa como FALSE la ignorará. Más información sobre qué valores evalúan como FALSE se puede encontrar en la sección ‘Convirtiendo a booleano’<br><br><?php<br>

if ($a > $b) {<br>

echo “a es mayor que b“;<br>

}?><br><br>Las sentencias if pueden anidarse dentro de otra sentencias if infinitamente, lo cual provee completa flexibilidad para la ejecución condicional de diferentes partes del programa.<br><br><br><B>Else</b><br>Con frecuencia se desea ejecutar una sentencia si una determinada condición se cumple y una sentencia diferente si la condición no se cumple. Esto es para lo que sirve else. El else extiende una sentencia if para ejecutar una sentencia en caso que la expresión en la sentencia if se evalúe como FALSE. Por ejemplo, el siguiente código deberá mostrar a es mayor que b si $a es mayor que $b y a NO es mayor que b en el caso contrario:<br><?php<br>

if ($a > $b) {<br>

echo “a es mayor que b”;<br>

} else {<br>

echo “a NO es mayor que b”;<br>

}<br>

?><br><br><br><b>elseif/else if</b><br>ELSEIF, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como FALSE. Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional del elseif se evalúa como TRUE. Por ejemplo, el siguiente código debe mostrar a es mayor que b, a es igual que b o a es menor que b:<br><br><?php<br>

if ($a > $b) {<br>

echo “a es mayor que b”;<br>

} elseif ($a == $b) {<br>

echo “a es igual que b“;<br>

} else {<br>

echo “a es menor que b”;<br>

}<br>

?><br></p>

														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 5:</span>Variables Predefinidas</div>
														<div class="dropdown_item_text">
															<p>PHP proporciona una gran cantidad de variables predefinidas a cualquier script que ejecute. Muchas de estas variables, sin embargo, no se pueden documentar por completo, ya que dependen del servidor que se esté ejecutando, la versión y configuración del servidor y otros factores. Algunas de estas variables no estarán disponibles cuando PHP se ejecute en la línea de comandos . Para obtener una lista de estas variables, consulte la sección sobre Variables predefinidas reservadas .<br>

PHP también proporciona un conjunto adicional de matrices predefinidas que contienen variables del servidor web (si corresponde), el entorno y la entrada del usuario. Estas matrices son bastante especiales porque son automáticamente globales, es decir, están disponibles automáticamente en todos los ámbitos. Por esta razón, a menudo se les conoce como "superglobales". (No hay ningún mecanismo en PHP para superglobales definidas por el usuario). Las superglobales se pueden encontrar aquí ; sin embargo, para obtener una lista de sus contenidos y una discusión más detallada sobre las variables predefinidas de PHP y su naturaleza, consulte la sección Variables predefinidas reservadas .<br><br><b>Tabla de contenidos</b><br>

Superglobals — Superglobals son variables internas que están disponibles siempre en todos los ámbitos<br>
$GLOBALS — Hace referencia a todas las variables disponibles en el ámbito global<br>
$_SERVER — Información del entorno del servidor y de ejecución<br>
$_GET — Variables HTTP GET<br>
$_POST — Variables HTTP POST<br>
$_FILES — Variables de Carga de Archivos HTTP<br>
$_REQUEST — Variables HTTP Request<br>
$_ENV — Variables de entorno<br><br>

$_SESSION — Variables de sesión<br>
$_COOKIE — Cookies HTTP<br>
$php_errormsg — El mensaje de error anterior<br>
$HTTP_RAW_POST_DATA — Datos POST sin tratar<br>
$http_response_header — Encabezados de respuesta HTTP<br>

$argc — El número de argumentos pasados a un script<br>
$argv — Array de argumentos pasados a un script<br></p>
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
									<div class="team_image"><img src="images/team_5.jpg" width=90 height=100 alt=""></div>
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
									<div class="latest_image"><div><img src="images/course_18.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="html.php">Html</a></div>
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
