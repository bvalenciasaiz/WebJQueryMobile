
// se comprueba que el fichero esta cargado y se llama a función,
// desde donde se comprueban todos los sucesos de la página 
$(document).ready(inicia);

	function inicia() {
		
		// se comprueba que han iniciado el proceso de registro para pintar la modal con el acceso a web. 
		$("#formularioRegistro").click(pintaFormulario);
		$("#accesoRegistro").click(pintaRegistro);
		$("#enviarDatos").click(comprobacionAcceso);
		$("#registro").click(comprobacionRegistro);
		$("#enviarDatos").mouseover(colorNegro);
		$("#accesoRegistro").mouseover(colorNegro);
		$("#registro").mouseover(colorGris);
	}

	function pintaFormulario(){
		// Append --> sirve para generar un id no declarado en html y que se mostrará según indicaciones en css. 
		// preguntar a Diego que es más eficiente, tenerlo creado en html y con display:none en css y hacerlo visible o no
		// en función del usuario siin crearlo en html
		$("body").append('<div id="velo"></div>');
			// se accede a propiedad css para acceder visible el formulario de acceso
		// la otra opción. 
		$("#loginUsuario").css("display","in-line").fadeIn(2000);
	}

	function pintaRegistro(){
				
		$("#loginUsuario").css("display","none").fadeOut(1000);
		$("#contenedorRegistroUsuario").css("display","in-line").fadeIn(2000);	
	}

	function colorNegro(){
					
			$(this).css("cursor", "pointer");
			$(this).css("background-color", "#000000");
			$(this).css("color", "white");
			
			$(this).mouseout(colorGris);
	}	

	function colorGris(){
		
			$(this).css("cursor", "pointer");
			$(this).css("background-color", "#eceded");
			$(this).css("color", "black");

			$(this).mouseout(colorNegro);
	}

	function comprobacionAcceso(){

		// expresión lógica para comprobar qeu el email que nos pasan es correcto. copy y paste. 
		var emailCorrecto = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\.\-]+$/;
		var correo = $("#nombre").val();
		var contrasenia = $("#contrasenia").val();
		
		if (correo == ""){
			// aqui debo incluir para que se muestro el icono de danger y al pasar el raton el mensaje de introduce em.amil
			$(".formularioAcceso span#errorEmail").css("display", "in-line").fadeIn(1000);
			$(".formularioAcceso span#errorEmail").mouseover(muestraTextoError);

		}else{					

			$(".formularioAcceso span#errorEmail").css("display", "none").fadeOut(1000);
			if (emailCorrecto.test(correo)==false){
				$(".formularioAcceso span#errorEmail").css("display", "in-line").fadeIn(1000);
				$(".formularioAcceso span#errorEmail").mouseover(muestraCampoIncorrecto);

			}else{
				$(".formularioAcceso span#errorEmail").css("display", "none").fadeOut(1000);
			}
		}

			if (contrasenia== ""){
				// aqui debo incluir para que se muestro el icono de danger y al pasar el raton el mensaje de introduce em.amil
				$(".formularioAcceso span#errorPass").css("display", "in-line").fadeIn(1000);
				$(".formularioAcceso label.texto").css("right", "47%");

				$(".formularioAcceso span#errorPass").mouseover(muestraTextoError);

			}else{
				$(".formularioAcceso span#errorPass").css("display", "none").fadeOut(1000);
				$(".formularioAcceso label.texto").css("right", "52%");
			}
			
			// si los tres condicionantes de cumplen mando el formulario. 
			if (correo != "" && emailCorrecto.test(correo) && contrasenia !="" ){
				
				$(".formularioAcceso").submit();
			}
	}

	function muestraPassIncorrecto (){
		$(this).css("cursor", "pointer");	
		$(this).append('<div id="mensajeError">CONTRASEÑA DISTINTA</div>');
		$(this).mouseout(ocultaTextoError);
	}

	function muestraCampoIncorrecto(){
		$(this).css("cursor", "pointer");	
		$(this).append('<div id="mensajeError">DATO INCORRECTO</div>');
		$(this).mouseout(ocultaTextoError);
	}

	function muestraTextoError(){
		$(this).css("cursor", "pointer");
		$(this).append('<div id="mensajeError">CAMPO OBLIGATORIO</div>');
		$(this).mouseout(ocultaTextoError);
	}

	function ocultaTextoError (){
		$("#mensajeError").remove();
		$("#mensajeErrorPass").remove();
	}

	function comprobacionRegistro(){
		// validación de expresiones regulares, e.amil, teléfono móvil, código postal correcto, y dni y nia
		var emailCorrecto = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\.\-]+$/;
		var telefonoCorrecto = /^[6]{1}[0-9]{8}$/;  
		var cPCorrecto = /^(0[1-9]|[1-4][0-9]|5[0-2])[0-9]{3}$/;
		var nifRegEx = /^[0-9]{8}[A-Z]$/i;
    	var nieRegEx = /^[XYZ][0-9]{7}[A-Z]$/i;
		 
		var mail = $("#direccionEmail").val();
		var pass = $("#passUser").val();
		var pass2 = $("#passAgain").val();
		var nombre = $("#nombreUser").val();
		var apellidos = $("#apellidoUser").val();
		var dni = $("#dni").val();
		var genero = $("input[type='radio']:checked");
		var direccion = $("#direccion").val();
		var localidad = $("#localidad").val();
		var codigoPostal = $("#codigoPostal").val();
		var provincia = $("#provincia").val();
		var telefonoMovil = $("#telefonoMovil").val();
		var aceptoPolitica = $("input[type='checkbox']:checked");


		if (telefonoMovil== ""){
			$(".columDos span#errorTM").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorTM").mouseover(muestraTextoError);
		}else{ 
			$(".columDos span#errorTM").css("display", "none").fadeOut(1000);
			if (!telefonoCorrecto.test(telefonoMovil)){
				$(".columDos span#errorTM").css("display", "in-line").fadeIn(1000);
				$(".columDos span#errorTM").mouseover(muestraCampoIncorrecto);
			}else{
				$(".columDos span#errorTM").css("display", "none").fadeOut(1000);
			}
		}

		if (genero.length == 0){
			$(".columDos span#errorGenero").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorGenero").css("top", "-2em");
			$(".columDos span#errorGenero").mouseover(muestraTextoError);
			$(".columDos span#errorGenero").css("font-size","0.9em");
			$(".columDos label.etiqueta").css("top","-1.25em");
			$(".columDos input.sexo").css("top","0.1em");
		}else{
			$(".columDos span#errorGenero").css("display", "none").fadeOut(1000);
			$(".columDos label.etiqueta").css("top","-1.25em");
			$(".columDos input.sexo").css("top","0.1em");
		}

		if (aceptoPolitica.length == 0){
			$(".columDos span#errorPrivacidad").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorPrivacidad").css("right", "10%");
			$(".columDos span#errorPrivacidad").css("top", "-2%");
			$(".columDos span#errorPrivacidad").mouseover(muestraTextoError);
			$(".columDos label.texto").css("top", "-0.3em");
			if (telefonoMovil !="" && telefonoCorrecto.test(telefonoMovil))
				$(".columDos label.texto").css("top", "1em");
		}else{
			$(".columDos span#errorPrivacidad").css("display", "none").fadeOut(1000);
			$(".columDos label.texto").css("top", "-0.3em");
			if (telefonoMovil !="" && telefonoCorrecto.test(telefonoMovil)){
				$(".columDos label.texto").css("top", "1em");
			}
			}
	
		if (localidad== ""){
			$(".columDos span#errorLocalidad").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorLocalidad").mouseover(muestraTextoError);
		}else{
			$(".columDos span#errorLocalidad").css("display", "none").fadeOut(1000);
		}

		if (codigoPostal== ""){
			$(".columDos span#errorCP").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorCP").mouseover(muestraTextoError);
		}else{
			$(".columDos span#errorCP").css("display", "none").fadeOut(1000);
			if(!cPCorrecto.test(codigoPostal)){
				$(".columDos span#errorCP").css("display", "in-line").fadeIn(1000);
				$(".columDos span#errorCP").mouseover(muestraCampoIncorrecto);
			}else{
				$(".columDos span#errorCP").css("display", "none").fadeOut(1000);
			}
		}
		
		if (direccion== ""){
			$(".columDos span#errorDireccion").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorDireccion").mouseover(muestraTextoError);
		}else{
			$(".columDos span#errorDireccion").css("display", "none").fadeOut(1000);
		}

		if (dni== ""){
			$(".columDos span#errorDNI").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorDNI").mouseover(muestraTextoError);
		}else{
			$(".columDos span#errorDNI").css("display", "none").fadeOut(1000);
			$(".columDos label.etiqueta").css("top","0em");
			$(".columDos input.sexo").css("top","1em");
			$(".columDos span#errorGenero").css("top", "-1em");
			
		}

		if (apellidos== ""){
			$(".columDos span#errorApellido").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorApellido").mouseover(muestraTextoError);
		}else{
			$(".columDos span#errorApellido").css("display", "none").fadeOut(1000);
		}

		if (nombre== ""){
			$(".columDos span#errorNombre").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorNombre").mouseover(muestraTextoError);

		}else{
			$(".columDos span#errorNombre").css("display", "none").fadeOut(1000);
		}

		if (pass2== ""){
			$(".columUna span#errorPass2").css("display", "in-line").fadeIn(1000);
			$(".columUna span#errorPass2").mouseover(muestraTextoError);

		}else{
			$(".columUna span#errorPass2").css("display", "none").fadeOut(1000);
			if (pass != pass2){
				$(".columUna span#errorPass2").css("display", "in-line").fadeIn(1000);
				$(".columUna span#errorPass2").mouseover(muestraPassIncorrecto);
			}else {
				$(".columUna span#errorPass2").css("display", "none").fadeOut(1000);
			}
				
			}
		if (mail == ""){
			$(".columUna span#errorEmail").css("display", "in-line").fadeIn(1000);
			$(".columUna span#errorEmail").mouseover(muestraTextoError);

		}else{					

			$(".columUna span#errorEmail").css("display", "none").fadeOut(1000);
			if (emailCorrecto.test(mail)==false){
				$(".columUna span#errorEmail").css("display", "in-line").fadeIn(1000);
				$(".columUna span#errorEmail").mouseover(muestraCampoIncorrecto);
			}else{
				$(".columUna span#errorEmail").css("display", "none").fadeOut(1000);
				}
		}

		if (pass== ""){
			$(".columUna span#errorPass").css("display", "in-line").fadeIn(1000);
			$(".columUna span#errorPass").mouseover(muestraTextoError);

		}else{
			$(".columUna span#errorPass").css("display", "none").fadeOut(1000);
		}

		if (provincia== ""){
			$(".columDos span#errorProvincia").css("display", "in-line").fadeIn(1000);
			$(".columDos span#errorProvincia").mouseover(muestraTextoError);

		}else{
			$(".columDos span#errorProvincia").css("display", "none").fadeOut(1000);
		}

				// si los condicionantes condicionantes de cumplen mando el formulario. 
			if (mail != "" && emailCorrecto.test(mail) && pass !="" && pass==pass2 && pass2 !="" 
				&& nombre != "" && apellidos != "" && dni != "" && genero.length >0 && provincia != ""
				&& direccion != "" && localidad != "" && codigoPostal!= "" && cPCorrecto.test(codigoPostal)
				&& provincia != "" && telefonoMovil != "" && telefonoCorrecto.test(telefonoMovil) 
				&& aceptoPolitica.length >0){
								
				$("#registroUser").submit();
			}
	}