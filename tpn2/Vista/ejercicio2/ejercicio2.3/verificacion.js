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

    $("#boton").click(function(){
        if($("#form").valid()==false){
            $("#nombreFom").css("border-color","red")
            $("#apellidoForm").css("border-color","red")
            $("#edadForm").css("border-color","red")
            $("#direccionForm").css("border-color","red")

        }
    });

})