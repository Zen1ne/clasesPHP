<?php
require_once "modelEmpleado.php";
require_once "modelCliente.php";
$objEmpleado1=new Empleado(2389,"Brando",56);
$objEmpleado1->setPuesto("Admin");
echo $objEmpleado1->getDatosPersona();
echo "Puesto: ".$objEmpleado1->getPuesto()."<br>";

$objCliente1=new Cliente(1278,"Dio",156);
$objCliente1->setCredito(12203.89234);
echo $objCliente1->getDatosPersona();
echo "Credito: ".$objCliente1->getCredito();
//echo $objEmpleado2->getDatosPersona()."<br>";


?>