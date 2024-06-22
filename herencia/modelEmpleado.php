<?php
require_once "modelPersona.php";
class Empleado extends Persona{//hereda los parametros de Persona
    protected $sPuesto;
    function __construct(
         int $intDpi,
         string $sName,
         int $iEdad){
            parent::__construct($intDpi,$sName,$iEdad);//le enviamos los parametros a la clase padre Persona

         }//end construct
         public function setPuesto(string $puesto){
            $this->sPuesto=$puesto;
         }
         public function getPuesto():string{
            return $this->sPuesto;
         }

}//end subclass Empleado

?>