function esMayor(){
    var edad=document.getElementById("edadForm");
    var mensaje=document.getElementById();
    var esEdad=edad.value
    if(esEdad>=18){
        mensaje.innerHTML="Soy mayor de Edad";
    }else{
        mensaje.innerHTML="Soy menor de Edad";
    }
}