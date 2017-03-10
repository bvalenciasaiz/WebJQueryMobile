$(document).ready(function () {
  
    $(".boton").click(function (){
        $(".error").remove();
        if( $(".usuario").val() == "" ){
            $(".usuario").focus().after("<span class='error'>Ingrese su nombre de usuario</span>");
            return false;
        }else if( $(".password").val() == ""){
            $(".password").focus().after("<span class='error'>Ingrese su contraseña</span>");
            return false;
        }
    });

    $(".usuario, .password").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
});