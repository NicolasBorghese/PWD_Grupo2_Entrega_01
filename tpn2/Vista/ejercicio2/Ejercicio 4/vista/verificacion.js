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
            $("#nombre").css("border-color","red")
            $("#apellido").css("border-color","red")
            $("#edad").css("border-color","red")
            $("#direccion").css("border-color","red")

        }
    });

})