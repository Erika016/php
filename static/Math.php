<?php
class Math
{

    static $number;
    static function generateNumber($min, $max)
    {
        self::$number = rand($min, $max);
    }
    static function printNumber()
    {
        print self:: $number;
    }


}
Math::generateNumber(1,6);
print 'El número generado es: <br>';
Math::printNumber();

// http://localhost/php/php/static/Math.php

function callMe()
{
    static $num =1;
    print '<br> $num vale:' .$num++;
}

callMe();
callMe();
callMe();
define('SERVER','localhost');
define('PASSWORD','usuario');
print '<br>'. SERVER;

