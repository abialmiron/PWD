$(function () {

    $("#form").validate({
        rules: {
            edad: {
                required: true,
                min: 0,
                max: 150
            },
            estudia: {
                required: true,
            }
        },
        messages: {
            edad: {
                required: "<p class='text-danger'>Campo requerido.</p>",
                min: "<p class='text-danger'>Ingrese una edad válida.</p>",
                max: "<p class='text-danger'>Ingrese una edad válida.</p>"
            },
            estudia: {
                required: "<p class='text-danger'>Seleccione una opción.</p>"
            },
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