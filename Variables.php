<?php

$nombre = 'Miguel';
$edad = 29;
$vivo = false;

if ($vivo == true) {
    echo "$nombre Esta vivo y tiene $edad años";
} else {
    echo "$nombre murio hace $edad años";
}

for ($i = 0; $i <= 50; $i++) {
    echo ("$i -");
}
/* Switch  case */
$caso = 4;
switch ($caso) {
    case 1:
        echo ("</br> Soy el caso 1");
        break;
    case 2:
        echo ("</br>Soy el caso 2");
        break;
    case 3:
        echo ("</br>Soy el caso 3");
        break;
    case 4:
        echo ("</br>Soy el caso 4");
        break;
    case 5:
        echo ("</br>Soy el caso 5");
        break;
    default:
        echo ("</br>No se cumplio ningun caso");
        break;
}
