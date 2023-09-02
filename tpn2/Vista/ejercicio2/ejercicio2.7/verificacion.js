$(function(){

    $("#form").validate({
        rules:{
            num1:{
                required: true,
            },
            num2:{
                required: true,
            }
            
        }
    });

    $("#submit").click(function(){
        if($("#form").valid()==false){
            $("#num1").css("border-color","red")
            $("#num2").css("border-color","red")
            
            
        }
        
    });

})