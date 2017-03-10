<!DOCTYPE html>
<html>
<head>
	<title>PAGINA PRINCIPAL DE VALIDACION</title>
	
	<meta charset="utf-8">

	<!-- Para obtener iconos de web, icomoon.io
	1. wwww.icomoon.io, acceso a la web. Acceso a iconos app, añado librerias y selecciono iconos. 
	2. Los genero como Fonts y desde preferences le pongo el nombre que quiera y lo descargo desde la parte de fonts. 
	3. Debo llevarme el css de los ficheros descargados y la carpeta fonts. 
	4. Debo modificar la ruta en el fichero css de donde se encuentran la carpeta fonts
	5. Para que se vea en mi web, debo indicar la ruta donde se encuentra el fichero css. También debo ayudarme del fichero demo, ubicado en la descarga anterior, donde tendré el nombre de todos los iconos que debo mostrar. 
	-->

 	<link rel="stylesheet" type="text/css" href="CSS/demo.css">
	<link rel="stylesheet" type="text/css" href="CSS/estiloAcceso.css">
	<!-- tengo que comprobar si puedo meter varios bancos de imagenes en el mismo css
	<link rel="stylesheet" type="text/css" href="CSS/estiloIconos.css">-->

	<!-- En relación a JavaScript
	1. Se debe incluir la clase jquery min, para que todo el javaScript tenga funcionabilidad
	2. A continuación se cargará java script que contendra toda las funcionabilidades definidas 
	-->
	<script type="text/javascript" src="JS/jquery-1.10.1.min.js" language="JavaScript"></script>
	 <script type="text/javascript" src="JS/jquery-2.0.3.min.js" language="JavaScript"></script>
	<script type="text/javascript" language="JavaScript" src="JS/principalJavaScript.js"></script>
</head>
<body>

<!-- creo una lista donde ubicare los demás elementos de la linea de mandos
1. Acceso a usuario
2. Búsqueda
3. Cesta de la compra
 -->
		<div id="loginUsuario">
			
			<h5>Identifícate</h5>
			<a href="indexMobile.php" class="icon icon-cancel-circle"></a><br>
			<!-- Para el formulari no debo poner ninguna classe en etiqueta deben ir en los input, con las siguientes normas
			1. todos los input dentro una class con el mismo nombre para definir su formato en css
			2. Se crear un div después de cada input con el fin de definir tb el mismo mensaje para todos los input no rellenos y un mensaje para que sea uno u otro dependindo del campo sin rellenar
			 -->
			<form class="formularioAcceso" method="post" action="PHP/accesoBueno.php">
				
				<!-- el for del label nos lleva al input declarado 
				1. todos los input tendran la misma class para definirla en css de la misma forma
				2. el id será distinto porque con el obtendremos los datos de comprobación-->

				<label for="nombre"> DIRECCION DE E-MAIL</label><br>
				<!-- preguntar a Diego, por qué al poner en value php, sale en el campo input como dato -->
				<input type="text" id="nombre" class="inputRegistro" name="nombre" value=""/>
				<span class="icon icon-warning" id="errorEmail"></span>

				<label for="contrasenia"> CONTRASEÑA</label><br>
				<!-- preguntar a Diego, por qué al poner en value php, sale en el campo input como dato -->
				<input type="password" id="contrasenia" class="inputRegistro" name="contrasenia" value=""/>
				<span class="icon icon-warning" id="errorPass"></span>

				<!-- por qué no se ve el radio button -->
				<input type="checkbox" id="recordarUsuario" class="inputRegistro" name="remember" value="recordarUsuario"/>
				<label class="texto"> RECORDAR USUARIO</label>

				<!-- por qué si el input es submit me borra todo el contenido, velo y formulario y si es tipo button no.  
				1. Tipo button me hace los comprobantes incluidos en javascript.
				2. Tipo button cuando están todos los datos actualizados, no llama a fichero acceso.php. 
				3. Tipo submit, no me comprueba nada, lo único que hace es mandar el formulario, sin comprobar si los datos están proporcionados o no. 
				4. Tipo submit, tp me accede a fichero acceso.php
				-->
 				<input type="button" id="enviarDatos" class="boton" name="botonAcceso" value="IDENTIFÍCATE"/> 

 				<label class="noRegistrado">Si aún no eres usuario, registrate aquí</label>
				<input type="button" id="accesoRegistro" class="boton" name="botonRegistro" value="REGÍSTRATE"/> 
		<!--
		<button type="button" id="pulsado">REGISTRATE</button>
		<input type="submit" id="enviarDatos" class="boton" value="Registro"/> 
		-->
			</form>

		</div>
		<div id="contenedorRegistroUsuario">
			<div id="datosUsuario">
					<h5>Regístrate</h5>
					<a href="indexMobile.php" class="icon icon-cancel-circle"></a><br>
					<form id="registroUser" method="post" action="PHP/registro.php">
					
					<div class="columUna"> 
						<ul>
							<li>
								<label for="direccionEmail"> DIRECCIÓN DE E-MAIL
									<input type="e-mail" id="direccionEmail" name="mail" value=""/>
									<span class="icon icon-warning" id="errorEmail"></span>
								</label>
							</li>
							<li>
								<label for="passUser"> CONTRASEÑA
									<input type="password" id="passUser" name="pass" value=""/>
									<span class="icon icon-warning" id="errorPass"></span>
								</label>
							</li>
							<li>
								<label for="passAgain"> REPETIR CONTRASEÑA
									<input type="password" id="passAgain" name="pass2" value=""/>
									<span class="icon icon-warning" id="errorPass2"></span>
								</label>
							</li>
							<li>
								<img class="imagenMujer" src="imagenes/mujer.jpg">
							</li>


					</div>
					<div class="columDos">
							<li>
								<label for="nombreUser"> NOMBRE
									<input type="text" id="nombreUser" name="nombreUser" value=""/>
									<span class="icon icon-warning" id="errorNombre"></span>
								</label>
							</li>
							<li>
								<label for="apelliUser"> APELLIDOS
									<input type="text" id="apellidoUser" name="apellidoUser" value=""/>
									<span class="icon icon-warning" id="errorApellido"></span>
								</label>
							</li>
							<li>
								<label for="dni"> DNI
									<input type="text" id="dni" name="dni" value="" />
									<span class="icon icon-warning" id="errorDNI"></span>
								</label>
							</li>
							<li>
								<input type="radio" id="sexoH" class="sexo" name="genero" value="HOMBRE"/>
									<label class="etiqueta">HOMBRE</label><br>
								<input type="radio" id="sexoM" class="sexo" name="genero" value="MUJER" />
									<label class="etiqueta">MUJER</label><br>
								<span class="icon icon-warning" id="errorGenero"></span>
							</li>
							<br>
							<br>
							<li>
								<label for="direccion"> DIRECCIÓN
									<input type="text" id="direccion" name="direccion" value=""/>
									<span class="icon icon-warning" id="errorDireccion"></span>
								</label>
							</li>
							<li>
								<label for="localidad"> LOCALIDAD
									<input type="text" id="localidad" name="localidad" value="" />
									<span class="icon icon-warning" id="errorLocalidad"></span>
								</label>
							</li>
							<li>
								<label for="codigoPostal"> CÓDIGO POSTAL
									<input type="text" id="codigoPostal" name="codigoPostal" value="" />
									<span class="icon icon-warning" id="errorCP"></span>
								</label>
							</li>
							<li>
								<label> PROVINCIA
									<input type="text" id="provincia" name="provincia" value="" />
									<span class="icon icon-warning" id="errorProvincia"></span>
								</label>
							</li>
							<li>
								<label for="telefonoMovil"> TELÉFONO MÓVIL
									<input type="text" id="telefonoMovil" name="telefonoMovil" value="" />
									<span class="icon icon-warning" id="errorTM"></span>
								</label>
							</li>
							<li>
								<label class="texto"> HE LEIDO Y ACEPTO LA POLÍTICA DE PRIVACIDAD
									<input type="checkbox" id="politicaPrivacidad" name="politicaPrivacidad" value="" />
									<span class="icon icon-warning" id="errorPrivacidad"></span>
								</label>
							</li>
							<input type="button" id="registro" class="boton" name="registroUsuario" value="REGÍSTRATE"/>
					</div>
						</ul>
					</form>
			</div>
		</div>
		
								
</body>
</html>