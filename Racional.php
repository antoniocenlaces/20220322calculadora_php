<?php

class Racional
{
    //Declaro las propiedades

    private $num;
    private $den;

    //Constructor

    public function __construct($numerador = 1, $denominador = 1)
    {
        if (is_string($numerador)){
            $numero = explode("/",$numerador);
            $numerador = $numero[0];
            $denominador = $numero[1];
        }
        $this->num = $numerador;
        $this->den = $denominador;

    }

    public function __toString()
    {
        return "$this->num/$this->den";
    }

    public function sumar (Racional $operador2): Racional{
        $den = $this->den* $operador2->den;

        $num = $this->num*$operador2->den  +  $this->den*$operador2->num;

        $rtdo = new Racional($num, $den);

        return $rtdo;


    }
    public function restar (Racional $operador2): Racional{
        $den = $this->den* $operador2->den;

        $num = $this->num*$operador2->den  -  $this->den*$operador2->num;

        $rtdo = new Racional($num, $den);

        return $rtdo;


    }
    public function multiplicar (Racional $operador2): Racional{
        $den = $this->den* $operador2->den;
        $num = $this->num* $operador2->num;

        $rtdo = new Racional($num, $den);

        return $rtdo;


    }
    public function dividir (Racional $operador2): Racional{
        $den = $this->den* $operador2->num;
        $num = $this->num* $operador2->den;

        $rtdo = new Racional($num, $den);

        return $rtdo;


    }


}