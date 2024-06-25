<?php
namespace Models;
abstract class Persona{ //para crear una clase abstracta
    public string $message;
    function __construct(
        public int $intDpi,
        public string $sName,
        public int $iEdad
      
    ){
}//end constructor
abstract public function getDatosPersona();
abstract public function setMessage(string $message);
abstract public function getMessage():string;


 /*{
    $datos="
    <h2>Datos Personales</h2>
    DPI: {$this->intDpi}<br>
    Name: {$this->sName}<br>
    Edad: {$this->iEdad}<br>
    ";
    return $datos;

} //end class getDatos sin ser abstracta*/

}//end class persona

?>