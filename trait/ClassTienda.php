<?php
require_once "producto.php";
require_once "carrito.php";


class Tienda{
    use Productos, Carrito;
    public $fTotal=0;
    public function getCarrito(){
        $this->fTotal=$this->fPrecio*$this->iCantidad;
        $sInfo="
        <h2>Carrito</h2>
        <hr>
        Producto: {$this->sProducto}<br>
        Cantidad: {$this->iCantidad}<br>
        Precio: {$this->fPrecio}<br>
        Total: {$this->fTotal}<br>
        ";
        return $sInfo;
    }

}
?>