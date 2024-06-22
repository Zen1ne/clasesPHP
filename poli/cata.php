<?php
require_once 'modelMesa.php';
$producto="mesa";
$precio=300;
$marca="troncozo";
$color="azul";
$material="madera";
$status="Agotados";


$objCama = new Producto($producto);
$objCama->setPrecio(200);
$arrInfo = $objCama->getInfoProducto();
print_r("<pre>");
print_r($arrInfo);
print_r("</pre>");

$objMue= new Mueble($producto,$precio,$marca,$color,$material);
$objMue->setPrecio(300);
$arrMu=$objMue->getInfoProducto();
print_r("<pre>");
print_r($arrMu);
print_r("</pre>");



$objMesa=new Mesa($producto,$precio,$marca,$color,$material,$status,"Rectanguloar","Grande");
$objMesa->setPrecio($precio);
$objMesa->setStatus("Vacio");
$arrMe=$objMesa->getInfoProducto();
print_r("<pre>");
print_r($arrMe);
print_r("</pre>");


?>
