<?php


echo "falta hacer el acceso a BBDD y dar el alta al usuario";

// if(isset($_POST['botonRegistro'])){

// 	if($_POST['mail'] == ""){
// 		echo "Por favor introduza e.amil";

// 	}else if($_POST['pass'] == ""){
// 		echo "Por favor introduza pass";

// 	}else if ($_POST['pass2']== ""){
// 		echo "Por favor introduza pass igual al anterior";

// 	}else if ($_POST['nombreUser'] == ""){
// 		echo "Por favor introduza nombre de usuario";

// 	}else if ($_POST['apellidoUser'] == ""){
// 		echo "Por favor introduza apellido de usuario";

// 	}else if ($_POST['dni'] == ""){
// 		echo "Por favor introduza dni";

// 	}else{
// 		$mail=$_POST['mail'];
// 		$pass=$_POST['pass'];
// 		$pass2=$_POST['pass2'];
// 		$nombre=$_POST['nombreUser'];
// 		$apellido=$_POST['apellidoUser'];
// 		$dni=$_POST['dni'];
// 		$miEmail= "angelma83@gmail";
// 		$subject="E-mail de registro";

// 		//cabecera

// 		$cabecera = "Mensaje enviado por: $nombre\n\r";
// 		$cabecera .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
//         $cabecera .= 'MIME-Version: 1.0' . "\n"; 
//         $cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

//         if (mail($miEmail, $subject, message)) {
//         	echo "El e.mail se ha mandado correctamente";
// 				// reseteo los valores para que no puedan mezclarse con el acceo de otra persona. 
// 			$mail=$_POST['mail'];
// 			$pass=$_POST['pass'];
// 			$pass2=$_POST['pass2'];
// 			$nombre=$_POST['nombreUser'];
// 			$apellido=$_POST['apellidoUser'];
// 			$dni=$_POST['dni'];

// 		// reseteo los valores

// 			$_POST['mail']="";
// 			$_POST['pass']="";
// 			$_POST['pass2']="";
// 			$_POST['nombreUser']="";
// 			$_POST['apellidoUser']="";
// 			$_POST['dni']="";

// 	        }else {
// 	        	echo "No se puedo enviar el mensaje";
// 	        }

// 	}

// }else{
// 	echo "No has introducido datos"
// }

?>