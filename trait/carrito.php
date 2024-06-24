<?php
trait Carrito{
    public $sProducto;
    public $iCantidad;

    public function setCarrito(string $producto, int $cantidad)
    {
        $this->sProducto=$producto;
        $this->iCantidad=$cantidad;

    }
    abstract function getCarrito();//los abstract van cacios
    

}


?>