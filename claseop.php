<?php
class Operacion{
    //public $resultado=0;
    function __construct(
        public $cantidad1=0,
        public $cantidad2=0,
        public $resultado=0
        
        ){ }
        public function eligeOp(int $option): string
        {
            return match(true){
        $option == 1 =>"Suma! 🙂 🙋 ".$this->getSuma(),
        $option == 2 =>"Resta! 🦖  ".$this->getResta(),
        $option == 3 =>"Multiplicacion! 🎟 ✈ 🛬  ".$this->getMultiplicacion(),
        $option == 4  =>"Division! 🗑 ⏰ ".$this->getDivision(),
        default => "No es una opcion solo del 1 al 4 ⚔ 🔫 🗡 🗡 🗡  "
        };


}

        public function getSuma(){
            $this->resultado=$this->cantidad1+$this->cantidad2;
            return $this->resultado;

        }

        public function getResta(){
            $this->resultado=$this->cantidad1-$this->cantidad2;
            return $this->resultado;

        }

        public function getMultiplicacion(){
            $this->resultado=$this->cantidad1*$this->cantidad2;
            return $this->resultado;

        }

        public function getDivision(){
            $this->resultado=$this->cantidad1/$this->cantidad2;
            return $this->resultado;

        }
        
}
//$objeto =new Operacion(5,10);
///echo $objeto->getSuma();





?>