$(function () {

    $("#form").validate({
        rules: {
            num1: {
                required: true,
            },
            num2: {
                required: true,
            }
        },
        messages: {

            num1: {
                required: "<p class='text-danger'>Ingrese un número.</p>"
            },
            num2: {
                required: "<p class='text-danger'>Ingrese un número.</p>"
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