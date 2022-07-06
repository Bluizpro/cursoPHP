<?php
$i = 1;
$c = "variavel teste";

while($i < 10){
    echo "loop externo $i <br>";

//segundo contador
$x = 0;

while($x < 10){
    echo "loop interno $x <br>";

    echo "$c 2 <br>";

    $x++;
}


    $i++;
}