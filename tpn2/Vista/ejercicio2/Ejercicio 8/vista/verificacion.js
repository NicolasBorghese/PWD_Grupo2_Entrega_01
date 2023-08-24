$(function(){

    $("#form").validate({
        rules:{
            edad:{
                required: true,
            }
            
        }
    });

    ($("#form").submit(function () {
        
        var radio = $("input[type='radio']:checked").length;
        if (radio == "") {
            $('.error2').text("Seleccione un radio button");
            return false;
        }
        
    }))

    $("#boton").click(function(){
        if($("#form").valid()==false ){
            
            $("#estudiante").css("border-color","red")
            
            
        }
        
    });

})