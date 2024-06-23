<?php

require_once "classOperacion.php";
$objRaiz= new Calcular();
echo $objRaiz->raizCuadrada(9);
echo "<br><br>";
echo $objRaiz->potenciaU(4,2);
echo "<br><br>";
echo $objRaiz->op_basic(16,2,"/");


?>