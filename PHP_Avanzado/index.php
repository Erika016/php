<?php
function __autoload($class_name)
{
    include $class_name . '.php';
}
// Intenta incluir Users.php
$obj = new Users();
//file Users.php
