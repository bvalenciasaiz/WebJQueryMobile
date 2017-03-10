<?php

// ----------------------------ACCESO POR PROCEDIMIENTO-------------------------------
// 1. Realizamos la conexion --> variable1=mysqli_connect (localhost, user, pass). para comprobar si se ha podido conectar o no, se usa la función mysqli_connect_errno() si entra hay que sacarlo mediante un exit();.
// 2. Para conectar con la BBDD --> mysqli_select_db(variablePaso1, nombreBBDD), para comprobar si hay error o no --> or die (mensaje de texto.) para fijar el lenguaje el meta mysqly_set_charset(variablePaso1, "utf8")
// 3. Realizamos una consulta o query a la tabla --> variable3="SELECT * FROM nombreTable"
// 4. Ejecutamos la consulta a la tabla, mysqli_query (), variable4=mysqli_query (cconexion variablepaso1, onsultaRealizada variablepaso3)
// 5. Almacenamos los datos de ejecucion de la consulta, mediante funcion fetch_row(), variable5=mysqli_fetch_row(variablePaso4). Cada vez que se llama ala funcion fetch_row, nos llama a la siguiente linea de la tabla, por lo que lo pondremos d de un bucle para recoger todos los registros de la tabla. el condicionante será mientras que mysqli_fetch_row(variable4)
// 6. cerramos la conexión mediante función mysqli_close(variable1)

$localhost= "localhost";
$usuario="mobile_registro";
$password="";

$conexion=mysqli_connect($localhost,$usuario,$password);


 if(mysqli_connect_errno()){

echo "No pude acceder a BBDD";
 	exit();
 }

// seleccionamos la BBDD
mysqli_select_db($conexion, 'mobile') or die("no fue posible conectar con BBDD");
mysqli_set_charset($conexion, 'utf8');

//consulta a la tabla de la base de datos. 
$consultaBBDD = "SELECT * FROM usuarios";

// ejecutamos el acceso o consulta a base de datos
$ejecucionBBDD = mysqli_query($conexion, $consultaBBDD);

$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];

$acierto = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$ejecutoAcierto = mysqli_query($conexion, $acierto);


if(mysqli_num_rows($ejecutoAcierto)==0){

	$nuevoUser= "INSERT INTO usuarios (usuario,password) values ('$usuario', '$contrasenia')";
	if(mysqli_query($conexion, $nuevoUser)){
		echo "nueva alta";
	}
	else{
		echo "no se produjo nueva alta";
	}
}

for($i=0;$i=mysqli_num_rows($ejecucionBBDD);$i++)

while ($filaBBDD==mysqli_num_rows($ejecucionBBDD)){

	//mysqli_fetch_row($ejecucionBBDD)){

	//	echo "muestro el valor de fila1" . $filaBBDD[1];
	//		echo "muestro el valor de fila2" . $filaBBDD[2];
	echo mysqli_fetch_row($ejecucionBBDD);

if ($filaBBDD[1] ==$usuario && $filaBBDD[2] == $contrasenia){
	echo "usuario registrado";
}else{
	echo "usuario no registrado";

}
}




mysqli_close($conexion);

// try {
// 	// acceo a mi base de batos mediante POO
// 	// debo pasar por paramtros, 
// 	// 1. la ubicacion de la web, 
// 	// 2. el nombre de la base de datos 
// 	// 3. Usuario
// 	// 4. password 
// 	$baseDatos = new PDO ("mysql:host=localhost; dbname=pruebas", "root", "");

// 	// se establecen las propiedades de la conexion mediante setAttribute
// 	// definiendo como nos notificará el error en el caso de que se dé. 
// 	$baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// 	// A continuación se identifican los campos de la BBDD con unos selectores (:nombre y :contrasenia),
// 	// estos los utilizaremos en la futura comprobación con los datos que nos pase el usuario 

// 	$accesoBBDD= "SELECT * FROM usuarios WHERE USUARIO= :nombre AND PASSWORD= :contrasenia";

// 	// realizamos una consulta a nuestra tabla ubicada en la base de datos
// 	$resultado= $baseDatos->prepare($accesoBBDD);

// 	// accedemos a los datos que nos pasa el usuario en el formulario utilizamos $_POST para comprarlo cno los datos en BBDD
// 	$usuario = htmlentities(addslashes($_POST['nombre']));
// 	$pass =htmlentities(addslashes($_POST['contrasenia']));

// 	// compramos los paramétros mediante bindValue
// 	$resultado->bindValue(":nombre", $usuario);
// 	$resultado->bindValue(":contrasenia", $pass);

// 	// accedemos a la base de datos realizando la comprobación mediante método execute()
// 	$resultado->execute();

// 	// para comprobar si hay algún usuario en BBDD con el indicado por el usuario nos ayudarmos la funcion rowCount() si no existe 0
// 	$existe=$resultado->rowCount();

// 		if ($existe == 1){
// 			echo "usuario  existe";

// 		}else {
			
// 			header("location:../formulario.php");
// 		}

// }// cierre del try
// catch (Exception $e){
// 	die ("Error: " . $e->getMessage());

// }
?>