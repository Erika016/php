<?php
include('Usuario.php');

/*
Data users
dhopkynson0@printfriendly.com	JMYNtYmks3fA	Dorette	9189 Golf Way	505(963)576-5473
pdomnick1@youku.com	hRuqiU	Parker	72 Johnson Park	30(505)572-3181
lbatram2@yandex.ru	EimTIDWsoi	Leon	37 Armistice Pass	51(992)332-2619
*/

$usuario1 = new Usuario;
$usuario1->setName('Dorette');
$usuario1->setAddress('9189 Golf Way');
$usuario1->setPhone('505(963)576-5473');
$usuario1->setEmail('dhopkynson0@printfriendly.com');
$usuario1->setPassword('JMYNtYmks3fA');

$usuario2 = new Usuario;
$usuario2->setName('Parker');
$usuario2->setAddress('72 Johnson Park');
$usuario2->setPhone('30(505)572-3181');
$usuario2->setEmail('pdomnick1@youku.com');
$usuario2->setPassword('hRuqiU');

$usuario3 = new Usuario;
$usuario3->setName('Leon');
$usuario3->setAddress('37 Armistice Pass');
$usuario3->setPhone('551(992)332-2619');
$usuario3->setEmail('lbatram2@yandex.ru');
$usuario3->setPassword('EimTIDWsoi');

$listaUsuarios = [$usuario1, $usuario2, $usuario3];

?>
<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <title>POO - Usuarios</title>
</head>

<body>
    <div class='d-flex justify-content-center my-3'>
        <?php
        foreach ($listaUsuarios as $usuario) {
            print $usuario->muestraCard();
        }
        ?>
        <!-- <?= $usuario1->muestraCard() ?>
        <?= $usuario2->muestraCard() ?>
        <?= $usuario3->muestraCard() ?> -->
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
</body>

</html>