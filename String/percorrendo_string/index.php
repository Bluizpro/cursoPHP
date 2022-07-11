<?php

$str = " esta e uma string muito grande, ele tem varios caracteres";

for($i = 0; $i < strlen($str); $i++){
    echo "$str[$i] <br>";
}