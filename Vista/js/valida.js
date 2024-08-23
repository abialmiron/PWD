//Estos son metodos de validación, acá se pueden agregar validaciones más complejas.
$.validator.addMethod("formEdad", function (value, element) {
    var valido = value > 18;
    return valido;
  }, "Debe ser mayor de edad");

$.validator.addMethod("formString", function (value, element) {
    var pattern = /^[a-zA-Z]+$/;
    return pattern.test(value);
  }, "El campo debe tener un solo caracteres (sin números)");

$(function () {
    $("#form").validate({
        rules: {
            //Reglas de validación
            numero:{
                required: true,
            }, 
            edad:{
                required: true,
                formEdad: true
            },
            nombre:{
                required: true,
                formString:true
            },
            apellido:{
                required: true,
                formString:true
            }
        },
        //Mensajes de error
        messages: {
            numero:"Debe ingresar un número.",
            edad:"Debe completar este campo y ser mayor de edad.",
            nombre:"Debe ingresar un nombre.",
            apellido:"Debe ingresar un apellido.",
            direccion:"Debe ingresar una dirección.",
        },
        // Esta función realiza el bootstrap de error
        highlight: function (element) {
            $(element).addClass('is-invalid');
            $(element).removeClass("is-valid");
        },
        // Esta función realiza el bootstrap de exito
        unhighlight: function (element) {
            $(element).addClass('is-valid');
            $(element).removeClass("is-invalid");
            
        }
    });
});
