$(document).ready(function () {

    $("#form8").validate({

        rules: {
            edad: {
                required: true,
                number: true,
                maxlength: 3
            },
            estudia: {
                required: true
            }
        },
        messages: {
            edad: {
                required: "Campo obligatorio.",
                number: "La edad no puede contener letras.",
                maxlength: "Máximo 3 números."
            },
            estudia: {
                required: "Elija una opción"
            }
        },
    });
});