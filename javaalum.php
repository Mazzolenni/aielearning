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
								echo"<a href='javaalum.php?salir=1'>Cerrar Sesion</a>";
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
						<div class="course_title">Java</div>
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
								<div class="course_info_text"><a href="java.php">Java</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="images/course_19.jpg" alt=""></div>

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
									<div class="tab_panel_title">Java</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Java es un lenguaje de programación orientado a objetos que se incorporó al ámbito de la informática en los años noventa. La idea de Java es que pueda realizarse programas con la posibilidad de ejecutarse en cualquier contexto, en cualquier ambiente, siendo así su portabilidad uno de sus principales logros.</p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Ventajas</div>
											<ul class="tab_panel_bullets">
												<li>Librerías Estándar</li>
												<li>En java no existen problemas con la liberacion de memoria en el sistema</li>
												<li>El lenguaje Java es orientado a objetos.</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Origen</div>
											<div class="tab_panel_text">
												<p>El lenguaje de programación Java fue desarrollado originalmente por James Gosling, de Sun Microsystems (constituida en 1983 y posteriormente adquirida el 27 de enero de 2010 por la compañía Oracle),​ y publicado en 1995 como un componente fundamental de la plataforma Java de Sun Microsystems.</p>
											</div>
										</div>
										<div class="tab_panel_faq">
											<div class="tab_panel_title">Preguntas Frecuentes</div>

											<!-- Accordions -->
											<div class="accordions">

												<div class="elements_accordions">

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Qué significa Java?</div></div>
														<div class="accordion_panel">
															<p>El significado de la sigla JAVA es el acrónimo de a programming language (Sun Microsystems) y pertenece a la categoría Redes.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center active"><div>Por qué estudiar Java en 2020</div></div>
														<div class="accordion_panel">
															<p>ava es un lenguaje fácil de aprender<br>Java es un lenguaje fácil de aprender<br>Es orientada a objetos<br>Funcionalidad de base y mucho código Open Source</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Versiones de Java</div></div>
														<div class="accordion_panel">
															<p>J2SE o simplemente Java SE<br>J2EE<br>J2ME<br>JDK 1.0 al 6<br>Java SE 6 al 10</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>¿Cuales son las herramientas que necesito para usar Java en Windows?</div></div>
														<div class="accordion_panel">
															<p>El JDK (Java Development Kit), o Kit de Desarrollo Java, que es un conjunto de librerías y de software de desarrollo para la creación de las aplicaciones en Java. Entre otros, se encuentran el compilador y el interprete de Java.<br>El IDE (Integrated Development Environment), o Entorno de Desarrollo Integrado, que es una aplicación software que nos proporciona los servicios necesarios para poder llevar a cabo, y facilitarnos en la medida de lo posible, la programación en un determinado lenguaje, en nuestro caso Java.
</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>¿Y si estoy en Linux?</div></div>
														<div class="accordion_panel">
															<p>Se necesita lo mismo que en un sistema operativo Windows
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
										<div class="tab_panel_title">Java</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>En AIE-Learnig hemos organizado el Curso de Java por lecciones, desde lo mas basico a lo mas avanzado, esto, para facilitar el aprendizaje de nuestros usuarios.¡Mucho Animo y a Programar!!</p>
											</div>

											<!-- Dropdowns -->
											<ul class="dropdowns">
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 1:</span> ¿Que es Java?.</div>
														<div class="dropdown_item_text">
															<p>Java es un lenguaje de programación moderno de alto nivel diseñado a principios de la década de 1990 por Sun Microsystems, y actualmente propiedad de Oracle.

Java es independiente de la plataforma , lo que significa que solo necesita escribir el programa una vez para poder ejecutarlo en varias plataformas diferentes.
Java es portátil , robusto y dinámico , con la capacidad de adaptarse a las necesidades de prácticamente cualquier tipo de aplicación.</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.1:</span>Tu primer programa Java</div>
																<div class="dropdown_item_text">
																	<p>Comencemos por crear un programa simple que imprima "Hello World" en la pantalla.<br><br>
class MyClass { <br>
  public static  void  main ( String [] args) { <br>
    System.out.println ("Hola mundo"); <br>
  } <br>
}<br><br>
En Java, cada línea de código que realmente se puede ejecutar debe estar dentro de una clase .<br>
En nuestro ejemplo, nombramos la clase MyClass . Aprenderá más sobre las clases en los próximos módulos.<br>

En Java, cada aplicación tiene un punto de entrada o un punto de partida, que es un método llamado main . Junto con main, las palabras clave public y static también se explicarán más adelante.<br><br><b>El método principal</b><br>Para ejecutar nuestro programa, el método principal debe ser idéntico a esta firma:<br><br>
public static  void main ( String [] args)<br><br>

- público : cualquiera puede acceder a él<br>
- estático : el método se puede ejecutar sin crear una instancia de la clase que contiene el método principal<br>
- void : el método no devuelve ningún valor<br>
- principal : el nombre del método<br><br><b>System.out.println ()</b><br>

A continuación, se muestra el cuerpo del método principal , entre llaves:<br><br>
{ <br>
   System.out.println ("¡Hola mundo!"); <br>
}<br>

El método println imprime una línea de texto en la pantalla. La clase System y su flujo de salida se utilizan para acceder al método println .<br><br><b>Punto y coma en Java</b><br>

Puede pasar un texto diferente como parámetro al método println para imprimirlo<br><br>
class MyClass { <br>
  public static  void main ( String [] args) { <br>
    System.out.println ("Estoy aprendiendo Java"); <br>
  } <br>
}<br>

</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.2:</span>Comentarios de Java</div>
																<div class="dropdown_item_text">
																	<p><b>Punto y coma en Java</b><br>El propósito de incluir comentarios en su código es explicar lo que hace el código<br>
Java admite comentarios tanto de una sola línea como de varias líneas. El compilador de Java ignora todos los caracteres que aparecen dentro de un comentario.<br>

Un comentario de una sola línea comienza con dos barras diagonales y continúa hasta que llega al final de la línea.<br>
Por ejemplo:<br><br>
// este es un comentario de una sola línea<br>
 x = 5; // un comentario de una sola línea después del código<br><br>Java también admite comentarios que abarcan varias líneas.<br>
Este tipo de comentario se inicia con una barra inclinada seguida de un asterisco y se termina con un asterisco seguido de una barra inclinada.<br>
Por ejemplo:<br><br>
/ * Este también es un <br>
    comentario que abarca <br>
    varias líneas * /<br><br>

Tenga en cuenta que Java no admite comentarios de varias líneas anidados.<br>
Sin embargo, puede anidar comentarios de una sola línea dentro de comentarios de varias líneas.<br><br><b>Comentarios de Documentacion</b><br>Los comentarios de documentación son comentarios especiales que tienen la apariencia de comentarios de varias líneas, con la diferencia de que generan documentación externa de su código fuente. Estos comienzan con una barra inclinada seguida de dos asteriscos y terminan con un asterisco seguido de una barra inclinada.<br>
Por ejemplo:<br><br>
/ ** Este es un comentario de documentación * / <br><br>

/ ** Esto también es un <br>
    comentario de documentación * /<br>

Javadoc es una herramienta que viene con JDK y se utiliza para generar documentación de código Java en formato HTML a partir del código fuente de Java que tiene documentación requerida en un formato predefinido.<br>

Cuando un comentario de documentación comienza con más de dos asteriscos, Javadoc asume que desea crear un "cuadro" alrededor del comentario en el código fuente. Simplemente ignora los asteriscos adicionales.<br></p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 2:</span>Variables</div>
														<div class="dropdown_item_text">
															<p>Las variables almacenan datos para su procesamiento.<br>
A una variable se le da un nombre (o identificador ), como área, edad, altura y similares. El nombre identifica de forma única cada variable, asigna un valor a la variable y recupera el valor almacenado.<br>

Las variables tienen tipos . Algunos ejemplos:<br><br>
- int : para enteros (números enteros) como 123 y -456<br>
- double : para números reales o de punto flotante con puntos decimales opcionales y partes fraccionarias en notaciones fijas o científicas, como 3,1416, -55,66.<br>
- Cadena : para textos como "Hola" o "¡Buenos días!". Las cadenas de texto se encierran entre comillas dobles.</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.1:</span>Operadores Primitivos</div>
																<div class="dropdown_item_text">
																	<p><b>Adición</b><br>

El operador + suma dos valores, como dos constantes, una constante y una variable, o una variable y una variable. A continuación se muestran algunos ejemplos de adición:<br><br>
int suma1 = 50 + 10;<br>
int suma2 = suma1 + 66; <br>
int suma3 = suma2 + suma2;<br><br>

<b>Sustracción</b><br>
El operador - resta un valor de otro.<br><br>
int suma1 = 1000 - 10; <br>
int suma2 = suma1 - 5;<br>
int suma3 = suma1 - suma2;<br><br><B>Operadores Matematicos</b><br>Los operadores matemáticos<br>

Java proporciona un amplio conjunto de operadores para utilizar en la manipulación de variables. Un valor usado en cualquier lado de un operador se llama operando .<br>
Por ejemplo, en la siguiente expresión, los números 6 y 3 son operandos del operador más:<br><br>
int x = 6 + 3;<br><br>

<b>Operadores aritméticos de Java:</b><br>
+ suma<br>
- resta<br>
* multiplicación<br>
/ división<br>
% módulo<br><br><b>Multiplicación</b><br>

El operador * multiplica dos valores.<br><br>
int suma1 = 1000 * 2; <br>
int suma2 = suma1 * 10; <br>
int suma3 = suma1 * suma2;
<br><br>
<b>División</b><br>
El operador / divide un valor por otro.<br><br>
int suma1 = 1000/5; <br>
int suma2 = suma1 / 2;<br>
int suma3 = suma1 / suma2;</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.2:</span>Operadores De Incremento</div>
																<div class="dropdown_item_text">
																	<p>Un operador de incremento o decremento proporciona una forma más conveniente y compacta de aumentar o disminuir el valor de una variable en uno .
Por ejemplo, la declaración x = x + 1; se puede simplificar a ++ x;<br>
Ejemplo:<br><br>
int prueba = 5;<br>
++ prueba; // la prueba ahora es 6<br><br>El operador de disminución (-) se usa para disminuir el valor de una variable en uno.<br><br>
int prueba = 5; <br>
--prueba; // la prueba ahora es 4<br><br><b>Prefijo y sufijo</b><br>Se pueden usar dos formas, prefijo y sufijo , con los operadores de incremento y decremento<br>
Con forma de prefijo, el operador aparece antes del operando, mientras que en forma de sufijo, el operador aparece después del operando. A continuación se muestra una explicación de cómo funcionan las dos formas:<br>
Prefijo : aumenta el valor de la variable y usa el nuevo valor en la expresión.<br>
Ejemplo:<br><br>
int x = 34; <br>
int y = ++ x ; // y es 35<br>El valor de x se incrementa primero a 35 y luego se asigna ay, por lo que los valores de xey ahora son 35.<br>
Postfijo : el valor de la variable se usa primero en la expresión y luego se incrementa<br>
Ejemplo:<br><br>
int x = 34; <br>
int y = x ++ ; // y es 34<br></p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 3:</span>Instrumentos De Cuerda</div>
														<div class="dropdown_item_text">
															<p>Una cadena es un objeto que representa una secuencia de caracteres.<br>
Por ejemplo, "Hola" es una cadena de 5 caracteres.<br>

Por ejemplo:<br><br>
String  s = "AIELearning";<br><br><b>Concatenación de cadenas</b><br>

El operador + (más) entre cadenas los suma para crear una nueva cadena. Este proceso se llama concatenación .<br>
La cadena resultante es la primera cadena junto con la segunda cadena.<br>
Por ejemplo:<br><br>
Cadena firstName, lastName; <br>
firstName = "David"; <br>
lastName = "Williams"; <br>

System.out.println ("Mi nombre es" + firstName + "" + lastName); <br>

// Impresiones: Mi nombre es David Williams<br><br></p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 4:</span>Obtener información del usuario </div>
														<div class="dropdown_item_text">
															<p>Si bien Java proporciona muchos métodos diferentes para obtener la entrada del usuario, el objeto Scanner es el más común y quizás el más fácil de implementar. Importe la clase Scanner para usar el objeto Scanner , como se ve aquí:<br><br>
import java.util.Scanner;<br>

Para usar la clase Scanner , cree una instancia de la clase usando la siguiente sintaxis:<br><br>
Scanner myVar = nuevo escáner (System.in);<br>

Ahora puede leer diferentes tipos de datos de entrada que ingresa el usuario.<br>
Estos son algunos métodos que están disponibles a través de la clase Scanner:<br>
Leer un byte - nextByte ()<br>
Leer un breve - nextShort ()<br>
Leer un int - nextInt ()<br>
Leer un largo - nextLong ()<br>
Leer un flotador - nextFloat ()<br>
Leer un doble - nextDouble ()<br>
Leer un booleano - nextBoolean ()<br>
Leer una línea completa - nextLine ()<br>
Leer una palabra - next ()<br><br>

Ejemplo de un programa utilizado para obtener la entrada del usuario:<br><br>
import java.util.Scanner; <br>

class MyClass { <br>
  public static  void main ( String [] args) { <br>
    Scanner myVar = new Scanner (System.in); <br>
    System.out.println (myVar.nextLine ()); <br>
  } <br>
}<br></p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 5:</span>Condicionales Y Bucle</div>
														<div class="dropdown_item_text">
															<p>Las sentencias condicionales son las ordenes de cualquier lenguaje de programación, en este caso Java que nos permiten decir a nuestro programa que debe hacer en función de una determinada situación. Esto lo hacemos los humanos instintivamente como por ejemplo:  si una puerta esta cerrada, dejar de andar.<br>

Pues para hacer eso mismo que nosotros hacemos por instinto a nuestros programas se lo tenemos qué decir de alguna forma y para esto se utilizan las sentencias condicionales<br>

if (condición): Su traducción a lenguaje humano sería algo así como, si pasa esto<br><br>
else: va siempre después de una sentencia "if" realmente son la misma sentencia, podríamos decir que el "else" forma parte de el "if" y quiere decir, si no pasa eso (la condición que hemos definido dentro de la sentencia "if")<br>
else if (condición): también forma parte de el "if" y es la unión de las dos anteriores, también va siempre después de un "if" y quiere decir, si no pasa esto y además pasa esto otro<br><br><b>¿Qué son los bucles?</b><br>
Los bucles son sentencias que sirven para indicar repetición, los bucles son muy útiles cuando queremos repetir muchas veces un conjunto de instrucciones. Los bucles básicos son:<br>
<b>For</b><br>Permite que se ejecute un conjunto de sentencias hasta que la condición deja de cumplirse, se suele utilizar una variable contador que se modifica su valor según lo expresado en la modificación de la variable.<br>
<b>While</b><br> (condición): Permite que se ejecute un conjunto de sentencias mientras se cumple la condición, es decir es true. La condición puede ser cualquier expresión booleana. El cuerpo del bucle se ejecutará cero o más veces, mientras la expresión condicional sea verdadera.<br></p>
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
										<div class="latest_title"><a href="pythonalum.php">Python</a></div>
										<div class="latest_price">Aprenderas.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_22.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="rubyalum.php">Ruby</a></div>
										<div class="latest_price">Manejaras.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_24.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="javascriptalum.php">JavaScript</a></div>
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
