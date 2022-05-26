<?php
// propiedades de clases
class Rectangulo
{
    private $lado1, $lado2;


    // METODOS
    // SETTERS, PARA ESTABLECER EL VALOR DE LAS PROPIEDADES
    function setLado1($lado)
    {
        $this->lado1 = $lado;
    }
    function setLado2($lado)
    {
        $this->lado2 = $lado;
    }
    // GETTERS, PARA OBTENER EL VALOR DE LAS PROPIEDADES
    private function getLado1()
    {
        return $this->lado1;
    }

    private function getLado2()
    {
        return $this->lado2;
    }

    private function calcularArea($l1, $l2)
    {
        return $l1 * $l2;
    }
    function obtenerArea()
    {
        return $this->calcularArea($this->lado1, $this->lado2);
    }
}
