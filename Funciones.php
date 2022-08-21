<?php 
    echo date('d/m/Y');

    function Lorem(){
        return '<p>Lorem ipsum dolor si tempora magnam quae.</p>';
    }

    function Promedio($n1,$n2){
        return ($n1 + $n2) / 2;
    }

    echo '<br>'.Promedio(52,61);

?>