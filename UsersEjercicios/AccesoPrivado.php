<?php
class AccesoPrivado
{

    private $num;
    function setUser($object, $value)
    {
        $object->num = $value;
        return $this->num;
    }
    
}
$acceso1 = new AccesoPrivado();
$acceso2 = new AccesoPrivado();
// if ($acceso1 === $acceso2) {
//     print 'son   el mismo objeto';
// } else {
//     print 'no son el mismo objeto';
// }
// $acceso3->num = 20;
// print $acceso1->num;
