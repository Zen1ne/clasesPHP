<?php
require_once "modelPersona.php";
class Empleado extends Persona{//hereda los parametros de Persona
    protected $sPuesto;
    function __construct(
         int $intDpi,
         string $sName,
         int $iEdad,
         
         ){
            parent::__construct($intDpi,$sName,$iEdad);//le enviamos los parametros a la clase padre Persona

         }//end construct
         public function setPuesto(string $puesto){
            $this->sPuesto=$puesto;
         }
         public function getPuesto():string{
            return $this->sPuesto;
         }
         public function getDatosPersona(): string {
            $datos="
            <h3>Datos Personales</h3>
            DPI: {$this->intDpi}<br>
            Name: {$this->sName}<br>
            Edad: {$this->iEdad}<br>
            ";
            return $datos;
         
         }
         public function setMessage(string $message){
            $this->message=$message;
         }
         public function getMessage():string{
            return $this->message."Empleado: ".$this->sName."</h2>";

         }

         
}//end subclass Empleado


?>