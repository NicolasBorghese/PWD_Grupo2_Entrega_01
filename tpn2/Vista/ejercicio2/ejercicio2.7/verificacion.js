$(function(){

    $("#form").validate({
        rules:{
            valor1:{
                required: true,
            },
            valor2:{
                required: true,
            }
            
        }
    });

    $("#boton").click(function(){
        if($("#form").valid()==false){
            $("#valor1").css("border-color","red")
            $("#valor2").css("border-color","red")
            
            
        }
        
    });

})