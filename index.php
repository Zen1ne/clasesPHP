<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 



require_once "claseop.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $val1 = $_POST['num1'];
    $val2 = $_POST['num2'];
    $valor1 = $_POST['opcion'];

    //$operacion1 = new Operacion(...$valores); los tres puntos es para indicar que es un array y tiene valores individuales
$operacion1 = new Operacion($val1,$val2);

$opcionSeleccionada = $operacion1->eligeOp($valor1);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operaciones</title>
</head>
<body>
    <form action="index.php" method="post" >
        <div class="input-group">
        <input type="number" placeholder="Numero 1..." name="num1" class="error-border">
        <input type="number" placeholder="Numero 2..." name="num2" class="error-border">
        <select name="opcion" class="input-border" >
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
        </select>
        <input type="submit" value="Calcular" class="error-border">
        </div>
        <div class="input-group">
    <label id="miLabel" class="input-border"><?=$opcionSeleccionada?></label>
    </div>
    </form>
    

     
    
    
    
    
    <script src="js.js" ></script>
</body>

</html>