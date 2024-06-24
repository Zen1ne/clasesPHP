<?php
trait Productos{
    public $sProducto;
    public float $fPrecio;
    public int $iStock;

    public function setProducto(string $producto, float $precio, int $stock)
    {
        $this->sProducto=$producto;
        $this->fPrecio=$precio;
        $this->iStock=$stock;
    }
    public function getProducto():string
    {
        $sInfo="
        Producto: {$this->sProducto}<br>
        Precio: {$this->fPrecio}<br>
        Stock: {$this->iStock}<br>
        <hr>
        ";
        return $sInfo;
    }
    public function setStock(int $cantidad)
    {
        $this->iStock=$this->iStock-$cantidad;

    }



}



?>