<?php 

class Auto {

    //ATRIBUTOS
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensajeoperacion;
    
    //CONSTRUCTOR
    /**
     * Crea un objeto de tipo Auto
     */
    public function __construct(){
        
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
        $this->mensajeoperacion = "";
    }

    /**
     * Actualiza los atributos del objeto por los recibidos por parámetro
     * 
     * @param string $patente
     * @param string $marca
     * @param int $modelo
     * @param string $dniDuenio
     */
    public function setear($patente, $marca, $modelo, $dniDuenio){
        
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }
    
    // OBSERVADORES Y MODIFICADORES

    public function getPatente(){
        return $this->patente;  
    }
    public function setPatente($patente){
        $this->patente = $patente;
    }
    
    public function getMarca(){
        return $this->marca; 
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo; 
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getDniDuenio(){
        return $this->dniDuenio; 
    }
    public function setDniDuenio($dniDuenio){
        $this->dniDuenio = $dniDuenio;
    }

    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }
    
    //PROPIOS DE LA CLASE

    /**
     * Toma el atributo donde está cargado el id del objeto y lo utiliza para realizar
     * una consulta a la base de datos con el objetivo de actualizar el resto de los atributos del objeto.
     * Retora un booleano que indica el éxito o falla de la operación
     * 
     * @return boolean
     */
    public function cargar(){
        $exito = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE Patente = ".$this->getPatente();

        //Verifica si esta activa la base de datos
        if ($base->Iniciar()) {

            //Ejercuta la consulta (en este caso es un select, debe devolver un arreglo de registros)
            $res = $base->Ejecutar($sql);

            //Si $res es mayor a -1 quiere decir que la consulta se ejecuto con éxito
            if($res >-1){

                //Si $res es mayor a 0 quiere decir que la consulta genero al menos 1 registro
                if($res > 0){

                    /*Guardo en el arreglo $row el resultado del primer registro obtenido y seteo
                    esos valores al objeto Auto actual*/
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    $exito = true;
                }
            }
        } else {
            $this->setmensajeoperacion("Auto->listar: ".$base->getError());
        }
        return $exito;
    }

    /**
     * Esta función lee los valores actuales de los atributos del objeto e inserta un nuevo
     * registro en la base de datos a partir de ellos.
     * Retorna un booleano que indica si le operación tuvo éxito
     * 
     * @return boolean
     */
    public function insertar(){

        $resp = false;
        $base = new BaseDatos();

        $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES(
            '".$this->getPatente()."', 
            '".$this->getMarca()."', 
            ".$this->getModelo().", 
            '".$this->getDniDuenio()."'
            );";

        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                //Este objeto no tiene id con autoincrement
                // $this->setPatente($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    /**
     * Esta función lee los valores actuales de los atributos del objeto y los actualiza en la
     * base de datos.
     * Retorna un booleano que indica si le operación tuvo éxito
     * 
     * @return boolean
     */
    public function modificar(){
        $resp = false;
        $base = new BaseDatos();

        $sql = "UPDATE auto SET 
        Patente = '".$this->getPatente()."', 
        Marca = '".$this->getMarca()."', 
        Modelo = ".$this->getModelo().", 
        DniDuenio = '".$this->getDniDuenio()."' 
        WHERE Patente = '".$this->getPatente()."'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    /**
     * Esta función lee el id actual del objeto y si puede lo borra de la base de datos
     * Retorna un booleano que indica si le operación tuvo éxito
     * 
     * @return boolean
     */
    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();

        $sql = "DELETE FROM auto WHERE Patente = '".$this->getPatente()."'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Auto->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->eliminar: ".$base->getError());
        }
        return $resp;
    }
    
    /**
     * Esta función recibe condiciones de busqueda en forma de consulta sql para obtener
     * los registros requeridos.
     * Si por parámetro se envía el valor "" se devolveran todos los registros de la tabla
     * 
     * La función devuelve un arreglo compuesto por todos los objetos que cumplen la condición indicada
     * por parámetro
     * 
     * @return array
     */
    public function listar($parametro){
        $arreglo = array();
        $base = new BaseDatos();

        $sql = "SELECT * FROM auto ";

        if ($parametro != "") {
            $sql .= 'WHERE '.$parametro;
        }

        $res = $base->Ejecutar($sql);
        if($res >- 1){
            if($res > 0){
                
                while ($row = $base->Registro()){

                    $obj = new Auto();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    array_push($arreglo, $obj);

                }
            }
        } else {
            $this->setmensajeoperacion("Auto->listar: ".$base->getError());
        }
        return $arreglo;
    }
}
?>