<?php

$conexion=mysqli_connect("localhost", "mobile_registro", "");

if ($connect) {
		echo "conexion exitosa. <br />";

		$email = $_POST['email'];
		$user = $_POST['usuario_registro'];
		$pass = $_POST['password_registro'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$dni = $_POST['dni'];
		$direccion = $_POST['direccion'];
		$localidad = $_POST['localidad'];
		$cp = $_POST['cp'];
		$provincia = $_POST['provincia'];
		$telefono = $_POST['telefono'];
		$hombre = $_POST['male'];
		$mujer = $_POST['female'];

		$consulta=insert into "alumnos" values ('$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Acudiente','$Nacido','$Codigo','$Sexo','$Grado','$Ingreso','$index');
		
		$resultado=mysqli_query($conexion,$consulta);
		
		if ($resultado) {
			echo "perfil almacenado. <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}
		
		if (mysqli_close($conexion)){ 
			echo "desconexion realizada. <br />";
		} 
		else {
			echo "error en la desconexión";
		}
}

// if(mysqli_connect_errno()){

// echo "No pude acceder a BBDD";
//  	exit();
//  }

mysqli_select_db('mobile', $conexion) or die ('No fue posible conectar con BBDD');

// $email = $_POST['email'];
// $user = $_POST['usuario_registro'];
// $pass = $_POST['password_registro'];
// $nombre = $_POST['nombre'];
// $apellidos = $_POST['apellidos'];
// $dni = $_POST['dni'];
// $direccion = $_POST['direccion'];
// $localidad = $_POST['localidad'];
// $cp = $_POST['cp'];
// $provincia = $_POST['provincia'];
// $telefono = $_POST['telefono'];
// $male = $_POST['male'];
// $female = $_POST['female'];

echo "Entro aqui";

$query = "INSERT INTO usuarios (email, usuario, contrasenia, nombre, apellidos, dni, direccion, localidad, cp, provincia, telefono, sexo_h, sexo_m) VALUES ('$email', '$user', '$pass', '$nombre', '$apellidos', '$dni', '$direccion', '$localidad', '$cp', '$provincia', '$telefono', '$male', '$female')";

echo "despues carga datos";

mysql_query($query,$conexion) or die('error en la carga de datos');

//------------------------- https://www.youtube.com/watch?v=fOqPD-tpPj0 ----------------------------------

//---------------------http://www.aprenderaprogramar.com/foros/index.php?topic=2302.0---------------------

?>