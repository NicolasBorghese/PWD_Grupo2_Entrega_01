$(document).ready(function () {

    //Agrego un método para validar el nombre y apellido
    jQuery.validator.addMethod("validarTexto", function (value, element) {
        return this.optional(element) || /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(value);
    }, "No puede contener números.");


    $("#form3").validate({

        rules: {
            nombre: {
                required: true,
                minlength: 3,
                validarTexto: true
            },
            apellido: {
                required: true,
                minlength: 3,
                validarTexto: true
            },
            edad: {
                required: true,
                maxlength: 3,
                number: true
            },
            direccion: {
                required: true,
            },
            estudios: {
                required: true
            }

        },
        messages: {
            nombre: {
                required: "Campo obligatorio.",
                minlength: "El nombre no puede tener menos de 3 letras.",
                number: "El nombre no puede contener números."
            },
            apellido: {
                required: "Campo obligatorio.",
                minlength: "El apellido no puede tener menos de 3 letras.",
            },
            edad: {
                required: "Campo obligatorio.",
                maxlength: "Ingrese una edad válida.",
                number: "La edad no puede contener letras."
            },
            direccion: {
                required: "Campo obligatorio."
            }
            ,
            estudios: {
                required: "Seleccione una opción."
            }
        }
    });
});