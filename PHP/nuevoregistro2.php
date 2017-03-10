 
<?php 
echo "Hago conexión de base de datos";
// Recibimos por POST los datos procedentes del formulario   

$email = $_POST['email'];
$usuario_registro = $_POST['usuario_registro'];
$contrasenia = $_POST['password_registro'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$localidad = $_POST['localidad'];
$cp = $_POST['cp'];
$provincia = $_POST['provincia'];
$telefono = $_POST['telefono'];
$sexo_h = $_POST['male'];
$sexo_m = $_POST['female'];


//-----------------------------------abre_conexion.php ---------------------------------------------------

// Parametros a configurar para la conexion de la base de datos 

$hotsdb = "localhost";    // sera el valor de nuestra servidor 
$basededatos = "mobile";    // sera el valor de nuestra BD 

$usuariodb = "mobile_registro";    // sera el valor de nuestro usuario 
$clavedb = "";    // sera el valor de nuestra contraseña

$tabla_db = "usuarios";    // sera el valor de una tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysqli_connect($hotsdb,$usuariodb,$clavedb) or die ("Conexión denegada"); 
   mysqli_select_db($basededatos, $conexion_db)  or die ("Error al conectar a la base de datos"); 

// -------------------------------------------------------------------------------------------------------    
$GRABAR_SQL = "INSERT INTO usuarios (email, usuario, contrasenia, nombre, apellidos, dni, direccion, localidad, cp, provincia, telefono, sexo_h, sexo_m) VALUES ('$email', '$usuario_registro', '$password_registro', '$nombre', '$apellidos', '$dni', '$direccion', '$localidad', '$cp', '$provincia', '$telefono', '$male', '$female')";   
mysqli_query($GRABAR_SQL);  

// -----------------------------------cierra_conexion.php ------------------------------------------------

mysqli_close($conexion_db); 

//--------------------------------------------------------------------------------------------------------

// Confirmamos que el registro ha sido insertado con exito   

echo "   
<p>Los datos han sido guardados con exito.</p>    
";   


?> 



