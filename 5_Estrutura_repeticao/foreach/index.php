<?php

$nomes = ["matheus", "joão", "pedro", "maria"];

$a = 10;

foreach($nomes as $nome){
    echo "O nome do indice atual e $nome <br>";
    if($nome == "matheus"){
        echo "opa $a <br>";
    }
}