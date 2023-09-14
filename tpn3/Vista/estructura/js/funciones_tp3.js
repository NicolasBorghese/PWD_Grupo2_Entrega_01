
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

function irATP3Ejercicio1() {
    window.location.href = "../ejercicio1/formulario.php";
}

function irATP3Ejercicio2() {
    window.location.href = "../ejercicio2/formulario.php";
}

function irATP3Ejercicio3() {
    window.location.href = "../ejercicio3/formulario.php";
}

/*/=======================================================================================/*/

function irATP1Ejercicio1() {
    window.location.href = "../../../tpn1/Vista/ejercicio1/formulario.php";
}

function irATP2Ejercicio1() {
    window.location.href = "../../../tpn2/Vista/ejercicio1/ejercicio1.php";
}

function irATP4Ejercicio1() {
    window.location.href = "../../../tpn4/Vista/ejercicio1/ejercicio1.php";
}