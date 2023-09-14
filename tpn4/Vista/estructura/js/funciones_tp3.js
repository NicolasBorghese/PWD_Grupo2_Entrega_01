
/**
 * Lee elementos que corresponden al ejercicio en el que se está actualmente y los remarca en el navegador
 * 
 */
function actualizarCurrent(tp, ejercicio) {

    tp.classList.add("botonActual");
    ejercicio.classList.add("botonActual");
}

/*/=======================================================================================\*\
||                                    Links del navegador                                  ||
\*\=======================================================================================/*/

function irATP4Ejercicio1() {
    window.location.href = "../ejercicio1/ejercicio1.php";
}

function irATP4Ejercicio2() {
    window.location.href = "../ejercicio2/ejercicio2.php";
}

function irATP4Ejercicio3() {
    window.location.href = "../ejercicio3/ejercicio3.php";
}

/*/=======================================================================================/*/

function irATP1Ejercicio1() {
    window.location.href = "../../../tpn1/Vista/ejercicio1/formulario.php";
}

function irATP2Ejercicio1() {
    window.location.href = "../../../tpn2/Vista/ejercicio1/ejercicio1.php";
}

function irATP3Ejercicio1() {
    window.location.href = "../../../tpn3/Vista/ejercicio1/formulario.php";
}