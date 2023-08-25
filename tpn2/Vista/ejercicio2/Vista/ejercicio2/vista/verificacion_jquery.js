$(function(){

    $("#form").validate({

        rules:{
            lunes:{
                required: true,
            },
            martes:{
                required: true,
            },
            miercoles:{
                required: true,
            },
            jueves:{
                required: true,
            },
            viernes:{
                required: true,
            }
        }

    });

    $("#boton").click(function(){
        
        if($("#form").valid()==false){
            $("#lunes").css("border-color","red")
            $("#martes").css("border-color","red")
            $("#miercoles").css("border-color","red")
            $("#jueves").css("border-color","red")
            $("#viernes").css("border-color","red")
        }
    });

});