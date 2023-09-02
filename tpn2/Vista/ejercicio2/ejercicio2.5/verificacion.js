$(function(){

    $("#form").validate({
        rules:{
            nombre:{
                required: true,
            },
            apellido:{
                required: true,
            },
            edad:{
                required: true,
            },
            direccion:{
                required: true,
                email: true,
            }
        }
    });

    //($("#form").submit())

    $("#submit").click(function(){
        if($("#form").valid()==false && (function () {
        
            var radio = $("input[type='radio']:checked").length;
            if (radio == "") {
                $('.error2').text("Seleccione un radio button");
                return false;
            }
            
            
        })){
            $("#nombreForm").css("border-color","red")
            $("#apellidoForm").css("border-color","red")
            $("#edadForm").css("border-color","red")
            $("#direccionForm").css("border-color","red")
        }
        
    });

})