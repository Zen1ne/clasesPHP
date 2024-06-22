<?php
require_once 'modelMueble.php';


class Mesa extends Mueble{
    public function __construct(
        string $sDescription,
        float $fPrecio,
        string $sMarca,
        string $sColor,
        string $sMaterial,
        string $sStatus,
        private string $sForma="",
        protected string $sTamanio
        )
        {
            parent::__construct($sDescription,$fPrecio,$sMarca,$sColor,$sMaterial,$sStatus);


        }//end constructor
        public function setForma(string $forma){
            $this->sForma=$forma;

        }
       
    public function getInfoProducto(){
            $arraProduct=[
                'producto'=>$this->sDescription,
                'precio'=>$this->fPrecio,
                'marca'=>$this->sMarca,
                'color'=>$this->sColor,
                'material'=>$this->sMaterial,
                'estado'=>$this->sStatus,
                'forma'=>$this->sForma,
                'tamaño'=>$this->sTamanio,
                'stock_minimo'=>$this->iStockMinimo


            ];
            return $arraProduct;

        }
        







}//end class Mesa

?>