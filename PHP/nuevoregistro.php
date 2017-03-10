<?php

$conexion=mysqli_connect('localhost', 'mobile_registro', '');

if(mysqli_connect_errno()){

echo "No pude acceder a BBDD";
 	exit();
 }

mysqli_select_db('mobile', $conexion) or die ('No fue posible conectar con BBDD');

$email = mysql_real_escape_string($_POST['email']);
$user = mysql_real_escape_string($_POST['usuario_registro']);
$pass = mysql_real_escape_string($_POST['password_registro']);
$nombre = mysql_real_escape_string($_POST['nombre']);
$apellidos = mysql_real_escape_string($_POST['apellidos']);
$dni = mysql_real_escape_string($_POST['dni']);
$direccion = mysql_real_escape_string($_POST['direccion']);
$localidad = mysql_real_escape_string($_POST['localidad']);
$cp = mysql_real_escape_string($_POST['cp']);
$provincia = mysql_real_escape_string($_POST['provincia']);
$telefono = mysql_real_escape_string($_POST['telefono']);
$hombre = mysql_real_escape_string($_POST['male']);
$mujer = mysql_real_escape_string($_POST['female']);


//PRUEBA diferente para ver si el problema es por jquery mobile

$sql = "SELECT * FROM usuarios WHERE email='$email', usuario='$user', contrasenia='$pass', nombre='$nombre', apellidos='$apellidos', dni='$dni', direccion='$direccion', localidad='$localidad', cp='$cp', provincia='$provincia', telefono='$telefono', sexo_h='$male', sexo_m='$female'";
 
if ($resultado = mysql_query($sql, $conexion)){
    if (mysql_num_rows($resultado) > 0){
        echo true;
    }
}
else{
    echo false;
}
mysql_close($con);
 


// echo "Entro aqui";
// $query = "INSERT INTO usuarios (email, usuario, contrasenia, nombre, apellidos, dni, direccion, localidad, cp, provincia, telefono, sexo_h, sexo_m) VALUES ('$email', '$user', '$pass', '$nombre', '$apellidos', '$dni', '$direccion', '$localidad', '$cp', '$provincia', '$telefono', '$male', '$female')";
// echo "despues carga datos";
// mysql_query($query) or die('error en la carga de datos');

//------------------------- https://www.youtube.com/watch?v=fOqPD-tpPj0 ----------------------------------

?>