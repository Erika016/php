<?php

$usersList = [
    [
        "first" => "Kincaid",
        "last" => "Starr",
        "email" => "kstarr0@youtube.com",
        "password" => "GK6WWwJe3"
    ],
    [
        "first" => "Connie",
        "last" => "Spreag",
        "email" => "cspreag1@e-recht24.de",
        "password" => "5EOohT2NFc9x"
    ],
    [
        "first" => "Damara",
        "last" => "Prendergast",
        "email" => "dprendergast2@furl.net",
        "password" => "eWX6fv5XM9V"
    ],
    [
        "first" => "Kimball",
        "last" => "Bolgar",
        "email" => "kbolgar3@ocn.ne.jp",
        "password" => "Xa0nFqVX"
    ],
    [
        "first" => "Darrelle",
        "last" => "Cuxon",
        "email" => "dcuxon4@odnoklassniki.ru",
        "password" => "fXxRgZed"
    ],
    [
        "first" => "Elvera",
        "last" => "Ingledew",
        "email" => "eingledew5@yolasite.com",
        "password" => "Kmy4dFN"
    ],
    [
        "first" => "Simeon",
        "last" => "Brockherst",
        "email" => "sbrockherst6@usa.gov",
        "password" => "ZoPb448Hq0"
    ],
    [
        "first" => "Corrinne",
        "last" => "Roycraft",
        "email" => "croycraft7@mysql.com",
        "password" => "ulP7YCyBmO"
    ],
    [
        "first" => "Vite",
        "last" => "Darrington",
        "email" => "vdarrington8@netvibes.com",
        "password" => "DoNoqKOqEA"
    ],
    [
        "first" => "Hanni",
        "last" => "Dimbleby",
        "email" => "hdimbleby9@prweb.com",
        "password" => "qNemI0ZcR"
    ]
];




class User
{
    private $first, $last, $email, $password;
    function __construct(...$data)
    {
        foreach ($data[0] as $key => $value) {
            switch ($key) {
                case 'first':
                    $this->first = $value;
                    break;
                case 'last':
                    $this->last = $value;
                    break;
                case 'email':
                    $this->email = $value;
                    break;
                case 'password':
                    $this->password = $value;
                    break;
            }
        }
    }

    function setData($info)
    {
        $this->data = $info;
    }
}

$listaObjetos = [];
$contador = 0;
foreach ($usersList as $usuario) {

    $listaObjetos[$contador++] = new User($usuario);
}
print_r($listaObjetos[0]);
// new User($usersList[0]);
// new User($usersList[1]);