<?php
require_once 'modelProducto.php';

class Mueble extends Producto{

    public function __construct(
        string $sDescription,
        float $fPrecio,
        public string $sMarca,
        public string $sColor,
        public string $sMaterial,
        public string $sStatus="Agotado",
        
        
        
    ){
        parent::__construct($sDescription,$fPrecio);
        
    }//end sub constructor
    

    public function getInfoProducto(){
        $arraProducto =[
            'producto'=>$this->sDescription,
            'precio'=>$this->fPrecio,
            'marca'=>$this->sMarca,
            'stock_minimo'=>$this->iStockMinimo,
            'estado'=>$this->sStatus,
            'color'=>$this->sColor,
            'material'=>$this->sMaterial
        ];
        return $arraProducto;
    }



}//end subclass





?>