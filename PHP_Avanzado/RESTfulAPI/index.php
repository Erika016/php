<?php
require_once 'Controller/CityController.php';
require_once 'inc/config.php';
require_once 'Model/Database.php';

$cityRepository = new Database(HOST, USER, PASSWORD, DB);
$cityController = new CityController($cityRepository);

return $cityController->handle();
