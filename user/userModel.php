<?php
class Usuario{
    static $strEstado="Activo";

    function __construct(
        public $strName,
        public $strEmail,
        public $strTipo,
        private $strClave="",
        protected $strFechaRegistro=""
        
        

    ){
        $this->strClave=rand();
        $this->strFechaRegistro=date('d-m-Y H:m:s');
    }
    public function getNombre():string{
        return $this->strName;

    }
    public function getFecha():string{
        return $this->strFechaRegistro;

    }

    public function getClave():string{
        return $this->strClave;

    }
    public function getPerfil(){
        echo "Datos del usuario <br>";
        echo "Nombre: ".$this->strName."<br>";
        echo "Email: ".$this->strEmail."<br>";
        echo "Clave: ".$this->strClave."<br>";
        echo "Fecha Registro: ".$this->strFechaRegistro."<br>";
        echo "Estado: ".self::$strEstado."<br>";
    }
    public function setCambiarClave(string $pass){
        $this->strClave=$pass;

    }



}



?>