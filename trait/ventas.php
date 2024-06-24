<?php
require_once "ClassTienda.php";
$sProducto="Teclado";
$fPrecio=50;
$iStock=15;
$iCantidadVendida=10;

$objProducto= new Tienda();
$objProducto->setProducto($sProducto,$fPrecio,$iStock);
echo $objProducto->getProducto();

$objProducto->setCarrito($sProducto,$iCantidadVendida);
$objProducto->setStock($iCantidadVendida);
echo $objProducto->getProducto();
echo $objProducto->getCarrito();


?>