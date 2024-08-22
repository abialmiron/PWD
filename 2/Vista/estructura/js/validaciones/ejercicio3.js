// Método personalizado para verificar que la contraseña no sea igual al usuario
$.validator.addMethod("distintoA", function (value, element, param) {
    return this.optional(element) || value !== $(param).val();
});

$(function () {
    $("#form").validate({
        rules: {
            usuario: {
                required: true,
            },
            pass: {
                required: true,
                minlength: 8,
                distintoA: "#usuario"
            }
        },
        messages: {
            usuario: {
                required: "<p class='text-danger'>Campo requerido.</p>"
            },
            pass: {
                required: "<p class='text-danger'>Campo requerido.</p>",
                minlength: "<p class='text-danger'>La contraseña debe tener mínimo 8 caracteres.</p>",
                distintoA: "<p class='text-danger'>La contraseña no debe coincidir con el nombre de usuario.</p>"
            }
        },
        // Esta función resalta el campo inválido cambiando el borde a rojo
        highlight: function (element) {
            $(element).css("border-color", "red");
        },
        // Esta función desmarca el borde rojo cuando el campo es válido
        unhighlight: function (element) {
            $(element).css("border-color", "");
        },
        errorPlacement: function (error, element) {
            // Inserta el mensaje de error en el contenedor específico
            error.appendTo(element.closest('.form-floating').find('.mensaje-error'));
        }
    });
});