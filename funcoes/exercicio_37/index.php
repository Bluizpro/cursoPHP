<?php

$lista = ["Arroz", "Feijao", "Cerveja", "Sal"];

function listaParaString($arr) {

    $str = "Voce levou estes itens do mercado: ";

    for($i = 0; $i < count($arr); $i++) {

        if($i + 1 == count($arr)) {
            $str .= "$arr[$i]. ";
        } else {
            $str .= "$arr[$i], ";
        }
    }

    return $str;

}
echo listaParaString($lista);