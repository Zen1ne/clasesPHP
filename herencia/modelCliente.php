<?php
require_once "modelPersona.php";
class Cliente extends Persona {
    protected $fCredito;
    function __construct(
        
        int $intDpi,
        string $sName,
        int $iEdad
    ){
        parent::__construct($intDpi, $sName,$iEdad);
    }//end construct
    public function setCredito(string $credito){
        $this->fCredito=$credito;

    }
    public function getCredito():float{
        return $this->fCredito;
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
        return $this->message."Cliente:".$this->sName."</h2>";

     }


}//end subclaseCliente

?>