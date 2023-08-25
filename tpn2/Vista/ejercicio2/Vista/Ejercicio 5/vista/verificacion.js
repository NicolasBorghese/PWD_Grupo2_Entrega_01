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

    ($("#form").submit())

    $("#boton").click(function(){
        if($("#form").valid()==false && (function () {
        
            var radio = $("input[type='radio']:checked").length;
            if (radio == "") {
                $('.error2').text("Seleccione un radio button");
                return false;
            }
            
            
        })){
            $("#nombre").css("border-color","red")
            $("#apellido").css("border-color","red")
            $("#edad").css("border-color","red")
            $("#direccion").css("border-color","red")
        }
        
    });

})