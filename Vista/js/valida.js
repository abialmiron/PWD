//Estos son metodos de validación, acá se pueden agregar validaciones más complejas.
// $.validator.addMethod("formEdad", function (value, element) {
//     var valido = value > 18;
//     return valido;
// }, "Debe ser mayor de edad");

$.validator.addMethod("formString", function (value, element) {
    var pattern = /^[a-zA-Z]+$/;
    return pattern.test(value);
}, "El campo debe tener un solo caracteres (sin números)");

$(function () {
    $("#form").validate({
        rules: {
            //Reglas de validación
            numero: {
                required: true,
            },
            edad: {
                required: true,
                // formEdad: true
            },
            nombre: {
                required: true,
                formString: true
            },
            apellido: {
                required: true,
                formString: true
            },
            hsLunes: {
                required: true,
                min: 0,
                max: 24
            },
            hsMartes: {
                required: true,
                min: 0,
                max: 24
            },
            hsMiercoles: {
                required: true,
                min: 0,
                max: 24
            },
            hsJueves: {
                required: true,
                min: 0,
                max: 24
            },
            hsViernes: {
                required: true,
                min: 0,
                max: 24
            }
        },
        //Mensajes de error
        messages: {
            numero: "Debe ingresar un número.",
            edad: "Debe completar este campo.",
            nombre: "Debe ingresar un nombre.",
            apellido: "Debe ingresar un apellido.",
            direccion: "Debe ingresar una dirección.",
            hsLunes: {
                required: "<p class='text-danger'>Complete el campo.</p>",
                min: "<p class='text-danger'>Ingrese horas válidas.</p>",
                max: "<p class='text-danger'>Máximo 24 horas.</p>",
            },
            hsMartes: {
                required: "<p class='text-danger'>Complete el campo.</p>",
                min: "<p class='text-danger'>Ingrese horas válidas.</p>",
                max: "<p class='text-danger'>Máximo 24 horas.</p>",
            },
            hsMiercoles: {
                required: "<p class='text-danger'>Complete el campo.</p>",
                min: "<p class='text-danger'>Ingrese horas válidas.</p>",
                max: "<p class='text-danger'>Máximo 24 horas.</p>",
            },
            hsJueves: {
                required: "<p class='text-danger'>Complete el campo.</p>",
                min: "<p class='text-danger'>Ingrese horas válidas.</p>",
                max: "<p class='text-danger'>Máximo 24 horas.</p>",
            },
            hsViernes: {
                required: "<p class='text-danger'>Complete el campo.</p>",
                min: "<p class='text-danger'>Ingrese horas válidas.</p>",
                max: "<p class='text-danger'>Máximo 24 horas.</p>",
            }
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

        },
        // Esta función resalta el campo inválido cambiando el borde a rojo
        highlight: function (element) {
            $(element).css("border-color", "red");
        },
        // Esta función desmarca el borde rojo cuando el campo es válido
        unhighlight: function (element) {
            $(element).css("border-color", "");
        }
    });
});
