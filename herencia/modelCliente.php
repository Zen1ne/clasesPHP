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


}//end subclaseCliente

?>