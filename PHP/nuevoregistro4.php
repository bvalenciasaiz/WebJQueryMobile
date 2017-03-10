<!-- <?php

//Establecemos la conexión con el servidor y con la base de datos

$conexion = mysqli_connect("localhost", "mobile_registro", "") or die ("No fue posible conectar con el servidor"); 

echo "Conexión establecida con servidor";

mysqli_select_db( $conexion, 'mobile') or die ('No fue posible conectar con la BBDD');

echo "Conexión establecida con BBDD";

//Introducimos los datos en la tabla que hemos creado (en este caso "usuarios")

$email = $_GET['email'];
$user = $_GET['usuario_registro'];
$pass = $_GET['password_registro'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$dni = $_GET['dni'];
$direccion = $_GET['direccion'];
$localidad = $_GET['localidad'];
$cp = $_GET['cp'];
$provincia = $_GET['provincia'];
$telefono = $_GET['telefono'];
$sexo_h = $_GET['male'];
$sexo_m = $_GET['female'];

$query = "INSERT INTO usuarios (email, usuario, contrasenia, nombre, apellidos, dni, direccion, localidad, cp, provincia, telefono, sexo_h, sexo_m) VALUES ('$email', '$user', '$pass', '$nombre', '$apellidos', '$dni', '$direccion', '$localidad', '$cp', '$provincia', '$telefono', '$sexo_h', '$sexo_m')";

mysql_query($conexion, $query) or die('error en la carga de datos');

//Cerramos la conexión

mysqli_close($conexion);


?> -->

<?php 

//-----------------------------------abre_conexion.php ---------------------------------------------------

// Parametros a configurar para la conexion de la base de datos 

echo "accede a fichero nuevoRegistro4";

$hotsdb = "localhost";    // sera el valor de nuestra servidor 
$basededatos = "mobile";    // sera el valor de nuestra BD 

$usuariodb = "mobile_registro";    // sera el valor de nuestro usuario 
$clavedb = "";    // sera el valor de nuestra contraseña

$tabla_db = "usuarios";    // sera el valor de una tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysqli_connect($hotsdb,$usuariodb,$clavedb) or die ("Conexión denegada"); 
    mysqli_select_db($conexion_db,$basededatos) or die ("Error al conectar a la base de datos"); 
echo "acceso a BBDD";


// Recibimos por POST los datos procedentes del formulario   

$email = $_GET['e-mail'];
$usuario_registro = $_GET['usuario_registro'];
$contrasenia = $_GET['password_registro'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$dni = $_GET['dni'];
$direccion = $_GET['direccion'];
$localidad = $_GET['localidad'];
$cp = $_GET['cp'];
$provincia = $_GET['provincia'];
$telefono = $_GET['telefono'];
$sexo_h = $_GET['male'];
$sexo_m = $_GET['female'];


echo "muestro varioables";
echo $_POST["e-mail"];
echo "muestro varioables despues de post";
echo $_GET["e-mail"];
echo "muestro varioables despues de get";
echo $_REQUEST["e-mail"];
echo "muestro varioables despues de request";
echo $email;
echo $usuario;
echo $password;
echo "fin muestro varioables";

// -------------------------------------------------------------------------------------------------------    
$GRABAR_SQL = "INSERT INTO usuarios (email, usuario, contrasenia, nombre, apellidos, dni, direccion, localidad, cp, provincia, telefono, sexo_h, sexo_m) VALUES ('$email', '$usuario_registro', '$contrasenia', '$nombre', '$apellidos', '$dni', '$direccion', '$localidad', '$cp', '$provincia', '$telefono', '$male', '$female')";   
mysqli_query($conexion_db,$GRABAR_SQL);  

// -----------------------------------cierra_conexion.php ------------------------------------------------

mysqli_close($conexion_db); 

//--------------------------------------------------------------------------------------------------------

// Confirmamos que el registro ha sido insertado con exito   

echo "Los datos han sido guardados con exito.";   


?> 