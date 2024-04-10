<?php 
class ResponsableV {
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombre;
    private $apellido;

    public function __construct($numeroEmpleado, $numeroLicencia, $nombre, $apellido) {
        $this->numeroEmpleado = $numeroEmpleado;
        $this->numeroLicencia = $numeroLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNumeroEmpleado(){
        return $this->numeroEmpleado;
    }
    public function setNumeroEmpleado($numeroEmpleado){
        $this->numeroEmpleado = $numeroEmpleado;
    }
    public function getNumeroLicencia(){
        return $this->numeroLicencia;
    }
    public function setNumeroLicencia($numeroLicencia){
        $this->numeroEmpleado = $numeroEmpleado;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    } 

    public function __toString(){
        return "Numero de empleado: ".$this->getNumeroEmpleado()."\n".
                "Numero de licencia: ".$this->getNumeroLicencia()."\n".
                "Nombre: ".$this->getNombre()."\n".
                "Apellido: ".$this->getApellido()."\n";
    }
}
?>