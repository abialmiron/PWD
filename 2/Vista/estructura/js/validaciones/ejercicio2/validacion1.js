$(function () {
    $("#form").validate({
        rules: {
            numero: {
                required: true,
            },
        },
        messages: {
            numero: {
                required: "<p class='text-danger'>Número requerido.</p>"
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