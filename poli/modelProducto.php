<?php

class Producto{
    protected int $iStockMinimo=10;
    protected string $sStatus="Activo";
    
    public function __construct(
        public string $sDescription,
        protected float $fPrecio=0

        
    ){
        $this->setPrecio($fPrecio);//aqui puedo hacer llamado a las funciones para realizar operaciones
    }//end construct
    public function setPrecio(float $precio){
        $precioIva=($precio*1.16);
        $this->fPrecio=$precioIva;

    }
    public function setStatus(string $status1){
        
        $this->sStatus=$status1;
    }
    public function getInfoProducto(){
        $arraProducto=[
            'producto'=>$this->sDescription,
            'precio'=>$this->fPrecio,
            'stock_minimo'=>$this->iStockMinimo,
            'estado'=>$this->sStatus
        ];//end array
        return $arraProducto;


    }




}//end class Producto

?>