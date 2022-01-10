<?php

/*                      NOTAS

    El token de nuestro firebase se encuentra en:
        "Simbolo tuerca" > Conf. del proyecto > Cuentas del servicio > Secretos de la base de datos.


*/

// Firebase Token can be found in the Firebase Console:
// Settings -> Project Settings -> Service accounts -> Database secrets


require "vendor/autoload.php";

const URL = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/'; // Nuestra URL
const TOKEN = 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
const PATH = '/firebase/example'; // Ruta base

use Firebase\FirebaseLib; // Esto se encuentra en el directorio src

$firebase = new FirebaseLib(URL, TOKEN);

// Storing an array
$test = [
    'foo' => 'bar',
    'i_love' => 'lamp',
    'id' => 42
];

// Storing a string
$firebase->set(PATH . '/name/contact001', 'John Doe');

// Reading the stored string
$name = $firebase->get(PATH . '/name/contact001');








?>


