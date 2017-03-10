$(document).ready(function () {
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var dnireg = /(^([0-9]{8,8})+([a-zA-Z])|^)$/;
    var telefonoreg = /(^([0-9]{9,9})|^)$/;
    $(".boton_registro").click(function (){
        $(".error").remove();
        if( $(".email").val() == "" || !emailreg.test($(".email").val()) ){
            $(".email").focus().after("<span class='error'>Ingrese un email correcto</span>");
            return false;
        }else if( $(".usuario_registro").val() == ""){
            $(".usuario_registro").focus().after("<span class='error'>Ingrese su nombre de usuario</span>");
            return false;
        }else if( $(".password_registro").val() == ""){
            $(".password_registro").focus().after("<span class='error'>Ingrese su contraseña</span>");
            return false;
       
        }else if( $(".nombre").val() == ""){
            $(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
            return false;
        }else if( $(".apellidos").val() == ""){
            $(".apellidos").focus().after("<span class='error'>Ingrese sus apellidos</span>");
            return false;
        }else if( $(".dni").val() == "" || !dnireg.test($(".dni").val()) ){
            $(".dni").focus().after("<span class='error'>Ingrese su DNI</span>");
            return false;
        }else if( $(".telefono").val() == "" || !telefonoreg.test($(".telefono").val()) ){
            $(".telefono").focus().after("<span class='error'>Ingrese su número de teléfono</span>");
            return false;

        }
    });

    $(".usuario_registro, .password_registro, .nombre, .apellidos, .telefono").keyup(function(){
        if( $(this).val() != "" ){
           	$(".error").fadeOut();
            return false;
        }
    });

    $(".telefono").keyup(function(){
    	if( $(this).val() != "" && telefonoreg.test($(this).val())){
	        $(".error").fadeOut();
	        return false;
    }

    });

    $(".dni").keyup(function(){
    	if( $(this).val() != "" && dnireg.test($(this).val())){
	        $(".error").fadeOut();
	        return false;
    }

    });

    $(".telefono").keyup(function(){
    	if( $(this).val() != "" && telefonoreg.test($(this).val())){
	        $(".error").fadeOut();
	        return false;
    }

    });
});