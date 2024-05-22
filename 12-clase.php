<?php

class Calculadora {

    public $PrimerNumero;
    public $SegundoNumero;

    function __construct($num1 = 0, $num2 = 0) {
        $this->PrimerNumero=$num1;
        $this->SegundoNumero=$num2;
    }

    public function sumar() {
        return $this->PrimerNumero+$this ->SegundoNumero;
    }
    public function restar() {
        return $this->PrimerNumero-$this ->SegundoNumero;
    }
    public function multiplicar() {
        return $this->PrimerNumero*$this ->SegundoNumero;
    }
    public function dividir() {
        if($this ->SegundoNumero ==0){
            return "ERROR, POR FAVOR INGRESA UN NUMERO QUE NO SEA 0";
        }
        else {
        return $this->PrimerNumero+$this ->SegundoNumero;
        }
    }
    public function potencia() {
        return pow($this->PrimerNumero,$this->SegundoNumero);
    }
    public function raiz() {
        return $this->PrimerNumero**(1/$this->SegundoNumero);
    }
}

?>