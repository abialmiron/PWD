$(function () {
    $("#form").validate({
        rules: {
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
        messages: {
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
