$(document).ready(function () {

    $("#form8").validate({

        rules: {
            edad: {
                required: true,
                number: true,
                maxlength: 3
            },
            condicion: {
                required: true
            }
        },
        messages: {
            edad: {
                required: "Campo obligatorio.",
                number: "La edad no puede contener letras.",
                maxlength: "Máximo 3 números."
            },
            condicion: {
                required: "Elija una opción"
            }
        },
    });
});