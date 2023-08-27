$(function(){

    $("#formulario").validate({
        rules:{
            numero:{
                required: true,
            },
        },
        messages:{
            numero:{
                required:"Numero Requerido"
            }
        }
    });

    $("#boton").click(function(){
        
        if($("formulario").valid()==false){
            $("#numero").css("border-color","red")
        }
    })
});