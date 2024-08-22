//Agrego método para validar que un input permita solo letras y espacios
$.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
}, "Solo se permiten letras y espacios.");

$(function () {

    $("#form").validate({

        rules: {
            nombre: {
                required: true,
                lettersonly: true
            },
            apellido: {
                required: true,
                lettersonly: true
            },
            edad: {
                required: true,
                min: 0,
                max: 150,
            },
            direccion: {
                required: true,
            },
            estudios: true

        },
        messages: {
            nombre: {
                required: "<p class='text-danger'>Campo requerido.</p>",
                lettersonly: "<p class='text-danger'>Ingrese un nombre válido.</p>"
            },
            apellido: {
                required: "<p class='text-danger'>Campo requerido.</p>",
                lettersonly: "<p class='text-danger'>Ingrese un apellido válido.</p>"
            },
            edad: {
                required: "<p class='text-danger'>Campo requerido.</p>",
                min: "<p class='text-danger'>Ingrese una edad válida.</p>",
                max: "<p class='text-danger'>Ingrese una edad válida.</p>"
            },
            direccion: {
                required: "<p class='text-danger'>Campo requerido.</p>"
            },
            estudios: {
                required: "<p class='text-danger'>Seleccione una opción.</p>"
            }
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