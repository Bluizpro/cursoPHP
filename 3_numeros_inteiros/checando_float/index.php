<?php
$a = "teste";
$b = 12.8;

if(is_float($a)){
echo "E float 1! <br>";
}

if(is_float($b)){
    echo "E float 2! <br>";
}
if(is_float(6565.63)){
    echo "É float 3! <br>";
}

if(is_float("teste")){
    echo "E float 4! <br>";
}
?>