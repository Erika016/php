<?php
class EasyClass{
    public $saludo = 'hola'.'mundo';
    public $saludoHerederoc = <<<START
    Esto es un string miltulínea
    START;
    public $stringNowdoc = <<<'START'
    Esto es un string multilínea 
    START;
    public $SUMA=2+2;
    public $listaElementos = [true, 1.2,"hello"];

    // A partir de la version 7.x nooo es una declaracion de propiedad valida
    // public $variable = DIA_SEMANA_1;

    static function metodoStatico()
    {
    }
    // public $contieneMetodoStatico= self::metodoStatico();
    


}


