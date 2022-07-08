<?php

function parOuImpar($num){
    if ($num % 2 === 0){
        echo "o numero $num: e par <br>";
    } else{
        echo "o numero $num: e impar <br>";
    }
}

parOuImpar(30);
parOuImpar(41);
parOuImpar(21);
parOuImpar(11);
parOuImpar(53);