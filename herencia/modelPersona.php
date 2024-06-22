<?php
class Persona{
    function __construct(
        public int $intDpi,
        public string $sName,
        public int $iEdad
    ){
}//end constructor
public function getDatosPersona(): string {
    $datos="
    <h2>Datos Personales</h2>
    DPI: {$this->intDpi}<br>
    Name: {$this->sName}<br>
    Edad: {$this->iEdad}<br>
    ";
    return $datos;

}



}//end class persona


?>