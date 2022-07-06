<?php
echo 5 / 2;
echo "<br>";

if(is_float(5/2)){
    echo "E float <br>";
}

echo 2 . 3;
echo "<br>";

if(is_string(5/2)){
    echo "É string <br>";
}

$nome = "Bruno";
$sobrenome = "Perez";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br>";