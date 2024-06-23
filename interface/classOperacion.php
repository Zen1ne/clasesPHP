<?php
require_once "operaciones.php";
require_once "operacionesBasic.php";




class Calcular implements Operacions, Operacion_basica{
    public function raizCuadrada(float $numero): float
    {
        $total=sqrt($numero);
        return $total;
        
    }
    public function potenciaU(int $numero, int $potencia): int
    {
        $total=pow($numero,$potencia);
        return $total;
        
    }
    public function op_basic(float $val1, float $val2, string $option)
    {
        
        return match(true){
            $option == "+" =>"Suma! 🙂 🙋 ".$val1+$val2,
            $option == "-" =>"Resta! 🦖  ".$val1-$val2,
            $option == "*" =>"Multiplicacion! 🎟 ✈ 🛬  ".$val1*$val2,
            $option == "/"  =>"Division! 🗑 ⏰ ".$val1/$val2,
            default => "No es una opcion solo del * + - / ⚔ 🔫 🗡 🗡 🗡  "

    };
        
}




}//end class





?>