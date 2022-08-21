<?php

    
    $animales =['Perro','Gato','Elefante',];

    for($i = 0;$i < 3;$i++){
        echo ("<h1> Mi animal favorito es: $animales[$i] </h1>");
    }

    //arreglos asociativos
    $ciudad[0] = [
        'nombre' => 'Valdiavia',
        'poblacion' => 100
    ];
    $ciudad[1] = [
        'nombre' => 'Puerto Varas',
        'poblacion' => 35
    ];

    for ($i=0; $i < 2; $i++) { 
        echo '<h2> Nombre:' .$ciudad[$i] ['nombre'] .'</h2>';
        echo '<h2> Poblacion:' .$ciudad[$i] ['poblacion'] .'</h2>';
        echo "<hr>";
    }

    foreach($ciudad as $i){
        echo '<h2> Nombre:' .$i ['nombre'] .'</h2>';
        echo '<h2> Poblacion:' .$i ['poblacion'] .'</h2>';
        echo '<hr>';
    }
?>
