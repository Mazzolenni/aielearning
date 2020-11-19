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
								echo"<a href='pythonalum.php?salir=1'>Cerrar Sesion</a>";
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
						<div class="course_title">Python</div>
						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Maestro:</div>
								<div class="course_info_text"><a href="#">Alan Orue</a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Reviews:</div>
								<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Lenguaje de Programacion:</div>
								<div class="course_info_text"><a href="python.php">Python</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><img src="images/course_20.jpg" alt=""></div>

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
									<div class="tab_panel_title">Python</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Python es un lenguaje de programación interpretado cuya filosofía hace hincapié en la legibilidad de su código. ​ Se trata de un lenguaje de programación multiparadigma, ya que soporta orientación a objetos, programación imperativa y, en menor medida, programación funcional.</p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Ventajas</div>
											<ul class="tab_panel_bullets">
												<li>Facilidad de escritura de código asíncrono</li>
												<li>Facilidad de escritura de código asíncrono</li>
												<li>Abundancia de bibliotecas</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Origen</div>
											<div class="tab_panel_text">
												<p>Guido van Rossum ideó el lenguaje Python a finales de los 80 y comenzó a implementarlo en diciembre de 1989. En febrero de 1991 publicó la primera versión pública, la versión 0.9.0.</p>
											</div>
										</div>
										<div class="tab_panel_faq">
											<div class="tab_panel_title">Preguntas Frecuentes</div>

											<!-- Accordions -->
											<div class="accordions">

												<div class="elements_accordions">

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Qué significa Python?</div></div>
														<div class="accordion_panel">
															<p>Lenguaje de programación multiparadigma, ya que soporta orientación a objetos, programación imperativa y, en menor medida, programación funcional.</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center active"><div>Por qué estudiar Python en 2020</div></div>
														<div class="accordion_panel">
															<p>¡Con Python todo es posible! Con Python puedes crear lo que sea, desde el sitio web para un chef hasta un programa o aplicación para llevar a cabo alguna tarea científica como calcular valores estadísticos o resolver matemática compleja.<br>Si ya tienes conceptos de programación y te inclinas por algún tipo de programa en específico, éstas son algunas de las cosas que se pueden desarrollar con Python:<br>

Juegos<br>
Desarrollo web<br>
Gráficos y diseño<br>
Aplicaciones financieras<br>
Ciencia<br>
Automatización de diseño electrónico<br>
Desarrollo de software<br>
Software dedicado a negocios<br></p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Versiones de Python</div></div>
														<div class="accordion_panel">
															<p>*Version 1.0<br>*Version 2.0<br>*Version 3.0</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Cuales son las herramientas que necesito para usar Python en Windows?</div></div>
														<div class="accordion_panel">
															<p>*Si estas en windows debes usar:<br>Editores de código y gestor de paquetes</p>
														</div>
													</div>

													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div>Y si estoy en Linux?</div></div>
														<div class="accordion_panel">
															<p>Si estas en Linux puedes usar:<br>Editores de código y gestor de paquetes
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
										<div class="tab_panel_title">Python</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>En AIE-Learnig hemos organizado el Curso de Python por lecciones, desde lo mas basico a lo mas avanzado, esto, para facilitar el aprendizaje de nuestros usuarios.¡Mucho Animo y a Programar!!</p>
											</div>

											<!-- Dropdowns -->
											<ul class="dropdowns">
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 1:</span> ¿Que es Phynton?.</div>
														<div class="dropdown_item_text">
															<p>Python es un lenguaje de programación de alto nivel, con aplicaciones en numerosas áreas, que incluyen programación web, scripting, computación científica e inteligencia artificial.<br>

Es muy popular y utilizado por organizaciones como Google, NASA, CIA y Disney.</p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.1:</span>Tu Primer Programa</div>
																<div class="dropdown_item_text">
																	<p>Comencemos creando un programa corto que muestre "¡Hola mundo!".
En Python, usamos la declaración de impresión para generar texto.<br><br>print('Hola Mundo!')<br><br>¡Felicidades! Ha escrito su primer programa.<br>

La declaración de impresión debe ir seguida de paréntesis, que encierran la salida que queremos generar.<br></p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 1.2:</span>Operaciones Simples</div>
																<div class="dropdown_item_text">
																	<p>
Python tiene la capacidad de realizar cálculos.<br>
Ingrese un cálculo directamente en la declaración impresa:<br>
print (2+2)<br>print (4+4-3)<br><br>
Python tiene la capacidad de realizar cálculos.<br>
Ingrese un cálculo directamente en la declaración impresa:<br><br>print  (2 * (3 + 4)) <br>print (10/2)<br><br>El signo menos indica un número negativo .
Las operaciones se realizan con números negativos, al igual que con números positivos.<br>Dividir por cero en Python produce un error , ya que no se puede calcular ninguna respuesta.</p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="has_children">
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 2:</span>Flotadores </div>
														<div class="dropdown_item_text">
															<p>Los flotadores se utilizan en Python para representar números que no son enteros (números enteros).
Algunos ejemplos de números que se representan como flotantes son 0.5 y -7.8237591.<br>
Se pueden crear directamente ingresando un número con un punto decimal o usando operaciones como la división de números enteros.<br><br>print(3/4)<br> 0,75<br><br>Como vio anteriormente, dividir dos números enteros produce un flotador .
Un flotador también se produce al ejecutar una operación en dos flotadores, o en un flotador y un entero .<br></p>
														</div>
													</div>
													<ul>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.1:</span>Strings</div>
																<div class="dropdown_item_text">
																	<p>
Si desea usar texto en Python, debe usar una cadena .<br>
Una cadena se crea ingresando texto entre dos comillas simples o dobles .<br>

Cuando la consola de Python muestra una cadena , generalmente usa comillas simples. El delimitador utilizado para una cadena no afecta de ninguna manera cómo se comporta.<br><br>Algunos caracteres no se pueden incluir directamente en una cadena . Por ejemplo, las comillas dobles no se pueden incluir directamente en una cadena de comillas dobles ; esto haría que terminara prematuramente.

Los personajes como estos deben escaparse colocando una barra invertida delante de ellos<br>
Otros caracteres comunes de los que se debe escapar son las líneas nuevas y las barras invertidas.<br>
Las comillas dobles solo necesitan escaparse en cadenas de comillas dobles, y lo mismo es cierto para las cadenas de comillas simples. \ n representa una nueva línea.<br>Python proporciona una manera fácil de evitar escribir manualmente "\ n" para escapar de las nuevas líneas en una cadena . Cree una cadena con tres conjuntos de comillas , y las líneas nuevas que se crean presionando Enter se escapan automáticamente para usted.</p>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown_item">
																<div class="dropdown_item_title"><span>Leccion 2.2:</span>Operaciones Con Cadena</div>
																<div class="dropdown_item_text">
																	<p>Al igual que con los números enteros y flotantes, se pueden agregar cadenas en Python mediante un proceso llamado concatenación , que se puede realizar en dos cadenas cualesquiera.
Al concatenar cadenas, no importa si se han creado con comillas simples o dobles.<br><br>>>> "Spam" + 'huevos' <br>
'Spameggs' <br>

>>> print ("Primera cadena " + "," + "segunda cadena ") <br>
Primera cadena , segunda cadena<<br><br>Incluso si sus cadenas contienen números, todavía se agregan como cadenas en lugar de enteros. Agregar una cadena a un número produce un error, ya que aunque parezcan similares, son dos entidades diferentes.<br>Las cadenas también se pueden multiplicar por números enteros. Esto produce una versión repetida de la cadena original . El orden de la cadena y el número entero no importa, pero la cadena suele ser lo primero.<br>

Las cadenas no se pueden multiplicar por otras cadenas. Las cadenas tampoco se pueden multiplicar por flotantes, incluso si las flotantes son números enteros./p>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 3:</span>Variables</div>
														<div class="dropdown_item_text">
															<p>Las variables juegan un papel muy importante en la mayoría de los lenguajes de programación y Python no es una excepción . Una variable le permite almacenar un valor asignándole un nombre, que puede usarse para hacer referencia al valor más adelante en el programa.<br>

Para asignar una variable , use un signo igual . A diferencia de la mayoría de las líneas de código que hemos visto hasta ahora, no produce ningún resultado en la consola de Python.<br><br>>>> x = 7
>>> imprimir (x) <br>
7 <br>
>>> imprimir (x + 3) <br>
10 <br>
>>> imprimir (x) <br>
7<br><br>Las variables pueden reasignarse tantas veces como desee para cambiar su valor.<br>
En Python, las variables no tienen tipos específicos, por lo que puede asignar una cadena a una variable y luego asignar un número entero a la misma variable .<br><br>>>> x = 123.456
>>> print (x) <br>
123.456 <br>
>>> x = "Esto es una cadena " <br>
>>> print (x + "!") ¡ <br>
Esto es una cadena !<br><br>Se aplican ciertas restricciones con respecto a los caracteres que se pueden usar en los nombres de variables de Python . Los únicos caracteres permitidos son letras, números y guiones bajos. Además, no pueden comenzar con números.
No seguir estas reglas resulta en errores<br>
Intentar hacer referencia a una variable a la que no ha asignado provoca un error .<br>
Puede usar la instrucción del para eliminar una variable , lo que significa que se elimina la referencia del nombre al valor, e intentar usar la variable provoca un error. Las variables eliminadas se pueden reasignar más tarde como de costumbre.<br><br>>>> foo = "una cadena "
>>> foo <br>
'una cadena '<br>
>>> bar <br>
NameError: el nombre 'bar' no está definido <br>
>>> del foo <br>
>>> foo <br>
NameError: el nombre 'foo' no está definido<br><br>También puede tomar el valor de la variable de la entrada del usuario.<br><br>>>> foo = input ("Ingrese un número:")
Ingrese un número: 7 <br>
>>> print (foo) <br>
7<br></p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 4:</span>Estructuras De Control </div>
														<div class="dropdown_item_text">
															<p>Tenemos dos estructuras de selección en Python<br>


<b>if</b><br>

Condición es de tipo booleano, y cuando ésta se cumple se ejecuta el bloque.<br><br>

if condicion:<br>
    bloque<br>

<b>if else</b><br>

Condición es de tipo booleano, cuando ésta se cumple se ejecuta el bloque 1, cuando no se cumple se ejecuta el bloque 2.<br>

if condicion:<br>
    bloque 1<br>
else:<br>
    bloque 2<br><br>

Además, tenemos la siguiente estructura, que abrevia el if else if:<br><br>


<b>if elif [else]</b><br>

if condicion 1:<br>
    bloque 1<br>
elif condicion 2:<br>
    bloque 2<br>
elif condicion 3:<br>
    bloque 3<br>
else:<br>
    bloque 4<br>

<b>Ejemplos</b><br>

1).<br>

num = input('Ingrese un numero: ')<br>
if (num < 0):<br>
    num = num * (-1<br>
print 'El valor absoluto del numero ', num,  ' es ', <br>

2<br>

num = input('Ingrese un numero: ')<br>
if (num % 2 == 0):<br>
    print 'El numero ', num, ' es par.'<br>
else:<br>
    print 'El numero ', num, ' es impar.'<br>

3).<br>

a = 2<br>
b = 5<br>
if (a > b):<br>
    print a, ' es mayor a ', b<br>
elif (b > a):<br>
    print b, ' es mayor a ', a<br>
else<br>
    print a, ' es igual a ', b<br><br>

<b>Iteración</b><br>
Para realizar bucles, Python nos proporciona dos estructuras.<br>


<b>for</b><br>

for i in range(0,cant):<br>
    bloque<br>

Se ejecuta el bloque cant veces, comenzando la variable i adoptando el valor 0; en las siguientes iteraciones el valor se va incrementando hasta tomar el valor cant-1. Sin embargo, el for en Python permite iterar no solo sobre progresiones aritméticas, sino que recorre los elementos de una secuencia, ya sea lista o cadena, en el orden en que estos aparecen en la misma.<br>

La función range se emplea para generar una lista de enteros<br>

range(10)<br>
se corresponde con la lista : [0, 1, 2, 3, 4, 5, 6, 7, 8, 9], ya que el valor final indicado no es parte de la lista generada. Se puede hacer que la lista comience en un número dado:<br>

range(4,10)<br>
[4, 5, 6, 7, 8, 9]: incluso se puede modificar el incremento (step)<br>

range(-2,-10,-2)<br>
[-2, -4, -6, -8]<br><br>

<b>while</b><br>

El bucle while se ejecuta mientras la condición sea cierta, si la condición es falsa al inicio, el bloque no se ejecuta y se pasan a ejecutar las sentencias que le siguen. En Python, cualquier valor entero distinto de cero es verdadero y 0 es falso. La condición también puede ser una lista o cualquier secuencia, siendo la secuencia vacía falsa. El cuerpo del bucle debe estar identado, ya que de este modo Python agrupa las sentencias.<br>

while condicion:<br>
    bloque<br>

<b>Ejemplos</b><br>

1).<br>

for i in range(0,5):<br>
    for j in range(i,5):<br>
        print <br>
    print '\n<br>'</p>
														</div>
													</div>
												</li>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Leccion 5:</span>Modulos</div>
														<div class="dropdown_item_text">
															<p>Cuando creas programas en Python, los archivos generados suelen tener la extensión particular de Python, ya sabes, .py. Los módulos en Python se crean de la misma manera. Es decir, son archivos de código con extensión .py, y ubicados en un directorio donde Python sea capaz de encontrarlos (es decir, el directorio de trabajo actual o listados en sys.path).<br>

Los módulos contienen normalmente sentencias que están relacionadas entre sí. Como he mencionado anteriormente, podemos utilizar módulos en cualquier momento. El uso de un módulo consiste en utilizar el código (es decir, variables, funciones) almacenado en dicho módulo. El proceso de añadir y utilizar dicho código se llama importación.<br><br><b>Creacion De Modulos</b><br>Cuando creas programas en Python, los archivos generados suelen tener la extensión particular de Python, ya sabes, .py. Los módulos en Python se crean de la misma manera. Es decir, son archivos de código con extensión .py, y ubicados en un directorio donde Python sea capaz de encontrarlos (es decir, el directorio de trabajo actual o listados en sys.path).

Los módulos contienen normalmente sentencias que están relacionadas entre sí. Como he mencionado anteriormente, podemos utilizar módulos en cualquier momento. El uso de un módulo consiste en utilizar el código (es decir, variables, funciones) almacenado en dicho módulo. El proceso de añadir y utilizar dicho código se llama importación.<br><br>def print_name(n):<br>
    print 'Hola', n<br><br><b>Importando Modulos</b><br>Si tienes un archivo de Python y quieres añadir el código del módulo que hemos creado anteriormente, lo importaremos utilizando la palabra clave import, tal que así:<br><br>

import myname<br>
name.print_name('Jorge')<br><br>La salida de este script será: Hola Jorge.<br>

Asegúrate de que Python es capaz de encontrar el archivo importado. Como consejo, ponlo en el mismo directorio que el archivo de Python que está utilizando la importación.<br>

Como puedes ver, la importación de un módulo nos permite mejorar nuestro programa añadiendo nuevas funcionalidades al mismo a partir de archivos externos (es decir, módulos).<br>

Sin embargo, ¿que está sucediendo aquí, detrás de bambalinas? Cuando importamos un módulo, Python compila ese módulo y genera un archivo .pyc, y el programa sólo se vuelve a compilar si el .py es más reciente que el archivo .pyc.<br>

Tomemos otro ejemplo, pero esta vez con un módulo integrado en Python. Vamos a elegir el módulo de matemáticas math. En este ejemplo, para un número concreto queremos encontrar el redondeo a la alta (el valor entero más pequeño mayor o igual que el número), el redondeo a la baja (valor de número entero más grande menor que o igual al número), y el valor absoluto de ese número.<br>La salida de este script será: Hola Jorge.<br>

Asegúrate de que Python es capaz de encontrar el archivo importado. Como consejo, ponlo en el mismo directorio que el archivo de Python que está utilizando la importación.<br>

Como puedes ver, la importación de un módulo nos permite mejorar nuestro programa añadiendo nuevas funcionalidades al mismo a partir de archivos externos (es decir, módulos<br>

Sin embargo, ¿que está sucediendo aquí, detrás de bambalinas? Cuando importamos un módulo, Python compila ese módulo y genera un archivo .pyc, y el programa sólo se vuelve a compilar si el .py es más reciente que el archivo .pyc.<br>

Tomemos otro ejemplo, pero esta vez con un módulo integrado en Python. Vamos a elegir el módulo de matemáticas math. En este ejemplo, para un número concreto queremos encontrar el redondeo a la alta (el valor entero más pequeño mayor o igual que el número), el redondeo a la baja (valor de número entero más grande menor que o igual al número), y el valor absoluto de ese número.</p>
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
										<div class="teacher_name"><a href="#">Alan So</a></div>
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
									<p>Hola! Me llamo Alan y sere tu profesor de este lenguaje exactamente C++, soy ingeniero en informatica como tambien de electromecanica recien egresado de Harvard.</p>
								</div>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Puedes ver tambien... </div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_23.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="rubyalum.php">Ruby</a></div>
										<div class="latest_price">Aprenderas.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_14.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="c++alum.php">C++</a></div>
										<div class="latest_price">Manejaras.</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/course_22.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="cssalum.php">Css</a></div>
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
