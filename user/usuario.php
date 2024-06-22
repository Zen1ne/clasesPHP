<?php
require_once 'userModel.php';

$objUsuario1 =new Usuario("Brandon","brandonhotmail.com","Admin");
$objUsuario2 =new Usuario("Andrea","andre@alo.com","CLiente");
//echo Usuario::$strEstado;
echo $objUsuario1-> getPerfil();
echo "<br><br>";
echo $objUsuario2-> getPerfil();
$objUsuario2->setCambiarClave("123Andre1234".date('H:m:s'));
echo "<br><br>";
echo $objUsuario2-> getPerfil();



?>