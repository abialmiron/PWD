// Método personalizado para verificar que la contraseña no sea igual al usuario
$.validator.addMethod("distintoA", function (value, element, param) {
    return this.optional(element) || value !== $(param).val();
});

// Método personalizado para verificar que el input solo contenga letras y números
$.validator.addMethod("letrasNumeros", function (value, element) {
    return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
});

// Método personalizado para verificar que el input respete el formato de fecha (AAAA-MM-DD)
$.validator.addMethod("formatoFecha", function (value, element) {
    return this.optional(element) || /^\d{4}-\d{2}-\d{2}$/.test(value);
});

console.log("entra");

$(function () {

    $("#form").validate({
        rules: {
            //Reglas de validación
            numero: {
                required: true,
            },
            edad: {
                required: true,
                digits: true,
                min: 0,
                max: 120
            },
            nombre: {
                required: true,
                maxlength: 50,
            },
            apellido: {
                required: true,
                maxlength: 50,
            },
            direccion: {
                required: true,
            },
            estudios: {
                required: true,
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
            },
            usuario: {
                required: true,
            },
            pass: {
                required: true,
                letrasNumeros: true,
                minlength: 8,
                distintoA: "#usuario"
            },
            archivo: {
                required: true,
            },
            patente: {
                required: true,
                maxlength: 10,
            },
            dniDuenio: {
                required: true,
                digits: true,
                maxlength: 10,
            },
            nroDni: {
                required: true,
                digits: true,
                maxlength: 10,
            },
            fechaNac: {
                required: true,
                formatoFecha: true,
            },
            telefono: {
                required: true,
                digits: true,
                maxlength: 20,
            },
            domicilio: {
                required: true,
                maxlength: 200,
            },
            marca: {
                required: true,
                maxlength: 50,
            },
            modelo: {
                required: true,
                digits: true,
                maxlength: 11,
            }
        },
        //Mensajes de error
        messages: {
            numero: {
                required: "<p class='text-danger'>Debe ingresar un número</p>",
            },
            edad: {
                required: "<p class='text-danger'>Debe ingresar una edad</p>",
                digits: "<p class='text-danger'>Ingrese números enteros</p>",
                min: "<p class='text-danger'>Ingrese una edad válida</p>",
                max: "<p class='text-danger'>Ingrese una edad válida</p>",
            },
            nombre: {
                required: "<p class='text-danger'>Debe ingresar un nombre</p>",
                maxlength: "<p class='text-danger'>Máximo 50 caracteres</p>",
            },
            apellido: {
                required: "<p class='text-danger'>Debe ingresar un apellido</p>",
                maxlength: "<p class='text-danger'>Máximo 50 caracteres</p>",
            },
            direccion: {
                required: "<p class='text-danger'>Debe ingresar una dirección</p>",
            },
            estudios: {
                required: "<p class='text-danger'>Seleccione una opción</p>",
            },
            hsLunes: {
                required: "<p class='text-danger'>Complete el campo</p>",
                min: "<p class='text-danger'>Ingrese horas válidas</p>",
                max: "<p class='text-danger'>Máximo 24 horas</p>",
            },
            hsMartes: {
                required: "<p class='text-danger'>Complete el campo</p>",
                min: "<p class='text-danger'>Ingrese horas válidas</p>",
                max: "<p class='text-danger'>Máximo 24 horas</p>",
            },
            hsMiercoles: {
                required: "<p class='text-danger'>Complete el campo</p>",
                min: "<p class='text-danger'>Ingrese horas válidas</p>",
                max: "<p class='text-danger'>Máximo 24 horas</p>",
            },
            hsJueves: {
                required: "<p class='text-danger'>Complete el campo</p>",
                min: "<p class='text-danger'>Ingrese horas válidas</p>",
                max: "<p class='text-danger'>Máximo 24 horas</p>",
            },
            hsViernes: {
                required: "<p class='text-danger'>Complete el campo</p>",
                min: "<p class='text-danger'>Ingrese horas válidas</p>",
                max: "<p class='text-danger'>Máximo 24 horas</p>",
            },
            usuario: {
                required: "<p class='text-danger'>Campo requerido</p>"
            },
            pass: {
                required: "<p class='text-danger'>Campo requerido</p>",
                letrasNumeros: "<p class='text-danger'>Ingrese solo números y letras</p>",
                minlength: "<p class='text-danger'>La contraseña debe tener mínimo 8 caracteres</p>",
                distintoA: "<p class='text-danger'>La contraseña no debe coincidir con el nombre de usuario</p>"
            },
            archivo: {
                required: "<p class='text-danger'>Suba un archivo</p>",
            },
            patente: {
                required: "<p class='text-danger'>Campo requerido</p>",
                maxlength: "<p class='text-danger'>Máximo 10 caracteres</p>",
            },
            dniDuenio: {
                required: "<p class='text-danger'>Campo requerido</p>",
                digits: "<p class='text-danger'>Ingrese números</p>",
                maxlength: "<p class='text-danger'>Máximo 10 números</p>",
            },
            nroDni: {
                required: "<p class='text-danger'>Campo requerido</p>",
                digits: "<p class='text-danger'>Ingrese solo números</p>",
                maxlength: "<p class='text-danger'>Máximo 10 números</p>",
            },
            fechaNac: {
                required: "<p class='text-danger'>Campo requerido</p>",
                formatoFecha: "<p class='text-danger'>Respete el formato AAAA-MM-DD</p>",
            },
            telefono: {
                required: "<p class='text-danger'>Campo requerido</p>",
                digits: "<p class='text-danger'>Ingrese solo números</p>",
                maxlength: "<p class='text-danger'>Máximo 20 números</p>",
            },
            domicilio: {
                required: "<p class='text-danger'>Campo requerido</p>",
                maxlength: "<p class='text-danger'>Máximo 200 caracteres</p>",
            },
            marca: {
                required: "<p class='text-danger'>Campo requerido</p>",
                maxlength: "<p class='text-danger'>Máximo 50 caracteres</p>",
            },
            modelo: {
                required: "<p class='text-danger'>Campo requerido</p>",
                digits: "<p class='text-danger'>Ingrese solo números</p>",
                maxlength: "<p class='text-danger'>Máximo 11 números</p>",
            }
        },
        highlight: function (element) {
            $(element).addClass('is-invalid');
            $(element).removeClass("is-valid");
            $(element).css("border-color", "red");
        },
        unhighlight: function (element) {
            $(element).addClass('is-valid');
            $(element).removeClass("is-invalid");
            $(element).css("border-color", "");
        },
        errorPlacement: function (error, element) {
            // Inserta el mensaje de error en el contenedor .mensaje-error
            error.appendTo(element.closest('.mb-1').find('.mensaje-error'));
        }
    });
});
