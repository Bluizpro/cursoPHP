<?php

$x = 4;
$limite = 40;

while($x < $limite){
    echo "Executando o loop $x <br>";

        if($x === 24){
            echo "Parando o loop";
            break;
        }
         $x += 2;

}