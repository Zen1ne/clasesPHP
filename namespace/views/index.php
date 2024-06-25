<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/*require_once "../controllers/Empleado.php";
require_once "../controllers/Cliente.php";
require_once "../controllers/Persona.php";*/

require_once "../autoload.php";
use Controllers\Cliente;
use Controllers\Empleado;
use Controllers\Persona;

$array=[234,"ddde",34];

$objEmpleado1=new Empleado(...$array);
$objEmpleado1->setMessage("<h2>Bienvenido ");
echo $objEmpleado1->getMessage();
$objEmpleado1->setPuesto("Admin");
echo $objEmpleado1->getDatosPersona();
echo "Puesto: ".$objEmpleado1->getPuesto()."<br>";
//echo $objEmpleado1->getDatosPersona()."<br>";



$objCliente1=new Cliente(1278,"Dio",156);
$objCliente1->setMessage("<br><h2>Bienvenido ");
echo $objCliente1->getMessage();
$objCliente1->setCredito(12203.89234);
echo $objCliente1->getDatosPersona();
echo "Credito: ".$objCliente1->getCredito();

$mensaje=new Persona();
echo "<br><br>".$mensaje->saludar();




?>